<?php
/**
 * ErrorController.php
 *
 * @category   Time Tracking
 * @package    Application Module
 * @subpackage Controller
 * @copyright  Copyright (c) 2012 Markus Handschuh <markus.handschuh@mayflower.de>
 * @author     Markus Handschuh <markus.handschuh@mayflower.de>
 */

/**
 * Standard Error Controller
 *
 * @category   Time Tracking
 * @package    Application Module
 * @subpackage Controller
 * @copyright  Copyright (c) 2012 Markus Handschuh <markus.handschuh@mayflower.de>
 * @author     Markus Handschuh <markus.handschuh@mayflower.de>
 */
class ErrorController extends My_Controller_Action
{

    /**
     * Default error action
     *
     * @return void
     */
    public function errorAction()
    {
        $errors    = $this->_getParam('error_handler');
        $exception = $errors->exception;
        $response  = $this->getResponse();

        switch ($errors->type) {
            case Zend_Controller_Plugin_ErrorHandler::EXCEPTION_NO_ROUTE:
            case Zend_Controller_Plugin_ErrorHandler::EXCEPTION_NO_CONTROLLER:
            case Zend_Controller_Plugin_ErrorHandler::EXCEPTION_NO_ACTION:
                // set 404 for this type
                $response->setHttpResponseCode(404);
                break;
            default:
                // get response code from exception
                $code = $exception->getCode();
                if (0 == (int) $code) { // set default response code
                    $code = 500;
                }

                $response->setHttpResponseCode($code);
                break;
        }

        // log error and send response
        $log = $this->getLog();
        $log->err(var_export($exception->getMessage(), true));

        $response->sendResponse();
        exit;
    }

}