<?php

use backend\models\User;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Companies */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Companies', 'url' => ['companies/index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="companies-view" style="padding-top: 2%">
    <h3>
        <i class="fa fa-user text-default">
            <strong> CREDIT COMPANY USER <strong style="color: red">(<?= $model->login_name; ?>)</strong></strong>
        </i>
    </h3>


    <div class="row">
        <div class="col-md-8">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [

            'company_name',
            [

                'label' => 'Login Username',
                'value' => function($model){
                    $user = \backend\models\User::find()->select('username')->where(['company_id'=>$model->id])->one();

                    return $user->username;

                },

            ],
            'mobile',
            [

                'label' => 'Email',
                'value' => function($model){
                    $user = \backend\models\User::find()->select('email')->where(['company_id'=>$model->id])->one();

                    return $user->email;

                },

            ],

            [

                'label' => 'Role',
                'value' => function($model){
                    $user = \backend\models\User::find()->select('role')->where(['company_id'=>$model->id])->one();

                    return $user->role;

                },

            ],

            [

                'label' => 'Status',

                'value' => function($model){
                    $user = \backend\models\User::find()->select('status')->where(['company_id'=>$model->id])->one();

                    if ($user->status == User::STATUS_ACTIVE) {
                        return 'ACTIVE';
                    } elseif ($user->status == User::STATUS_DELETED) {
                        return 'DISABLED';
                    } elseif ($user->status == User::STATUS_INACTIVE) {
                        return 'DISABLED';
                    }

                },

            ],
            [
                'attribute' => 'created_by',
                'value' => $model->billCustomer->username,
            ],
            'created_at',
        ],
    ]) ?>
        </div>

        <div class="col-md-4">
            <?php if(Yii::$app->user->can('createUser')) { ?>
                <?= Html::a(Yii::t('app', '<i class="fa fa-pencil"> Edit</i>'), ['companies/update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?php } ?>
            <?= Html::a(Yii::t('app', '<i class="fa fa-backward"> go Back</i>'), ['companies/index', ], ['class' => 'btn btn-warning']) ?>

        </div>
    </div>
</div>
