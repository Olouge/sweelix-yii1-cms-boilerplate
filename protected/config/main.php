<?php
/**
 * main.php
 *
 * PHP version 5.4+
 *
 * This is the main Web application configuration. Any non-environement-dependant writable properties of CWebApplication can be configured here.
 *
 * @author    Philippe Gaultier <pgaultier@sweelix.net>
 * @copyright 2010-2014 Sweelix
 * @license   http://www.sweelix.net/license license
 * @version   XXX
 * @link      http://www.sweelix.net
 * @category  config
 * @package   application.config
 */

//Config
return [
	'basePath' => dirname(__DIR__),
	'name' => 'Boilerplate console application',
	'sourceLanguage' => 'en',
	'language' => 'en',
	'timezone' => 'Europe/Paris',
	'controllerNamespace' => 'app\controllers',							//Handle namespacing
	// preloading 'log' component
	'preload' => ['log'],

	// autoloading model and component classes
	'import' => [],
	'behaviors' => [],
	'modules' => [
		'sweeft' => [
			'id' => 'sweeft',
			'class' => 'sweelix\yii1\admin\core\Module',
			'editor' => 'cleditor',
			'modules' => [
				'dashboard' => [
					'class' => 'sweelix\yii1\admin\dashboard\Module',
				],
				'structure' => [
					'class' => 'sweelix\yii1\admin\structure\Module',
				],
				'cloud' => [
					'class' => 'sweelix\yii1\admin\cloud\Module',
				],
				'users' => [
					'class' => 'sweelix\yii1\admin\users\Module',
				],
			],
		],
	],

	// application components
	'components' => [
		'clientScript' => [
			'behaviors' => [
				'lessClientScript' => [
					'class' => 'sweelix\yii1\behaviors\Less',
					'cacheId' => 'cache', // define cache component to use
					'cacheDuration' => 0, // default value infinite duration
					'forceRefresh' => true, // default value : do not recompile files
					'formatter' => 'lessjs', // default output format
					'variables' => [], // variables to expand
					'directory' => 'application.less', // directory where less files are stored
					// 'assetsDirectories' => 'img', // directory (relative to less files) to publish
				],
				'sweelixScript' => [
					'class' => 'sweelix\yii1\behaviors\ClientScript'
				],
			],
		],
		'db' => require(__DIR__.'/db.php'),
		'sweelix'=>[
			'class' => 'sweelix\yii1\ext\components\Config',
			'urlPattern' => '/[^\/a-z0-9_-]+/',
			//'definitionTplPath' => 'application.templates',
		],
		'image' => [
			'class' => 'sweelix\yii1\components\ImageConfig',
			'quality' => '80',
			'cachingMode' => sweelix\image\Image::MODE_NORMAL,
			'urlSeparator' => '/',
			'errorImage' => 'error.png',
		],
		'request' => [
			'behaviors' => [
				'sweelixAjax' => [
					'class' => 'sweelix\yii1\behaviors\Ajax',
				],
			],
		],
		'log' => [
			'class' => 'CLogRouter',
			'routes' => [
				[
					'class' => 'CFileLogRoute',
					'levels' => 'error, warning',
				],
			],
		],
		//Human-readable url management
		'urlManager' => [
			'class' => 'sweelix\yii1\ext\web\UrlManager',
			'urlFormat'=>'get',
			'urlSuffix'=>'.html',
			'showScriptName' => false,
			'rules'=>[
				//Default
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
				'<controller:\w+>'=>'<controller>',
			],
		],
	],

	//Parameters
	'params' => [],
];
