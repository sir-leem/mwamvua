<?php

namespace backend\controllers;

use backend\models\AwaitingReceive;
use backend\models\AwaitingReceiveReport;
use backend\models\FaultDevices;
use backend\models\FaultDevicesReport;
use backend\models\InTransit;
use backend\models\InTransitReport;
use backend\models\ReceivedDevices;
use backend\models\ReceivedDevicesReport;
use backend\models\ReleasedDevices;
use backend\models\ReleasedDevicesReport;
use backend\models\StockDevices;
use backend\models\StockDevicesReport;
use Yii;
use backend\models\Devices;
use backend\models\DevicesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DeviceController implements the CRUD actions for Device model.
 */
class DevicesController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Device models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DevicesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Device model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Device model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Devices();

        if(Yii::$app->user->can('addDevices')){

            if ($model->load(Yii::$app->request->post())) {

                $createdBY = $model->created_by = Yii::$app->user->identity->id;
                $serial = $model->serial;
                $status = $model->status;
                $timeCreated = $model->created_at = date('Y-m-d H:i:s');

                $received_from = $model->received_from;
                $border = $model->border_port;
                $staff = $model->received_from_staff;
                $remark = $model->remark;

                $line_data = preg_split("/\\r\\n|\\r|\\n/", $serial);
                foreach ($line_data as $key => $value) {

                    $model = new Devices();
                    $model->serial = $value;
                    $model->received_from= $received_from;
                    $model->border_port= $border;
                    $model->created_at = $timeCreated;
                    $model->created_by = $createdBY;
                    $model->status = $status;
                    $model->save();

                    $modelReceived = new ReceivedDevices();
                    $modelReceived->serial_no = $value;
                    $modelReceived->received_at = $timeCreated;
                    $modelReceived->received_by = $createdBY;
                    $modelReceived->received_from = $received_from;
                    $modelReceived->border_port = $border;
                    $modelReceived->received_from_staff = $staff;
                    $modelReceived->remark = $remark;
                    $modelReceived->view_status = Devices::received_devices;
                    $modelReceived->save();

                    $modelReceivedReport = new ReceivedDevicesReport();
                    $modelReceivedReport->serial_no = $value;
                    $modelReceivedReport->received_at = $timeCreated;
                    $modelReceivedReport->received_by = $createdBY;
                    $modelReceivedReport->received_from = $received_from;
                    $modelReceivedReport->border_port = $border;
                    $modelReceivedReport->received_from_staff = $staff;
                    $modelReceivedReport->remark = $remark;
                    $modelReceivedReport->save();

                    $modelReceived = new AwaitingReceive();
                    $modelReceived->serial_no = $value;
                    $modelReceived->received_at = $timeCreated;
                    $modelReceived->received_by = $createdBY;
                    $modelReceived->received_from = $received_from;
                    $modelReceived->border_port = $border;
                    $modelReceived->received_from_staff = $staff;
                    $modelReceived->remark = $remark;
                    $modelReceived->save();


                    $stock = new StockDevices();
                    $stock->serial_no = $value;
                    $stock->created_at = $timeCreated;
                    $stock->created_by = $createdBY;
                    $stock->status = 1;
                    $stock->location_from = $received_from;
                    $stock->save();



                    $stock = new ReleasedDevices();
                    $stock->serial_no = $value;
                    $stock->released_date = $timeCreated;
                    $stock->status = 1;
                    $stock->save();




                    $stock = new InTransit();
                    $stock->serial_no = $value;
                    $stock->created_at = $timeCreated;
                    $stock->created_by = $createdBY;
                    //  $stock->status = 1;
                    $stock->save();





                    $stock = new FaultDevices();
                    $stock->serial_no = $value;
                    $stock->created_at = $timeCreated;
                    $stock->created_by = $createdBY;
                    $stock->status = 1;
                    $stock->save();



                }
                $data=count($line_data)-1;
                Yii::$app->session->setFlash('', [
                    'type' => 'success',
                    'duration' => 5000,
                    'icon' => 'fa fa-check',
                    'message' => 'Total device'.$data.' have been  registered successfully',
                    'positonY' => 'top',
                    'positonX' => 'right',
                ]);

                return $this->redirect(['index']);
            }

            return $this->render('create', [
                'model' => $model,
            ]);

        }else{
            Yii::$app->session->setFlash('', [
                'type' => 'danger',
                'duration' => 5000,
                'icon' => 'fa fa-warning',
                'message' => 'You dont have a permission',
                'positonY' => 'top',
                'positonX' => 'right',
            ]);

            return $this->redirect(['index']);
        }


    }

    /**
     * Updates an existing Device model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if(Yii::$app->user->can('addDevices')){

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }

            return $this->render('update', [
                'model' => $model,
            ]);

        }else{
            Yii::$app->session->setFlash('', [
                'type' => 'danger',
                'duration' => 5000,
                'icon' => 'fa fa-warning',
                'message' => 'You dont have a permission',
                'positonY' => 'top',
                'positonX' => 'right',
            ]);

            return $this->redirect(['index']);
        }


    }

    /**
     * Deletes an existing Device model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Device model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Device the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Devices::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
