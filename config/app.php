<?php

/**
 * DEBUG
 */
app()->debug(true);

/**
 * PREFIX
 */
//app()->set('Config.prefixes', ['admin'=>'Admin']);

/**
 * DATASOURCES
 */
app()->set('Config.datasources', require 'datasources.php');


/**
 * 
 * Salt
 */
app()->set('Config.Salt', 'WPMNxcytVVPquMWMU6Hf56');

/**
 * SESSION
 */

session()->start();

/**
 * ROUTING
 */
router()->add('GET', '/', ['Statics', 'about']);

/**
 * Manter essa rota como a ultima rota
 */
router()->add('GET|POST|PUT|DELETE', '/*', null);
