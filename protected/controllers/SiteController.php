<?php
/**
 * SiteController.php
 *
 * PHP version 5.4+
 *
 * @author    Philippe Gaultier <pgaultier@sweelix.net>
 * @copyright 2010-2014 Sweelix
 * @license   http://www.sweelix.net/license license
 * @version   XXX
 * @link      http://www.sweelix.net
 * @category  controllers
 * @package   application.controllers
 */

namespace app\controllers;
use \CController as Controller;
use sweelix\yii1\ext\db\CriteriaBuilder;

/**
 * This is the basic app controller
 *
 * @author    Philippe Gaultier <pgaultier@sweelix.net>
 * @copyright 2010-2014 Sweelix
 * @license   http://www.sweelix.net/license license
 * @version   XXX
 * @link      http://www.sweelix.net
 * @category  controllers
 * @package   application.controllers
 * @since     XXX
 */
class SiteController extends Controller {

	/**
	 * Default action
	 *
	 * @return void
	 * @since  XXX
	 */
	public function actionIndex() {
		$this->render('index');
	}
}