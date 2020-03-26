<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BorderPortUserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '';
$this->params['breadcrumbs'][] = 'Border Port Users';
?>
<div class="border-port-user-index" style="padding-top: 3%">

    <div class="row">
        <div class="col-md-6">
            <strong class="lead" style="color: #01214d;font-family: Tahoma">
                <i class="fa fa-check-square text-green"></i> RAHNTECH
                COMPANY LTD - User Allocated List
            </strong>
        </div>

        <div class="col-md-6">
            <?php if (Yii::$app->user->can('admin') || Yii::$app->user->can('addUserAllocated')) { ?>
                <?= Html::a(Yii::t('app', '<i class="fa fa-map-marker"></i> Add New'), ['create'], ['class' => 'btn btn-primary waves-effect waves-light']) ?>
            <?php } ?>

        </div>
    </div>

    <p style="padding-top: 2%"/>

    <?= \fedemotta\datatables\DataTables::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //  'id',
            [
                'attribute' => 'border_port',
                'value' => 'borderPort.name',
            ],


            [
                'attribute' => 'name',
                'value' => 'userAssigned.username',
            ],
            'assigned_date',
            [
                'attribute' => 'assigned_by',
                'value' => 'userAssignedBy.username',
            ],

            [
               // 'visible' => Yii::$app->user->can('admin') || Yii::$app->user->can('addBorder'),
                'class' => 'yii\grid\ActionColumn'
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
