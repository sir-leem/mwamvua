<?php

namespace backend\controllers;

use backend\models\AllExpenses;
use backend\models\AndroidUpdate;
use backend\models\Audit;
use backend\models\BenefitPerCar;
use backend\models\BenefitsAll;
use backend\models\BorderPortUser;
use backend\models\CarCollection;
use backend\models\CarExpenses;
use backend\models\CarOwners;
use backend\models\Cars;
use backend\models\CompanyExpenses;
use backend\models\Container;
use backend\models\ContainerSize;
use backend\models\Demo;
use backend\models\Devices;
use backend\models\Driver;
use backend\models\Employees;
use backend\models\Enforcement;
use backend\models\ExpensesPerCar;
use backend\models\From;
use backend\models\IncomeSources;
use backend\models\Loans;
use backend\models\LoginForm;
use backend\models\Notification;
use backend\models\OfficeMaintenance;
use backend\models\PartTime;
use backend\models\PartTimeStarf;
use backend\models\PersonalExpenses;
use backend\models\PersonalInvestment;
use backend\models\PersonalTaken;
use backend\models\PosAssigned;
use backend\models\PosList;
use backend\models\ReceiveCash;
use backend\models\Reference;
use backend\models\ReleasedDevices;
use backend\models\Salary;
use backend\models\Sectors;
use backend\models\Status;
use backend\models\Tandiboy;
use backend\models\TransportFees;
use backend\models\TransportPerCar;
use backend\models\User;
use backend\models\Wadau;
use backend\models\WaitingCharges;
use Yii;
use yii\data\ActiveDataProvider;
use backend\models\UserLoginDetails;
use yii\db\Query;
use yii\helpers\Json;


class ApiController extends \yii\rest\ActiveController
{
    public $modelClass = 'backend\models\TransportFees';

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionCustomers()
    {
        \Yii::$app->response->format = \yii\web\Response:: FORMAT_JSON;
        $query = new Query;
        $query->select(['id', 'username as company_name'])
            ->from('user')
            ->where(['user_type' => 5]);

        $command = $query->createCommand();
        $response['customers'] = $command->queryAll();
        return $response;

    }

    public function actionReleaseDevices($user_id)
    {
        \Yii::$app->response->format = \yii\web\Response:: FORMAT_JSON;

        $query = new Query;
        $query->select(['id', 'serial_no as name'])
            ->from('released_devices')
            ->where(['released_to' => $user_id])->andWhere(['view_status'=>Devices::released_devices]);
        $command = $query->createCommand();
        $response['devices'] = $command->queryAll();
        return $response;
    }

    public function actionPortStaffs()
    {
        \Yii::$app->response->format = \yii\web\Response:: FORMAT_JSON;
        $query = new Query;
        $query->select(['id', 'username as names', 'id as uid'])
            ->from('user')
            ->where(['user_type' => \backend\models\User::PORT_STAFF]);

        $command = $query->createCommand();
        $response['staffs'] = $command->queryAll();
        return $response;

    }

    public function actionSalesPoints()
    {
        \Yii::$app->response->format = \yii\web\Response:: FORMAT_JSON;
        $query = new Query;
        $query->select(['id', 'name as gate_name'])
            ->from('border_port')
            ->where(['location' => 2]);

        $command = $query->createCommand();
        $response['portPoints'] = $command->queryAll();
        return $response;

    }

    public function actionBorders()
    {
        \Yii::$app->response->format = \yii\web\Response:: FORMAT_JSON;
        $query = new Query;
        $query->select(['id', 'name as title'])
            ->from('border_port')
            ->where(['location' => 1]);

        $command = $query->createCommand();
        $response['borders'] = $command->queryAll();
        return $response;

    }

    public function actionReleased($id)
    {

        \Yii::$app->response->format = \yii\web\Response:: FORMAT_JSON;

        $data = ReleasedDevices::find()->where(['id' => $id])->all();
        if (count($data) > 0) {
            return array('data' => $data);


        } else {
            return array('status' => false, 'data' => 'No Data');
        }
    }

    public function actionLogin()
    {
        \Yii::$app->response->format = \yii\web\Response:: FORMAT_JSON;

        $model = new \common\models\LoginForm();
        $params = Yii::$app->request->post();

        $model->username = $params['username'];
        $model->password = $params['password'];

        $user = \backend\models\User::findByUsername($model->username);
        $userAll = User::find()->where(['username' => $model->username])->one();
        $userAllocated = BorderPortUser::find()->where(['name' => $userAll['id']])->one();

        if (!empty($user)) {
            if ($model->login()) {

                $response['error'] = false;
                $response['status'] = 'success';
                $response['message'] = 'You are now logged in';
                $response['userData'] = \common\models\User::findByUsername($model->username);

                $response = [

                    'user_id' => Yii::$app->user->identity->id,
                    'username' => Yii::$app->user->identity->username,
                    'email' => Yii::$app->user->identity->email,
                    'status' => Yii::$app->user->identity->status,
                    'message' => $response['message'],
                    'access_token' => Yii::$app->user->identity->getAuthKey(),
                    'user_type' => Yii::$app->user->identity->user_type,
                    'border_port' => $userAllocated['border_port'],
                    'role' => Yii::$app->user->identity->role,

                ];

                return ['userData' => $response];


            } else {
                $response['error'] = false;
                $response['status'] = 'error';
                $model->validate($model->password);
                $response['errors'] = $model->getErrors();
                $response['message'] = 'wrong password';
                return $response;
            }


        } else {
            $response['error'] = false;
            $response['status'] = 'error';
            $model->validate($model->password);
            $response['errors'] = $model->getErrors();
            $response['message'] = 'user is disabled or does not exist!';
            return $response;
        }
    }

    public function actionChangePassword()
    {
        \Yii::$app->response->format = \yii\web\Response:: FORMAT_JSON;

        if (Yii::$app->request->post()) {

            $username = Yii::$app->request->post('username');
            $oldpass = Yii::$app->request->post('old_password');
            $password = Yii::$app->request->post('new_password');
            $confirm_password = Yii::$app->request->post('confirm_password');

            $model = User::findOne(['username' => $username]);

            if ($model->validatePassword($oldpass)) {

                $model->password_hash = Yii::$app->security->generatePasswordHash($password);

                if ($model->save(false)) {

                    $response['error'] = false;
                    $response['status'] = 'success';
                    $response['message'] = 'Password successfully changed';
                    $response['user'] = \common\models\User::findByUsername($model->username);
                    //return [$response,$model];
                    return $response;

                    //return array('success' => true, 'data' => '');

                } else {

                    $response['error'] = false;
                    $response['status'] = 'error';
                    $response['errors'] = $model->getErrors();
                    $response['message'] = 'Failed to change password';
                    return $response;
                    //  return array('success' => false, 'data' => 'Failed to change password');

                }
            } else {

                $response['error'] = false;
                $response['status'] = 'error';
                $response['errors'] = $model->getErrors();
                $response['message'] = 'wrong old password provided';
                return $response;

                //return array('success' => false, 'data' => 'wrong old password provided');

            }
        } else {
            return array('success' => true, 'data' => 'Nothing is posted');
        }


    }

    protected function verbs()
    {
        return [
            'login' => ['POST'],
            'change-password' => ['POST'],
            'received-cash' => ['POST'],
            'enforcement' => ['POST'],
            'rejected-receipt' => ['POST'],
            'edit-assigned-collector' => ['POST'],
            'collectors' => ['GET'],
            'pos-list' => ['GET'],


        ];
    }

}



