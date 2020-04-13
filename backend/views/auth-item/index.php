<?php

use backend\models\Auth;
use yii\helpers\Html;
use yii\grid\GridView;
use nickdenry\grid\FilterContentActionColumn;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AuthItemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '';
$this->params['breadcrumbs'][] = 'Permissions';
?>
<div class="report-index table-responsive">
    <?php \yii\widgets\Pjax::begin(); ?>
    <div class="nav-tabs-custom">
        <div style="text-align: center;">
            <h3>
                <i class="fa fa-lock text-default">
                    <strong>ACCESS CONTROL</strong>
                </i>
            </h3>
        </div>


        <?php \yii\widgets\Pjax::begin(); ?>
        <!-- Custom Tabs -->
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">

                <?php \yii\widgets\Pjax::begin(); ?>
                <!-- Custom Tabs -->
                <ul class="nav nav-tabs">
                    <li><a href="#tab_user_role" data-toggle="tab" class="fa fa-lock"><b> User Roles</b></a>
                    </li>
                    <li  class="active"><a href="#tab_user_permissions" data-toggle="tab" class="fa fa-lock"><b>
                                Permissions</b></a></li>
                </ul>
                <div class="tab-content">
                    <div class="box-body table-responsive">
                        <div class="tab-content" style="padding-top: 2%">

                            <div class="tab-pane" id="tab_user_role">
                                <div class="col-md-6">
                                    <strong class="lead" style="color: #01214d;font-family: Tahoma"> <i
                                                class="fa fa-lock"></i> RAHNTECH
                                        COMPANY LTD - User Roles Management </strong>
                                </div>
                                <div class="col-md-2">

                                </div>

                                <p style="padding-top: 2%"/>

                                <?php \yii\widgets\Pjax::begin(); ?>
                                <?php
                                $searchModel = new \backend\models\AuthSearch();
                                $dataProvider = $searchModel->search(Yii::$app->request->queryParams, Auth::TYPE_ROLE);
                                ?>
                                <div class="admin-index">

                                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                                    <p>
                                        <?php if (Yii::$app->user->can('SuperAdministrator')) { ?>
                                            <?= Html::a(Yii::t('app', 'Create ') . Yii::t('app', 'Role'), ['role/create'], ['class' => 'btn btn-success']) ?>
                                        <?php  } ?>
                                    </p>

                                    <?= \fedemotta\datatables\DataTables::widget([

                                        'dataProvider' => $dataProvider,
                                        //'filterModel' => $searchModel,
                                        'columns' => [
                                            ['class' => 'yii\grid\SerialColumn'],

                                            [
                                                'attribute' => 'name',
                                            ],
                                            'description',
                                            [
                                                'class' => 'yii\grid\ActionColumn',
                                                'header' => 'Actions',
                                                'visible'=> Yii::$app->user->can('changeUserRoles'),
                                                'template' => '{view} {update} ',
                                                //   'visible' => Yii::$app->user->can('super_admin'),
                                                'buttons' => [
                                                    'view' => function ($url, $model) {
                                                        $url = ['role/view', 'name' => $model->name];
                                                        return Html::a('<span class="fa fa-eye"></span>', $url, [
                                                            'title' => 'View',
                                                            'data-toggle' => 'tooltip', 'data-original-title' => 'Save',
                                                            'class' => 'btn btn-primary',

                                                        ]);


                                                    },
                                                    'update' => function ($url, $model) {
                                                        $url = ['role/update', 'name' => $model->name];
                                                        return Html::a('<span class="fa fa-pencil"></span>', $url, [
                                                            'title' => 'Edit',
                                                            'data-toggle' => 'tooltip', 'data-original-title' => 'Save',
                                                            'class' => 'btn btn-info',

                                                        ]);


                                                    },

                                                ]
                                            ],
                                            [

                                                'class' => 'yii\grid\ActionColumn', 'header' => 'Actions',
                                                'visible'=> Yii::$app->user->can('SuperAdministrator'),
                                                'urlCreator' => function ($action, $model, $key, $index) {
                                                    $link = '#';
                                                    switch ($action) {

                                                        case 'delete':
                                                            $link = Yii::$app->getUrlManager()->createUrl(['role/delete', 'name' => $model->name]);
                                                            break;
                                                    }
                                                    return $link;
                                                },

                                            ],

                                        ],
                                    ]); ?>

                                </div>

                                <?php \yii\widgets\Pjax::end(); ?>
                            </div>

                            <div class="tab-pane active" id="tab_user_permissions">
                                <div class="col-md-6">
                                    <strong class="lead" style="color: #01214d;font-family: Tahoma"> <i
                                                class="fa fa-lock"></i> RAHNTECH
                                        COMPANY LTD - User Permissions </strong>
                                </div>
                                <div class="col-md-2">

                                </div>

                                <p style="padding-top: 2%"/>

                                <?php \yii\widgets\Pjax::begin(); ?>
                                <?php
                                $searchModel = new \backend\models\AuthItemSearch();
                                $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
                                ?>
                                <div class="admin-index">

                                    <p>
                                        <?php if (Yii::$app->user->can('SuperAdministrator')) { ?>
                                            <?= Html::a('Add Permission', ['auth-item/create'], ['class' => 'btn btn-success']) ?>
                                        <?php } ?>
                                    </p>

                                    <?= \fedemotta\datatables\DataTables::widget([
                                        'dataProvider' => $dataProvider,
                                        //'filterModel' => $searchModel,
                                        'columns' => [
                                            ['class' => 'yii\grid\SerialColumn'],

                                            'name',
                                            //'type',
                                            'description:ntext',

                                            //'data:ntext',
                                            // 'created_at',
                                            // 'updated_at',

                                            [
                                                'class' => FilterContentActionColumn::className(),
                                                'header' => 'Actions',
                                                'visible' => Yii::$app->user->can('SuperAdministrator'),
                                                // Set custom classes
                                                'buttonAdditionalOptions' => [
                                                    'auth-item/view' => ['class' => 'btn btn-sm btn-primary'],
                                                    'auth-item/update' => ['class' => 'btn btn-default btn-sm'],
                                                    'auth-item/delete' => ['class' => 'btn btn-danger btn-sm'],
                                                ],

                                                // Add your own filterContent
                                            ],
                                        ],
                                        'clientOptions' => [
                                            "lengthMenu" => [[200, -1], [200, Yii::t('app', "All")]],
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

                                <?php \yii\widgets\Pjax::end(); ?>
                            </div>
                        </div>
                    </div>

                    <?php \yii\widgets\Pjax::end(); ?>
            </ul>

        </div>
        <?php \yii\widgets\Pjax::end(); ?>
    </div>
    <?php \yii\widgets\Pjax::end(); ?>
</div>
