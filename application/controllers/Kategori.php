<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class Kategori extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kategori_model');
    }
    public function index()
    {
        $data['Kategori'] = $this->Kategori_model->get_all();
        $this->load->view('Kategori/index', $data);

    }
}