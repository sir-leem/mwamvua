<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ReceivedDevicesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Received Devices');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="awaiting-receive-index">
    <?php \yii\widgets\Pjax::begin(); ?>
    <div class="nav-tabs-custom">
        <div style="text-align: center;">
            <h3>
                <i class="fa fa-home text-default">
                    <strong>Technical Department</strong>
                </i>
            </h3>
        </div>
    </div>

    <?php \yii\widgets\Pjax::begin(); ?>
    <!-- Custom Tabs -->
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
            <?php \yii\widgets\Pjax::begin(); ?>
            <!-- Custom Tabs -->

            <ul class="nav nav-tabs">

                <li class="active">
                    <a href="#tab_received_devices" data-toggle="tab" class="fa fa-info-circle"><b> Received Devices</b></a>
                </li>
                <li>
                    <a href="#tab_available_devices" data-toggle="tab" class="fa fa-info-circle"><b> Available Devices</b></a>
                </li>
                <li>
                    <a href="#tab_released_devices" data-toggle="tab" class="fa fa-info-circle"><b> Released Devices</b></a>
                </li>
                <li>
                    <a href="#tab_in_transit_devices" data-toggle="tab" class="fa fa-recycle"><b> In transit Devices</b></a>
                </li>
                <li>
                    <a href="#tab_on_road_devices" data-toggle="tab" class="fa fa-info-circle"><b> On Road Devices</b></a>
                </li>
                <li>
                    <a href="#tab_fault_devices" data-toggle="tab" class="fa fa-info-circle"><b> Fault Devices</b></a>
                </li>
                <li>
                    <a href="#tab_damage_devices" data-toggle="tab" class="fa fa-info-circle"><b> Damage Devices</b></a>
                </li>

            </ul>

            <div class="tab-content">
                <div class="box-body table-responsive">
                    <div class="tab-content" style="padding-top: 2%">

                        <div class="tab-pane active" id="tab_received_devices">
                            <div class="col-md-6">
                                <strong class="lead" style="color: #01214d;font-family: Tahoma"> <i
                                            class="fa fa-database"></i> RAHNTECH
                                    COMPANY LTD - Received Devices </strong>
                            </div>
                            <div class="col-md-2">

                            </div>

                            <p style="padding-top: 2%"/>

                            <?php \yii\widgets\Pjax::begin(); ?>
                            <?php
                            $searchModel = new \backend\models\ReceivedDevicesSearch();
                            $dataProvider = $searchModel->search(Yii::$app->request->queryParams) ;
                            ?>
                            <?= $this->render('_searchReceivedDevices', ['model' => $searchModel]); ?>


                            <center style="padding-top: 20px">
                                <?php if (Yii::$app->user->can('receiveDevices')) { ?>
                                    <?= Html::beginForm(['received-devices/store'], 'post'); ?>
                                    <?= Html::dropDownList('action', '', ['' => 'Select Option: ', '1' => 'AVAILABLE ', '2' => 'IN TRANSIT', '3' => 'ICT DEPT'], ['class' => 'dropdown',]) ?>
                                    <?= Html::submitButton('Allocated Serials',
                                        ['class' => 'btn btn-warning',
                                            'data' => [
                                                'confirm' => Yii::t('app', 'Are you sure you want to Transfer ?'),
                                                'method' => 'post',
                                            ],]); ?>
                                <?php } ?>
                            </center>
                            <p style="padding-bottom: 2%"/>

                            <?php
                            $pdfHeader = [
                                'L' => [
                                    'content' => 'WEB SALES',
                                ],
                                'C' => [
                                    'content' => 'WEB SALES ' . date('m'),
                                    'font-size' => 10,
                                    'font-style' => 'B',
                                    'font-family' => 'arial',
                                    'color' => '#333333'
                                ],
                                'R' => [
                                    'content' => 'Sales:' . date('Y-m-d H:i:s'),
                                ],
                                'line' => true,
                            ];

                            $pdfFooter = [
                                'L' => [
                                    'content' => '&copy; WEB TECHNOLOGIES',
                                    'font-size' => 10,
                                    'color' => '#333333',
                                    'font-family' => 'arial',
                                ],
                                'C' => [
                                    'content' => '',
                                ],
                                'R' => [
                                    //'content' => 'RIGHT CONTENT (FOOTER)',
                                    'font-size' => 10,
                                    'color' => '#333333',
                                    'font-family' => 'arial',
                                ],
                                'line' => true,
                            ];
                            ?>

                            <?php

                            $gridColumns = [
                                [
                                    'class' => 'kartik\grid\SerialColumn',
                                    'contentOptions' => ['class' => 'kartik-sheet-style'],
                                    'width' => '36px',
                                    'headerOptions' => ['class' => 'kartik-sheet-style']
                                ],
                                [
                                    'class' => 'kartik\grid\CheckboxColumn',
                                ],

                                [
                                    'attribute' => 'serial_no',

                                ],
                                [
                                    'attribute' => 'border_port',
                                    'value' => 'borderPort.name',
                                ],
                                [
                                    'attribute' => 'received_from',
                                    'value' => function ($model) {
                                        if ($model->received_from != 0) {
                                            return $model->location->location_name;
                                        } else {
                                            return "REVERSED";
                                        }
                                    },
                                ],
                                [
                                    'attribute' => 'received_at',
                                ],
                                [
                                    'attribute' => 'received_by',
                                    'value' => 'receivedBy.username',
                                ],
                                [
                                    'attribute' => 'remark',
                                ],

                            ];


                            echo \kartik\grid\GridView::widget([
                                'dataProvider' => $dataProvider,
                                //'filterModel' => $searchModel,
                                'columns' => $gridColumns,
                                'id' => 'grid',
                                'containerOptions' => ['style' => 'overflow: auto'], // only set when $responsive = false
                                'beforeHeader' => [
                                    [
                                        'options' => ['class' => 'skip-export'] // remove this row from export
                                    ]
                                ],

                                'pjax' => true,
                                'bordered' => true,
                                'striped' => true,
                                'condensed' => true,
                                'responsive' => true,
                                'hover' => true,
                                //   'floatHeader' => true,

                                //   'floatHeaderOptions' => ['scrollingTop' => true],
                                'showPageSummary' => true,
                                'panel' => [
                                    'type' => GridView::TYPE_WARNING,
                                    'heading' => 'List of products serial numbers',

                                    //'before' =>  Html::a(Yii::t('app','New Devices', '<i class="fa fa-plus"></i>'),  ['create'], ['class' => 'btn btn-primary', 'data-toggle' => "tooltip", 'rel' => "tooltip", 'title' => "Add DEVICE",]),

                                ],
                                'rowOptions' => function ($model) {
                                    return ['data-id' => $model->id];
                                },
                                'exportConfig' => [
                                    GridView::EXCEL => [
                                        'filename' => Yii::t('app', 'sales report-') . date('Y-m-d'),
                                        'showPageSummary' => true,
                                        'options' => [
                                            'title' => 'Custom Title',
                                            'subject' => 'PDF export',
                                            'keywords' => 'pdf'
                                        ],

                                    ],

                                ],

                            ]);

                            ?>

                            <?php \yii\widgets\Pjax::End(); ?>
                        </div>

                        <div class="tab-pane" id="tab_available_devices">
                            <div class="col-md-6">
                                <strong class="lead" style="color: #01214d;font-family: Tahoma"> <i
                                            class="fa fa-database"></i> RAHNTECH
                                    COMPANY LTD - Available Devices </strong>
                            </div>
                            <div class="col-md-2">

                            </div>

                            <p style="padding-top: 2%"/>

                            <?php \yii\widgets\Pjax::begin(); ?>
                            <?php
                            $searchModel = new \backend\models\StockDevicesSearch();
                            $dataProvider = $searchModel->search(Yii::$app->request->queryParams) ;
                            ?>
                            <?= $this->render('_searchAvailableDevices', ['model' => $searchModel]); ?>
                            <?php
                            $catList = \backend\models\User::getPortUser();
                            ?>

                            <?php if (Yii::$app->user->can('releaseDevices')) { ?>
                                <?= Html::beginForm(['stock-devices/allocated'], 'post'); ?>
                                <?= Html::dropDownList("action", "", ArrayHelper::map(\backend\models\User::find()->where(['user_type' => \backend\models\User::PORT_STAFF])->all(), 'id', 'username'), ['prompt' => '--- Sales Person ---']); ?>
                                <?= Html::dropDownList("points", "", ArrayHelper::map(\backend\models\BorderPort::find()->where(['location' => 2])->all(), 'id', 'name'), ['prompt' => '--- Sales Point ---']); ?>

                                <?= Html::submitButton('Release Devices',
                                    ['class' => 'btn btn-warning',
                                        'data' => [
                                            'confirm' => Yii::t('app', 'Are you sure you want to Release Devices ?'),
                                            'method' => 'post',
                                        ],]); ?>
                            <?php } ?>
                            <?php if (Yii::$app->user->can('reverseDevices')) { ?>
                                <?= Html::a(Yii::t('app', '<i class="fa fa-rotate-left"></i> Reverse'), ['stock-devices/available-reversed', ], [
                                    'class' => 'btn btn-danger',
                                    'data' => [
                                        'confirm' => Yii::t('app', 'Are you sure you want to reverse all selected serial number?'),
                                        'method' => 'post',
                                    ],
                                ]) ?>
                            <?php } ?>
                            </center>
                            <p style="padding-bottom: 2%"/>

                            <?php
                            $pdfHeader = [
                                'L' => [
                                    'content' => 'WEB SALES',
                                ],
                                'C' => [
                                    'content' => 'WEB SALES ' . date('m'),
                                    'font-size' => 10,
                                    'font-style' => 'B',
                                    'font-family' => 'arial',
                                    'color' => '#333333'
                                ],
                                'R' => [
                                    'content' => 'Sales:' . date('Y-m-d H:i:s'),
                                ],
                                'line' => true,
                            ];

                            $pdfFooter = [
                                'L' => [
                                    'content' => '&copy; WEB TECHNOLOGIES',
                                    'font-size' => 10,
                                    'color' => '#333333',
                                    'font-family' => 'arial',
                                ],
                                'C' => [
                                    'content' => '',
                                ],
                                'R' => [
                                    //'content' => 'RIGHT CONTENT (FOOTER)',
                                    'font-size' => 10,
                                    'color' => '#333333',
                                    'font-family' => 'arial',
                                ],
                                'line' => true,
                            ];
                            ?>

                            <?php

                            $gridColumns = [
                                [
                                    'class' => 'kartik\grid\SerialColumn',
                                    'contentOptions' => ['class' => 'kartik-sheet-style'],
                                    'width' => '36px',
                                    'headerOptions' => ['class' => 'kartik-sheet-style']
                                ],
                                [
                                    'class' => 'kartik\grid\CheckboxColumn',
                                ],

                                'serial_no',
                                [
                                    'attribute' => 'created_by',
                                    'value' => 'createdBy.username',
                                ],
                                [
                                    'attribute' => 'location_from',
                                    'value' => 'borderPort.name',
                                ],
                                'created_at',
                                [
                                    'attribute' => 'status',
                                    'value' => function ($model) {
                                        if ($model->status == \backend\models\StockDevices::not_deactivated) {
                                            return "NOT DEACTIVATED";
                                        } elseif ($model->status == \backend\models\StockDevices::available) {
                                            return "AVAILABLE";
                                        }
                                    }
                                ],
                            ];

                            // the GridView widget (you must use kartik\grid\GridView)
                            echo \kartik\grid\GridView::widget([
                                'dataProvider' => $dataProvider,
                                // 'filterModel' => $searchModel,
                                'columns' => $gridColumns,
                                'id' => 'grid',
                                'containerOptions' => ['style' => 'overflow: auto'], // only set when $responsive = false
                                'beforeHeader' => [
                                    [
                                        'options' => ['class' => 'skip-export'] // remove this row from export
                                    ]
                                ],

                                'pjax' => true,
                                'bordered' => true,
                                'striped' => true,
                                'condensed' => true,
                                'responsive' => true,
                                'hover' => true,
                                //   'floatHeader' => true,

                                //   'floatHeaderOptions' => ['scrollingTop' => true],
                                'showPageSummary' => true,
                                'panel' => [
                                    'type' => GridView::TYPE_INFO,
                                    'heading' => 'Custom report for sales transactions',
                                    'before' => '<span class ="text text-orange"></span>'
                                ],
                                'rowOptions' => function ($model) {
                                    return ['data-id' => $model->id];
                                },
                                'exportConfig' => [
                                    GridView::EXCEL => [
                                        'filename' => Yii::t('app', 'sales report-') . date('Y-m-d'),
                                        'showPageSummary' => true,
                                        'options' => [
                                            'title' => 'Custom Title',
                                            'subject' => 'PDF export',
                                            'keywords' => 'pdf'
                                        ],

                                    ],

                                ],

                            ]); ?>

                            <?php \yii\widgets\Pjax::End(); ?>
                        </div>

                        <div class="tab-pane" id="tab_released_devices">
                            <div class="col-md-6">
                                <strong class="lead" style="color: #01214d;font-family: Tahoma"> <i
                                            class="fa fa-database"></i> RAHNTECH
                                    COMPANY LTD - Released Devices </strong>
                            </div>
                            <div class="col-md-2">

                            </div>
                            <p style="padding-top: 2%"/>

                            <?php \yii\widgets\Pjax::begin(); ?>
                            <?php
                            $searchModel = new \backend\models\ReleasedDevicesSearch();
                            $dataProvider = $searchModel->search(Yii::$app->request->queryParams) ;
                            ?>
                            <?php
                            $pdfHeader = [
                                'L' => [
                                    'content' => 'WEB SALES',
                                ],
                                'C' => [
                                    'content' => 'WEB SALES ' . date('m'),
                                    'font-size' => 10,
                                    'font-style' => 'B',
                                    'font-family' => 'arial',
                                    'color' => '#333333'
                                ],
                                'R' => [
                                    'content' => 'Sales:' . date('Y-m-d H:i:s'),
                                ],
                                'line' => true,
                            ];

                            $pdfFooter = [
                                'L' => [
                                    'content' => '&copy; WEB TECHNOLOGIES',
                                    'font-size' => 10,
                                    'color' => '#333333',
                                    'font-family' => 'arial',
                                ],
                                'C' => [
                                    'content' => '',
                                ],
                                'R' => [
                                    //'content' => 'RIGHT CONTENT (FOOTER)',
                                    'font-size' => 10,
                                    'color' => '#333333',
                                    'font-family' => 'arial',
                                ],
                                'line' => true,
                            ];
                            ?>

                            <?php

                            $gridColumns = [
                                [
                                    'class' => 'kartik\grid\SerialColumn',
                                    'contentOptions' => ['class' => 'kartik-sheet-style'],
                                    'width' => '36px',
                                    'headerOptions' => ['class' => 'kartik-sheet-style']
                                ],
                                [
                                    'class' => 'kartik\grid\CheckboxColumn',
                                ],
                                'serial_no',
                                'released_date',
                                [
                                    'attribute' => 'released_by',
                                    'value'=>'released0.username'
                                ],
                                [
                                    'attribute' => 'released_to',
                                    'value'=>'releasedTo0.username'
                                ],
                                [
                                    'attribute' => 'sales_point',
                                    'value' => 'borderPort.name',
                                ],
                                [
                                    'attribute' => 'transferred_from',
                                    'value'=>'transferred0.username'
                                ],
                                [
                                    'attribute' => 'transferred_to',
                                    'value'=>'transferredTo0.username'
                                ],
                                [
                                    'attribute' => 'transferred_by',
                                    'value'=>'transferredBy.username'
                                ],

                                'transferred_date',
                                [
                                    'attribute'=>'status',
                                    'value'=>function($model){
                                        if($model->status == \backend\models\ReleasedDevices::RELEASED){
                                            return "RELEASED";
                                        }
                                        elseif($model->status == \backend\models\ReleasedDevices::TRANSFERRED){
                                            return "TRANSFERRED";
                                        }
                                    }
                                ],

                            ];


                            echo \kartik\grid\GridView::widget([
                                'dataProvider' => $dataProvider,
                                //  'filterModel' => $searchModel,
                                'columns' => $gridColumns,
                                'id' => 'grid',
                                'containerOptions' => ['style' => 'overflow: auto'], // only set when $responsive = false
                                'beforeHeader' => [
                                    [
                                        'options' => ['class' => 'skip-export'] // remove this row from export
                                    ]
                                ],

                                'pjax' => true,
                                'bordered' => true,
                                'striped' => true,
                                'condensed' => true,
                                'responsive' => true,
                                'hover' => true,
                                //   'floatHeader' => true,

                                //   'floatHeaderOptions' => ['scrollingTop' => true],
                                'showPageSummary' => true,
                                'panel' => [
                                    'type' => GridView::TYPE_INFO,
                                    'heading' => 'List of products serial numbers',
                                    // 'before' =>  Html::a(Yii::t('app','Transfer Devices', '<i class="fa fa-plus"></i>'),  ['create'], ['class' => 'btn btn-primary', 'data-toggle' => "tooltip", 'rel' => "tooltip", 'title' => "Add DEVICE",]),

                                ],
                                'rowOptions' => function ($model) {
                                    return ['data-id' => $model->id];
                                },
                                'exportConfig' => [
                                    GridView::EXCEL => [
                                        'filename' => Yii::t('app', 'sales report-') . date('Y-m-d'),
                                        'showPageSummary' => true,
                                        'options' => [
                                            'title' => 'Custom Title',
                                            'subject' => 'PDF export',
                                            'keywords' => 'pdf'
                                        ],

                                    ],

                                ],

                            ]);

                            ?>

                            <?php \yii\widgets\Pjax::End(); ?>

                        </div>

                    </div>
                </div>
            </div>
        </ul>
    </div>
    <?php \yii\widgets\Pjax::End(); ?>
    <?php \yii\widgets\Pjax::End(); ?>
</div>
