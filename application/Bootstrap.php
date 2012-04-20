<?php
/**
 * Bootstrap.php
 *
 * @category  Time Tracking
 * @package   Bootstrap
 * @copyright Copyright (c) 2012 Markus Handschuh <markus.handschuh@mayflower.de>
 * @author    Markus Handschuh <markus.handschuh@mayflower.de>
 */

/**
 * Central application bootstrapper
 *
 * @category  Time Tracking
 * @package   Bootstrap
 * @copyright Copyright (c) 2012 Markus Handschuh <markus.handschuh@mayflower.de>
 * @author    Markus Handschuh <markus.handschuh@mayflower.de>
 */
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

    /**
     * Initialize rest routing for the application
     *
     * @return void
     */
    protected function _initRest()
    {
        // bootstrap needed resources
        $this->bootstrap('frontController');
        $front  = $this->getResource('frontController');
        $front  = Zend_Controller_Front::getInstance();
        $router = $front->getRouter();

        // remove any default routes and initialize rest route
        $router->removeDefaultRoutes();
        $rest = new My_Rest_Route($front);

        // add rest route as default route
        $router->addRoute('default', $rest);
    }

}