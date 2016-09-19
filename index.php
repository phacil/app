<?php
/**
 * 
 */
define('DS', DIRECTORY_SEPARATOR);

/**
 * 
 */
define('ROOT', dirname(__FILE__) . DS);

/**
 * 
 */
define('ROOT_URL', str_replace(basename($_SERVER['SCRIPT_NAME']), '' , $_SERVER['SCRIPT_NAME']));

/**
 * 
 */
define('VENDOR_FOLDER', 'vendor');

/**
 * 
 */
define('VENDOR_DIR', ROOT . VENDOR_FOLDER . DS);

/**
 * 
 */
define('CORE_FOLDER', 'phacil'. DS.'phacil'. DS. 'src' . DS);

/**
 * 
 */
define('CORE_DIR', VENDOR_DIR . CORE_FOLDER . DS);

/**
 * 
 */
define('CONFIG_FOLDER', 'config');

/**
 * 
 */
define('CONFIG_DIR', ROOT . CONFIG_FOLDER . DS);

/**
 * 
 */
define('THEMES_FOLDER', 'themes');

/**
 * 
 */
define('THEMES_DIR', ROOT . THEMES_FOLDER . DS);

/**
 * 
 */
define('THEMES_URL', ROOT_URL . THEMES_FOLDER . DS);

/**
 * 
 */
define('BUSINESS_NAMESAPACE', 'Business');

/**
 * 
 */
define('BUSINESS_FOLDER', 'src');

/**
 * 
 */
define('BUSINESS_DIR', ROOT . BUSINESS_FOLDER . DS);

/**
 * 
 */
define('BUSINESS_URL', ROOT_URL . BUSINESS_FOLDER . DS);

/**
 * 
 */
define('TMP_FOLDER', 'tmp');

/**
 * 
 */
define('TMP_DIR', ROOT . TMP_FOLDER . DS);

/**
 * 
 */
define('LOGS_FOLDER', 'logs');

/**
 * 
 */
define('LOGS_DIR', ROOT . LOGS_FOLDER . DS);

/**
 * 
 */
require CONFIG_DIR . 'bootstrap.php';
