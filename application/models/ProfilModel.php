<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ProfilModel extends CI_Model{

  public function __construct(){
    parent::__construct();
  }

   public function SelectAll(){
     $query = $this->db->get("tb_profil");
        return $query->result();
   }
}
