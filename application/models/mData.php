<?php

  class mData extends CI_Model{
    function data($number, $offset){
      return $query = $this->db->get('tb_berita', $number, $offset)->result();
    }

    function jumlah_data(){
      return $this->db->get('tb_berita')->num_rows();
    }
  }
