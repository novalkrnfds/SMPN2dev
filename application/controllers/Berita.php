<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Berita extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function index(){

		$this->load->database();
		$jml = $this->db->get('tb_berita');

		//pagination
		$config['base_url'] = base_url().'Berita/index';
		$config['total_rows'] = $jml->num_rows();
		$config['per_page'] = '5';
		$config['first_page'] = 'Awal';
		$config['last_page'] = 'Akhir';
		$config['next_page'] = '&laquo;';
		$config['prev_page'] = '&raquo;';

		//inisialisasi config
		$this->pagination->initialize($config);

		//buat pagination
		$data['halaman'] = $this->pagination->create_links();

		//tampilkan database
		$data['berita'] = $this->beritaModel->ambil_berita();

		$this->template->display('content/berita/Berita', $data);
	}

	public function selengkapnya(){
		$id= $this->uri->segment(3);
		$data['berita'] = $this->beritaModel->ambilBeritaID($id);

		$this->template->display('content/berita/Berita_full', $data);
	}

	public function base64ToImage($base64_string, $output_file){
		$file = fopen($output_file, "wb");
		$data = explode(',', $base64_string);
		fwrite($file, base64_decode($data[1]));
		fclose($file);

		return $output_file;
	}


}
