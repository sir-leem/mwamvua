<?php

namespace backend\controllers;

use backend\models\Audit;
use backend\models\User;
use Yii;
use backend\models\Companies;
use backend\models\CompaniesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CompaniesController implements the CRUD actions for Companies model.
 */
class CompaniesController extends Controller
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
     * Lists all Companies models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CompaniesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Companies model.
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
     * Creates a new Companies model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        if (!Yii::$app->user->isGuest) {

            if (Yii::$app->user->can('createUser')) {

                $model = new Companies();
                $user = new User();

                $model->created_by = Yii::$app->user->identity->getId();
                $model->created_at = date('Y-m-d H:i');
                $model->status = Companies::ACTIVE;


                if ($model->load(Yii::$app->request->post()) && $user->load(Yii::$app->request->post())) {

                    if($model->save()){

                        $user->company_id = $model->id;
                        $user->username = $model->login_name;
                        $user->user_type = User::CREDIT_CUSTOMER;
                        $user->	created_at = date('Y-m-d H:i');
                        $user->	updated_at = date('Y-m-d H:i');
                        try {

                            if ($user->save()) {

                                Yii::$app->authManager->assign(Yii::$app->authManager->getRole($user->role), $user->id);

                                Yii::$app->session->setFlash('', [
                                    'type' => 'success',
                                    'duration' => 5000,
                                    'icon' => 'fa fa-check',
                                    'title' => 'Notification',
                                    'message' => 'Registration successfully registered',
                                    'positonY' => 'top',
                                    'positonX' => 'right'
                                ]);
                                return $this->redirect(['view', 'id' => $model->id]);

                            } else {

                                Yii::$app->session->setFlash('', [
                                    'type' => 'danger',
                                    'duration' => 10000,
                                    'icon' => 'fa fa-warning',
                                    'title' => 'Notification',
                                    'message' => 'User registration not successfully,username have already used',
                                    'positonY' => 'top',
                                    'positonX' => 'right'
                                ]);

                                 Audit::setActivity('Duplicates user ID in User table ' . '(' . $model->id . ')', 'Companies', 'Create', '', '');
                                Companies::deleteAll(['id' => $model->id]);
                                return $this->render('create', [
                                    'model' => $model, 'user' => $user
                                ]);
                            }
                        } catch (\Exception $e) {

                            Yii::$app->session->setFlash('', [
                                'type' => 'danger',
                                'duration' => 5000,
                                'icon' => 'fa fa-warning',
                                'message' => 'User registration not successfully',
                                'positonY' => 'top',
                                'positonX' => 'right'
                            ]);
                             Audit::setActivity('Duplicates user ID in User table ' . '(' . $model->id . ')', 'Companies', 'Create', '', '');
                            Companies::deleteAll(['id' => $model->id]);
                            return $this->render('create', [
                                'model' => $model, 'user' => $user
                            ]);

                        }
                    }

                    return $this->redirect(['view', 'id' => $model->id]);

                } else {
                    return $this->render('create', [
                        'model' => $model, 'user' => $user
                    ]);
                }


            } else {
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

        } else {
            $model = new LoginForm();
            return $this->redirect(['site/login',
                'model' => $model,
            ]);
        }


    }

    /**
     * Updates an existing Companies model.
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
     * Deletes an existing Companies model.
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
     * Finds the Companies model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Companies the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Companies::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
