<?php
class Product extends CI_Model{
    function __construct() 
    {
        parent::__construct();
    }
    function add_product($data)
    {
        $this->db->insert('product', $data);
    }
    function remove($id)
    {
       //print_r($id);
       $query = $this->db->query("DELETE FROM product WHERE id='".$id."' ");
    }
    function get_contents()
    {
        $this->db->select("*");
        $this->db->from('product');
        $query = $this->db->get();
        return $query->result();
    }
    function alter_product($data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update('product', $data);
    }
    function view_multi()
    {
        $this->db->select("*");
        $this->db->from('product');
        $this->db->where('status',1);
        $query = $this->db->get();
        return $query->result();
    }
    
}
?>