<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ReceivedDevicesReportSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="awaiting-receive-report-search">
    <?php $form = ActiveForm::begin([
        'action' => ['received-devices-report/index'],
        'method' => 'get',

    ]);
    //  $model = new \backend\models\ReceivedDevicesSearch()

    ?>
    <div class="panel panel-info" style="background: #EEE">
        <div class="panel panel-heading">
            <a data-toggle="collapse" href="#collapse2"> Data Search</a>
        </div>
        <div id="collapse2" class="panel-collapse collapse">
            <div class="panel panel-body" style="background: #EEE">
                <div class="row">

                    <div class="col-md-2">
                        <?= $form->field($model, 'serial_no')->textarea(['id' => 'serial', 'rows' => 8, 'placeholder' => 'Search serial number ']) ?>
                    </div>

                    <?= $form->field($model, 'received_from') ?>

                    <?= $form->field($model, 'border_port') ?>

                    <?= $form->field($model, 'received_from_staff') ?>

                    <?php // echo $form->field($model, 'received_at') ?>

                    <?php // echo $form->field($model, 'received_status') ?>

                    <?php // echo $form->field($model, 'remark') ?>

                    <?php // echo $form->field($model, 'received_by') ?>

                    <div class="form-group">
                        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('<i class="fa fa-backward"> go Back</i>', ['received-devices-report/index', ], ['class' => 'btn btn-default']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>

                </div>
            </div>
        </div>
    </div>
</div>