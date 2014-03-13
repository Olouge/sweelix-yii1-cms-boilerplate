<?php
/**
 * index.php
 *
 * PHP version 5.4+
 *
 * Initial application script
 *
 * @author    Philippe Gaultier <pgaultier@sweelix.net>
 * @copyright 2010-2014 Sweelix
 * @license   http://www.sweelix.net/license license
 * @version   1.0.0
 * @link      http://www.sweelix.net
 * @category  base
 * @package   application.base
 */

$yii = __DIR__.'/protected/vendor/yiisoft/yii/framework/yii.php';

include(__DIR__.'/protected/vendor/autoload.php');

$config = dirname(__FILE__).'/protected/config/main.php';
$modePath = dirname(__FILE__).'/protected/config/';
$debug = isset($_SERVER['YII_DEBUG'])?true:false;

if(isset($_SERVER['YII_ENV']) && (in_array($_SERVER['YII_ENV'], array('prod', 'factory', 'dev')) === true)) {
	if(file_exists($modePath.'main-'.$_SERVER['YII_ENV'].'.php') === true ) {
		$config = $modePath.'main-'.$_SERVER['YII_ENV'].'.php';
	}
}

if($debug === true) {
	// remove the following lines when in production mode
	defined('YII_DEBUG') or define('YII_DEBUG',true);
	// specify how many levels of call stack should be shown in each log message
	defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);
}
require_once($yii);
Yii::createWebApplication($config)->run();
