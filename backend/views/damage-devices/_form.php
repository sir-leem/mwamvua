<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DamageDevices */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="damage-devices-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'serial_no')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'remarks')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'view_status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
