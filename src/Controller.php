<?php

namespace Phacil\App;
use Phacil\Core\Authorization\Auth;

class Controller extends \Phacil\Core\Architecture\Controller{
    
    public function __construct() {
        parent::__construct();
                
        Auth::publics([['GET|POST', '/']]);
        Auth::deny([
           ['GET|POST', '/estados/add/']
        ]);
    }
    
    public function __destruct() {
        Auth::start();
    }
    
}
