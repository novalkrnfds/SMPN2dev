<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profil extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('Template');
		$this->load->Model('HomeModel', '', TRUE);
		$this->load->Model('ProfilModel', '', TRUE);
		$this->Template = new Template();
	}

	public function Struktur_organisasi(){
		$data['identitas']=$this->HomeModel->Identitas();
		$data['struktur']=$this->ProfilModel->SelectAll();
		$this->Template->display('Content/Strukturorganisasi', $data);
	}
	
	public function Visimisi(){
		$data['identitas']=$this->HomeModel->Identitas();
		$data['visi']=$this->ProfilModel->SelectAll();
		$this->Template->display('Content/Profil/Visimisi', $data);
	}
	
	public function Prestasi(){
		$data['identitas']=$this->HomeModel->Identitas();
		$this->Template->display('Content/Profil/Prestasi', $data);
	}
	
	public function Sejarah(){
		$data['sejarah']=$this->ProfilModel->SelectAll();
		$data['identitas']=$this->HomeModel->Identitas();
		$this->Template->display('Content/Profil/Sejarah', $data);
	}
	
	public function Saranaprasarana(){
		$data['identitas']=$this->HomeModel->Identitas();
		$this->Template->display('Content/Profil/Saranaprasarana');
	}
	
	public function Saranaprasarana2(){
		$data['identitas']=$this->HomeModel->Identitas();
		$this->Template->display('Content/Profil/Saranaprasarana2');
	}
}