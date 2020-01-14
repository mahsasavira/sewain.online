<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
    }

    public function index()
    {
        $data['barang'] = $this->Barang_model->get_all_sewaan();

        $data['title'] = 'Beranda';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('home', $data);
        $this->load->view('templates/footer');
    }
}
