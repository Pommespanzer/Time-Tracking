<?php
/**
 * BadRequest.php
 *
 * @category   Time Tracking
 * @package    My
 * @subpackage Exception
 * @copyright  Copyright (c) 2012 Markus Handschuh <markus.handschuh@mayflower.de>
 * @author     Markus Handschuh <markus.handschuh@mayflower.de>
 */

/**
 * Bad Request Exception
 *
 * @category   Time Tracking
 * @package    My
 * @subpackage Exception
 * @copyright  Copyright (c) 2012 Markus Handschuh <markus.handschuh@mayflower.de>
 * @author     Markus Handschuh <markus.handschuh@mayflower.de>
 */
class My_Exception_BadRequest extends My_Exception
{

    /**
     * @var int
     */
    protected $_code = self::HTTP_BAD_REQUEST;

}