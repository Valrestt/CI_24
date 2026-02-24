<?php

class hello extends CI_Controller{
    public function index()
    {
        $data['nama'] = "Yon Prasetyo";
        $this->load->view('hello_view',$data);
    }
    public function namasaya()
    {
        $data['nama'] = "Valrest";
        $this->load->view('hello_view',$data);
    }
}