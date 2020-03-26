<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SalesTripsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sales-trips-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>



    <?= $form->field($model, 'sale_date') ?>

    <?= $form->field($model, 'tzl') ?>

    <?= $form->field($model, 'start_date_time') ?>

    <?= $form->field($model, 'vehicle_number') ?>

    <?php // echo $form->field($model, 'chasis_number') ?>

    <?php // echo $form->field($model, 'driver_name') ?>

    <?php // echo $form->field($model, 'border_id') ?>

    <?php // echo $form->field($model, 'trip_status') ?>

    <?php // echo $form->field($model, 'driver_number') ?>

    <?php // echo $form->field($model, 'serial_no') ?>

    <?php // echo $form->field($model, 'amount') ?>

    <?php // echo $form->field($model, 'currency') ?>

    <?php // echo $form->field($model, 'gate_number') ?>

    <?php // echo $form->field($model, 'end_date') ?>

    <?php // echo $form->field($model, 'sales_person') ?>

    <?php // echo $form->field($model, 'receipt_number') ?>

    <?php // echo $form->field($model, 'passport') ?>

    <?php // echo $form->field($model, 'container_number') ?>

    <?php // echo $form->field($model, 'vehicle_type_id') ?>

    <?php // echo $form->field($model, 'customer_type_id') ?>

    <?php // echo $form->field($model, 'customer_id') ?>

    <?php // echo $form->field($model, 'company_name') ?>

    <?php // echo $form->field($model, 'customer_name') ?>

    <?php // echo $form->field($model, 'agent') ?>

    <?php // echo $form->field($model, 'cancelled_by') ?>

    <?php // echo $form->field($model, 'edited_by') ?>

    <?php // echo $form->field($model, 'edited_at') ?>

    <?php // echo $form->field($model, 'date_cancelled') ?>

    <?php // echo $form->field($model, 'sale_type') ?>

    <?php // echo $form->field($model, 'sale_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
