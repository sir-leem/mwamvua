<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ReportSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '';
$this->params['breadcrumbs'][] = 'Reports';
?>
<div class="report-index table-responsive">

        <div class="nav-tabs-custom">
            <div style="text-align: center;">
                <h3>
                    <i class="fa fa-bar-chart text-default">
                        <strong>REPORTS</strong>
                    </i>
                </h3>
            </div>
            <ul class="nav nav-tabs">

                <?php \yii\widgets\Pjax::begin(); ?>

                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab_awaiting_receive_report_id" data-toggle="tab" class="fa fa-database"><b> Awaiting Receive</b></a></li>
                    <li><a href="#tab_company_id" data-toggle="tab" class="fa fa-info-circle"><b> Received</b></a></li>
                    <li><a href="#tab_released_id" data-toggle="tab" class="fa fa-recycle"><b> Released</b></a></li>
                    <li><a href="#tab_company_id" data-toggle="tab" class="fa fa-recycle"><b> Available</b></a></li>
                    <li><a href="#tab_company_id" data-toggle="tab" class="fa fa-money"><b> Sales Trip</b></a></li>
                    <li><a href="#tab_company_id" data-toggle="tab" class="fa fa-location-arrow"><b> On Road</b></a></li>
                    <li><a href="#tab_company_id" data-toggle="tab" class="fa fa-external-link-square"><b> Trip per Device</b></a></li>
                    <li><a href="#tab_company_id" data-toggle="tab" class="fa fa-check-square"><b> Fault</b></a></li>

                </ul>
                <div class="tab-content">
                    <div class="box-body table-responsive">
                        <div class="tab-content" style="padding-top: 2%">
                            <div class="tab-pane active" id="tab_awaiting_receive_report_id">

                                <?php \yii\widgets\Pjax::begin(); ?>
                                <?php
                                $searchModel = new \backend\models\AwaitingReceiveReportSearch();
                                $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
                                ?>
                                <?php echo $this->render('_search', ['model' => $searchModel]); ?>
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


                                    'received_from',
                                    'border_port',
                                    'received_from_staff',
                                    'received_at',
                                    'received_status',
                                    'remark:ntext',
                                    'received_by',

                                 /*   [
                                        'attribute'=>'border_port',
                                        'value'=>'borderPort.name',
                                    ],
                                    [
                                        'attribute' => 'received_from',
                                        'value' => 'location.location_name',
                                    ],
                                    [
                                        'attribute' => 'received_at',
                                    ],

                                    [
                                        'attribute'=>'received_by',
                                        'value'=>'receivedBy.username',
                                        'label'=>'Sent By'
                                    ],
                                    [
                                        'attribute' => 'remark',
                                    ],*/

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

                            </div>
                        </div>
                    </div>
                </div>
            </ul>
        </div>
    </div>
</div>
