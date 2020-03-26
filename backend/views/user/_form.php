<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $form = ActiveForm::begin(); ?>
<div class="user-form">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <?= Yii::t('app', 'User Form'); ?>
        </div>
        <div class="panel-body">
            <div class="col-sm-12">
                <?= $form->field($model, 'username')->textInput(['maxlength' => true, 'placeholder' => 'Username']) ?>

                <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="col-sm-6">
                <?= $form->field($model, 'password')->passwordInput(['maxlength' => true, 'placeholder' => 'Password']) ?>
            </div>
            <div class="col-sm-6">
                <?= $form->field($model, 'repassword')->passwordInput(['maxlength' => true, 'placeholder' => 'Confirm-password']) ?>
            </div>

            <div class="col-sm-3">
                <?= $form->field($model, 'role')->dropDownList(\backend\models\User::getRules(), ['prompt' => '-- select User Roles --']) ?>
            </div>
            <div class="col-sm-3">
                <?= $form->field($model, 'user_type')->dropDownList(\backend\models\User::getUserType(), ['prompt' => '-- select User Type --']) ?>
            </div>
            <div class="col-sm-6">
                <?= $form->field($model, 'status')->dropDownList(\backend\models\User::getStatus(), ['prompt' => '-- choose Status --']) ?>
            </div>


            <div class="form-group col-xs-12 col-sm-6 col-lg-4">
                <div class="col-xs-6 col-xs-12">
                    <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Save') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-block btn-success' : 'btn btn-block btn-info']) ?>
                </div>
                <div class="col-xs-6 col-xs-12">
                    <?= Html::a(Yii::t('app', 'Cancel'), ['index'], ['class' => 'btn btn-warning btn-block']) ?>
                </div>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>
