<?php

namespace Business\Statics;
use Business\Controller as Controller;

class Statics extends Controller{

    public function about(){
        \View::set('theme_title', 'About');        
    }    
}