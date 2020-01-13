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
        $data['title'] = 'Akun Saya';
        $data['user'] = $this->User_model->get_user($this->session->userdata('username'));

        $this->load->view('templates/profile/header_profile', $data);
        $this->load->view('templates/profile/navbar_profile', $data);
        $this->load->view('profile/akun', $data);
        $this->load->view('templates/profile/footer_profile', $data);
    }

    function edit()
    {   
        $this->load->library('form_validation');
        // check if the user exists before trying to edit it
        $data['user'] = $this->User_model->get_user($this->session->userdata('username'));

        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('kota', 'kota', 'required');
        $this->form_validation->set_rules('telepon', 'telepon', 'required');
        // $this->form_validation->set_rules('ktp', 'ktp', 'required');
        // $this->form_validation->set_rules('sim', 'sim', 'required');
        // $this->form_validation->set_rules('kk', 'kk', 'required');
        // $this->form_validation->set_rules('kartu_mahasiswa', 'kartu_mahasiswa', 'required');

        if ($this->form_validation->run()) {

            $upload_ktp = $_FILES['ktp']['name'];
            $upload_sim = $_FILES['sim']['sim'];
            $upload_kk = $_FILES['kk']['sim'];
            $upload_ktm = $_FILES['kartu_mahasiswa']['kartu_mahasiswa'];
            if ($upload_ktp) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/img/product/user/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('ktp') || $this->upload->do_upload('sim') || $this->upload->do_upload('kk') || $this->upload->do_upload('kartu_mahasiswa')) {
                    $new_ktp = $this->upload->data('file_name');
                    $new_sim = $this->upload->data('file_name');
                    $new_kk = $this->upload->data('file_name');
                    $new_ktm = $this->upload->data('file_name');

                    $params = array(
                        'nama' => $this->input->post('nama'),
                        'alamat' => $this->input->post('alamat'),
                        'kota' => $this->input->post('kota'),
                        'telepon' => $this->input->post('telepon'),
                        'ktp' => $new_ktp,
                        'sim' => $new_sim,
                        'kk' => $new_kk,
                        'kartu_mahasiswa' => $new_ktm,
                    );

                    $this->User_model->update_user($data['user']['ID_USER'], $params);
                    redirect('akun');

                }else {
                    echo $this->upload->display_errors();
                }
            }else{

                $params = array(
                        'nama' => $this->input->post('nama'),
                        'alamat' => $this->input->post('alamat'),
                        'kota' => $this->input->post('kota'),
                        'telepon' => $this->input->post('telepon'),
                        'ktp' => $new_ktp,
                        'sim' => '',
                        'kk' => '',
                        'kartu_mahasiswa' => '',
                    );

                $this->User_model->update_user($data['user']['ID_USER'], $params);
                redirect('akun');
            }

        } else {
            $data['_view'] = 'profile/akun';
            $this->load->view('layouts/main', $data);
                // echo "h";
        }
    } 
}
