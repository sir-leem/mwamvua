<?php

namespace backend\controllers;

use backend\models\Companies;
use backend\models\User;
use common\models\LoginForm;
use Yii;
use backend\models\Employees;
use backend\models\EmployeesSearch;
use yii\db\StaleObjectException;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\widgets\ActiveForm;
use yii\web\Response;

ini_set('memory_limit', '1024M');

/**
 * EmployeesController implements the CRUD actions for Employees model.
 */
class EmployeesController extends Controller
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
     * Lists all Employees models.
     * @return mixed
     */
    public function actionIndex()
    {
        if (!Yii::$app->user->isGuest) {

            $searchModel = new EmployeesSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);


            return $this->render('index', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,

            ]);

        } else {
            $model = new LoginForm();
            return $this->redirect(['site/login',
                'model' => $model,
            ]);
        }


    }

    /**
     * Displays a single Employees model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        if (!Yii::$app->user->isGuest) {

            $user = User::findOne(['employee_id' => $id]);

            $user->setScenario('admin-update');

            if ($user->load(Yii::$app->request->post())) {
                Yii::$app->authManager->revokeAll($user->id);
                Yii::$app->authManager->assign(Yii::$app->authManager->getRole($user->role), $user->id);
                $user->save();

                Yii::$app->session->setFlash('', [
                    'type' => 'success',
                    'duration' => 1500,
                    'icon' => 'fa fa-check',
                    'message' => 'Umefanikiwa kubadil neno la siri',
                    'positonY' => 'top',
                    'positonX' => 'right'
                ]);
                return $this->redirect(['view', 'id' => $id]);
            } else {
                return $this->render('view', [
                    'model' => $this->findModel($id), 'user' => $user
                ]);
            }

        } else {
            $model = new LoginForm();
            return $this->redirect(['site/login',
                'model' => $model,
            ]);
        }

    }

    /**
     * Creates a new Employees model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */

    public function actionCreate()
    {
        if (!Yii::$app->user->isGuest) {

            if (Yii::$app->user->can('createUser')) {

                $model = new Employees();
                $user = new User();

                $model->created_by = Yii::$app->user->identity->getId();
                $model->created_at = date('Y-m-d H:i');
                $model->status = Employees::ACTIVE;


                if ($model->load(Yii::$app->request->post()) && $user->load(Yii::$app->request->post())) {

                    if($model->save()){

                        $model->employee_image = UploadedFile::getInstance($model, 'employee_image');

                        if ($model->employee_image != null) {
                            $model->employee_image->saveAs('uploads/employee/' . $model->employee_image . '.' . $model->employee_image->extension);
                            $model->image = $model->employee_image . '.' . $model->employee_image->extension;
                        }

                        $user->employee_id = $model->id;
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

                                // Audit::setActivity('Duplicates user ID in User table ' . '(' . $model->id . ')', 'Wafanyakazi', 'Create', '', '');
                                Employees::deleteAll(['id' => $model->id]);
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
                            // Audit::setActivity('Duplicates user ID in User table ' . '(' . $model->id . ')', 'Wafanyakazi', 'Create', '', '');
                            Employees::deleteAll(['id' => $model->id]);
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
     * Updates an existing Employees model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        if (!Yii::$app->user->isGuest) {
            if(Yii::$app->user->can('createUser')) {

                $model = $this->findModel($id);

                if ($model->load(Yii::$app->request->post()) && $model->save()) {

                    if (UploadedFile::getInstance($model, 'employee_image') != null) {
                        $model->image = UploadedFile::getInstance($model, 'employee_image');
                        $model->image->saveAs('uploads/employee/' . $model->image . '.' . $model->image->extension);
                        $model->image = $model->image . '.' . $model->image->extension;
                    }

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
        }else{
            $model = new LoginForm();
            return $this->redirect(['site/login',
                'model' => $model,
            ]);
        }


    }

    /**
     * Deletes an existing Employees model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {

        if (!Yii::$app->user->isGuest) {
            if(Yii::$app->user->can('deleteUser')) {

                $model = $this->findModel($id);

                try {
                    if ($this->findModel($id)->delete()) {

                        User::deleteAll(['employee_id' => $id]);
                        Yii::$app->session->setFlash('', [
                            'type' => 'success',
                            'duration' => 1500,
                            'icon' => 'fa fa-check',
                            'title' => 'fa fa-warning',
                            'message' => 'Employee have been successfully deleted',
                            'positonY' => 'top',
                            'positonX' => 'right'
                        ]);
                        // Audit::setActivity('Amemfuta mfanyakazi huyu ' . '(' . $model->jina_kamili . '-' . $id . ')', 'Wafanyakazi', 'Create', '', '');
                        return $this->redirect(['index']);
                    }
                }catch (Exception $exception) {
                    Yii::$app->session->setFlash('', [
                        'type' => 'danger',
                        'duration' => 3000,
                        'icon' => 'fa fa-warning',
                        'message' => 'Huwezi kumfuta mfanyakazi huyu,ameshatumika,unaweza kumsitisha asiingie kwenye mfumo',
                        'positonY' => 'top',
                        'positonX' => 'right'
                    ]);
                  //  Audit::setActivity('anajaribu kmfuta mfanyakazi huyu' . '(' . $model->id . ')', 'Wafanyakazi', 'Delete', '', '');
                    return $this->redirect(['index']);
                }


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
        }else{
            $model = new LoginForm();
            return $this->redirect(['site/login',
                'model' => $model,
            ]);
        }


    }

    /**
     * Finds the Employees model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Employees the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Employees::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
