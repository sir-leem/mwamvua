<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SystemModule */

$this->title = '';
$this->params['breadcrumbs'][] = ['label' => 'System Modules', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Create System Module';
?>
<div class="system-module-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
