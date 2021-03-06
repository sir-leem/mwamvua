<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\BorderPort */

$this->title = '';
$this->params['breadcrumbs'][] = ['label' => 'Border Ports', 'url' => ['port']];
$this->params['breadcrumbs'][] = $model->name;
\yii\web\YiiAsset::register($this);
?>
<div class="border-port-view" style="padding-top: 2%">


    <div class="row">
        <div class="col-md-6">
            <strong class="lead" style="color: #01214d;font-family: Tahoma">
                <i class="fa fa-check-square text-green"></i> RAHNTECH
                COMPANY LTD - Sales Point View
            </strong>
        </div>

        <div class="col-md-6">

            <?php if (Yii::$app->user->can('createBorder')) { ?>
                <?= Html::a(Yii::t('app', '<i class="fa fa-plus"></i> Add New'), ['create-port'], ['class' => 'btn btn-primary waves-effect waves-light']) ?>
            <?php } ?>

        </div>
    </div>


    <p style="padding-top: 3%">
        <?php if (Yii::$app->user->can('createSalesPoint')) { ?>
        <?= Html::a(Yii::t('app', '<i class="fa fa-pencil"> Edit</i>'), ['update-port', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?php } ?>
        <?= Html::a(Yii::t('app', '<i class="fa fa-backward"> go Back</i>'), ['port',], ['class' => 'btn btn-warning']) ?>
        <?php if (Yii::$app->user->can('deleteSalesPoint')) { ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete-port', 'id' => $model->id], [
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
            'name',
            [
                    'attribute'=>'location',
                'value'=>$model->location0->location_name,
            ],
        ],
    ]) ?>

</div>
