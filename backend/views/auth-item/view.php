<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\AuthItem */

$this->title = '';
$this->params['breadcrumbs'][] = ['label' => 'Auth Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->name;
?>
<div class="auth-item-view">

    <p>
        <?= Html::a('<strong class="fa fa-pencil"> Edit</strong>', ['auth-item/update', 'id' => $model->name], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('<strong class="fa fa-backward"> go Back</strong>', ['auth-item/index', 'id' => $model->name], ['class' => 'btn btn-warning']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->name], [
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
            'name',
         //   'type',
            'description:ntext',
         //   'rule_name',
        //    'data:ntext',
         //   'created_at',
          //  'updated_at',
        ],
    ]) ?>

</div>
