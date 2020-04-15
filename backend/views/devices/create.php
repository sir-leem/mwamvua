<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Devices */

$this->title = Yii::t('app', 'Create Devices');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Devices'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="devices-create">

    <p style="padding-top: 1%"/>
    <div class="col-md-6">
        <strong class="lead" style="color: #01214d;font-family: Tahoma"> <i
                    class="fa fa-database"></i> RAHNTECH
            COMPANY LTD - Devices </strong>
    </div>
    <div class="col-md-2">

    </div>
    <div class="col-md-6">

            <?= Html::a(Yii::t('app', '<i class="fa fa-backward"></i> go Back'), ['devices/index'], ['class' => 'btn btn-warning waves-effect waves-light']) ?>

    </div>
    <p style="padding-top: 1%"/>

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
