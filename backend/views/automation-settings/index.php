<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AutomationSettingsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Automation Settings');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="automation-settings-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php if(Yii::$app->user->can('automationSetting')){ ?>
        <?= Html::a(Yii::t('app', 'Create Automation Settings'), ['create'], ['class' => 'btn btn-success']) ?>
        <?php } ?>
    </p>



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
       // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'code',
            'hours',

            [
                    'class' => 'yii\grid\ActionColumn',
                'visible'=>Yii::$app->user->can('automationSetting')
            ],
        ],
    ]); ?>


</div>
