<?php
/**
 * Forbidden.php
 *
 * @category   Time Tracking
 * @package    My
 * @subpackage Exception
 * @copyright  Copyright (c) 2012 Markus Handschuh <markus.handschuh@mayflower.de>
 * @author     Markus Handschuh <markus.handschuh@mayflower.de>
 */

/**
 * Forbidden Exception
 *
 * @category   Time Tracking
 * @package    My
 * @subpackage Exception
 * @copyright  Copyright (c) 2012 Markus Handschuh <markus.handschuh@mayflower.de>
 * @author     Markus Handschuh <markus.handschuh@mayflower.de>
 */
class My_Exception_Forbidden extends My_Exception
{

    /**
     * @var int
     */
    protected $_code = self::HTTP_FORBIDDEN;

}