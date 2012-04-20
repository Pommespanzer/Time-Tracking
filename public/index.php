<?php

// Pokemon pattern, catch 'em all
try {
    // define constants
    if (!defined('APPLICATION_ENV'))  define('APPLICATION_ENV',  (getenv('APPLICATION_ENV') ?: 'development'));
    if (!defined('ROOT_PATH'))        define('ROOT_PATH',        dirname(__DIR__));
    if (!defined('APPLICATION_PATH')) define('APPLICATION_PATH', ROOT_PATH        . '/application');

    // set include paths
    set_include_path(implode(PATH_SEPARATOR, array(
        realpath(ROOT_PATH . '/library'),   // add library
        get_include_path()
    )));

    // create application, bootstrap and run
    require 'Zend/Application.php';

    $application = new Zend_Application(APPLICATION_ENV,
                                        APPLICATION_PATH . '/config/application.ini');

    $application->bootstrap()
                ->run();
} catch (Exception $e) {
    print $e->getMessage();
    exit;
}