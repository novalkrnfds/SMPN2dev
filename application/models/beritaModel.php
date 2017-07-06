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
    $id = $this->db->select('*')
                    ->from('tb_berita')
                    ->where('id', $id)
                    ->get();
    return $id;
  }

}
