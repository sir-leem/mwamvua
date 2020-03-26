<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BorderPortSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '';
$this->params['breadcrumbs'][] = 'Border Ports';
?>
<div class="border-port-index" style="padding-top: 3%">
    <!-- Custom Tabs -->
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">

            <?php \yii\widgets\Pjax::begin(); ?>
            <!-- Custom Tabs -->

            <ul class="nav nav-tabs">
                <li><a href="#tab_border_id" data-toggle="tab"
                                      class="fa fa-database"><b> Border name</b></a></li>
                <li  class="active"><a href="#tab_sales_point_id" data-toggle="tab" class="fa fa-info-circle"><b> Sales
                            Point</b></a></li>

            </ul>
            <div class="tab-content">
                <div class="box-body table-responsive">
                    <div class="tab-content" style="padding-top: 2%">
                        <div class="tab-pane" id="tab_border_id">
                            <div class="row">
                                <div class="col-md-6">
                                    <strong class="lead" style="color: #01214d;font-family: Tahoma">
                                        <i class="fa fa-check-square text-green"></i> RAHNTECH
                                        COMPANY LTD - Border List
                                    </strong>
                                </div>
                                <div class="col-md-6">
                                    <?php if (Yii::$app->user->can('createBorder')) { ?>
                                        <?= Html::a(Yii::t('app', '<i class="fa fa-plus"></i> Add New'), ['create-border'], ['class' => 'btn btn-primary waves-effect waves-light']) ?>
                                    <?php } ?>


                                </div>
                            </div>

                            <p style="padding-top: 3%"/>

                            <?php \yii\widgets\Pjax::begin(); ?>
                            <?php
                            $searchModel = new \backend\models\BorderPortSearch();
                            $dataProvider = $searchModel->searchBorder(Yii::$app->request->queryParams);
                            ?>

                            <?= \fedemotta\datatables\DataTables::widget([
                                'dataProvider' => $dataProvider,
                                'filterModel' => $searchModel,
                                'columns' => [
                                    ['class' => 'yii\grid\SerialColumn'],

                                    //  'id',
                                    'name',
                                    /* [
                                             'attribute'=>'location',
                                     'value'=>'location0.location_name',
                                     ],*/

                                    [
                                        'class' => 'yii\grid\ActionColumn',
                                        'header' => 'Actions',
                                        'template' => '{view} {update} ',
                                        //   'visible' => Yii::$app->user->can('super_admin'),
                                        'buttons' => [
                                            'view' => function ($url, $model) {
                                                $url = ['view-border', 'id' => $model->id];
                                                return Html::a('<span class="fa fa-eye"></span>', $url, [
                                                    'title' => 'View',
                                                    'data-toggle' => 'tooltip', 'data-original-title' => 'Save',
                                                    'class' => 'btn btn-primary',

                                                ]);


                                            },
                                            'update' => function ($url, $model) {
                                                $url = ['update-border', 'id' => $model->id];
                                                return Html::a('<span class="fa fa-pencil"></span>', $url, [
                                                    'title' => 'Edit',
                                                    'data-toggle' => 'tooltip', 'data-original-title' => 'Save',
                                                    'class' => 'btn btn-info',

                                                ]);


                                            },

                                            'delete' => function ($url, $model) {
                                                $url = ['delete-border', 'id' => $model->id];
                                                return Html::a('<span class="fa fa-remove"></span>', $url, [
                                                    'title' => 'Delete',
                                                    'data' => [
                                                        'confirm' => 'Are you sure you want to delete this item?',
                                                        'method' => 'post',
                                                    ],
                                                    'data-toggle' => 'tooltip', 'data-original-title' => 'Save',
                                                    'class' => 'btn btn-danger',


                                                ]);


                                            },


                                        ]
                                    ],

                                ],
                                'clientOptions' => [
                                    "lengthMenu" => [[20, -1], [20, Yii::t('app', "All")]],
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
                            <?php \yii\widgets\Pjax::end(); ?>
                        </div>

                        <div class="tab-pane active" id="tab_sales_point_id">

                            <div class="row">
                                <div class="col-md-6">

                                    <strong class="lead" style="color: #01214d;font-family: Tahoma">
                                        <i class="fa fa-check-square text-green"></i> RAHNTECH
                                        COMPANY LTD - Sales Point List
                                    </strong>
                                </div>

                                <div class="col-md-6">
                                    <?php if (Yii::$app->user->can('createSalesPoint')) { ?>
                                        <?= Html::a(Yii::t('app', '<i class="fa fa-map-marker"></i> Add New'), ['create-port'], ['class' => 'btn btn-primary waves-effect waves-light']) ?>
                                    <?php } ?>


                                </div>
                            </div>

                            <p style="padding-top: 3%"/>

                            <?php \yii\widgets\Pjax::begin(); ?>
                            <?php
                            $searchModel = new \backend\models\BorderPortSearch();
                            $dataProvider = $searchModel->searchPort(Yii::$app->request->queryParams);
                            ?>

                            <?= \fedemotta\datatables\DataTables::widget([
                                'dataProvider' => $dataProvider,
                                'filterModel' => $searchModel,
                                'columns' => [
                                    ['class' => 'yii\grid\SerialColumn'],

                                    //  'id',
                                    'name',
                                    /*     [
                                                 'attribute'=>'location',
                                         'value'=>'location0.location_name',
                                         ],*/

                                    [
                                        'class' => 'yii\grid\ActionColumn',
                                        'header' => 'Actions',
                                        'template' => '{view} {update} ',
                                        //   'visible' => Yii::$app->user->can('super_admin'),
                                        'buttons' => [
                                            'view' => function ($url, $model) {
                                                $url = ['view-port', 'id' => $model->id];
                                                return Html::a('<span class="fa fa-eye"></span>', $url, [
                                                    'title' => 'View',
                                                    'data-toggle' => 'tooltip', 'data-original-title' => 'Save',
                                                    'class' => 'btn btn-primary',

                                                ]);


                                            },
                                            'update' => function ($url, $model) {
                                                $url = ['update-port', 'id' => $model->id];
                                                return Html::a('<span class="fa fa-pencil"></span>', $url, [
                                                    'title' => 'Edit',
                                                    'data-toggle' => 'tooltip', 'data-original-title' => 'Save',
                                                    'class' => 'btn btn-info',

                                                ]);


                                            },

                                            'delete' => function ($url, $model) {
                                                $url = ['delete-port', 'id' => $model->id];
                                                return Html::a('<span class="fa fa-remove"></span>', $url, [
                                                    'title' => 'Delete',
                                                    'data' => [
                                                        'confirm' => 'Are you sure you want to delete this item?',
                                                        'method' => 'post',
                                                    ],
                                                    'data-toggle' => 'tooltip', 'data-original-title' => 'Save',
                                                    'class' => 'btn btn-danger',


                                                ]);


                                            },


                                        ]
                                    ],

                                ],
                                'clientOptions' => [
                                    "lengthMenu" => [[20, -1], [20, Yii::t('app', "All")]],
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
                            <?php \yii\widgets\Pjax::end(); ?>
                        </div>

                    </div>
                </div>
            </div>

        </ul>
    </div>
</div>
