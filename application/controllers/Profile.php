<?php

class Profile extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        //$this->load->model('profile');
    }

    function index()
    {
        $data['title'] = 'Profile';

        $this->load->view('templates/profile/header_profile', $data);
        $this->load->view('templates/profile/navbar_profile', $data);
        $this->load->view('profile/dashboard', $data);
        $this->load->view('templates/profile/footer_profile', $data);
    }
}
