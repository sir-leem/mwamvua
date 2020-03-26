<?php

use backend\models\User;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\User */

$this->title = '';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="user-view" style="padding-top: 15px">
    <h3>
        <i class="fa fa-user text-default">
            <strong> SYSTEM USER <strong style="color: red">(<?= $model->username; ?>)</strong></strong>
        </i>
    </h3>


    <div class="row">
        <div class="col-md-8">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'username',

                    'email:email',
                    'role',
                    [
                        'attribute' => 'user_type',
                        'value' => function ($model) {

                            if ($model->user_type == User::SUPER_ADMIN) {
                                return 'SUPER ADMIN';
                            } elseif ($model->user_type == User::ADMIN) {
                                return 'ADMINISTRATOR';
                            } elseif ($model->user_type == User::OFFICE_STAFF) {
                                return 'OFFICE STAFF';
                            } elseif ($model->user_type == User::PORT_STAFF) {
                                return 'PORT STAFF';
                            }elseif ($model->user_type == User::BORDER_STAFF) {
                                return 'BORDER STAFF';
                            }elseif ($model->user_type == User::BILL_STAFF) {
                                return 'BILL STAFF';
                            }
                        }

                    ],

                    [
                        'attribute' => 'status',
                        'value' => function ($model) {

                            if ($model->status == User::STATUS_ACTIVE) {
                                return 'ACTIVE';
                            } elseif ($model->status == User::STATUS_DELETED) {
                                return 'DISABLED';
                            } elseif ($model->status == User::STATUS_INACTIVE) {
                                return 'DISABLED';
                            }
                        }

                    ],
                    'created_at:datetime',
                    'updated_at:datetime',
                ],
            ]) ?>
        </div>

        <div class="col-md-4">
            <?php if(Yii::$app->user->can('createUser')) { ?>
            <?= Html::a(Yii::t('app', '<i class="fa fa-pencil"> Edit</i>'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?php } ?>
            <?= Html::a(Yii::t('app', '<i class="fa fa-backward"> go Back</i>'), ['index', ], ['class' => 'btn btn-warning']) ?>

        </div>
    </div>
</div>
