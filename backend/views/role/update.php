<?php

$this->title = Yii::t('app', ' ') ;
$this->params['breadcrumbs'] = [
    [
        'label' => Yii::t('app', 'Roles'),
        'url' => ['/role']
    ],
    $this->title
];
?>
<p style="padding-top: 1%"/>

    <h3 style="alignment: center; ">
        <i class="fa fa-user text-default">
            <strong> UPDATE USER ROLE FORM <strong style="color: red">(<?= $model->name ; ?>)</strong></strong>
        </i>
    </h3>
<?php

echo $this->render('_form', [
    'model' => $model,
    'permissions' => $permissions,
]);