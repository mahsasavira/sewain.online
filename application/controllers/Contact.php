<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */

class Contact extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    /*
     * Listing of contact
     */
    function index()
    {
        $data['title'] = 'Kontak';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('contact', $data);
        $this->load->view('templates/footer');
    }
}
