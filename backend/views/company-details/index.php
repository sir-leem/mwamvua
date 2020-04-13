<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CompanyDetailsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '';
$this->params['breadcrumbs'][] = 'Company Details';
?>
<div class="company-details-index">


    <p>
        <?= Html::a('Create Company Details', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'mobile',
            'email:email',
            'tin',
            'website',
            'address',
            'logo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
