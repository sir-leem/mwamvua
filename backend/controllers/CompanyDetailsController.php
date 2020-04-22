<?php

namespace backend\controllers;

use Yii;
use backend\models\CompanyDetails;
use backend\models\CompanyDetailsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * CompanyDetailsController implements the CRUD actions for CompanyDetails model.
 */
class CompanyDetailsController extends Controller
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
     * Lists all CompanyDetails models.
     * @return mixed
     */
    public function actionIndex()
    {
         $check_company_details = CompanyDetails::find()->select('id')->one();

         if(!empty($check_company_details)){

             return $this->render('view', [
                 'model' => $this->findModel($check_company_details),
             ]);

         }else{
             return $this->render('create', [
                 'model' => $model,
             ]);
         }


    }

    /**
     * Displays a single CompanyDetails model.
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
     * Creates a new CompanyDetails model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CompanyDetails();

        if ($model->load(Yii::$app->request->post())) {

            $model->company_logo = UploadedFile::getInstance($model, 'company_logo');

            if ($model->company_logo != null) {
                $model->company_logo->saveAs('uploads/company-logo/' . $model->name . '.' . $model->company_logo->extension);
                $model->logo = $model->company_logo . '.' . $model->company_logo->extension;
                $model->save();
            }else{
                Yii::$app->session->setFlash('', [
                    'type' => 'warning',
                    'duration' => 10000,
                    'icon' => 'fa fa-warning',
                    'title' => 'Notification',
                    'message' => 'Logo failed to be uploaded',
                    'positonY' => 'top',
                    'positonX' => 'right'
                ]);

                return $this->render('create', [
                    'model' => $model,
                ]);
            }

            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing CompanyDetails model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {

            $model->company_logo = UploadedFile::getInstance($model, 'company_logo');

            if ($model->company_logo != null) {
                $model->company_logo->saveAs('uploads/company-logo/' . $model->name . '.' . $model->company_logo->extension);
                $model->logo = $model->company_logo . '.' . $model->company_logo->extension;
                $model->save();
            }else{
                Yii::$app->session->setFlash('', [
                    'type' => 'warning',
                    'duration' => 10000,
                    'icon' => 'fa fa-warning',
                    'title' => 'Notification',
                    'message' => 'Logo failed to be uploaded',
                    'positonY' => 'top',
                    'positonX' => 'right'
                ]);

                return $this->render('create', [
                    'model' => $model,
                ]);
            }

            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing CompanyDetails model.
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
     * Finds the CompanyDetails model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return CompanyDetails the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = CompanyDetails::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
