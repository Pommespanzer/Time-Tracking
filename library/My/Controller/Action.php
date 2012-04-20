<?php
/**
 * Action.php
 *
 * @category   Time Tracking
 * @package    My
 * @subpackage Controller
 * @copyright  Copyright (c) 2012 Markus Handschuh <markus.handschuh@mayflower.de>
 * @author     Markus Handschuh <markus.handschuh@mayflower.de>
 */

/**
 * Custom controller action
 *
 * @category   Time Tracking
 * @package    My
 * @subpackage Controller
 * @copyright  Copyright (c) 2012 Markus Handschuh <markus.handschuh@mayflower.de>
 * @author     Markus Handschuh <markus.handschuh@mayflower.de>
 *
 * @abstract
 */
abstract class My_Controller_Action extends Zend_Controller_Action
{

    /**
     * Contains the main bootstrap instance
     *
     * @var Bootstrap
     */
    private $_bootstrap;

    /**
     * Retrieve the main bootstrap instance
     *
     * @return Bootstrap
     */
    public function getBootstrap()
    {
        if (null === $this->_bootstrap) {
            $this->_bootstrap = $this->getInvokeArg('bootstrap');
        }

        return $this->_bootstrap;
    }

    /**
     * Retrieve the instance of Zend_Db
     *
     * @return Zend_Db
     */
    public function getDb()
    {
        $bootstrap = $this->getBootstrap();
        $db        = $bootstrap->getResource('db');

        return $db;
    }

    /**
     * Retrieve the application logger
     *
     * @return Zend_Log
     */
    public function getLog()
    {
        $bootstrap = $this->getBootstrap();
        $log       = $bootstrap->getResource('log');

        return $log;
    }

    /**
     * Send data as json
     *
     * @param  mixed $data data to be send
     * @return void
     */
    public function send($data)
    {
        $this->getHelper('json')->direct($data, true /* send direct */, false /* keep layouts */);
        exit;
    }

}