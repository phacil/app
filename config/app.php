<?php

/**
 * DEBUG
 */
App::debug(true);

/**
 * PREFIX
 */
//App::set('Config.prefixes', ['admin'=>'Admin']);

/**
 * DATASOURCES
 */
App::set('Config.datasources', require 'datasources.php');

/**
 * SESSION
 */

Session::start();

/**
 * ROUTING
 */
Router::add('GET', '/', ['Statics', 'about']);

/**
 * Manter essa rota como a ultima rota
 */
Router::add('GET|POST|PUT|DELETE', '/*', null);
