<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class beritaModel extends CI_Model{

  public function __construct(){
    parent::__construct();
  }

  public function ambil_berita($num, $offset){
    $this->db->order_by('id', 'ASC');
    $data = $this->db->get('tb_berita', $num, $offset);

    return $data->result();
  }

  public function ambilBeritaID($id){
    $this->db->select('*');
	$this->db->where('id', $id);
	$q = $this->db->get('tb_berita');
	// if id is unique, we want to return just one row
	return $data = array_shift($q->result_array());

  }

}
