<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class not_found extends CI_Controller {
	public function index(){
		$this->output->set_status_header('404');
		$this->load->view('404/404');
	}
}