<?php
/**
 * index.php
 *
 * PHP version 5.4+
 *
 * Initial entry point of the console commands.
 *
 * @author    Philippe Gaultier <pgaultier@sweelix.net>
 * @copyright 2010-2014 Sweelix
 * @license   http://www.sweelix.net/license license
 * @version   1.0.0
 * @link      http://www.sweelix.net
 * @category  base
 * @package   application.base
 */

$yiic = __DIR__.'/vendor/yiisoft/yii/framework/yiic.php';
include(__DIR__.'/vendor/autoload.php');

$configPath = __DIR__.'/config';
$config = $configPath.'/console.php';

$htaccessPath = dirname(__DIR__).'/.htaccess';

// detect current front-end mode
$htaccessData = explode("\n", file_get_contents($htaccessPath));

foreach($htaccessData as $htaccessLine) {
	if(preg_match('/^\s*setenv\s+YII_ENV\s+(\w+)\s*$/i', $htaccessLine, $matches)>0) {
		$yiiEnv = $matches[1];
	}
	if(preg_match('/^\s*setenv\s+YII_DEBUG\s+(\w+)\s*$/i', $htaccessLine, $matches)>0) {
		$yiiDebug = true;
	}
}

if(isset($yiiEnv) && (in_array($yiiEnv, array('prod', 'factory', 'dev')) === true)) {
	if(is_file($configPath.'/console-'.$yiiEnv.'.php') === true) {
		$config = $configPath.'/console-'.$yiiEnv.'.php';
	}
}

if(isset($yiiDebug) === true) {
	// remove the following lines when in production mode
	defined('YII_DEBUG') or define('YII_DEBUG',true);
	// specify how many levels of call stack should be shown in each log message
	defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);
}

require_once($yiic);

