<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\User;
use yii\helpers\ArrayHelper;


/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', '');
$this->params['breadcrumbs'][] = 'Users';
?>
<p style="padding-top: 5px"/>
<div class="user-index">

    <div class="row" >
        <div style="text-align: center;">

            <strong class="lead" style="color: #01214d;font-family: Tahoma">
                <i class="fa fa-user text-blue" style="color: red">
                SYSTEM USERS
                </i>
            </strong>

        </div>
        <div class="col-md-3">

        </div>

    </div>
    <p style="padding-top: 3%"/>
    <?= \fedemotta\datatables\DataTables::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'rowOptions'=>function($model){

            if ($model->status == User::STATUS_INACTIVE) {

                return ['class' => 'danger'];

            }else if ($model->status == User::STATUS_INACTIVE) {
                return ['style' => 'danger'];
            }
        },
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],


            //'id',
            'username',

            'email:email',
            'role',
            [
                'attribute' => 'user_type',
                'value' => function ($model) {

                    if ($model->user_type == User::SUPER_ADMIN) {
                        return 'SUPER ADMIN';
                    } elseif ($model->user_type == User::ADMIN) {
                        return 'ADMINISTRATOR';
                    } elseif ($model->user_type == User::OFFICE_STAFF) {
                        return 'OFFICE STAFF';
                    } elseif ($model->user_type == User::PORT_STAFF) {
                        return 'PORT STAFF';
                    }elseif ($model->user_type == User::BORDER_STAFF) {
                        return 'BORDER STAFF';
                    }elseif ($model->user_type == User::CREDIT_CUSTOMER) {
                        return 'CREDIT CUSTOMER';
                    }
                }

            ],
            [
                'attribute' => 'status',
                'value' => function ($model) {

                    if ($model->status == User::STATUS_ACTIVE) {
                        return 'ACTIVE';
                    } elseif ($model->status == User::STATUS_DELETED) {
                        return 'DISABLED';
                    } elseif ($model->status == User::STATUS_INACTIVE) {
                        return 'DISABLED';
                    }
                }

            ],
            'created_at:datetime',
           // 'updated_at:datetime',
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Actions',
                'template' => '{view}',
                //   'visible' => Yii::$app->user->can('super_admin'),
                'buttons' => [
                    'view' => function ($url, $model) {
                        $url = ['view', 'id' => $model->id];
                        return Html::a('<span class="fa fa-eye"></span>', $url, [
                            'title' => 'View',
                            'data-toggle' => 'tooltip', 'data-original-title' => 'Save',
                            'class' => 'btn btn-primary',

                        ]);


                    },


                ]
            ],
        ],
        'clientOptions' => [
            "lengthMenu" => [[100, -1], [100, Yii::t('app', "All")]],
            "info" => false,
            "responsive" => true,
            "dom" => 'lfTrtip',
            "tableTools" => [
                "aButtons" => [
                    [
                        "sExtends" => "copy",
                        "sButtonText" => Yii::t('app', "Copy to clipboard")
                    ], [
                        "sExtends" => "csv",
                        "sButtonText" => Yii::t('app', "Save to CSV")
                    ], [
                        "sExtends" => "xls",
                        "oSelectorOpts" => ["page" => 'current']
                    ], [
                        "sExtends" => "pdf",
                        "sButtonText" => Yii::t('app', "Save to PDF")
                    ], [
                        "sExtends" => "print",
                        "sButtonText" => Yii::t('app', "Print")
                    ],
                ]
            ]
        ],
    ]); ?>

</div>

