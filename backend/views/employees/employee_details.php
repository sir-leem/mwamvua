<?php

use backend\models\User;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\EmployeesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '';
$this->params['breadcrumbs'][] = 'Employees';
?>
<div class="row">

    <div class="col-md-9 border border-blue">
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [

                'name',
                [
                    'label' => 'Username',
                    'value' => function($model){
                        $user = \backend\models\User::find()->select('username')->where(['employee_id'=>$model->id])->one();
                        return $user->username;
                    },

                ],
                'mobile',
                [

                    'label' => 'Email',
                    'value' => function($model){
                        $user = \backend\models\User::find()->select('email')->where(['employee_id'=>$model->id])->one();

                        return $user->email;

                    },

                ],
                'address',

                [

                    'label' => 'Role',
                    'value' => function($model){
                        $user = \backend\models\User::find()->select('role')->where(['employee_id'=>$model->id])->one();

                        return $user->role;

                    },

                ],
                [

                    'label' => 'User Type',
                    'value' => function($model){
                        $user = \backend\models\User::find()->select('user_type')->where(['employee_id'=>$model->id])->one();

                        if ($user->user_type == User::SUPER_ADMIN) {
                            return 'SUPER ADMIN';
                        } elseif ($user->user_type == User::ADMIN) {
                            return 'ADMINISTRATOR';
                        } elseif ($user->user_type == User::OFFICE_STAFF) {
                            return 'OFFICE STAFF';
                        } elseif ($user->user_type == User::PORT_STAFF) {
                            return 'PORT STAFF';
                        }elseif ($user->user_type == User::BORDER_STAFF) {
                            return 'BORDER STAFF';
                        }elseif ($user->user_type == User::CREDIT_CUSTOMER) {
                            return 'BILL STAFF';
                        }

                    },

                ],
                [

                    'label' => 'Status',
                    'value' => function($model){
                        $user = \backend\models\User::find()->select('status')->where(['employee_id'=>$model->id])->one();

                        if ($user->status == User::STATUS_ACTIVE) {
                            return 'ACTIVE';
                        } elseif ($user->status == User::STATUS_DELETED) {
                            return 'DISABLED';
                        } elseif ($user->status == User::STATUS_INACTIVE) {
                            return 'DISABLED';
                        }

                    },

                ],
                [
                    'attribute' => 'created_by',
                    'value' => $model->user->username,
                ],
                'created_at',

            ],
        ]); ?>

    </div>

    <div class="col-md-3  text-left">


        <?php
        if ($model->image != null) {

            $extension = explode(".", $model->image);
            if($extension != null){
                echo Html::img('uploads/employee/' . $model->image,
                    ['width' => '150px', 'height' => '150px', 'class' => 'img-square']);

            } else {
                // ToDO with error: print_r($errors);
                echo "<img src='data:image/png;base64,$model->image', width='150px' height='150px' align='center' style='vertical-align: middle'/>";
            }

        } else {
            echo Html::img('uploads/employee/avatar.jpg',
                ['width' => '150px', 'height' => '150px', 'class' => 'img-square']);
        }
        ?>

        <br/><br/>
        <p><b>Full name:</b> <?= $model->name ?></p>
        <p><b>Mobile:</b> <?= $model->mobile ?></p>
        <p><b>Address:</b> <?= $model->address ?></p>

    </div>


</div>
