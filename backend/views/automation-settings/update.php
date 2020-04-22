<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\AutomationSettings */

$this->title = Yii::t('app', 'Update Automation Settings: {name}', [
    'name' => $model->name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Automation Settings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="automation-settings-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
