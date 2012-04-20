<?php
/**
 * IndexController.php
 *
 * @category   Time Tracking
 * @package    Application Module
 * @subpackage Controller
 * @copyright  Copyright (c) 2012 Markus Handschuh <markus.handschuh@mayflower.de>
 * @author     Markus Handschuh <markus.handschuh@mayflower.de>
 */

/**
 * Default Index Controller
 *
 * @category   Time Tracking
 * @package    Application Module
 * @subpackage Controller
 * @copyright  Copyright (c) 2012 Markus Handschuh <markus.handschuh@mayflower.de>
 * @author     Markus Handschuh <markus.handschuh@mayflower.de>
 */
class IndexController extends My_Controller_Rest
{

    public function getAction()
    {
        // disable view renderer
        $this->_helper->viewRenderer->setNoRender(true);

        // initialize zend layout
        $layout = new Zend_Layout(APPLICATION_PATH . '/modules/' . $this->getRequest()->getModuleName() . '/layouts');
        $view   = $layout->getView();

        // configure view
        $view->doctype('XHTML1_STRICT');

        // render and print layout
        print $layout->render('default');
        exit;
    }

    public function postAction()
    {
        $this->send(array('POST', $this->_getAllParams()));
    }

    public function putAction()
    {
        $this->send(array('PUT', $this->_getAllParams()));
    }

    public function deleteAction()
    {
        $this->send(array('DELETE', $this->_getAllParams()));
    }

}