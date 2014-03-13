<?php
/**
 * console.php
 *
 * PHP version 5.4+
 *
 * This is the configuration for yiic console application. Any writable CConsoleApplication properties can be configured here.
 *
 * @author    Philippe Gaultier <pgaultier@sweelix.net>
 * @copyright 2010-2014 Sweelix
 * @license   http://www.sweelix.net/license license
 * @version   1.0.0
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
	'import' => [],
	'commandMap' => [
		'migrate' => [
			'class' => 'sweelix\yii1\commands\MigrateCommand',
			'migrationPath' =>'application.migrations',
			'extendedMigrationPath' => [
				'application.vendor.sweelix.yii1-ext.migrations',
			],
			'migrationTable' =>'migrations',
			'connectionID' =>'db',
		],
	],
	// application components
	'components' => [
		'db' => require(__DIR__.'/db.php'),
		'log' => [
			'class' => 'CLogRouter',
			'routes' => [
				[
					'class' =>'CFileLogRoute',
					'levels' =>'error, warning',
				],
			],
		],
	],
	'params' => [],
];
