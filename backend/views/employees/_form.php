<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Employees */
/* @var $form yii\widgets\ActiveForm */
?>
<?php $form = ActiveForm::begin(); ?>

    <div class="panel panel-primary">

        <div class="panel-body">
            <div class="panel-heading">
                <?= Yii::t('app', '.'); ?>
            </div>
            <div class="col-sm-8">
                <?= $form->field($model, 'name')->textInput(['maxlength' => true, 'placeholder' => 'Full name']) ?>
            </div>
            <div class="col-sm-4">
                <?= $form->field($model, 'employee_image')->fileInput() ?>
            </div>
            <div class="col-sm-12">
                <?= $form->field($model, 'mobile')->textInput(['maxlength' => true, 'placeholder' => 'Phone number']) ?>
            </div>
            <div class="col-sm-12">
                <?= $form->field($model, 'address')->textInput(['maxlength' => true, 'placeholder' => 'Address']) ?>
            </div>
            <?php
            if ($model->isNewRecord) {
                ?>
                <div class="col-sm-12">
                    <?= $form->field($user, 'username')->textInput(['autofocus' => true, 'placeholder' => 'Username']) ?>
                </div>
                <div class="col-sm-12">
                    <?= $form->field($user, 'email')->textInput(['autofocus' => true, 'placeholder' => 'E-mail']) ?>
                </div>
                <div class="col-sm-6">
                    <?= $form->field($user, 'password')->passwordInput(['autofocus' => true, 'placeholder' => 'Password']) ?>
                </div>
                <div class="col-sm-6">
                    <?= $form->field($user, 'repassword')->passwordInput(['autofocus' => true, 'placeholder' => 'Confirm Password']) ?>
                </div>
                <div class="col-sm-6">
                    <?= $form->field($user, 'role')->dropDownList(\backend\models\User::getRules(), ['prompt' => '-- select User Roles --']) ?>
                </div>
                <div class="col-sm-6">
                    <?= $form->field($user, 'user_type')->dropDownList(\backend\models\User::getUserType(), ['prompt' => '-- select User Type --']) ?>
                </div>
                <div class="col-sm-12">
                    <?= $form->field($user, 'status')->dropDownList(\backend\models\User::getStatus(), ['prompt' => '-- choose Status --']) ?>
                </div>

                <?php
            }
            ?>

            <div class="row">
                <div class="form-group">
                    <div class="col-md-3 col-sm-3 col-xs-3 pull-right" style="padding-right: 1%x">
                        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Submit') : Yii::t('app', 'Submit'), ['class' => $model->isNewRecord ? 'btn btn-success btn-block' : 'btn btn-primary btn-block']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>

