<?php

use backend\models\BorderPort;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\StockDevicesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '';
$this->params['breadcrumbs'][] = 'Stock Devices';
?>
<div class="received-devices-index" style="padding-top: 2%">


    <?php echo $this->render('_search', ['model' => $searchModel]); ?>
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
        <?= Html::a(Yii::t('app', '<i class="fa fa-rotate-left"></i> Reverse'), ['available-reversed', ], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to reverse all selected serial number?'),
                'method' => 'post',
            ],
        ]) ?>
    <?php } ?>
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
</div>