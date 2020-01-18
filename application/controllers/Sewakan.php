<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */

class Sewakan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Sewaan_model');
        $this->load->model('Sewakan_model');
        $this->load->model('User_model');
    }

    /*
     * Listing of sewaan
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE;
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;

        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('barang/index?');
        $config['total_rows'] = $this->barang_model->get_all_barang_count();
        $this->pagination->initialize($config);

        $data['user'] = $this->User_model->get_user($this->session->userdata('username'));
        $data['barang'] = $this->Sewakan_model->get_all_barang_sewaan_by_user($data['user']['ID_USER']);

        //$data['sewaan'] = $this->Sewaan_model->get_all_sewaan();
        $data['title'] = 'Sewakan Barang';

        $this->load->view('templates/profile/header_profile', $data);
        $this->load->view('templates/profile/navbar_profile', $data);
        $this->load->view('profile/sewakan', $data);
        $this->load->view('templates/profile/footer_profile', $data);
    }

    /*
     * Adding a new barang
     */
    function add()
    {
        $data['user'] = $this->User_model->get_user($this->session->userdata('username'));

        $this->load->library('form_validation');

        $this->form_validation->set_rules('NAMABARANG', 'NAMABARANG', 'required');
        $this->form_validation->set_rules('JENIS', 'JENIS', 'required');
        $this->form_validation->set_rules('DESKRIPSI', 'DESKRIPSI', 'required');
        $this->form_validation->set_rules('HARGA', 'HARGA', 'required');

        if ($this->form_validation->run()) {
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/img/product/sewa/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $new_image = $this->upload->data('file_name');

                    $params = array(
                        'ID_USER' => $data['user']['ID_USER'],
                        'NAMABARANG' => $this->input->post('NAMABARANG'),
                        'JENIS' => $this->input->post('JENIS'),
                        'DESKRIPSI' => $this->input->post('DESKRIPSI'),
                        'HARGA' => $this->input->post('HARGA'),
                        'GAMBAR' => $new_image,
                    );

                    $barang_id = $this->barang_model->add_barang($params);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Barang berhasil ditambah.</div>');
                    redirect('sewakan');
                } else {
                    echo $this->upload->display_errors();
                }
            } else {
                $default_image = 'default.jpg';

                $params = array(
                    'NAMABARANG' => $this->input->post('NAMABARANG'),
                    'JENIS' => $this->input->post('JENIS'),
                    'DESKRIPSI' => $this->input->post('DESKRIPSI'),
                    'STATUS' => 'pending',
                    'HARGA' => $this->input->post('HARGA'),
                    'GAMBAR' => $default_image,
                );

                $barang_id = $this->barang_model->add_barang($params);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Barang berhasil ditambah.</div>');
                redirect('sewakan');
            }
        } else {
            $data['title'] = 'Sewakan Barang';
            $data['barang'] = $this->barang_model->get_all_barang($params);

            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Terjadi error.</div>');

            $this->load->view('templates/profile/header_profile', $data);
            $this->load->view('templates/profile/navbar_profile', $data);
            $this->load->view('profile/sewakan', $data);
            $this->load->view('templates/profile/footer_profile', $data);
        }
    }

    /*
     * Deleting barang
     */
    function remove($ID_BARANG)
    {
        $barang = $this->barang_model->get_barang($ID_BARANG);

        // check if the barang exists before trying to delete it
        if (isset($barang['ID_BARANG'])) {
            $this->barang_model->delete_barang($ID_BARANG);
            redirect('sewakan');
        } else
            show_error('The barang you are trying to delete does not exist.');
    }


    function remove_sewa($ID_SEWAAN)
    {
        $barang_sewa = $this->Sewaan_model->get_sewaan($ID_SEWAAN);

        // check if the barang exists before trying to delete it
        if (isset($barang_sewa['ID_SEWAAN'])) {
            $this->Sewaan_model->delete_sewaan($ID_SEWAAN);
            redirect('profile/index');
        } else
            show_error('The barang you are trying to delete does not exist.');
    }

    /*
     * Adding a new sewaan
     */
    function sewakan_barang($ID_BARANG)
    {

        $user = $this->user_model->get_user($this->session->userdata('username'));

        if (isset($_POST) && count($_POST) > 0) {
            $params = array(
                'ID_BARANG' => $ID_BARANG,
                'ID_USER' => $user['ID_USER'],
                'TARIF' => $this->input->post('TARIF'),
                'DURASI_SEWA' => $this->input->post('DURASI_SEWA'),
                'STATUS' => "Belum Disewa",
            );

            $sewaan_id = $this->Sewaan_model->add_sewaan($params);
            redirect('barang');
        } else {
            $data['_view'] = 'sewaan/add';
            $this->load->view('layouts/main', $data);
        }
    }
}
