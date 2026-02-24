<?php
defined('BASEPATH')OR exit ('No script access allowed');

class Kategori_model extends CI_Model{

    private $table ='kategori';

    public function get_all()
    {
        return $this->db->get($this->table)->result();
    }
}