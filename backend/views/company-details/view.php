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
        <?php if (Yii::$app->user->can('companyProfile')) { ?>
            <?= Html::a('<strong class="fa fa-pencil"> Edit</strong>', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?php } ?>
        <?php if (Yii::$app->user->can('deleteCompanySetting')) { ?>
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
            [
                'attribute' => 'logo',
                'format' => 'html',
              //  'label' => 'Image',
                'value' => function ($model) {
                    $extension = explode(".", $model->logo);

                    if ($extension != null) {
                        return Html::img('uploads/company-logo/' . $model->logo,
                            ['width' => '50px', 'height' => '50px', 'class' => 'img-square']);

                    } else {
                        // ToDO with error: print_r($errors);
                        return "<img src='data:image/png;base64,$model->logo', width='150px' height='150px' align='center' style='vertical-align: middle'/>";
                    }
                },
            ],
        ],
    ]) ?>

</div>
