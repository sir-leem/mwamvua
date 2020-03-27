<?php
/**
 * navigation.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things-demo
 * @license MIT
 */

use yii\bootstrap\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use p2m\helpers\FA;
use p2m\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

?>
<?php
	NavBar::begin([
		'brandLabel' => '<img width="150" height="50" src="http://placehold.it/150x50/222222/FFCC00?text=P2Y2Things" alt="P2Y2Things">',
//		'brandLabel' => '<img width="150" height="50" src="/images/p2y2things_150x50.png" alt="P2Y2Things">',
		'brandUrl' => Yii::$app->homeUrl,
		'options' => [
			'class' => 'navbar-p2m navbar-inverse navbar-fixed-top',
		],
	]);

	$menuItems = [
	//	['label' => 'Home', 'url' => ['/site/index']],
		['label' => 'Charts', 'items' => [
			['label' => 'Flot Charts', 'url' => ['/site/page', 'view' => 'flot']],
			['label' => 'Morris.js Charts', 'url' => ['/site/page', 'view' => 'morris']],
		]],
		['label' => 'Demos', 'items' => [
			['label' => 'is.gd', 'url' => ['/site/page', 'view' => 'is-gd']],
			['label' => 'UUID', 'url' => ['/site/page', 'view' => 'uuid']],
			['label' => 'Tables', 'url' => ['/site/page', 'view' => 'tables']],
			['label' => 'Forms', 'url' => ['/site/page', 'view' => 'forms']],
			['label' => 'Calendar', 'url' => ['/site/page', 'view' => 'calendar']],
			['label' => 'Animate.css', 'url' => ['/site/page', 'view' => 'animate']],
		]],
		['label' => 'UI Elements', 'items' => [
			['label' => 'Panels and Wells', 'url' => ['/site/page', 'view' => 'panels-wells']],
			['label' => 'Buttons', 'url' => ['/site/page', 'view' => 'buttons']],
			['label' => 'Notifications', 'url' => ['/site/page', 'view' => 'notifications']],
			['label' => 'Typography', 'url' => ['/site/page', 'view' => 'typography']],
			['label' => 'Grid', 'url' => ['/site/page', 'view' => 'grid']],
			['label' => 'Shortcodes', 'url' => ['/site/page', 'view' => 'shortcodes']],
		]],
		['label' => 'Icons', 'items' => [
			['label' => 'Font Awesome', 'url' => ['/site/page', 'view' => 'font-awesome']],
			['label' => 'Font Awesome Examples', 'url' => ['/site/page', 'view' => 'font-awesome-examples']],
			['label' => 'Glyphicons', 'url' => ['/site/page', 'view' => 'glyphicons']],
			'<li class="divider"></li>',
			['label' => 'Flag Icon CSS', 'url' => ['/site/page', 'view' => 'flag-icon-css']],
			['label' => 'Bootstrap Social', 'url' => ['/site/page', 'view' => 'bootstrap-social']],
		]],
		['label' => 'Pages', 'items' => [
			['label' => 'About', 'url' => ['/site/about']],
			['label' => 'Contact', 'url' => ['/site/contact']],
			['label' => 'Blank Page', 'url' => ['/site/page', 'view' => 'blank']],
		]],
		['label' => 'Developer', 'items' => [
			['label' => 'Gii', 'url' => ['/gii']],
			['label' => 'Debug', 'url' => ['/debug']],
			['label' => 'Scratchpad', 'url' => ['/site/page', 'view' => 'scratchpad']],
		]],

		['label' => '... in progress', 'items' => [
		//	['label' => 'SweetAlert', 'url' => ['/site/page', 'view' => 'sweetalert']],
		]],
	];
	$userMenuItems = [];
	if (Yii::$app->user->isGuest) {
		$userMenuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
		$userMenuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
	} else {
		$userMenuItems[] = [
			'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
			'url' => ['/site/logout'],
			'linkOptions' => ['data-method' => 'post']
		];
	}
	$menuItems[] = [
		'label' => 'User',
		'items' => $userMenuItems,
		'options' => ['class' => 'dropdown']
	];
	echo Nav::widget([
		'options' => ['class' => 'navbar-nav navbar-right'],
		'items' => $menuItems,
	]);
	NavBar::end();
?>
