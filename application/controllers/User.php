<?php

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');
    }

    /*
     * Listing of user
     */


    function index()
    {
        echo "profil";
    }

    function masuk()
    {

        if ($this->session->userdata('username')) {
            redirect('beranda');
        } else {
            $this->form_validation->set_rules('username', 'username', 'required|trim');
            $this->form_validation->set_rules('password', 'password', 'required|trim');

            if ($this->form_validation->run() == false) {
                $data['title'] = 'Masuk';

                $this->load->view('templates/header', $data);
                $this->load->view('templates/navbar', $data);
                $this->load->view('user/login', $data);
            } else {
                $username = $this->input->post('username');
                $password = $this->input->post('password');

                $user = $this->User_model->get_user($username);

                if ($user) {
                    if (password_verify($password, $user['PASSWORD'])) {
                        $data = [
                            'username' => $user['USERNAME']
                        ];

                        if ($user['ROLE'] == 'admin') {
                            $this->session->set_userdata($data);
                            redirect('admin');
                        } else {
                            $this->session->set_userdata($data);
                            redirect('beranda');
                        }
                    } else {
                        $this->session->set_flashdata('pesan', '<div class="alert alert-danger">Kata sandi salah!</div>');
                        redirect('user/masuk');
                    }
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger">Kamu belum terdaftar, silakan daftar.</div>');
                    redirect('user/masuk');
                }
            }
        }
    }

    function daftar() // fungsi add
    {
        if ($this->session->userdata('username')) {
            redirect('beranda');
        } else {
            $this->form_validation->set_rules('username', 'username', 'required|trim|is_unique[USER.USERNAME]');
            $this->form_validation->set_rules('email', 'email', 'required|trim');
            $this->form_validation->set_rules('password', 'password', 'required|trim|matches[password2]');
            $this->form_validation->set_rules('password2', 'konfirmasi password', 'required|trim|matches[password]');

            if ($this->form_validation->run() == false) {
                $data['title'] = 'Daftar';
                $this->load->view('templates/header', $data);
                $this->load->view('templates/navbar', $data);
                $this->load->view('user/daftar', $data);
            } else {
                $params = array(
                    'USERNAME' => htmlspecialchars($this->input->post('username')),
                    'PASSWORD' =>  password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                    'EMAIL' => htmlspecialchars($this->input->post('email')),
                    'ROLE' => 'member'
                );

                $user_id = $this->User_model->add_user($params);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil daftar silakan masuk.</div>');
                redirect('user/masuk');
            }
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

    public function keluar()
    {
        $this->session->unset_userdata('username');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil keluar.</div>');
        redirect('beranda');
    }
}
