<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */

class Sewaan_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /*
     * Get sewaan by ID_SEWAAN
     */
    function get_sewaan($ID_SEWAAN)
    {
        return $this->db->get_where('SEWAAN', array('ID_SEWAAN' => $ID_SEWAAN))->row_array();
    }

    /*
     * Get all sewaan
     */
    function get_all_sewaan()
    {
        $this->db->order_by('ID_SEWAAN', 'desc');
        return $this->db->get('SEWAAN')->result_array();
    }

    /*
     * function to add new sewaan
     */
    function add_sewaan($params)
    {
        $this->db->insert('SEWAAN', $params);
        return $this->db->insert_id();
    }

    /*
     * function to update sewaan
     */
    function update_sewaan($ID_SEWAAN, $params)
    {
        $this->db->where('ID_SEWAAN', $ID_SEWAAN);
        return $this->db->update('SEWAAN', $params);
    }

    /*
     * function to delete sewaan
     */
    function delete_sewaan($ID_SEWAAN)
    {
        return $this->db->delete('SEWAAN', array('ID_SEWAAN' => $ID_SEWAAN));
    }

    function get_detail_barang($ID_SEWAAN)
    {
        return $this->db->query("SELECT * FROM SEWAAN JOIN BARANG ON SEWAAN.ID_BARANG = BARANG.ID_BARANG WHERE SEWAAN.ID_SEWAAN = '$ID_SEWAAN'")->result_array();
    }

    function get_sewaan_by_id_user($ID_USER)
    {
        return $this->db->query("SELECT * FROM SEWAAN JOIN BARANG ON SEWAAN.ID_BARANG = BARANG.ID_BARANG WHERE SEWAAN.ID_USER = '$ID_USER'")->result_array();
    }
}
