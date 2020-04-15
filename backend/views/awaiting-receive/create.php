<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\AwaitingReceive */

$this->title = Yii::t('app', 'Create Awaiting Receive');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Awaiting Receives'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="awaiting-receive-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
