<?php

class Profile extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    function index()
    {
        $id['user'] = '$ID_USER';

        $this->load->view('templates/profile/header_profile', $id);
        $this->load->view('templates/profile/navbar_profile', $id);
        $this->load->view('profile/dashboard', $id);
        $this->load->view('templates/profile/footer_profile', $id);
    }

}
