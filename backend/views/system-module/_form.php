<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SystemModule */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="system-module-form" style="padding-top: 3%">
    <center>
        <h3>
            <i class="fa fa-ban text-default">
                <strong>SYSTEM MODULE FORM</strong>
            </i>
        </h3>
    </center>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true, 'placeholder'=>'Enter system module name']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        <?= Html::a('<i class="fa fa-backward"> go Back</i>', ['index', ], ['class' => 'btn btn-warning']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
