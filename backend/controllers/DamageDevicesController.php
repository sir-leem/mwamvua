<?php

namespace backend\controllers;

use backend\models\Devices;
use backend\models\StockDevices;
use backend\models\StockDevicesReport;
use Yii;
use backend\models\DamageDevices;
use backend\models\DamageDevicesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DamageDevicesController implements the CRUD actions for DamageDevices model.
 */
class DamageDevicesController extends Controller
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
     * Lists all DamageDevices models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DamageDevicesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionSearch()
    {
        $searchModel = new DamageDevicesSearch();
        $dataProvider = $searchModel->searchClean(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    /**
     * Displays a single DamageDevices model.
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
     * Creates a new DamageDevices model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new DamageDevices();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DamageDevices model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DamageDevices model.
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
     * Finds the DamageDevices model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return DamageDevices the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DamageDevices::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }

    public function actionAvailable()
    {
        Yii::$app->db->transaction(function () {
            $action = Yii::$app->request->post('action');

            $selection = (array)Yii::$app->request->post('selection');

            foreach ($selection as $id) {

                if ($action != '') {

                    foreach ($selection as $key => $value) {
                        $e = DamageDevices::find()->where(['id' => $selection])->one();

                        $stock = new StockDevices();
                        $stock->serial_no = $e['serial_no'];
                        $stock->status = StockDevices::available;
                        $stock->view_status = Devices::stock_devices;
                        $stock->created_by = Yii::$app->user->identity->id;
                        $stock->created_at = date('Y-m-d H:m');
                        $stock->save();

                        $stock = new StockDevicesReport();
                        $stock->serial_no = $e['serial_no'];
                        $stock->status = StockDevices::available;
                        $stock->created_by = Yii::$app->user->identity->id;
                        $stock->created_at = date('Y-m-d H:m');
                        $stock->save();

                        DamageDevices::deleteAll(['id' => $value]);

                    }


                    Yii::$app->session->setFlash('', [
                        'type' => 'success',
                        'duration' => 5000,
                        'icon' => 'fa fa-check',
                        'message' => 'Total device ' . count($selection) . ' have been  successfully allocated as available',
                        'positonY' => 'top',
                        'positonX' => 'right',
                    ]);

                    return $this->redirect(['index']);

                } else {
                    Yii::$app->session->setFlash('', [
                        'type' => 'danger',
                        'duration' => 5000,
                        'icon' => 'fa fa-check',
                        'message' => 'You have not selected Sales Person ',
                        'positonY' => 'top',
                        'positonX' => 'right',
                    ]);
                    return $this->redirect(['index']);
                }


            }

            return $this->redirect(['index']);

        });
    }

}
