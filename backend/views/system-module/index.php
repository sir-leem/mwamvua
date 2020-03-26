<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SystemModuleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '';
$this->params['breadcrumbs'][] = 'System Modules';
?>
<div class="system-module-index">

    <hr/>

    <div class="col-md-6">
        <strong class="lead" style="color: #01214d;font-family: Tahoma"> <i class="fa fa-ban"></i> RAHNTECH
            COMPANY LTD - System Module</strong>
    </div>
    <div class="col-md-2">

    </div>
    <div class="col-md-4">
        <?php if (Yii::$app->user->can('createUser')) { ?>
            <?= Html::a(Yii::t('app', '<i class="fa fa-plus"></i> New Module'), ['create'], ['class' => 'btn btn-primary waves-effect waves-light']) ?>
        <?php } ?>
    </div>

    <hr/>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= \fedemotta\datatables\DataTables::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
