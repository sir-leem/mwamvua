<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Employees */

$this->title = '';
$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['employees/index']];
$this->params['breadcrumbs'][] = 'Create Employees';
?>
    <div id="loader1" style="display: none"></div>
<div class="employees-create">
    <hr/>
    <div class="row">
        <div class="col-md-6">
            <strong class="lead"  style="color: #01214d;font-family: Tahoma"> <i class="fa fa-check-square text-green"></i> RAHNTECH COMPANY LTD - New Employees</strong>
        </div>
        <div class="col-md-2">

        </div>
        <div class="col-md-4">


            <?= Html::a(Yii::t('app', '<i class="fa fa-backward"></i> Go Back'), ['employees/index'], ['class' => 'btn btn-warning waves-effect waves-light']) ?>

        </div>
    </div>
    <hr/>

<?= $this->render('_form', [
    'model' => $model,'user' => $user,
]) ?>