<?php
/**
 * main.php
 *
 * PHP version 5.4+
 *
 * @author    Philippe Gaultier <pgaultier@sweelix.net>
 * @copyright 2010-2014 Sweelix
 * @license   http://www.sweelix.net/license license
 * @version   XXX
 * @link      http://www.sweelix.net
 * @category  views
 * @package   application.views.layouts
 */

$clientScript = Yii::app()->getClientScript();
$clientScript->registerCoreScript('jquery');

?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $this->pageTitle; ?></title>

    <?php // Bootstrap ?>
    <?php $clientScript->registerCssFile(Yii::app()->getBaseUrl().'/css/bootstrap.min.css'); ?>

    <?php // HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries ?>
    <?php // WARNING: Respond.js doesn't work if you view the page via file:// ?>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php echo $content; ?>

    <?php // Include all compiled plugins (below), or include individual files as needed ?>
    <?php $clientScript->registerScriptFile(Yii::app()->getBaseUrl().'/js/bootstrap.min.js', CClientScript::POS_END); ?>
  </body>
</html>
