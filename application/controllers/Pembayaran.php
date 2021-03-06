<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Pembayaran extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pembayaran_model');
    } 

    /*
     * Listing of pembayaran
     */
    function index()
    {
        $data['pembayaran'] = $this->Pembayaran_model->get_all_pembayaran();
        
        $data['_view'] = 'pembayaran/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new pembayaran
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'ID_TRAKSAKSI' => $this->input->post('ID_TRAKSAKSI'),
				'STATUS' => $this->input->post('STATUS'),
				'TGL_BAYAR' => $this->input->post('TGL_BAYAR'),
            );
            
            $pembayaran_id = $this->Pembayaran_model->add_pembayaran($params);
            redirect('pembayaran/index');
        }
        else
        {            
            $data['_view'] = 'pembayaran/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a pembayaran
     */
    function edit($ID_PEMBAYARAN)
    {   
        // check if the pembayaran exists before trying to edit it
        $data['pembayaran'] = $this->Pembayaran_model->get_pembayaran($ID_PEMBAYARAN);
        
        if(isset($data['pembayaran']['ID_PEMBAYARAN']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'ID_TRAKSAKSI' => $this->input->post('ID_TRAKSAKSI'),
					'STATUS' => $this->input->post('STATUS'),
					'TGL_BAYAR' => $this->input->post('TGL_BAYAR'),
                );

                $this->Pembayaran_model->update_pembayaran($ID_PEMBAYARAN,$params);            
                redirect('pembayaran/index');
            }
            else
            {
                $data['_view'] = 'pembayaran/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The pembayaran you are trying to edit does not exist.');
    } 

    /*
     * Deleting pembayaran
     */
    function remove($ID_PEMBAYARAN)
    {
        $pembayaran = $this->Pembayaran_model->get_pembayaran($ID_PEMBAYARAN);

        // check if the pembayaran exists before trying to delete it
        if(isset($pembayaran['ID_PEMBAYARAN']))
        {
            $this->Pembayaran_model->delete_pembayaran($ID_PEMBAYARAN);
            redirect('pembayaran/index');
        }
        else
            show_error('The pembayaran you are trying to delete does not exist.');
    }
    
}
