<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Componentes extends FT_Controller{
    
    public function index(){
        $this->data['base_uri'] = $this->uri->uri_string;
        $this->loadView("componentes/index");
    }
    
    public function window(){
        $this->loadViewWindow("componentes/window");
    }
    
    public function firefox(){
        
    }
}