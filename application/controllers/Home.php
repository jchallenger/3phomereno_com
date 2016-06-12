<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	public function index()
	{
		$this->data['include_nav'] = false;
		$this->add_script('js/home.js');
		$this->display_page('home');
	}
}
