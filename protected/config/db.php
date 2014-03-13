<?php
/**
 * db.php
 *
 * PHP version 5.4+
 *
 * This is the main database configuration.
 *
 * @author    Philippe Gaultier <pgaultier@sweelix.net>
 * @copyright 2010-2014 Sweelix
 * @license   http://www.sweelix.net/license license
 * @version   1.0.0
 * @link      http://www.sweelix.net
 * @category  config
 * @package   application.config
 */
return [
	'connectionString' => 'mysql:host=localhost;dbname=sweelix-demo',
	'username' => 'root',
	'charset' => 'utf8',
	'emulatePrepare' => true,
	'password' => '',
	// 'initSQLs' => array('SET time_zone = \'+02:00\''),
	'tablePrefix' => '',
];