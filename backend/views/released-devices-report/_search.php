<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ReleasedDevicesReportSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="released-devices-report-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'serial_no') ?>

    <?= $form->field($model, 'released_date') ?>

    <?= $form->field($model, 'released_by') ?>

    <?= $form->field($model, 'released_to') ?>

    <?php // echo $form->field($model, 'sales_point') ?>

    <?php // echo $form->field($model, 'transferred_from') ?>

    <?php // echo $form->field($model, 'transferred_to') ?>

    <?php // echo $form->field($model, 'transferred_date') ?>

    <?php // echo $form->field($model, 'transferred_by') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
