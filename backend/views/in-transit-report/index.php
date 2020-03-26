<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\InTransitReportSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'In Transit Reports';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="in-transit-report-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create In Transit Report', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'serial_no',
            'tzl',
            'border',
            'sales_person',
            //'created_at',
            //'created_by',
            //'vehicle_no',
            //'container_number',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
