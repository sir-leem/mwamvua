<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Employees */

$this->title = 'Update Employees: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['employees/index-border-staff']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="employees-update">

    <hr/>
    <div class="row">
        <div class="col-md-6">
            <strong class="lead"  style="color: #01214d;font-family: Tahoma"> <i class="fa fa-check-square text-green"></i> RAHNTECH COMPANY LTD - Update Border User</strong>
        </div>
        <div class="col-md-2">

        </div>
        <div class="col-md-4">


            <?= Html::a(Yii::t('app', '<i class="fa fa-backward"></i> Go Back'), ['index-border-staff'], ['class' => 'btn btn-warning waves-effect waves-light']) ?>

        </div>
    </div>
    <hr/>
    <?= $this->render('_formBorderStaff', [
        'model' => $model,
    ]) ?>

</div>
