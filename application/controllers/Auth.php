<?php

class Auth extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        //$this->load->model('Auth_model');
    }

    function index()
    {
        $data['title'] = 'Login';

        $this->load->view('templates/header', $data);
        $this->load->view('auth/index', $data);
    }

    function daftar()
    {
        $data['title'] = 'Daftar';

        $this->load->view('templates/header', $data);
        $this->load->view('auth/daftar', $data);
    }
}