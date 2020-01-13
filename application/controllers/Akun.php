<?php


class Akun extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // $this->load->model('Sewaan_model');
        $this->load->model('User_model');
        $this->load->library('form_validation');
    }

    function index()
    {
        //$data['sewaan'] = $this->Sewaan_model->get_all_sewaan();
        // $data['user'] = $this->session->userdata('username');
        $data['user'] = $this->User_model->get_user($this->session->userdata('username'));

        $this->load->view('templates/profile/header_profile', $data);
        $this->load->view('templates/profile/navbar_profile', $data);
        $this->load->view('profile/akun', $data);
        $this->load->view('templates/profile/footer_profile', $data);
    }

function edit()
    {   
        // check if the user exists before trying to edit it
        $data['user'] = $this->User_model->get_user($this->session->userdata('username'));

            $this->form_validation->set_rules('nama', 'nama', 'required');
            $this->form_validation->set_rules('alamat', 'alamat', 'required');
            $this->form_validation->set_rules('kota', 'kota', 'required');
            // $this->form_validation->set_rules('status', 'status', 'required');
            // $this->form_validation->set_rules('ktp', 'ktp', 'required');
            // $this->form_validation->set_rules('sim', 'sim', 'required');
            // $this->form_validation->set_rules('kk', 'kk', 'required');
            // $this->form_validation->set_rules('kartu_mahasiswa', 'kartu_mahasiswa', 'required');

            if ($this->form_validation->run()) {
                $params = array(
                    'nama' => $this->input->post('nama'),
                    'alamat' => $this->input->post('alamat'),
                    'kota' => $this->input->post('kota'),
                    // 'status' => $this->input->post('status'),
                    'ktp' => "",
                    'sim' => "",
                    'kk' => "",
                    'kartu_mahasiswa' => "",
             );

                 $this->User_model->update_user($data['user']['ID_USER'], $params);
                 redirect('akun');
                //var_dump($params);
            } else {
                $data['_view'] = 'prifile/akun';
                $this->load->view('layouts/main', $data);
                // echo "h";
            }

        //var_dump($data['user']);
    } 
}
