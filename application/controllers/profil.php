<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profil extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('template');
	}

	public function struktur_organisasi(){
		$this->template->display('content/galeri');
	}
	
	public function sejarah(){
		$this->template->display('content/profil/sejarah');
	}
	
	public function saranaprasarana(){
		$this->template->display('content/profil/saranaprasarana');
	}
	
	public function visimisi(){
		$this->template->display('content/profil/visimisi');
	}
	
	public function prestasi(){
		$this->template->display('content/profil/prestasi');
	}
}