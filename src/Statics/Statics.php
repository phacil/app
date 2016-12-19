<?php

namespace Phacil\App\Statics;

use Phacil\App\Controller as Controller;

class Statics extends Controller{

    public function about(){
        \View::set('theme_title', 'About');        
    }    
}