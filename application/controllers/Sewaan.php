<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */

class Sewaan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Sewaan_model');
        $this->load->model('Pembayaran_model');
        $this->load->model('Transaksi_sewa_model');
        $this->load->model('Barang_model');
        $this->load->model('User_model');
    }

    /*
     * Listing of sewaan
     */
    function index()
    {
        $data['sewaan'] = $this->Sewaan_model->get_all_sewaan();
        $data['title'] = 'Keranjang';


        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('sewaan/index', $data);
        $this->load->view('templates/footer');
    }

    function detail_sewaan($ID_SEWAAN)
    {
        $data['barang'] = $this->Sewaan_model->get_detail_barang($ID_SEWAAN);
        $data['title'] = 'Keranjang';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('sewaan/index', $data);
        $this->load->view('templates/footer');
    }

    function konfirmasi_sewaan($ID_SEWAAN)
    {
        $created_on = $this->getExactTodayDate();

        $barang = $this->Sewaan_model->get_detail_barang($ID_SEWAAN);
        $ID_SEWAAN = $barang[0]['ID_SEWAAN'];
        //var_dump($barang);
        $params = array(
            'ID_SEWAAN' => $barang[0]['ID_SEWAAN'],
            'ID_USER' => $barang[0]['ID_USER'],
            'TGL_TRANSAKSI' => $created_on,
            'LAMA_SEWA' => $barang[0]['DURASI_SEWA'],
            'TOTAL_TARIF' => $barang[0]['TARIF'],
            'ID_PENYEWA' => $this->session->userdata('username')
        );

        $transaksi_sewa_id = $this->Transaksi_sewa_model->add_transaksi_sewa($params);

        // if ($this->form_validation->run()) {
        $upload_foto = $_FILES['foto']['name'];

        if ($upload_foto) {

            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = '2048';
            $config['upload_path'] = './assets/img/sewaan/bukti_pembayaran/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {
                $foto = $this->upload->data('file_name');

                $params = array(
                    'ID_TRAKSAKSI' => $transaksi_sewa_id,
                    'STATUS' => "unverified",
                    'TGL_BAYAR' => $this->getExactTodayDate(),
                    'BUKTI_PEMBAYARAN' => $foto,
                );

                $pembayaran_id = $this->Pembayaran_model->add_pembayaran($params);
                $this->Sewaan_model->update_sewaan($ID_SEWAAN, ['status' => 'Disewa']);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Penyewaan barang berhasil. Menunggu konfirmasi dari pemilik barang.</div>');
                redirect('barang');
            } else {
                echo $this->upload->display_errors();
            }
        } else {
            redirect('akun');
        }
    }

    function konfirmasi_pembayaran($pembayaran_id) {
        
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

    public function getExactTodayDate()
    {
        //get today's exact date
        $offset = 7 * 60 * 60; //converting 7 hours to seconds. / (GMT+7)
        $dateFormat = "Y-m-d H:i:s";
        $now = gmdate($dateFormat, time() + $offset);

        return $now;
    }

    /*
     * Adding a new sewaan
     */
    function add()
    {
        if (isset($_POST) && count($_POST) > 0) {
            $params = array(
                'ID_BARANG' => $this->input->post('ID_BARANG'),
                'ID_USER' => $this->input->post('ID_USER'),
                'TARIF' => $this->input->post('TARIF'),
                'DURASI_SEWA' => $this->input->post('DURASI_SEWA'),
                'STATUS' => $this->input->post('STATUS'),
            );

            $sewaan_id = $this->Sewaan_model->add_sewaan($params);
            redirect('sewaan/index');
        } else {
            $data['_view'] = 'sewaan/add';
            $this->load->view('layouts/main', $data);
        }
    }

    /*
     * Editing a sewaan
     */
    function edit($ID_SEWAAN)
    {
        // check if the sewaan exists before trying to edit it
        $data['sewaan'] = $this->Sewaan_model->get_sewaan($ID_SEWAAN);

        if (isset($data['sewaan']['ID_SEWAAN'])) {
            if (isset($_POST) && count($_POST) > 0) {
                $params = array(
                    'ID_BARANG' => $this->input->post('ID_BARANG'),
                    'ID_USER' => $this->input->post('ID_USER'),
                    'TARIF' => $this->input->post('TARIF'),
                    'DURASI_SEWA' => $this->input->post('DURASI_SEWA'),
                    'STATUS' => $this->input->post('STATUS'),
                );

                $this->Sewaan_model->update_sewaan($ID_SEWAAN, $params);
                redirect('sewaan/index');
            } else {
                $data['_view'] = 'sewaan/edit';
                $this->load->view('layouts/main', $data);
            }
        } else
            show_error('The sewaan you are trying to edit does not exist.');
    }

    /*
     * Deleting sewaan
     */
    function remove($ID_SEWAAN)
    {
        $sewaan = $this->Sewaan_model->get_sewaan($ID_SEWAAN);

        // check if the sewaan exists before trying to delete it
        if (isset($sewaan['ID_SEWAAN'])) {
            $this->Sewaan_model->delete_sewaan($ID_SEWAAN);
            redirect('sewaan/index');
        } else
            show_error('The sewaan you are trying to delete does not exist.');
    }

    function checkout()
    {
        $data['title'] = 'Keranjang';
        $data['barang'] = array(
            'ID_SEWAAN' => $this->input->post('id_sewaan'),
            'NAMA_BARANG' => $this->input->post('nama_barang'),
            'GAMBAR' => $this->input->post('gambar'),
            'DURASI_SEWA' => $this->input->post('durasi_sewa'),
            'HARGA' => $this->input->post('harga'),
            'TOTAL' => $this->input->post('total')
        );

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('sewaan/checkout', $data);
        $this->load->view('templates/footer');
    }
}
