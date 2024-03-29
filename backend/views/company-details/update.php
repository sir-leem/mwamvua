<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\CompanyDetails */

$this->title = 'Update Company Details: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Company Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="company-details-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
