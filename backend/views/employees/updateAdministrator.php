<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Employees */

$this->title = 'Update Employees: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['employees/index-administrator']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="employees-update">

    <hr/>
    <div class="row">
        <div class="col-md-6">
            <strong class="lead"  style="color: #01214d;font-family: Tahoma"> <i class="fa fa-check-square text-green"></i> RAHNTECH COMPANY LTD - Update Administrator</strong>
        </div>
        <div class="col-md-2">

        </div>
        <div class="col-md-4">


            <?= Html::a(Yii::t('app', '<i class="fa fa-backward"></i> Go Back'), ['index-administrator'], ['class' => 'btn btn-warning waves-effect waves-light']) ?>

        </div>
    </div>
    <hr/>
    <?= $this->render('_formAdministrator', [
        'model' => $model,
    ]) ?>

</div>
