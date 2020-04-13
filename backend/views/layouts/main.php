<?php

use backend\assets\AppAsset;
use dmstr\web\AdminLteAsset;
use kartik\growl\Growl;
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

$bundle = yiister\gentelella\assets\Asset::register($this);

if (Yii::$app->controller->action->id === 'login') {
    /**
     * Do not use this code in your template. Remove it.
     * Instead, use the code  $this->layout = '//main-login'; in your controller.
     */
    echo $this->render(
        'main-login',
        ['content' => $content]
    );
} else {

    if (class_exists('backend\assets\AppAsset')) {
        backend\assets\AppAsset::register($this);
    } else {
        yiister\gentelella\assets\Asset::register($this);
    }
    ?>
    <?php $this->beginPage(); ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="nav-<?= !empty($_COOKIE['menuIsCollapsed']) && $_COOKIE['menuIsCollapsed'] == 'true' ? 'sm' : 'md' ?>">
    <?php $this->beginBody(); ?>

    <!-- Get all flash messages and loop through them -->
    <?php foreach (Yii::$app->session->getAllFlashes() as $message):; ?>
        <?php
        echo kartik\growl\Growl::widget([
            'type' => (!empty($message['type'])) ? $message['type'] : 'danger',
            'title' => (!empty($message['title'])) ? Html::encode($message['title']) : 'Title Not Set!',
            'icon' => (!empty($message['icon'])) ? $message['icon'] : 'fa fa-info',
            'body' => (!empty($message['message'])) ? Html::encode($message['message']) : 'Message Not Set!',
            'showSeparator' => true,
            'delay' => 1, //This delay is how long before the message shows
            'pluginOptions' => [
                'delay' => (!empty($message['duration'])) ? $message['duration'] : 3000, //This delay is how long the message shows for
                'placement' => [
                    'from' => (!empty($message['positonY'])) ? $message['positonY'] : 'top',
                    'align' => (!empty($message['positonX'])) ? $message['positonX'] : 'left',
                ]
            ]
        ]);
        ?>
    <?php endforeach; ?>


    <div class="container body">

        <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="/" class="site_title"><i class="fa fa-paw"></i> <span>RAHNTECH COMPANY LTD</span></a>
                    </div>
                    <div class="clearfix"></div>

                    <!-- menu prile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <?php

                            echo Html::img('uploads/logo-rahntech.png',
                                ['width' => '50px', 'height' => '50px', 'class' => 'img-circle profile_img']);
                            ?>
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2><?php if (!Yii::$app->user->isGuest) {
                                    //  echo " " . Yii::$app->user->identity->username;

                                    echo Yii::$app->user->identity->username;
                                    //   $user_id = Yii::$app->user->identity->id

                                } else if (Yii::$app->user->isGuest) {

                                    return Yii::$app->getResponse()->redirect(Yii::$app->getHomeUrl());


                                }
                                ?></h2>
                        </div>
                    </div>
                    <!-- /menu prile quick info -->

                    <br/>

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                        <div class="menu_section">
                            <h3>General</h3>
                            <?=
                            \yiister\gentelella\widgets\Menu::widget(
                                [
                                    "items" => [
                                        ["label" => "Home", "url" => ["/"], "icon" => "home"],
                                        [
                                            "label" => "Configuration",
                                            'visible' => Yii::$app->user->can('viewConfigurationModule'),
                                            "icon" => "ban",
                                            "url" => "#",
                                            "items" => [
                                                [
                                                    "label" => "System Module",
                                                    'visible' => Yii::$app->user->can('SuperAdministrator'),
                                                    "url" => ["/system-module/index"],
                                                ],
                                                [
                                                    "label" => "Company Profile",
                                                    'visible' => Yii::$app->user->can('viewCompanyProfile'),
                                                    "url" => ["/company-details/index"],
                                                ],
                                                [
                                                    "label" => "Location",
                                                    "url" => ["/location/index"],
                                                ],

                                                [
                                                    "label" => "Borders & SalesPoint",
                                                    "url" => ["/border-port/border"],
                                                ],

                                                [
                                                    "label" => "User Allocated",
                                                    "url" => ["/border-port-user/index"],
                                                ],
                                            ],
                                        ],
                                        [
                                            "label" => "Devices Rotation",
                                            'visible' => Yii::$app->user->can('viewDevicesRotationModule'),
                                            "icon" => "shield",
                                            "url" => "#",
                                            "items" => [
                                                [
                                                    "label" => "Register Devices",
                                                    "icon" => "database",
                                                    "url" => ["/devices/index"],

                                                ],
                                            ],
                                        ],
                                        [
                                            "label" => "Report",
                                            'visible' => Yii::$app->user->can('viewReportModule'),
                                            "icon" => "bar-chart",
                                            "url" => ["/awaiting-receive-report/index"],

                                        ],
                                        [
                                            "label" => "System Users",
                                            'visible' => Yii::$app->user->can('viewUserManagementModule'),
                                            "icon" => "user",
                                            "url" => ["/employees/index-administrator"],
                                        ],
                                        [
                                            "label" => "Settings",
                                            'visible' => Yii::$app->user->can('viewSettingModule'),
                                            "url" => "#",
                                            "icon" => "cogs",
                                            "items" => [
                                                [
                                                    'label' => 'Users',
                                                    'url' => ['/user/index'],
                                                ],
                                                [
                                                    'label' => 'Audit',
                                                    'url' => ['/audit/index'],
                                                ],

                                                [
                                                    'label' => 'Access Control',
                                                    'url' => ['/role/index'],
                                                ],

                                            ],
                                        ],

                                    ],
                                ]
                            )
                            ?>
                        </div>

                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">

                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                                   aria-expanded="false">
                                    <img src="http://placehold.it/128x128" alt=""><?php if (!Yii::$app->user->isGuest) {
                                        //  echo " " . Yii::$app->user->identity->username;

                                        echo Yii::$app->user->identity->username;
                                        //   $user_id = Yii::$app->user->identity->id

                                    } else if (Yii::$app->user->isGuest) {

                                        return Yii::$app->getResponse()->redirect(Yii::$app->getHomeUrl());


                                    }
                                    ?>
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a href="index.php?r=user/profile"> My Profile</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="badge bg-red pull-right">50%</span>
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Help</a>
                                    </li>
                                    <li>
                                        <?= Html::a(
                                            'Sign out',
                                            ['/site/logout'],
                                            ['data-method' => 'post', 'class' => 'fa fa-sign-out pull-right', 'style' => "color:red;font-size:15px;"]
                                        ) ?>

                                    </li>
                                </ul>
                            </li>

                            <li role="presentation" class="dropdown">
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown"
                                   aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge bg-green">6</span>
                                </a>
                                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                    <li>
                                        <a>
                      <span class="image">
                                        <img src="http://placehold.it/128x128" alt="Profile Image"/>
                                    </span>
                                            <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                      <span class="image">
                                        <img src="http://placehold.it/128x128" alt="Profile Image"/>
                                    </span>
                                            <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                      <span class="image">
                                        <img src="http://placehold.it/128x128" alt="Profile Image"/>
                                    </span>
                                            <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                      <span class="image">
                                        <img src="http://placehold.it/128x128" alt="Profile Image"/>
                                    </span>
                                            <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                                            <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="text-center">
                                            <a href="/">
                                                <strong>See All Alerts</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                </div>

            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <?php if (isset($this->params['h1'])): ?>
                    <div class="page-title">
                        <div class="title_left">
                            <h1><?= $this->params['h1'] ?></h1>
                        </div>
                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Go!</button>
                            </span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="clearfix"></div>

                <?= $content ?>
            </div>
            <!-- footer content -->
            <footer>
                <div class="pull-right">

                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>

    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>
    <!-- /footer content -->
    <?php $this->endBody(); ?>
    </body>
    </html>
    <?php $this->endPage(); ?>
<?php } ?>

<?php



