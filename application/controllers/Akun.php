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

            $upload_ktp_sim = $_FILES['ktp/sim']['name'];
            $upload_kk = $_FILES['kk']['name'];


            if ($upload_ktp_sim) {

                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/img/product/user/';

                $this->load->library('upload', $config);
                $ktp_sim = $this->upload->do_upload('ktp/sim');
                $result1 = $this->upload->data();
                $result = array('ktp/sim' => $result1);

                $hasilKTP_SIM = $result['ktp/sim']['file_name'];

                $params = array(
                    'nama' => $this->input->post('nama'),
                    'alamat' => $this->input->post('alamat'),
                    'kota' => $this->input->post('kota'),
                    'telepon' => $this->input->post('telepon'),
                    'ktp/sim' => $hasilKTP_SIM,
                );

                $this->User_model->update_user($data['user']['ID_USER'], $params);
                redirect('akun');
            } elseif ($upload_kk) {

                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/img/product/user/';

                $this->load->library('upload', $config);
                $kk = $this->upload->do_upload('kk');
                $result2 = $this->upload->data();
                $result = array('kk' => $result2);


                $hasilKK = $result['kk']['file_name'];

                $params = array(
                    'nama' => $this->input->post('nama'),
                    'alamat' => $this->input->post('alamat'),
                    'kota' => $this->input->post('kota'),
                    'telepon' => $this->input->post('telepon'),
                    'kk' => $hasilKK,
                );

                $this->User_model->update_user($data['user']['ID_USER'], $params);
                redirect('akun');
            } elseif ($upload_ktp && $upload_kk) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/img/product/user/';

                $this->load->library('upload', $config);
                $ktp_sim = $this->upload->do_upload('ktp/sim');
                $result1 = $this->upload->data();
                $kk = $this->upload->do_upload('kk');
                $result2 = $this->upload->data();
                $result = array('ktp/sim' => $result1, 'kk' => $result2);

                $hasilKTP_SIM = $result['ktp/sim']['file_name'];
                $hasilKK = $result['kk']['file_name'];

                $params = array(
                    'nama' => $this->input->post('nama'),
                    'alamat' => $this->input->post('alamat'),
                    'kota' => $this->input->post('kota'),
                    'telepon' => $this->input->post('telepon'),
                    'ktp/sim' => $hasilKTP_SIM,
                    'kk' => $hasilKK,
                );

                $this->User_model->update_user($data['user']['ID_USER'], $params);
                redirect('akun');
            } else {

                $params = array(
                    'nama' => $this->input->post('nama'),
                    'alamat' => $this->input->post('alamat'),
                    'kota' => $this->input->post('kota'),
                    'telepon' => $this->input->post('telepon')
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

    function editfoto()
    {
        $this->load->library('form_validation');
        // check if the user exists before trying to edit it
        $data['user'] = $this->User_model->get_user($this->session->userdata('username'));

        // if ($this->form_validation->run()) {
        $upload_foto = $_FILES['foto']['name'];

        if ($upload_foto) {

            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = '2048';
            $config['upload_path'] = './assets/img/product/user/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {
                $foto = $this->upload->data('file_name');

                $params = array('foto' => $foto,);

                $this->User_model->update_user($data['user']['ID_USER'], $params);
                redirect('akun');
            } else {
                echo $this->upload->display_errors();
            }
        } else {
            redirect('akun');
        }
    }
}
