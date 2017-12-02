<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Web extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('Template');
		$this->load->Model('HomeModel', '', TRUE);
		$this->Template = new Template();
	}

	public function index(){
		$data['data']=$this->HomeModel->SelectAll();
		$data['berita']=$this->HomeModel->Berita();
		$data['identitas']=$this->HomeModel->Identitas();
		$data['pengumuman']=$this->HomeModel->Pengumuman();
		$this->template->display('Content/Home', $data);
	}
	
	public function galeri(){
		$data['identitas']=$this->HomeModel->Identitas();
		$data['gallery']=$this->HomeModel->Gallery();
		$this->template->display('Content/Galeri', $data);
	}
	
	public function visimisi(){
		$data['identitas']=$this->HomeModel->Identitas();
		$this->template->display('Content/Galeri', $data);
	}
	
	public function kontak(){
		$data['identitas']=$this->HomeModel->Identitas();
		$this->template->display('Content/Kontak', $data);
	}
}