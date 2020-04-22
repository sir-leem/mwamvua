<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AutomationSettings */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="automation-settings-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="col-sm-12 no-padding">
        <div class="col-sm-12">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true, 'placeholder'=>'Enter name']) ?>
        </div>
        <div class="col-sm-6">
            <?= $form->field($model, 'code')->textInput(['maxlength' => true,'readOnly'=>true]) ?>
        </div>
        <div class="col-sm-6">
            <?= $form->field($model, 'hours')->textInput(['placeholder'=>'Enter hours']) ?>
        </div>
        <div class="row" style="margin-bottom: 10px; padding-right: 1%">
            <div class="form-group">
                <div class="col-md-3 col-sm-3 col-xs-3 pull-right">
                    <?= Html::submitButton($model->isNewRecord ? Yii::t('app', '<i class="fa fa-arrow-right"></i> Next') : Yii::t('app', 'Next'), ['class' => $model->isNewRecord ? 'btn btn-success btn-block' : 'btn btn-primary btn-block']) ?>
                </div>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
