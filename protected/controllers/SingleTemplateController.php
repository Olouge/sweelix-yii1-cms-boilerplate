<?php
/**
 * SiteController.php
 *
 * PHP version 5.4+
 *
 * @author    Philippe Gaultier <pgaultier@sweelix.net>
 * @copyright 2010-2014 Sweelix
 * @license   http://www.sweelix.net/license license
 * @version   3.1.0
 * @link      http://www.sweelix.net
 * @category  controllers
 * @package   application.controllers
 */

namespace application\controllers;
use sweelix\yii1\ext\web\Controller;

/**
 * This is the basic app controller
 *
 * @author    Philippe Gaultier <pgaultier@sweelix.net>
 * @copyright 2010-2014 Sweelix
 * @license   http://www.sweelix.net/license license
 * @version   3.1.0
 * @link      http://www.sweelix.net
 * @category  controllers
 * @package   application.controllers
 * @since     1.0.0
 */
class SingleTemplateController extends Controller {

	/**
	 * Default action
	 *
	 * @return void
	 * @since  1.0.0
	 */
	public function actionIndex() {
		$this->render('index');
	}
}