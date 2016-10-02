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

Router::add('GET', '/hello/:nome', function($nome){
    echo 'hello ' . $nome;
});

Router::add('GET|POST|PUT|DELETE', '/*', null);
    
