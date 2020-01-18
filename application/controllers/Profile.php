<?php

class Profile extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Sewaan_model');
    }

    function index()
    {
        $data['user'] = $this->User_model->get_user($this->session->userdata('username'));
        $data['sewaan'] = $this->Sewaan_model->get_sewaan_by_id_user($data['user']['ID_USER']);
        $data['title'] = 'Dashboard';

        // echo "<pre>";
        // var_dump($data);
        // die;
        $this->load->view('templates/profile/header_profile', $data);
        $this->load->view('templates/profile/navbar_profile', $data);
        $this->load->view('profile/dashboard', $data);
        $this->load->view('templates/profile/footer_profile', $data);
    }
}
