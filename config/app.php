<?php

/**
 * DEBUG
 */
App::debug(true);

/**
 * PREFIX
 */
App::set('prefixes', ['admin']);

/**
 * DATASOURCES
 */
App::set('datasources', from_file_json(CONFIG_DIR . 'datasources'));

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
    
