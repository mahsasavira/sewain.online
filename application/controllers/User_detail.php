<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class User_detail extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_detail_model');
    } 

    /*
     * Listing of user_detail
     */
    function index()
    {
        $data['user_detail'] = $this->User_detail_model->get_all_user_detail();
        
        $data['_view'] = 'user_detail/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new user_detail
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'NAMA' => $this->input->post('NAMA'),
				'ALAMAT' => $this->input->post('ALAMAT'),
				'KOTA' => $this->input->post('KOTA'),
				'STATUS' => $this->input->post('STATUS'),
				'ID_USER' => $this->input->post('ID_USER'),
            );
            
            $user_detail_id = $this->User_detail_model->add_user_detail($params);
            redirect('user_detail/index');
        }
        else
        {            
            $data['_view'] = 'user_detail/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a user_detail
     */
    function edit($ID_DETAIL_USER)
    {   
        // check if the user_detail exists before trying to edit it
        $data['user_detail'] = $this->User_detail_model->get_user_detail($ID_DETAIL_USER);
        
        if(isset($data['user_detail']['ID_DETAIL_USER']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'NAMA' => $this->input->post('NAMA'),
					'ALAMAT' => $this->input->post('ALAMAT'),
					'KOTA' => $this->input->post('KOTA'),
					'STATUS' => $this->input->post('STATUS'),
					'ID_USER' => $this->input->post('ID_USER'),
                );

                $this->User_detail_model->update_user_detail($ID_DETAIL_USER,$params);            
                redirect('user_detail/index');
            }
            else
            {
                $data['_view'] = 'user_detail/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The user_detail you are trying to edit does not exist.');
    } 

    /*
     * Deleting user_detail
     */
    function remove($ID_DETAIL_USER)
    {
        $user_detail = $this->User_detail_model->get_user_detail($ID_DETAIL_USER);

        // check if the user_detail exists before trying to delete it
        if(isset($user_detail['ID_DETAIL_USER']))
        {
            $this->User_detail_model->delete_user_detail($ID_DETAIL_USER);
            redirect('user_detail/index');
        }
        else
            show_error('The user_detail you are trying to delete does not exist.');
    }
    
}
