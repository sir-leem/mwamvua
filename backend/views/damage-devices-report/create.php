<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DamageDevicesReport */

$this->title = Yii::t('app', 'Create Damage Devices Report');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Damage Devices Reports'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="damage-devices-report-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
