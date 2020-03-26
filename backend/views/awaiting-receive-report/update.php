<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\AwaitingReceiveReport */

$this->title = 'Update Awaiting Receive Report: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Awaiting Receive Reports', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="awaiting-receive-report-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
