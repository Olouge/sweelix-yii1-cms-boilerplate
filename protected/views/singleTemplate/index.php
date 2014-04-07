<?php
/**
 * index.php
 *
 * PHP version 5.4+
 *
 * @author    Philippe Gaultier <pgaultier@sweelix.net>
 * @copyright 2010-2014 Sweelix
 * @license   http://www.sweelix.net/license license
 * @version   3.1.0
 * @link      http://www.sweelix.net
 * @category  views
 * @package   application.views.singleTemplate
 */

$this->pageTitle = "Sweelix boiler plate - singleTemplate";
use sweelix\yii1\web\helpers\Html;
?>

<div class="jumbotron">
	<h1>Sweelix Boilerplate - singleTemplate</h1>
	<p>
		This controller / action has been called dynamically.</p>
	<p>
		<?php echo Html::link('Jump to index &raquo;', ['site/'], [
				'class' => 'btn btn-primary btn-lg',
				'role' => 'button',
			]);
		?>
	</p>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h2>Current context : </h2>
			<ul class="list-group">
				<li class="list-group-item active">
					<h4 class="list-group-item-heading">Content ID</h4>
					<p class="list-group-item-text">contentId = <?php echo ($this->contentId===null)?'null':$this->contentId; ?></p>
				</li>
				<li class="list-group-item active">
					<h4 class="list-group-item-heading">Node ID</h4>
					<p class="list-group-item-text">nodeId = <?php echo ($this->nodeId===null)?'null':$this->nodeId; ?></p>
				</li>
				<li class="list-group-item active">
					<h4 class="list-group-item-heading">Group ID</h4>
					<p class="list-group-item-text">groupId = <?php echo ($this->groupId===null)?'null':$this->groupId; ?></p>
				</li>
				<li class="list-group-item active">
					<h4 class="list-group-item-heading">Tag ID</h4>
					<p class="list-group-item-text">tagId = <?php echo ($this->tagId===null)?'null':$this->tagId; ?></p>
				</li>
			</ul>
		</div>
	</div>
</div>