<?php

namespace backend\controllers;

use backend\models\ReleasedDevicesReport;
use Yii;
use backend\models\ReleasedDevices;
use backend\models\ReleasedDevicesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ReleasedDevicesController implements the CRUD actions for ReleasedDevices model.
 */
class ReleasedDevicesController extends Controller
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
     * Lists all ReleasedDevices models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ReleasedDevicesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ReleasedDevices model.
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
     * Creates a new ReleasedDevices model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ReleasedDevices();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ReleasedDevices model.
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
     * Deletes an existing ReleasedDevices model.
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
     * Finds the ReleasedDevices model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ReleasedDevices the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ReleasedDevices::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionTransfer()
    {

        if (Yii::$app->user->can('transferDevices')) {
            $action = Yii::$app->request->post('action');
            $points = Yii::$app->request->post('points');

            $selection = (array)Yii::$app->request->post('selection');
            //  print_r($action);
            // exit;

            foreach ($selection as $id) {
                //  $e = StockDevices::findOne((int)$id);

                if ($selection != '') {

                    if ($action != '' && $points != '') {
                        $saler = ReleasedDevices::find()->where(['id' => $selection])->one();
                        foreach ($selection as $key => $value) {

                            $e = ReleasedDevices::find()->where(['id' => $selection])->one();

                            ReleasedDevices::updateAll(['transferred_from' => $saler['released_to'],
                                'transferred_by' => Yii::$app->user->identity->id, 'released_to' => $action,
                                'transferred_to' => $action, 'transferred_date' => date('Y-m-d H:i:s'),
                                'status' => 2, 'sales_point' => $points], ['id' => $value]);

                            ReleasedDevicesReport::updateAll(['transferred_from' => $saler['released_to'],
                                'transferred_by' => Yii::$app->user->identity->id, 'released_to' => $action,
                                'transferred_to' => $action, 'transferred_date' => date('Y-m-d H:i:s'),
                                'status' => 2, 'sales_point' => $points],
                                ['id' => $value, 'released_to' => $saler['released_to'], 'released_date' => $saler['released_date']]);


                        }

                        Yii::$app->session->setFlash('', [
                            'type' => 'success',
                            'duration' => 5000,
                            'icon' => 'fa fa-check',
                            'message' => 'Total device ' . count($selection) . ' have been  successfully transferred',
                            'positonY' => 'top',
                            'positonX' => 'right',
                        ]);

                        return $this->redirect(['index']);

                    } else {
                        Yii::$app->session->setFlash('', [
                            'type' => 'danger',
                            'duration' => 5000,
                            'icon' => 'fa fa-check',
                            'message' => 'You have not selected Sales Person or Sales Point ',
                            'positonY' => 'top',
                            'positonX' => 'right',
                        ]);
                        return $this->redirect(['index']);
                    }
                } else {
                    Yii::$app->session->setFlash('', [
                        'type' => 'danger',
                        'duration' => 5000,
                        'icon' => 'fa fa-check',
                        'message' => 'Please select devices to transfer ',
                        'positonY' => 'top',
                        'positonX' => 'right',
                    ]);
                    return $this->redirect(['index']);
                }


            }

            return $this->redirect(['index']);
        } else {
            Yii::$app->session->setFlash('', [
                'type' => 'danger',
                'duration' => 5000,
                'icon' => 'fa fa-check',
                'message' => 'You do not have permission to transfer device',
                'positonY' => 'top',
                'positonX' => 'right',
            ]);
            return $this->redirect(['index']);
        }
    }

}
