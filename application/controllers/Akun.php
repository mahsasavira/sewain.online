<?php


class Akun extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Sewaan_model');
    }

    function index()
    {
        //$data['sewaan'] = $this->Sewaan_model->get_all_sewaan();
        $data['title'] = 'Akun';

        $this->load->view('templates/profile/header_profile', $data);
        $this->load->view('templates/profile/navbar_profile', $data);
        $this->load->view('profile/akun', $data);
        $this->load->view('templates/profile/footer_profile', $data);
    }
}
