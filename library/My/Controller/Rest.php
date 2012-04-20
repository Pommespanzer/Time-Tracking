<?php
/**
 * Rest.php
 *
 * @category   Time Tracking
 * @package    My
 * @subpackage Controller
 * @copyright  Copyright (c) 2012 Markus Handschuh <markus.handschuh@mayflower.de>
 * @author     Markus Handschuh <markus.handschuh@mayflower.de>
 */

/**
 * Rest controller
 *
 * @category   Time Tracking
 * @package    My
 * @subpackage Controller
 * @copyright  Copyright (c) 2012 Markus Handschuh <markus.handschuh@mayflower.de>
 * @author     Markus Handschuh <markus.handschuh@mayflower.de>
 *
 * @abstract
 */
abstract class My_Controller_Rest extends My_Controller_Action
{

    /**
     * Handles HTTP GET Request
     *
     * @abstract
     */
    abstract public function getAction();

    /**
     * Handles HTTP POST Request
     *
     * @abstract
     */
    abstract public function postAction();

    /**
     * Handles HTTP PUT Request (Update resource)
     *
     * @abstract
     */
    abstract public function putAction();

    /**
     * Handles HTTP DELETE Request
     *
     * @abstract
     */
    abstract public function deleteAction();

}