<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Employees;

/* @var $this yii\web\View */
/* @var $model backend\models\Employees */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['employees/index-border-staff']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="employees-view" style="padding-top: 2%;">
    <!-- <hr/>-->
    <div class="row bg-info" style="padding: 10px">
        <div class="col-md-3">
            <h4><b>Full name:</b> <?= $model->name; ?></h4>
        </div>
        <div class="col-md-3">

        </div>
        <div class="col-md-3">

            <h4><strong>Status: </strong><?php if ($model->status == Employees::ACTIVE) {
                    echo 'Active';
                } elseif ($model->status == Employees::INACTIVE) {
                    echo 'Disabled';
                }; ?>
            </h4>

        </div>
        <div class="col-md-3">
            <?php if (Yii::$app->user->can('createUser')) { ?>
                <?= Html::a(Yii::t('app', '<i class="fa fa-pencil"> Edit</i>'), ['employees/update-border-staff', 'id' => $model->id], ['class' => 'btn btn-primary', 'data-toggle' => "tooltip", 'rel' => "tooltip", 'title' => "Update",]) ?>
            <?php } ?>
            <?= Html::a(Yii::t('app', '<i class="fa fa-backward"> go Back</i>'), ['employees/index-border-staff'], ['class' => 'btn btn-warning', 'data-toggle' => "tooltip", 'rel' => "tooltip", 'title' => "Cancel",]) ?>

        </div>
    </div>
</div>
    <p style=" padding-bottom: 2%"/>
<?php
echo \kartik\tabs\TabsX::widget([
        'position' => \kartik\tabs\TabsX::POS_ABOVE,
        'align' => \kartik\tabs\TabsX::ALIGN_LEFT,
        'items' => [

            [
                'label' => 'Employee details',
                'content' => $this->render('employee_details', ['model' => $model,]),
                'headerOptions' => ['style' => 'font-weight:bold'],
                'options' => ['id' => 'tab1'],
            ],
        ],
]);
?>

