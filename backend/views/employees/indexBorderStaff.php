<?php

use backend\models\User;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\EmployeesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '';
$this->params['breadcrumbs'][] = 'Employees';
?>
<div class="employees-index" style="padding-top: 40px;padding-left: 10px">
    <?php \yii\widgets\Pjax::begin(); ?>
    <!-- Custom Tabs -->
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">

            <?php \yii\widgets\Pjax::begin(); ?>
            <!-- Custom Tabs -->

            <ul class="nav nav-tabs">
                <li><a href="#tab_administrator" data-toggle="tab"
                       class="fa fa-user"><b>Administrator</b></a></li>
                <li><a href="#tab_office_staff" data-toggle="tab" class="fa fa-user"><b> Office Staff</b></a></li>
                <li><a href="#tab_port_staff" data-toggle="tab" class="fa fa-user"><b> Port Users</b></a></li>
                <li class="active"><a href="#tab_border_staff" data-toggle="tab" class="fa fa-user"><b> Boarder Users</b></a></li>
                <li><a href="#tab_company_id" data-toggle="tab" class="fa fa-user"><b> Credit Customers</b></a></li>

            </ul>
            <div class="tab-content">
                <div class="box-body table-responsive">
                    <div class="tab-content" style="padding-top: 2%">
                        <div class="tab-pane" id="tab_administrator">

                            <p style="padding-top: 1%"/>
                            <div class="col-md-6">
                                <strong class="lead" style="color: #01214d;font-family: Tahoma"> <i
                                            class="fa fa-users"></i> RAHNTECH
                                    COMPANY LTD - Administrator Users</strong>
                            </div>
                            <div class="col-md-2">

                            </div>
                            <div class="col-md-6">
                                <?php if (Yii::$app->user->can('createUser')) { ?>
                                    <?= Html::a(Yii::t('app', '<i class="fa fa-user-plus"></i> Add New'), ['employees/create-administrator'], ['class' => 'btn btn-primary waves-effect waves-light']) ?>
                                <?php } ?>
                            </div>
                            <p style="padding-top: 1%"/>

                            <?php \yii\widgets\Pjax::begin(); ?>
                            <?php
                            $searchModel = new \backend\models\EmployeesSearch();
                            $dataProvider = $searchModel->searchAdministrator(Yii::$app->request->queryParams);
                            ?>

                            <?= \fedemotta\datatables\DataTables::widget([
                                'dataProvider' => $dataProvider,
                                'filterModel' => $searchModel,
                                'rowOptions' => function ($model) {
                                    $user = \backend\models\User::find()->select('status')->where(['employee_id' => $model->id])->one();
                                    if ($user->status == User::STATUS_INACTIVE) {

                                        return ['class' => 'danger'];

                                    } else if ($user->status == User::STATUS_INACTIVE) {
                                        return ['style' => 'danger'];
                                    }
                                },
                                'columns' => [
                                    ['class' => 'yii\grid\SerialColumn'],

                                    'name',
                                    [

                                        'label' => 'Username',
                                        'value' => function ($model) {
                                            $user = \backend\models\User::find()->select('username')->where(['employee_id' => $model->id])->one();
                                            if ($user != null) {
                                                return $user->username;
                                            } else {
                                                return '';
                                            }


                                        },

                                    ],
                                    'mobile',
                                    [

                                        'label' => 'Email',
                                        'value' => function ($model) {
                                            $user = \backend\models\User::find()->select('email')->where(['employee_id' => $model->id])->one();

                                            return $user->email;

                                        },

                                    ],

                                    'address',

                                    [

                                        'label' => 'Role',
                                        'value' => function ($model) {
                                            $user = \backend\models\User::find()->select('role')->where(['employee_id' => $model->id])->one();

                                            return $user->role;

                                        },

                                    ],
                                    /*      [

                                              'label' => 'User Type',
                                              'value' => function ($model) {
                                                  $user = \backend\models\User::find()->select('user_type')->where(['employee_id' => $model->id])->one();

                                                  if ($user->user_type == User::SUPER_ADMIN) {
                                                      return 'SUPER ADMIN';
                                                  } elseif ($user->user_type == User::ADMIN) {
                                                      return 'ADMINISTRATOR';
                                                  } elseif ($user->user_type == User::OFFICE_STAFF) {
                                                      return 'OFFICE STAFF';
                                                  } elseif ($user->user_type == User::PORT_STAFF) {
                                                      return 'PORT STAFF';
                                                  } elseif ($user->user_type == User::BORDER_STAFF) {
                                                      return 'BORDER STAFF';
                                                  } elseif ($user->user_type == User::BILL_STAFF) {
                                                      return 'BILL STAFF';
                                                  }

                                              },

                                          ],*/
                                    [

                                        'label' => 'Status',

                                        'value' => function ($model) {
                                            $user = \backend\models\User::find()->select('status')->where(['employee_id' => $model->id])->one();

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
                                        'value' => 'user.username',
                                    ],
                                    'created_at',
                                    [
                                        'class' => 'yii\grid\ActionColumn',
                                        //    'header' => 'Actions',
                                        'template' => '{view}',
                                        'headerOptions' => ['style' => 'width:01px'],
                                        'buttons' => [
                                            'view' => function ($url, $model) {
                                                $url = ['employees/view-administrator', 'id' => $model->id];
                                                return Html::a('<span class="fa fa-eye"></span>', $url, [
                                                    'title' => 'View',
                                                    'data-toggle' => 'tooltip', 'data-original-title' => 'Save',
                                                    'class' => 'btn btn-success',

                                                ]);


                                            },


                                        ]
                                    ],
                                    [
                                        'class' => 'yii\grid\ActionColumn',
                                        //'header'=>'Actions',
                                        'headerOptions' => ['style' => 'width:01px'],
                                        'visible' => Yii::$app->user->can('createUser'),
                                        'template' => '{update}',
                                        'buttons' => [
                                            'update' => function ($url, $model) {
                                                $url = ['employees/update-administrator', 'id' => $model->id];
                                                return Html::a('<span class="fa fa-pencil"></span>', $url, [
                                                    'title' => 'Edit',
                                                    'data-toggle' => 'tooltip', 'data-original-title' => 'Save',
                                                    'class' => 'btn btn-primary',

                                                ]);


                                            },


                                        ]
                                    ],
                                    [
                                        'class' => 'yii\grid\ActionColumn',
                                        'visible' => Yii::$app->user->can('deleteUser'),
                                        'template' => '{delete}',
                                        'buttons' => [
                                            'delete' => function ($url, $model) {
                                                $url = ['delete', 'id' => $model->id];
                                                return Html::a('<span class="fa fa-trash"></span>', $url, [
                                                    'title' => 'Edit',
                                                    'data-toggle' => 'tooltip', 'data-original-title' => 'Save',
                                                    'class' => 'btn btn-danger',

                                                ]);


                                            },


                                        ]
                                    ],

                                ],
                                'clientOptions' => [
                                    "lengthMenu" => [[100, -1], [100, Yii::t('app', "All")]],
                                    "info" => false,
                                    "responsive" => true,
                                    "dom" => 'lfTrtip',
                                    "tableTools" => [
                                        "aButtons" => [
                                            [
                                                "sExtends" => "copy",
                                                "sButtonText" => Yii::t('app', "Copy to clipboard")
                                            ], [
                                                "sExtends" => "csv",
                                                "sButtonText" => Yii::t('app', "Save to CSV")
                                            ], [
                                                "sExtends" => "xls",
                                                "oSelectorOpts" => ["page" => 'current']
                                            ], [
                                                "sExtends" => "pdf",
                                                "sButtonText" => Yii::t('app', "Save to PDF")
                                            ], [
                                                "sExtends" => "print",
                                                "sButtonText" => Yii::t('app', "Print")
                                            ],
                                        ]
                                    ]
                                ],
                            ]); ?>

                            <?php \yii\widgets\Pjax::end(); ?>
                        </div>

                        <div class="tab-pane" id="tab_office_staff">

                            <p style="padding-top: 1%"/>
                            <div class="col-md-6">
                                <strong class="lead" style="color: #01214d;font-family: Tahoma"> <i
                                            class="fa fa-users"></i> RAHNTECH
                                    COMPANY LTD - Office Staff</strong>
                            </div>
                            <div class="col-md-2">

                            </div>
                            <div class="col-md-6">
                                <?php if (Yii::$app->user->can('createUser')) { ?>
                                    <?= Html::a(Yii::t('app', '<i class="fa fa-user-plus"></i> Add New'), ['employees/create-office-staff'], ['class' => 'btn btn-primary waves-effect waves-light']) ?>
                                <?php } ?>
                            </div>
                            <p style="padding-top: 1%"/>

                            <?php \yii\widgets\Pjax::begin(); ?>
                            <?php
                            $searchModel = new \backend\models\EmployeesSearch();
                            $dataProvider = $searchModel->searchOfficeStaff(Yii::$app->request->queryParams);
                            ?>

                            <?= \fedemotta\datatables\DataTables::widget([
                                'dataProvider' => $dataProvider,
                                'filterModel' => $searchModel,
                                'rowOptions' => function ($model) {
                                    $user = \backend\models\User::find()->select('status')->where(['employee_id' => $model->id])->one();
                                    if ($user->status == User::STATUS_INACTIVE) {

                                        return ['class' => 'danger'];

                                    } else if ($user->status == User::STATUS_INACTIVE) {
                                        return ['style' => 'danger'];
                                    }
                                },
                                'columns' => [
                                    ['class' => 'yii\grid\SerialColumn'],

                                    'name',
                                    [

                                        'label' => 'Username',
                                        'value' => function ($model) {
                                            $user = \backend\models\User::find()->select('username')->where(['employee_id' => $model->id])->one();
                                            if ($user != null) {
                                                return $user->username;
                                            } else {
                                                return '';
                                            }


                                        },

                                    ],
                                    'mobile',
                                    [

                                        'label' => 'Email',
                                        'value' => function ($model) {
                                            $user = \backend\models\User::find()->select('email')->where(['employee_id' => $model->id])->one();

                                            return $user->email;

                                        },

                                    ],

                                    'address',

                                    [

                                        'label' => 'Role',
                                        'value' => function ($model) {
                                            $user = \backend\models\User::find()->select('role')->where(['employee_id' => $model->id])->one();

                                            return $user->role;

                                        },

                                    ],

                                    [

                                        'label' => 'Status',

                                        'value' => function ($model) {
                                            $user = \backend\models\User::find()->select('status')->where(['employee_id' => $model->id])->one();

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
                                        'value' => 'user.username',
                                    ],
                                    'created_at',
                                    [
                                        'class' => 'yii\grid\ActionColumn',
                                        //    'header' => 'Actions',
                                        'template' => '{view}',
                                        'headerOptions' => ['style' => 'width:01px'],
                                        'buttons' => [
                                            'view' => function ($url, $model) {
                                                $url = ['employees/view-office-staff', 'id' => $model->id];
                                                return Html::a('<span class="fa fa-eye"></span>', $url, [
                                                    'title' => 'View',
                                                    'data-toggle' => 'tooltip', 'data-original-title' => 'Save',
                                                    'class' => 'btn btn-success',

                                                ]);


                                            },


                                        ]
                                    ],
                                    [
                                        'class' => 'yii\grid\ActionColumn',
                                        //'header'=>'Actions',
                                        'headerOptions' => ['style' => 'width:01px'],
                                        'visible' => Yii::$app->user->can('createUser'),
                                        'template' => '{update}',
                                        'buttons' => [
                                            'update' => function ($url, $model) {
                                                $url = ['employees/update-office-staff', 'id' => $model->id];
                                                return Html::a('<span class="fa fa-pencil"></span>', $url, [
                                                    'title' => 'Edit',
                                                    'data-toggle' => 'tooltip', 'data-original-title' => 'Save',
                                                    'class' => 'btn btn-primary',

                                                ]);


                                            },


                                        ]
                                    ],
                                    [
                                        'class' => 'yii\grid\ActionColumn',
                                        'visible' => Yii::$app->user->can('deleteUser'),
                                        'template' => '{delete}',
                                        'buttons' => [
                                            'delete' => function ($url, $model) {
                                                $url = ['delete', 'id' => $model->id];
                                                return Html::a('<span class="fa fa-trash"></span>', $url, [
                                                    'title' => 'Edit',
                                                    'data-toggle' => 'tooltip', 'data-original-title' => 'Save',
                                                    'class' => 'btn btn-danger',

                                                ]);


                                            },


                                        ]
                                    ],

                                ],
                                'clientOptions' => [
                                    "lengthMenu" => [[100, -1], [100, Yii::t('app', "All")]],
                                    "info" => false,
                                    "responsive" => true,
                                    "dom" => 'lfTrtip',
                                    "tableTools" => [
                                        "aButtons" => [
                                            [
                                                "sExtends" => "copy",
                                                "sButtonText" => Yii::t('app', "Copy to clipboard")
                                            ], [
                                                "sExtends" => "csv",
                                                "sButtonText" => Yii::t('app', "Save to CSV")
                                            ], [
                                                "sExtends" => "xls",
                                                "oSelectorOpts" => ["page" => 'current']
                                            ], [
                                                "sExtends" => "pdf",
                                                "sButtonText" => Yii::t('app', "Save to PDF")
                                            ], [
                                                "sExtends" => "print",
                                                "sButtonText" => Yii::t('app', "Print")
                                            ],
                                        ]
                                    ]
                                ],
                            ]); ?>

                            <?php \yii\widgets\Pjax::end(); ?>
                        </div>

                        <div class="tab-pane" id="tab_port_staff">

                            <p style="padding-top: 1%"/>
                            <div class="col-md-6">
                                <strong class="lead" style="color: #01214d;font-family: Tahoma"> <i
                                            class="fa fa-users"></i> RAHNTECH
                                    COMPANY LTD - Port Users</strong>
                            </div>
                            <div class="col-md-2">

                            </div>
                            <div class="col-md-6">
                                <?php if (Yii::$app->user->can('createUser')) { ?>
                                    <?= Html::a(Yii::t('app', '<i class="fa fa-user-plus"></i> Add New'), ['employees/create-port-staff'], ['class' => 'btn btn-primary waves-effect waves-light']) ?>
                                <?php } ?>
                            </div>
                            <p style="padding-top: 1%"/>

                            <?php \yii\widgets\Pjax::begin(); ?>
                            <?php
                            $searchModel = new \backend\models\EmployeesSearch();
                            $dataProvider = $searchModel->searchPortStaff(Yii::$app->request->queryParams);
                            ?>

                            <?= \fedemotta\datatables\DataTables::widget([
                                'dataProvider' => $dataProvider,
                                'filterModel' => $searchModel,
                                'rowOptions' => function ($model) {
                                    $user = \backend\models\User::find()->select('status')->where(['employee_id' => $model->id])->one();
                                    if ($user->status == User::STATUS_INACTIVE) {

                                        return ['class' => 'danger'];

                                    } else if ($user->status == User::STATUS_INACTIVE) {
                                        return ['style' => 'danger'];
                                    }
                                },
                                'columns' => [
                                    ['class' => 'yii\grid\SerialColumn'],

                                    'name',
                                    [

                                        'label' => 'Username',
                                        'value' => function ($model) {
                                            $user = \backend\models\User::find()->select('username')->where(['employee_id' => $model->id])->one();
                                            if ($user != null) {
                                                return $user->username;
                                            } else {
                                                return '';
                                            }


                                        },

                                    ],
                                    'mobile',
                                    [

                                        'label' => 'Email',
                                        'value' => function ($model) {
                                            $user = \backend\models\User::find()->select('email')->where(['employee_id' => $model->id])->one();

                                            return $user->email;

                                        },

                                    ],

                                    'address',

                                    [

                                        'label' => 'Role',
                                        'value' => function ($model) {
                                            $user = \backend\models\User::find()->select('role')->where(['employee_id' => $model->id])->one();

                                            return $user->role;

                                        },

                                    ],

                                    [

                                        'label' => 'Status',

                                        'value' => function ($model) {
                                            $user = \backend\models\User::find()->select('status')->where(['employee_id' => $model->id])->one();

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
                                        'value' => 'user.username',
                                    ],
                                    'created_at',
                                    [
                                        'class' => 'yii\grid\ActionColumn',
                                        //    'header' => 'Actions',
                                        'template' => '{view}',
                                        'headerOptions' => ['style' => 'width:01px'],
                                        'buttons' => [
                                            'view' => function ($url, $model) {
                                                $url = ['employees/view-port-staff', 'id' => $model->id];
                                                return Html::a('<span class="fa fa-eye"></span>', $url, [
                                                    'title' => 'View',
                                                    'data-toggle' => 'tooltip', 'data-original-title' => 'Save',
                                                    'class' => 'btn btn-success',

                                                ]);


                                            },


                                        ]
                                    ],
                                    [
                                        'class' => 'yii\grid\ActionColumn',
                                        //'header'=>'Actions',
                                        'headerOptions' => ['style' => 'width:01px'],
                                        'visible' => Yii::$app->user->can('createUser'),
                                        'template' => '{update}',
                                        'buttons' => [
                                            'update' => function ($url, $model) {
                                                $url = ['employees/update-port-staff', 'id' => $model->id];
                                                return Html::a('<span class="fa fa-pencil"></span>', $url, [
                                                    'title' => 'Edit',
                                                    'data-toggle' => 'tooltip', 'data-original-title' => 'Save',
                                                    'class' => 'btn btn-primary',

                                                ]);


                                            },


                                        ]
                                    ],
                                    [
                                        'class' => 'yii\grid\ActionColumn',
                                        'visible' => Yii::$app->user->can('deleteUser'),
                                        'template' => '{delete}',
                                        'buttons' => [
                                            'delete' => function ($url, $model) {
                                                $url = ['delete', 'id' => $model->id];
                                                return Html::a('<span class="fa fa-trash"></span>', $url, [
                                                    'title' => 'Edit',
                                                    'data-toggle' => 'tooltip', 'data-original-title' => 'Save',
                                                    'class' => 'btn btn-danger',

                                                ]);


                                            },


                                        ]
                                    ],

                                ],
                                'clientOptions' => [
                                    "lengthMenu" => [[100, -1], [100, Yii::t('app', "All")]],
                                    "info" => false,
                                    "responsive" => true,
                                    "dom" => 'lfTrtip',
                                    "tableTools" => [
                                        "aButtons" => [
                                            [
                                                "sExtends" => "copy",
                                                "sButtonText" => Yii::t('app', "Copy to clipboard")
                                            ], [
                                                "sExtends" => "csv",
                                                "sButtonText" => Yii::t('app', "Save to CSV")
                                            ], [
                                                "sExtends" => "xls",
                                                "oSelectorOpts" => ["page" => 'current']
                                            ], [
                                                "sExtends" => "pdf",
                                                "sButtonText" => Yii::t('app', "Save to PDF")
                                            ], [
                                                "sExtends" => "print",
                                                "sButtonText" => Yii::t('app', "Print")
                                            ],
                                        ]
                                    ]
                                ],
                            ]); ?>

                            <?php \yii\widgets\Pjax::end(); ?>
                        </div>

                        <div class="tab-pane active" id="tab_border_staff">

                            <p style="padding-top: 1%"/>
                            <div class="col-md-6">
                                <strong class="lead" style="color: #01214d;font-family: Tahoma"> <i
                                            class="fa fa-users"></i> RAHNTECH
                                    COMPANY LTD - Border Users</strong>
                            </div>
                            <div class="col-md-2">

                            </div>
                            <div class="col-md-6">
                                <?php if (Yii::$app->user->can('createUser')) { ?>
                                    <?= Html::a(Yii::t('app', '<i class="fa fa-user-plus"></i> Add New'), ['employees/create-border-staff'], ['class' => 'btn btn-primary waves-effect waves-light']) ?>
                                <?php } ?>
                            </div>
                            <p style="padding-top: 1%"/>

                            <?php \yii\widgets\Pjax::begin(); ?>
                            <?php
                            $searchModel = new \backend\models\EmployeesSearch();
                            $dataProvider = $searchModel->searchBorderStaff(Yii::$app->request->queryParams);
                            ?>

                            <?= \fedemotta\datatables\DataTables::widget([
                                'dataProvider' => $dataProvider,
                                'filterModel' => $searchModel,
                                'rowOptions' => function ($model) {
                                    $user = \backend\models\User::find()->select('status')->where(['employee_id' => $model->id])->one();
                                    if ($user->status == User::STATUS_INACTIVE) {

                                        return ['class' => 'danger'];

                                    } else if ($user->status == User::STATUS_INACTIVE) {
                                        return ['style' => 'danger'];
                                    }
                                },
                                'columns' => [
                                    ['class' => 'yii\grid\SerialColumn'],

                                    'name',
                                    [

                                        'label' => 'Username',
                                        'value' => function ($model) {
                                            $user = \backend\models\User::find()->select('username')->where(['employee_id' => $model->id])->one();
                                            if ($user != null) {
                                                return $user->username;
                                            } else {
                                                return '';
                                            }


                                        },

                                    ],
                                    'mobile',
                                    [

                                        'label' => 'Email',
                                        'value' => function ($model) {
                                            $user = \backend\models\User::find()->select('email')->where(['employee_id' => $model->id])->one();

                                            return $user->email;

                                        },

                                    ],

                                    'address',

                                    [

                                        'label' => 'Role',
                                        'value' => function ($model) {
                                            $user = \backend\models\User::find()->select('role')->where(['employee_id' => $model->id])->one();

                                            return $user->role;

                                        },

                                    ],

                                    [

                                        'label' => 'Status',

                                        'value' => function ($model) {
                                            $user = \backend\models\User::find()->select('status')->where(['employee_id' => $model->id])->one();

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
                                        'value' => 'user.username',
                                    ],
                                    'created_at',
                                    [
                                        'class' => 'yii\grid\ActionColumn',
                                        //    'header' => 'Actions',
                                        'template' => '{view}',
                                        'headerOptions' => ['style' => 'width:01px'],
                                        'buttons' => [
                                            'view' => function ($url, $model) {
                                                $url = ['employees/view-border-staff', 'id' => $model->id];
                                                return Html::a('<span class="fa fa-eye"></span>', $url, [
                                                    'title' => 'View',
                                                    'data-toggle' => 'tooltip', 'data-original-title' => 'Save',
                                                    'class' => 'btn btn-success',

                                                ]);


                                            },


                                        ]
                                    ],
                                    [
                                        'class' => 'yii\grid\ActionColumn',
                                        //'header'=>'Actions',
                                        'headerOptions' => ['style' => 'width:01px'],
                                        'visible' => Yii::$app->user->can('createUser'),
                                        'template' => '{update}',
                                        'buttons' => [
                                            'update' => function ($url, $model) {
                                                $url = ['employees/update-border-staff', 'id' => $model->id];
                                                return Html::a('<span class="fa fa-pencil"></span>', $url, [
                                                    'title' => 'Edit',
                                                    'data-toggle' => 'tooltip', 'data-original-title' => 'Save',
                                                    'class' => 'btn btn-primary',

                                                ]);


                                            },


                                        ]
                                    ],
                                    [
                                        'class' => 'yii\grid\ActionColumn',
                                        'visible' => Yii::$app->user->can('deleteUser'),
                                        'template' => '{delete}',
                                        'buttons' => [
                                            'delete' => function ($url, $model) {
                                                $url = ['delete', 'id' => $model->id];
                                                return Html::a('<span class="fa fa-trash"></span>', $url, [
                                                    'title' => 'Edit',
                                                    'data-toggle' => 'tooltip', 'data-original-title' => 'Save',
                                                    'class' => 'btn btn-danger',

                                                ]);


                                            },


                                        ]
                                    ],

                                ],
                                'clientOptions' => [
                                    "lengthMenu" => [[100, -1], [100, Yii::t('app', "All")]],
                                    "info" => false,
                                    "responsive" => true,
                                    "dom" => 'lfTrtip',
                                    "tableTools" => [
                                        "aButtons" => [
                                            [
                                                "sExtends" => "copy",
                                                "sButtonText" => Yii::t('app', "Copy to clipboard")
                                            ], [
                                                "sExtends" => "csv",
                                                "sButtonText" => Yii::t('app', "Save to CSV")
                                            ], [
                                                "sExtends" => "xls",
                                                "oSelectorOpts" => ["page" => 'current']
                                            ], [
                                                "sExtends" => "pdf",
                                                "sButtonText" => Yii::t('app', "Save to PDF")
                                            ], [
                                                "sExtends" => "print",
                                                "sButtonText" => Yii::t('app', "Print")
                                            ],
                                        ]
                                    ]
                                ],
                            ]); ?>

                            <?php \yii\widgets\Pjax::end(); ?>
                        </div>

                        <div class="tab-pane" id="tab_company_id">
                            <hr/>
                            <div class="col-md-6">
                                <strong class="lead" style="color: #01214d;font-family: Tahoma"> <i
                                            class="fa fa-home"></i> RAHNTECH
                                    COMPANY LTD - Credit Company Users</strong>
                            </div>

                            <div class="col-md-2">

                            </div>
                            <div class="col-md-6">
                                <?php if (Yii::$app->user->can('createUser')) { ?>
                                    <?= Html::a(Yii::t('app', '<i class="fa fa-user-plus"></i> Add New'), ['companies/create'], ['class' => 'btn btn-primary waves-effect waves-light']) ?>
                                <?php } ?>
                            </div>

                            <hr/>
                            <?php
                            $searchModel = new \backend\models\CompaniesSearch();
                            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
                            ?>
                            <?= \fedemotta\datatables\DataTables::widget([
                                'dataProvider' => $dataProvider,
                                'filterModel' => $searchModel,
                                'rowOptions' => function ($model) {
                                    $user = \backend\models\User::find()->select('status')->where(['company_id' => $model->id])->one();
                                    if ($user->status == User::STATUS_INACTIVE) {

                                        return ['class' => 'danger'];

                                    } else if ($user->status == User::STATUS_DELETED) {
                                        return ['style' => 'danger'];
                                    }
                                },
                                'columns' => [
                                    ['class' => 'yii\grid\SerialColumn'],

                                    'company_name',
                                    [

                                        'label' => 'Login Username',
                                        'value' => function ($model) {
                                            $user = \backend\models\User::find()->select('username')->where(['company_id' => $model->id])->one();

                                            return $user->username;

                                        },

                                    ],
                                    'mobile',
                                    [

                                        'label' => 'Email',
                                        'value' => function ($model) {
                                            $user = \backend\models\User::find()->select('email')->where(['company_id' => $model->id])->one();

                                            return $user->email;

                                        },

                                    ],

                                    [

                                        'label' => 'Role',
                                        'value' => function ($model) {
                                            $user = \backend\models\User::find()->select('role')->where(['company_id' => $model->id])->one();

                                            return $user->role;

                                        },

                                    ],

                                    [

                                        'label' => 'Status',

                                        'value' => function ($model) {
                                            $user = \backend\models\User::find()->select('status')->where(['company_id' => $model->id])->one();

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
                                        'value' => 'billCustomer.username',
                                    ],
                                    'created_at',
                                    [
                                        'class' => 'yii\grid\ActionColumn',
                                        //    'header' => 'Actions',
                                        'template' => '{view}',
                                        'headerOptions' => ['style' => 'width:01px'],
                                        'buttons' => [
                                            'view' => function ($url, $model) {
                                                $url = ['companies/view', 'id' => $model->id];
                                                return Html::a('<span class="fa fa-eye"></span>', $url, [
                                                    'title' => 'View',
                                                    'data-toggle' => 'tooltip', 'data-original-title' => 'Save',
                                                    'class' => 'btn btn-success',

                                                ]);


                                            },


                                        ]
                                    ],
                                    [
                                        'class' => 'yii\grid\ActionColumn',
                                        //'header'=>'Actions',
                                        'headerOptions' => ['style' => 'width:01px'],
                                        'visible' => Yii::$app->user->can('createUser'),
                                        'template' => '{update}',
                                        'buttons' => [
                                            'update' => function ($url, $model) {
                                                $url = ['companies/update', 'id' => $model->id];
                                                return Html::a('<span class="fa fa-pencil"></span>', $url, [
                                                    'title' => 'Edit',
                                                    'data-toggle' => 'tooltip', 'data-original-title' => 'Save',
                                                    'class' => 'btn btn-primary',

                                                ]);


                                            },


                                        ]
                                    ],
                                    [
                                        'class' => 'yii\grid\ActionColumn',
                                        'visible' => Yii::$app->user->can('deleteUser'),
                                        'template' => '{delete}',
                                        'buttons' => [
                                            'delete' => function ($url, $model) {
                                                $url = ['companies/delete', 'id' => $model->id];
                                                return Html::a('<span class="fa fa-trash"></span>', $url, [
                                                    'title' => 'Edit',
                                                    'data-toggle' => 'tooltip', 'data-original-title' => 'Save',
                                                    'class' => 'btn btn-danger',

                                                ]);


                                            },


                                        ]
                                    ],

                                ],
                                'clientOptions' => [
                                    "lengthMenu" => [[100, -1], [100, Yii::t('app', "All")]],
                                    "info" => false,
                                    "responsive" => true,
                                    "dom" => 'lfTrtip',
                                    "tableTools" => [
                                        "aButtons" => [
                                            [
                                                "sExtends" => "copy",
                                                "sButtonText" => Yii::t('app', "Copy to clipboard")
                                            ], [
                                                "sExtends" => "csv",
                                                "sButtonText" => Yii::t('app', "Save to CSV")
                                            ], [
                                                "sExtends" => "xls",
                                                "oSelectorOpts" => ["page" => 'current']
                                            ], [
                                                "sExtends" => "pdf",
                                                "sButtonText" => Yii::t('app', "Save to PDF")
                                            ], [
                                                "sExtends" => "print",
                                                "sButtonText" => Yii::t('app', "Print")
                                            ],
                                        ]
                                    ]
                                ],
                            ]); ?>
                        </div>
                    </div>
                </div>
            </div>
        </ul>
    </div>
</div>
</div>
