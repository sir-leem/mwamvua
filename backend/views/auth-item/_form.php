<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AuthItem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="auth-item-form">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <?= Yii::t('app', 'Permission Form'); ?>
        </div>
        <div class="panel-body">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 64]) ?>

    <?php //$form->field($model, 'type')->textInput() ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'module')->dropDownList(\backend\models\SystemModule::getAll(),['prompt' => '--Select--']) ?>

    <?php //$form->field($model, 'rule_name')->textInput(['maxlength' => 64]) ?>

    <?php // $form->field($model, 'data')->textarea(['rows' => 6]) ?>

    <?php //$form->field($model, 'created_at')->textInput() ?>

    <?php //$form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', '<i class="fa fa-backward"> go Back</i>'), ['auth-item/index'], ['class' => 'btn btn-warning', 'data-toggle' => "tooltip", 'rel' => "tooltip", 'title' => "Cancel",]) ?>
    </div>

    <?php ActiveForm::end(); ?>
            </div>
        </div>

</div>
