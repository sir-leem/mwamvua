<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\CompanyDetails */

$this->title = '';
$this->params['breadcrumbs'][] = ['label' => 'Company Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->name;
\yii\web\YiiAsset::register($this);
?>
<div class="company-details-view">

    <h1 style="text-align: center">
        <i class="fa fa-home text-default">
            <strong> COMPANY PROFILE</strong>
        </i>
    </h1>


    <p>
        <?php if(Yii::$app->user->can('companyProfile')) { ?>
        <?= Html::a('<strong class="fa fa-pencil"> Edit</strong>', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?php } ?>
        <?php if(Yii::$app->user->can('deleteCompanySetting')) { ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?php } ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [

            'name',
            'mobile',
            'email:email',
            'tin',
            'website',
            'address',
            'logo',
        ],
    ]) ?>

</div>
