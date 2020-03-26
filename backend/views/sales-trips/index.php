<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SalesTripsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sales Trips';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sales-trips-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Sales Trips', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'sale_date',
            'tzl',
            'start_date_time',
            'vehicle_number',
            //'chasis_number',
            //'driver_name',
            //'border_id',
            //'trip_status',
            //'driver_number',
            //'serial_no',
            //'amount',
            //'currency',
            //'gate_number',
            //'end_date',
            //'sales_person',
            //'receipt_number',
            //'passport',
            //'container_number',
            //'vehicle_type_id',
            //'customer_type_id',
            //'customer_id',
            //'company_name',
            //'customer_name',
            //'agent',
            //'cancelled_by',
            //'edited_by',
            //'edited_at',
            //'date_cancelled',
            //'sale_type',
            //'sale_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
