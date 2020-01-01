<?php

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    /*
     * Listing of user
     */
    function index()
    {
        $data['user'] = $this->User_model->get_all_user();

        $data['_view'] = 'user/index';
        $this->load->view('layouts/main', $data);
    }

    function masuk()
    {
        $data['title'] = 'Masuk';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('user/login', $data);
    }

    function daftar()
    {
        $data['title'] = 'Daftar';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('user/daftar', $data);
    }

    /*
     * Adding a new user
     */
    function add() 
    {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('username', 'USERNAME', 'required|is_unique[user.username]');
        $this->form_validation->set_rules('password', 'PASSWORD', 'required|trim|matches[password2]');       
        $this->form_validation->set_rules('password2', 'PASSWORD', 'required|trim|matches[password1]',['matches' => 'password tidak sama']);       
        $this->form_validation->set_rules('email', 'EMAIL', 'required');

        if ($this->form_validation->run()) {
            $params = array(
                'PASSWORD' => $this->input->post('PASSWORD'),
                'USERNAME' => $this->input->post('USERNAME'),
                'EMAIL' => $this->input->post('EMAIL'),
                'ROLE' => 'member',
            );

            $user_id = $this->User_model->add_user($params);
            redirect('user/masuk');
        } else {
            $data['_view'] = 'user/add';
            $this->load->view('layouts/main', $data);
        }
    }

    /*
     * Editing a user
     */
    function edit($ID_USER)
    {
        // check if the user exists before trying to edit it
        $data['user'] = $this->User_model->get_user($ID_USER);

        if (isset($data['user']['ID_USER'])) {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('USERNAME', 'USERNAME', 'required|is_unique[user.username]');
            $this->form_validation->set_rules('PASSWORD', 'PASSWORD', 'required');
            $this->form_validation->set_rules('EMAIL', 'EMAIL', 'required');

            if ($this->form_validation->run()) {
                $params = array(
                    'PASSWORD' => $this->input->post('PASSWORD'),
                    'USERNAME' => $this->input->post('USERNAME'),
                    'EMAIL' => $this->input->post('EMAIL'),
                    'ROLE' => $this->input->post('ROLE'),
                );

                $this->User_model->update_user($ID_USER, $params);
                redirect('user/index');
            } else {
                $data['_view'] = 'user/edit';
                $this->load->view('layouts/main', $data);
            }
        } else
            show_error('The user you are trying to edit does not exist.');
    }

    /*
     * Deleting user
     */
    function remove($ID_USER)
    {
        $user = $this->User_model->get_user($ID_USER);

        // check if the user exists before trying to delete it
        if (isset($user['ID_USER'])) {
            $this->User_model->delete_user($ID_USER);
            redirect('user/index');
        } else
            show_error('The user you are trying to delete does not exist.');
    }
}
