<?php

namespace backend\controllers;

use backend\models\BorderPort;
use backend\models\User;
use Yii;
use backend\models\BorderPortUser;
use backend\models\BorderPortUserSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BorderPortUserController implements the CRUD actions for BorderPortUser model.
 */
class BorderPortUserController extends Controller
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
     * Lists all BorderPortUser models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BorderPortUserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BorderPortUser model.
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
     * Creates a new BorderPortUser model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if(Yii::$app->user->can('addUserAllocated')){

            $model = new BorderPortUser();

            if ($model->load(Yii::$app->request->post())) {

                $user=BorderPortUser::find()->where(['name'=>$model->name])->one();

                if ($user == ''){
                    $model->assigned_date=date('y-m-d H:i:s');
                    $model->assigned_by=Yii::$app->user->identity->id;
                    $model->save();
                    return $this->redirect(['index']);
                }

                else{
                    Yii::$app->session->setFlash('', [
                        'type' => 'danger',
                        'duration' => 2000,
                        'icon' => 'fa fa-warning',
                        'title' => 'Notification',
                        'message' => 'One user can not be assigned two places',
                        'positonY' => 'top',
                        'positonX' => 'right'
                    ]);

                    return $this->redirect(['index']);
                }


            }

            return $this->render('create', [
                'model' => $model,
            ]);

        }else{
            Yii::$app->session->setFlash('', [
                'type' => 'danger',
                'duration' => 8000,
                'icon' => 'fa fa-warning',
                'title' => 'Notification',
                'message' => 'You dont have a permission',
                'positonY' => 'top',
                'positonX' => 'right'
            ]);
            return $this->redirect(['index']);
        }

    }

    /**
     * Updates an existing BorderPortUser model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        if(Yii::$app->user->can('addUserAllocated')){

            $model = $this->findModel($id);

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }

            return $this->render('update', [
                'model' => $model,
            ]);

        }else{
            Yii::$app->session->setFlash('', [
                'type' => 'danger',
                'duration' => 8000,
                'icon' => 'fa fa-warning',
                'title' => 'Notification',
                'message' => 'You dont have a permission',
                'positonY' => 'top',
                'positonX' => 'right'
            ]);
            return $this->redirect(['index']);
        }

    }

    /**
     * Deletes an existing BorderPortUser model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        if(Yii::$app->user->can('deleteUserAllocated')){

            $this->findModel($id)->delete();

            return $this->redirect(['index']);

        }else{
            Yii::$app->session->setFlash('', [
                'type' => 'danger',
                'duration' => 8000,
                'icon' => 'fa fa-warning',
                'title' => 'Notification',
                'message' => 'You dont have a permission',
                'positonY' => 'top',
                'positonX' => 'right'
            ]);
            return $this->redirect(['index']);
        }


    }

    /**
     * Finds the BorderPortUser model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return BorderPortUser the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = BorderPortUser::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
