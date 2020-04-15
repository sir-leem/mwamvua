<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;

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
                            $dataProvider = $searchModel->searchClean(Yii::$app->request->queryParams) ;
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

                    </div>
                </div>
            </div>
        </ul>
    </div>
    <?php \yii\widgets\Pjax::End(); ?>
    <?php \yii\widgets\Pjax::End(); ?>
</div>
