<?php
class Cart extends CI_Model{

     function get_all_produk(){
        $hasil=$this->db->get('cart');
        return $hasil->result();
    }
}