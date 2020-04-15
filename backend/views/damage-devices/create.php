<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DamageDevices */

$this->title = Yii::t('app', 'Create Damage Devices');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Damage Devices'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="damage-devices-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
