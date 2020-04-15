<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AwaitingReceiveReportSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '';
$this->params['breadcrumbs'][] = 'Awaiting Receive Reports';
?>
<div class="report-index table-responsive">
    <?php \yii\widgets\Pjax::begin(); ?>
    <div class="nav-tabs-custom">
        <div style="text-align: center;">
            <h3>
                <i class="fa fa-bar-chart text-default">
                    <strong>REPORTS</strong>
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
                <li><a href="#tab_sales_trips_id" data-toggle="tab" class="fa fa-money"><b> Sales Trip</b></a></li>

                <li><a href="#tab_awaiting_receive_report_id" data-toggle="tab"
                                      class="fa fa-database"><b> Awaiting Receive</b></a></li>
                <li><a href="#tab_received_device_id" data-toggle="tab" class="fa fa-info-circle"><b> Received</b></a>
                </li>

                <li><a href="#tab_available_device_id" data-toggle="tab" class="fa fa-recycle"><b> Available</b></a>
                </li>
                <li><a href="#tab_released_device_id" data-toggle="tab" class="fa fa-recycle"><b> Released</b></a></li>
                <li><a href="#tab_in_transit_device_id" data-toggle="tab" class="fa fa-location-arrow"><b> On
                            Road</b></a>
                </li>
                <li><a href="#tab_trip_per_sales_id" data-toggle="tab" class="fa fa-external-link-square"><b> Trip per
                            Device</b></a></li>
                <li  class="active"><a href="#tab_fault_devices_id" data-toggle="tab" class="fa fa-check-square"><b> Fault Devices</b></a></li>
                <li><a href="#tab_damage_devices_id" data-toggle="tab" class="fa fa-check-square"><b> Damage Devices</b></a></li>
            </ul>
            <div class="tab-content">
                <div class="box-body table-responsive">
                    <div class="tab-content" style="padding-top: 2%">

                        <div class="tab-pane" id="tab_awaiting_receive_report_id">
                            <div class="col-md-6">
                                <strong class="lead" style="color: #01214d;font-family: Tahoma"> <i
                                            class="fa fa-database"></i> RAHNTECH
                                    COMPANY LTD - Awaiting Receive Device Report </strong>
                            </div>
                            <div class="col-md-2">

                            </div>

                            <p style="padding-top: 2%"/>

                            <?php \yii\widgets\Pjax::begin(); ?>
                            <?php
                            $searchModel = new \backend\models\AwaitingReceiveReportSearch();
                            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
                            ?>
                            <?php echo $this->render('_searchAwaitingReceivedDevicesReport', ['model' => $searchModel]); ?>
                            <?php
                            $pdfHeader = [
                                'L' => [
                                    'content' => 'RAHNTECH SALES',
                                ],
                                'C' => [
                                    'content' => 'RAHNTECH SALES ' . date('m'),
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
                                    'content' => '&copy; RAHNTECH COMPANY LTD',
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
                                    'attribute' => 'serial_no',

                                ],

                                [
                                    'attribute' => 'border_port',
                                    'value' => 'borderPort.name',
                                ],
                                [
                                    'attribute' => 'received_from',
                                    'value' => 'location.location_name',
                                ],
                                [
                                    'attribute' => 'received_at',
                                ],

                                [
                                    'attribute' => 'received_by',
                                    'value' => 'receivedBy.username',
                                    'label' => 'Sent By'
                                ],
                                [
                                    'attribute' => 'remark',
                                ],

                            ];


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
                                    'type' => GridView::TYPE_SUCCESS,
                                    'heading' => 'LIST OF RECEIVED DEVICES',

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

                        <div class="tab-pane" id="tab_received_device_id">
                            <div class="col-md-6" style="padding-bottom: 1%">
                                <strong class="lead" style="color: #01214d;font-family: Tahoma"> <i
                                            class="fa fa-recycle"></i> RAHNTECH
                                    COMPANY LTD - Received Devices Report</strong>
                            </div>
                            <div class="col-md-2">
                            </div>
                            <p style="padding-top: 2%"/>
                            <?php \yii\widgets\Pjax::begin(); ?>
                            <?php
                            $searchModel = new \backend\models\ReceivedDevicesReportSearch();
                            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
                            ?>
                            <?php echo $this->render('_searchReceivedReport', ['model' => $searchModel]); ?>
                            <?php
                            $pdfHeader = [
                                'L' => [
                                    'content' => 'RAHNTECH SALES',
                                ],
                                'C' => [
                                    'content' => 'RAHNTECH SALES ' . date('m'),
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
                                    'content' => '&copy; RAHNTECH COMPANY LTD',
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
                                            return "REVRESED";
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
                                    'type' => GridView::TYPE_WARNING,
                                    'heading' => 'LIST OF RECEIVED DEVICES',

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

                            <?php \yii\widgets\Pjax::end(); ?>
                        </div>

                        <div class="tab-pane" id="tab_available_device_id">
                            <div class="col-md-6" style="padding-bottom: 1%">
                                <strong class="lead" style="color: #01214d;font-family: Tahoma"> <i class="fa fa-recycle"></i> RAHNTECH
                                    COMPANY LTD -  Stock Available Devices Report</strong>
                            </div>
                            <div class="col-md-2">
                            </div>
                            <p style="padding-top: 2%"/>
                            <?php \yii\widgets\Pjax::begin(); ?>
                            <?php
                            $searchModel = new \backend\models\StockDevicesReportSearch();
                            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
                            ?>
                            <?= $this->render('_searchAvailableDeviceReport', ['model' => $searchModel]); ?>
                            <?php
                            $pdfHeader = [
                                'L' => [
                                    'content' => 'RAHNTECH SALES',
                                ],
                                'C' => [
                                    'content' => 'RAHNTECH SALES ' . date('m'),
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
                                    'content' => '&copy; RAHNTECH COMPANY LTD',
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

                                'serial_no',


                                'created_at',
                                [
                                    'attribute'=>'created_by',
                                    'value'=>'createdBy.username',
                                ],

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
                                    'heading' => 'LIST OF AVAILABLE DEVICES',

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

                            <?php \yii\widgets\Pjax::end(); ?>
                        </div>

                        <div class="tab-pane" id="tab_released_device_id">
                            <div class="col-md-6" style="padding-bottom: 1%">
                                <strong class="lead" style="color: #01214d;font-family: Tahoma"> <i
                                            class="fa fa-recycle"></i> RAHNTECH
                                    COMPANY LTD - Released Devices Report</strong>
                            </div>
                            <div class="col-md-2">
                            </div>
                            <p style="padding-top: 2%"/>
                            <?php \yii\widgets\Pjax::begin(); ?>
                            <?php
                            $searchModel = new \backend\models\ReleasedDevicesReportSearch();
                            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
                            ?>
                            <?php echo $this->render('_searchReleasedReport', ['model' => $searchModel]); ?>
                            <?php
                            $pdfHeader = [
                                'L' => [
                                    'content' => 'RAHNTECH SALES',
                                ],
                                'C' => [
                                    'content' => 'RAHNTECH SALES ' . date('m'),
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
                                    'content' => '&copy; RAHNTECH COMPANY LTD',
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

                                'serial_no',
                                'released_date',

                                [
                                    'attribute' => 'released_by',
                                    'value' => 'releasedBy.username',
                                ],
                                [
                                    'attribute' => 'released_to',
                                    'value' => 'releasedTo.username',
                                ],
                                [
                                    'attribute' => 'transferred_from',
                                    'value' => 'transferredFrom.username',
                                ],

                                [
                                    'attribute' => 'transferred_to',
                                    'value' => 'transferredTo.username',
                                ],

                                'transferred_date',
                                [
                                    'attribute' => 'status',
                                    'value' => function ($model) {
                                        if ($model->status == \backend\models\ReleasedDevices::RELEASED) {
                                            return "RELEASED";
                                        } elseif ($model->status == \backend\models\ReleasedDevices::TRANSFERRED) {
                                            return "TRANSFERRED";
                                        }
                                    }
                                ],

                            ];


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
                                    'type' => GridView::TYPE_WARNING,
                                    'heading' => 'LIST OF RELEASED DEVICES',

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

                            <?php \yii\widgets\Pjax::end(); ?>
                        </div>

                        <div class="tab-pane" id="tab_in_transit_device_id">
                            <div class="col-md-6" style="padding-bottom: 1%">
                                <strong class="lead" style="color: #01214d;font-family: Tahoma"> <i
                                            class="fa fa-location-arrow"></i> RAHNTECH
                                    COMPANY LTD - On Road Report</strong>
                            </div>
                            <div class="col-md-2">
                            </div>
                            <p style="padding-top: 2%"/>
                            <?php \yii\widgets\Pjax::begin(); ?>
                            <?php
                            $searchModel = new \backend\models\InTransitReportSearch();
                            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
                            ?>
                            <?php echo $this->render('_searchOnRoadReport', ['model' => $searchModel]); ?>
                            <?php
                            $pdfHeader = [
                                'L' => [
                                    'content' => 'RAHNTECH SALES',
                                ],
                                'C' => [
                                    'content' => 'RAHNTECH SALES ' . date('m'),
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
                                    'content' => '&copy; RAHNTECH COMPANY LTD',
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

                                'serial_no',
                                'tzl',

                                [
                                    'attribute' => 'border',
                                    'value' => 'borderPort.name',
                                ],
                                [
                                    'attribute' => 'sales_person',
                                    'value' => 'salesPerson.username',
                                ],
                                'created_at',
                                [
                                    'attribute' => 'created_by',
                                    'value' => 'createdBy.username',
                                ],
                                'vehicle_no',
                                'container_number',
                            ];


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
                                    'heading' => 'LIST OF ON ROAD DEVICES',

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

                            <?php \yii\widgets\Pjax::end(); ?>
                        </div>

                        <div class="tab-pane" id="tab_sales_trips_id">
                            <div class="col-md-6" style="padding-bottom: 1%">
                                <strong class="lead" style="color: #01214d;font-family: Tahoma"> <i
                                            class="fa fa-location-arrow"></i> RAHNTECH
                                    COMPANY LTD - Sales Trip Report</strong>
                            </div>
                            <div class="col-md-2">
                            </div>
                            <p style="padding-top: 2%"/>
                            <?php \yii\widgets\Pjax::begin(); ?>
                            <?php
                            $searchModel = new \backend\models\SalesTripsSearch();
                            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
                            ?>
                            <?php echo $this->render('_searchSalesTripReport', ['model' => $searchModel]); ?>
                            <?php
                            $pdfHeader = [
                                'L' => [
                                    'content' => 'RAHNTECH SALES',
                                ],
                                'C' => [
                                    'content' => 'RAHNTECH SALES ' . date('m'),
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
                                    'content' => '&copy; RAHNTECH COMPANY LTD',
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

                                'sale_date',

                                [
                                    'attribute' => 'tzl',
                                    'contentOptions' => ['class' => 'truncate'],
                                ],
                                'start_date_time',
                                'end_date',
                                'vehicle_number',
                                'driver_name',

                                [
                                    'attribute' => 'border_id',
                                    'value' => 'borderPort.name',
                                ],
                                /*        [
                                            'attribute' => 'trip_status',
                                            //  'value'=>'borderPort.name',
                                        ],*/
                                'driver_number',
                                'serial_no',
                                [
                                    'attribute' => 'amount',
                                    'value' => 'amount',
                                    'visible' => Yii::$app->user->can('checkAmount'),
                                ],
                                [
                                    'attribute' => 'gate_number',
                                    'value' => 'port.name',
                                ],
                                'company_name',
                                [
                                    'attribute' => 'sales_person',
                                    'value' => 'salesPerson.username',
                                ],
                                'receipt_number',
                                'passport',
                                'container_number',
                                [
                                    'attribute' => 'customer_type_id',
                                    'label' => 'Payment Method',
                                    'value' => function ($model) {
                                        if ($model->customer_type_id == 2) {

                                            return 'BILL PAYMENT';
                                        } elseif ($model->customer_type_id == 1) {
                                            return 'CASH PAYMENT';
                                        }
                                    }
                                ],
                                [
                                    'attribute' => 'customer_id',
                                    'label' => 'Bill Customer',
                                    'value' =>'customer.company_name',
                                ],
                                //  'customer_name',
                                'agent',


                                [
                                    'attribute' => 'edited_by',
                                    'value' => 'editedBy.username',
                                ],
                                'edited_at',
                                [
                                    'attribute' => 'cancelled_by',
                                    'value' => 'canceledBy.username',
                                ],
                                'date_cancelled',
                                [
                                    //'header' => ' Actions ',
                                    'format' => 'raw',
                                    'visible' => Yii::$app->user->can('deleteSalesTrip'),
                                    'value' => function ($model) {
                                        return

                                            Html::a(Yii::t('app', '<span class="glyphicon glyphicon-remove"></span>'), ['cancel', 'id' => $model->id], [
                                                'class' => 'btn btn-danger',
                                                'data' => [
                                                    'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                                                    'method' => 'post',
                                                ],
                                            ]);
                                    }
                                ],
                            ];


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
                                    'type' => GridView::TYPE_DEFAULT,
                                    'heading' => 'LIST OF SOLD DEVICES',

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

                            <?php \yii\widgets\Pjax::end(); ?>
                        </div>

                        <div class="tab-pane active" id="tab_fault_devices_id">
                            <div class="col-md-6" style="padding-bottom: 1%">
                                <strong class="lead" style="color: #01214d;font-family: Tahoma"> <i
                                            class="fa fa-check-square"></i> RAHNTECH
                                    COMPANY LTD - Fault Devices Report</strong>
                            </div>
                            <div class="col-md-2">
                            </div>
                            <p style="padding-top: 2%"/>
                            <?php \yii\widgets\Pjax::begin(); ?>
                            <?php
                            $searchModel = new \backend\models\FaultDevicesReportSearch();
                            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
                            ?>
                            <?php echo $this->render('_searchFaultDevicesReport', ['model' => $searchModel]); ?>
                            <?php
                            $pdfHeader = [
                                'L' => [
                                    'content' => 'RAHNTECH SALES',
                                ],
                                'C' => [
                                    'content' => 'RAHNTECH SALES ' . date('m'),
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
                                    'content' => '&copy; RAHNTECH COMPANY LTD',
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


                                'serial_no',

                                [
                                    'attribute' => 'created_by',
                                    'value' => 'createdBy.username',
                                ],

                                'attribute' => 'created_at',
                                [
                                    'attribute' => 'remarks',
                                    'width' => '400px',
                                    'contentOptions' => ['class' => 'truncate'],
                                ],

                                [
                                    'attribute' => 'status',
                                    'value' => function ($model) {

                                        if ($model->status == \backend\models\FaultDevicesReport::FAULT_DEVICE) {
                                            return 'FAULT';
                                        }
                                    }

                                ],
                            ];


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
                                    'type' => GridView::TYPE_WARNING,
                                    'heading' => 'LIST OF FAULT DEVICES',

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

                            <?php \yii\widgets\Pjax::end(); ?>
                        </div>

                        <div class="tab-pane" id="tab_damage_devices_id">
                            <div class="col-md-6" style="padding-bottom: 1%">
                                <strong class="lead" style="color: #01214d;font-family: Tahoma"> <i
                                            class="fa fa-check-square"></i> RAHNTECH
                                    COMPANY LTD - Damage Devices Report</strong>
                            </div>
                            <div class="col-md-2">
                            </div>
                            <p style="padding-top: 2%"/>
                            <?php \yii\widgets\Pjax::begin(); ?>
                            <?php
                            $searchModel = new \backend\models\DamageDevicesReportSearch();
                            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
                            ?>
                            <?php echo $this->render('_searchDamageDevicesReport', ['model' => $searchModel]); ?>
                            <?php
                            $pdfHeader = [
                                'L' => [
                                    'content' => 'RAHNTECH SALES',
                                ],
                                'C' => [
                                    'content' => 'RAHNTECH SALES ' . date('m'),
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
                                    'content' => '&copy; RAHNTECH COMPANY LTD',
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

                                'serial_no',

                                [
                                    'attribute' => 'created_by',
                                    'value' => 'createdBy.username',
                                ],

                                'attribute' => 'created_at',
                                [
                                    'attribute' => 'remarks',
                                    'width' => '400px',
                                    'contentOptions' => ['class' => 'truncate'],
                                ],

                                [
                                    'attribute' => 'status',
                                    'value' => function ($model) {

                                        if ($model->status == \backend\models\DamageDevicesReport::DAMAGE_DEVICE) {
                                            return 'FAULT';
                                        }
                                    }

                                ],
                            ];


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
                                    'type' => GridView::TYPE_WARNING,
                                    'heading' => 'LIST OF FAULT DEVICES',

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

                            <?php \yii\widgets\Pjax::end(); ?>
                        </div>

                        <div class="tab-pane" id="tab_trip_per_sales_id">
                            <div class="col-md-6" style="padding-bottom: 1%">
                                <strong class="lead" style="color: #01214d;font-family: Tahoma"> <i
                                            class="fa fa-money"></i> RAHNTECH
                                    COMPANY LTD - Sales Trip Per Device</strong>
                            </div>
                            <div class="col-md-2">
                            </div>
                            <p style="padding-top: 2%"/>
                            <?php \yii\widgets\Pjax::begin(); ?>
                            <?php
                            $searchModel = new \backend\models\SalesTripsSearch();
                            $dataProvider = $searchModel->searchDevice(Yii::$app->request->queryParams);
                            ?>
                            <?php echo $this->render('_searchSalesTripPerDeviceReport', ['model' => $searchModel]); ?>
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
                                ],
                                'serial_no',
                                [
                                    'attribute' => 'id',
                                    'label' => 'Total Trips',
                                    'pageSummary' => true,
                                ],

                            ];

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
                                    'heading' => 'TRIPS PER DEVICE',
                                    'before' => '<span class ="text text-orange"></span>'
                                ],
                                'rowOptions' => function ($model) {
                                    return ['data-id' => $model->id];
                                },
                                'exportConfig' => [
                                    GridView::EXCEL => [
                                        'filename' => Yii::t('app', 'Device trips-') . date('Y-m-d'),
                                        'showPageSummary' => true,
                                        'options' => [
                                            'title' => 'Custom Title',
                                            'subject' => 'PDF export',
                                            'keywords' => 'pdf'
                                        ],

                                    ],

                                ],

                            ]); ?>

                            <?php \yii\widgets\Pjax::end(); ?>
                        </div>

                    </div>
                </div>
            </div>
        </ul>
    </div>
    <?php \yii\widgets\Pjax::End(); ?>
    <?php \yii\widgets\Pjax::End(); ?>
</div>

