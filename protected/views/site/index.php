<?php
/**
 * index.php
 *
 * PHP version 5.4+
 *
 * @author    Philippe Gaultier <pgaultier@sweelix.net>
 * @copyright 2010-2014 Sweelix
 * @license   http://www.sweelix.net/license license
 * @version   XXX
 * @link      http://www.sweelix.net
 * @category  views
 * @package   application.views.site
 */

$this->pageTitle = "Sweelix boiler plate";
use sweelix\yii1\web\helpers\Html;
?>

<div class="jumbotron">
	<h1>Sweelix Boilerplate</h1>
	<p>
		This is the most simple template to let the developpers start smoothly with Sweelix.<br/>
		Use it as a starting point to create something more unique.</p>
	<p>
		<?php echo Html::link('Jump to the backoffice &raquo;', ['sweeft/'], [
				'class' => 'btn btn-primary btn-lg',
				'role' => 'button',
			]);
		?>
	</p>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h2>Before playing around</h2>
			<ul class="list-group">
				<li class="list-group-item active">
					<h4 class="list-group-item-heading">Configure the Database</h4>
					<p class="list-group-item-text">edit the file <em>config/db.php</em> to match your database settings</p>
				</li>
				<li class="list-group-item active">
					<h4 class="list-group-item-heading">Run the migrations</h4>
					<p class="list-group-item-text"><em>yiic migrate</em></p>
				</li>
			</ul>
			<h2>Now you are ready</h2>
			<ul class="list-group">
				<li class="list-group-item active">
					<h4 class="list-group-item-heading">Build an awesome website</h4>
					<p class="list-group-item-text">take coffee, ...</p>
				</li>
			</ul>
		</div>
	</div>
</div>