<?php
/**
 * Exception.php
 *
 * @category   Time Tracking
 * @package    My
 * @subpackage Exception
 * @copyright  Copyright (c) 2012 Markus Handschuh <markus.handschuh@mayflower.de>
 * @author     Markus Handschuh <markus.handschuh@mayflower.de>
 */

/**
 * Standard Exception
 *
 * @category   Time Tracking
 * @package    My
 * @subpackage Exception
 * @copyright  Copyright (c) 2012 Markus Handschuh <markus.handschuh@mayflower.de>
 * @author     Markus Handschuh <markus.handschuh@mayflower.de>
 */
class My_Exception extends Zend_Exception
{

    const HTTP_BAD_REQUEST           = 400;
    const HTTP_UNAUTHORIZED          = 401;
    const HTTP_FORBIDDEN             = 403;
    const HTTP_NOT_FOUND             = 404;
    const HTTP_METHOD_NOT_ALLOWED    = 405;
    const HTTP_CONFLICT              = 409;
    const HTTP_INTERNAL_SERVER_ERROR = 500;
    const HTTP_NOT_IMPLEMENTED       = 501;

    /**
     * Constains the exception code to be used
     *
     * @var null|integer
     */
    protected $_code = null;

    /**
     * @param string         $message  exception message
     * @param int            $code     exception code, default is code 500 (internal server error)
     * @param Exception|null $previous previous exception
     */
    public function __construct($message = '', $code = self::HTTP_INTERNAL_SERVER_ERROR, Exception $previous = null)
    {
        if (null !== $this->_code) {
            $code = $this->_code;
        }

        parent::__construct($message, (int) $code, $previous);
    }

}