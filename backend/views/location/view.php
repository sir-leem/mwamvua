<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Location */

$this->title = '';
$this->params['breadcrumbs'][] = ['label' => 'Locations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="location-view">

    <div class="row" style="padding-top: 3%">
        <div class="col-md-6">
            <strong class="lead" style="color: #01214d;font-family: Tahoma"> <i class="fa fa-map-marker"></i> RAHNTECH
                COMPANY LTD - Location view</strong>
        </div>

        <div class="col-md-6">
            <?php if (Yii::$app->user->can('createLocation')) { ?>
                <?= Html::a(Yii::t('app', '<i class="fa fa-map-marker"></i> New Location'), ['create'], ['class' => 'btn btn-primary waves-effect waves-light']) ?>
            <?php } ?>

        </div>
    </div>
    <p style="padding-top: 3%"/>

        <?php if (Yii::$app->user->can('createLocation')) { ?>
            <?= Html::a(Yii::t('app', '<i class="fa fa-pencil"> Edit</i>'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?php } ?>
        <?= Html::a(Yii::t('app', '<i class="fa fa-backward"> go Back</i>'), ['index',], ['class' => 'btn btn-warning']) ?>
        <?php if (Yii::$app->user->can('deleteLocation')) { ?>
            <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                    'method' => 'post',
                ],
            ]) ?>
        <?php } ?>
    </p>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           // 'id',
            'location_name',
        ],
    ]) ?>

</div>
