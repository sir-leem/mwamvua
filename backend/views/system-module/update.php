<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SystemModule */

$this->title = '';
$this->params['breadcrumbs'][] = ['label' => 'System Modules', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="system-module-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
