<?php

use Phacil\Environment\App;
use Phacil\Environment\Session as Session;
use Phacil\Environment\Cookie as Cookie;
use Phacil\Routing\Router as Router;

App::run(function(){
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
    
});