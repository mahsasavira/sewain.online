<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Pembayaran_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get pembayaran by ID_PEMBAYARAN
     */
    function get_pembayaran($ID_PEMBAYARAN)
    {
        return $this->db->get_where('PEMBAYARAN',array('ID_PEMBAYARAN'=>$ID_PEMBAYARAN))->row_array();
    }
        
    /*
     * Get all pembayaran
     */
    function get_all_pembayaran()
    {
        $this->db->order_by('ID_PEMBAYARAN', 'desc');
        return $this->db->get('PEMBAYARAN')->result_array();
    }

    function get_user_pembayaran_konfirmasi($ID_USER)
    {
        return $this->db->query("SELECT * FROM PEMBAYARAN JOIN TRANSAKSI_SEWA ON PEMBAYARAN.ID_TRAKSAKSI = TRANSAKSI_SEWA.ID_TRAKSAKSI JOIN SEWAAN
        ON TRANSAKSI_SEWA.ID_SEWAAN = SEWAAN.ID_SEWAAN JOIN BARANG ON BARANG.ID_BARANG = SEWAAN.ID_BARANG WHERE SEWAAN.ID_USER = '$ID_USER'")->result_array();
    }
        
    /*
     * function to add new pembayaran
     */
    function add_pembayaran($params)
    {
        $this->db->insert('PEMBAYARAN',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update pembayaran
     */
    function update_pembayaran($ID_PEMBAYARAN,$params)
    {
        $this->db->where('ID_PEMBAYARAN',$ID_PEMBAYARAN);
        return $this->db->update('PEMBAYARAN',$params);
    }
    
    /*
     * function to delete pembayaran
     */
    function delete_pembayaran($ID_PEMBAYARAN)
    {
        return $this->db->delete('PEMBAYARAN',array('ID_PEMBAYARAN'=>$ID_PEMBAYARAN));
    }
}
