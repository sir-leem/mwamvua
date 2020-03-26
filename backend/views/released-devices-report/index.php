<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ReleasedDevicesReportSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Released Devices Reports';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="released-devices-report-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Released Devices Report', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'serial_no',
            'released_date',
            'released_by',
            'released_to',
            //'sales_point',
            //'transferred_from',
            //'transferred_to',
            //'transferred_date',
            //'transferred_by',
            //'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
