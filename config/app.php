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
 * ROUTING
 */
Router::add('GET', '/', ['Statics', 'about']);
    
