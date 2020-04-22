<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\AutomationSettings */

$this->title = Yii::t('app', 'Create Automation Settings');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Automation Settings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="automation-settings-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
