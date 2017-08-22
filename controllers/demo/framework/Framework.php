<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Framework extends FT_Controller {

    public function index()
	{
	   $this->loadView('index'); 
	}
}
