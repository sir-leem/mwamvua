<?php

use kartik\select2\Select2;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\BorderPortUser */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="border-port-user-form">
    <p style="padding-top: 40px"/>
    <div style="text-align: center;">
        <h3>
            <i class="fa fa-user-circle text-default">
                <strong>USER ALLOCATED FORM</strong>
            </i>
        </h3>
    </div>
    <?php $form = ActiveForm::begin(); ?>

    <?=
    $form->field($model, 'name')->widget(Select2::classname(), [
        'data' => \backend\models\User::getBorderUser(),
        'options' => ['placeholder' => 'select Border user ...'],
        'pluginOptions' => [
            'allowClear' => true,

        ],
    ]);
    ?>

    <?= $form->field($model, 'border_port')->dropDownList(\backend\models\BorderPort::getBordersPorts(), ['prompt' => 'choose Border name ...']) ?>


    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>
        <?= Html::a('<i class="fa fa-backward"> go Back</i>', ['index',], ['class' => 'btn btn-warning']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
