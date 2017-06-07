<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Web extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('template');
	}

	public function index(){
		$this->template->display('content/home');
	}
	
	public function sejarah(){
		$this->template->display('content/galeri');
	}
	
	public function galeri(){
		$this->template->display('content/galeri');
	}
	
	public function visimisi(){
		$this->template->display('content/galeri');
	}
	
	public function saranaprasarana(){
		$this->template->display('content/galeri');
	}
	
	public function kontak(){
		$this->template->display('content/kontak');
	}
}