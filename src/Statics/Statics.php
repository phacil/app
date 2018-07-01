<?php

namespace Phacil\App\Statics;

use Phacil\App\Controller as Controller;

class Statics extends Controller{

    public function about(){
       view()->set('theme_title', 'About');        
    }    
}