<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template{
	protected $_ci;
	
	function __construct(){
		$this->_ci = &get_instance();
	}
	
	function display($content, $data = null){
		$data['header'] = $this->_ci->load->view('templates/nav', $data, true);
		$data['content'] = $this->_ci->load->view($content, $data, true);
		$data['footer'] = $this->_ci->load->view('templates/footer', $data, true);
		
		$this->_ci->load->view('templates/home', $data);
	}
}
