<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\AwaitingReceiveReport */

$this->title = 'Create Awaiting Receive Report';
$this->params['breadcrumbs'][] = ['label' => 'Awaiting Receive Reports', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="awaiting-receive-report-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
