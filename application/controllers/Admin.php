<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    function index()
    {
        $data['title'] = 'Admin';

        $this->load->view('templates/admin/header_admin', $data);
        $this->load->view('templates/admin/navbar_admin', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/admin/footer_admin');
    }
}