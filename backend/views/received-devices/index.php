<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ReceivedDevicesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Received Devices';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="received-devices-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Received Devices', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'serial_no',
            'received_from',
            'border_port',
            'received_from_staff',
            //'received_at',
            //'received_status',
            //'remark:ntext',
            //'received_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
