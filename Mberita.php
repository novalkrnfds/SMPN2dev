<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mberita extends CI_Model{

  public function __construct(){
    parent::__construct();
  }

  public function Ambil_berita(){
	  $where = "status='Terbit'";
		$this->db->where($where);
		return $this->db->get('tb_berita');
  }

  public function ambilBeritaID($id){
    $this->db->select('*');
	$this->db->where('id', $id);
	$q = $this->db->get('tb_berita');
	// if id is unique, we want to return just one row
	return $data = array_shift($q->result_array());

  }

}
