<?php
/**
 * uuid.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-p2y2-things-demo
 * @license MIT
 */

use yii\bootstrap\Html;
use yii\widgets\Breadcrumbs;
use p2m\helpers\FA;
use p2m\helpers\Uuid;

// load assets...

/* @var $this yii\web\View */

$this->title = 'UUID';
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="content-wrapper">
	<?= Breadcrumbs::widget([
		'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
	]) ?>

	<div class="jumbotron">
		<h1><?= Html::encode($this->title) ?></h1>
		Lots &amp; lots of UUIDs!
	</div>

	<div class="body-content">

		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-5">
				<h4>Using no subdomain.</h4>
				<p><code>\p2m\helpers\Uuid::uuid()</code></p>
				<ul>
					<li><?= Uuid::uuid() ?></li>
					<li><?= Uuid::uuid() ?></li>
					<li><?= Uuid::uuid() ?></li>
					<li><?= Uuid::uuid() ?></li>
					<li><?= Uuid::uuid() ?></li>
					<li><?= Uuid::uuid() ?></li>
					<li><?= Uuid::uuid() ?></li>
					<li><?= Uuid::uuid() ?></li>
					<li><?= Uuid::uuid() ?></li>
					<li><?= Uuid::uuid() ?></li>
					<li><?= Uuid::uuid() ?></li>
					<li><?= Uuid::uuid() ?></li>
					<li><?= Uuid::uuid() ?></li>
					<li><?= Uuid::uuid() ?></li>
					<li><?= Uuid::uuid() ?></li>
					<li><?= Uuid::uuid() ?></li>
					<li><?= Uuid::uuid() ?></li>
					<li><?= Uuid::uuid() ?></li>
					<li><?= Uuid::uuid() ?></li>
					<li><?= Uuid::uuid() ?></li>
					<li><?= Uuid::uuid() ?></li>
					<li><?= Uuid::uuid() ?></li>
					<li><?= Uuid::uuid() ?></li>
					<li><?= Uuid::uuid() ?></li>
					<li><?= Uuid::uuid() ?></li>
				</ul>
			</div>
			<div class="col-md-5">
				<h4>Using subdomain com.example.</h4>
				<p><code>\p2m\helpers\Uuid::uuid('com.example')</code></p>
				<ul>
					<li><?= Uuid::uuid('com.example') ?></li>
					<li><?= Uuid::uuid('com.example') ?></li>
					<li><?= Uuid::uuid('com.example') ?></li>
					<li><?= Uuid::uuid('com.example') ?></li>
					<li><?= Uuid::uuid('com.example') ?></li>
					<li><?= Uuid::uuid('com.example') ?></li>
					<li><?= Uuid::uuid('com.example') ?></li>
					<li><?= Uuid::uuid('com.example') ?></li>
					<li><?= Uuid::uuid('com.example') ?></li>
					<li><?= Uuid::uuid('com.example') ?></li>
					<li><?= Uuid::uuid('com.example') ?></li>
					<li><?= Uuid::uuid('com.example') ?></li>
					<li><?= Uuid::uuid('com.example') ?></li>
					<li><?= Uuid::uuid('com.example') ?></li>
					<li><?= Uuid::uuid('com.example') ?></li>
					<li><?= Uuid::uuid('com.example') ?></li>
					<li><?= Uuid::uuid('com.example') ?></li>
					<li><?= Uuid::uuid('com.example') ?></li>
					<li><?= Uuid::uuid('com.example') ?></li>
					<li><?= Uuid::uuid('com.example') ?></li>
					<li><?= Uuid::uuid('com.example') ?></li>
					<li><?= Uuid::uuid('com.example') ?></li>
					<li><?= Uuid::uuid('com.example') ?></li>
					<li><?= Uuid::uuid('com.example') ?></li>
					<li><?= Uuid::uuid('com.example') ?></li>
				</ul>
			</div>
		</div>

	</div>

	<!-- this goes on every site file in p2made demos -->
	<br><div class="alert alert-success" role="alert">
		<ul class="fa-ul">
			<li>
				<?= FA::fw(FA::_CODE)->li()->size(FA::SIZE_LARGE) ?> <code><?= __FILE__ ?></code>
			</li>
		</ul>
	</div>
</div><!-- /#content-wrapper -->
