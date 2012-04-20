<?php
/**
 * Route.php
 *
 * @category   Time Tracking
 * @package    My
 * @subpackage Exception
 * @copyright  Copyright (c) 2012 Markus Handschuh <markus.handschuh@mayflower.de>
 * @author     Markus Handschuh <markus.handschuh@mayflower.de>
 */

/**
 * Enables RESTful modular routing
 *
 * @category   Time Tracking
 * @package    My
 * @subpackage Exception
 * @copyright  Copyright (c) 2012 Markus Handschuh <markus.handschuh@mayflower.de>
 * @author     Markus Handschuh <markus.handschuh@mayflower.de>
 */
class My_Rest_Route extends Zend_Rest_Route
{

    /**
     * @param  Zend_Controller_Request_Http $request
     * @param  bool                         $partial default is false
     * @return array
     */
    public function match($request, $partial = false)
    {
        $values = parent::match($request, $partial);

        // switch index to get
        if ('index' == $values[$this->_actionKey]) {
            $values[$this->_actionKey] = 'get';
        }

        return $values;
    }

}