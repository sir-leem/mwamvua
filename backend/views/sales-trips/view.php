<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\SalesTrips */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sales Trips', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="sales-trips-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'sale_date',
            'tzl',
            'start_date_time',
            'vehicle_number',
            'chasis_number',
            'driver_name',
            'border_id',
            'trip_status',
            'driver_number',
            'serial_no',
            'amount',
            'currency',
            'gate_number',
            'end_date',
            'sales_person',
            'receipt_number',
            'passport',
            'container_number',
            'vehicle_type_id',
            'customer_type_id',
            'customer_id',
            'company_name',
            'customer_name',
            'agent',
            'cancelled_by',
            'edited_by',
            'edited_at',
            'date_cancelled',
            'sale_type',
            'sale_id',
        ],
    ]) ?>

</div>
