<?php

use kartik\form\ActiveForm;
use yii\helpers\Html;
use kartik\icons\Icon;
use yii\widgets\DetailView;

$this->title = Yii::t('app', 'Role') . " $model->name";
$this->params['breadcrumbs'] = [
    [
        'label' => Yii::t('app', 'Roles'),
        'url' => ['/role']
    ],
    $model->name
];
?>
<hr/>
<div class="row">
    <?php if (Yii::$app->user->can('changeUserRoles')) { ?>
        <?= Html::a(Yii::t('app', '<i class="fa fa-pencil"> Edit</i>'), ['role/update', 'name' => $model->name], ['class' => 'btn btn-primary', 'data-toggle' => "tooltip", 'rel' => "tooltip", 'title' => "Update",]) ?>
    <?php } ?>
    <?= Html::a(Yii::t('app', '<i class="fa fa-backward"> go Back</i>'), ['role/index'], ['class' => 'btn btn-warning', 'data-toggle' => "tooltip", 'rel' => "tooltip", 'title' => "Cancel",]) ?>

    <div class="row">

    <div class="col-lg-6">

        <?php
        echo DetailView::widget([
            'model' => $model,
            'id' => 'login-form',
            //  'type' => ActiveForm::TYPE_VERTICAL,
            // 'formConfig' => ['labelSpan' => 3, 'deviceSize' => ActiveForm::SIZE_SMALL],
            //'condensed' => true,
            //'hover' => true,
            //'mode' => DetailView::MODE_VIEW,
            //'enableEditMode' => false,
            /*'panel' => [
                'heading' => Icon::show('user') . Yii::t('auth', 'Role') .
                    Html::a(Icon::show('user') . Yii::t('auth', 'Update'), ['update', 'name' => $model->name], ['class' => 'btn-success btn-sm btn-dv pull-right']),
                //'type' => DetailView::TYPE_DEFAULT,
            ],*/
            'attributes' => [
                'name',
                'description'
            ],
        ]);
        ?>
    </div>

    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <?= Yii::t('app', 'Permissions')?>
            </div>

            <div class="panel-body">
                <div class="list-group">
                    <?php foreach($model->_permissions as $key): ?>
                        <a class="list-group-item">
                            <?= $permissions[$key]?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

</div>