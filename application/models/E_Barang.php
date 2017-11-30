<?php
class E_Barang extends CI_Model{

    function addresep($tabelname,$data){
        $res =$this->db->insert($tabelname,$data);
        return $res;
    }
 function pilih_resep($id_resep){
        $this->db->where('id_resep',$id_resep);
        $query = $this->db->get('resep');
        return $query;
    }   
    function list_resepall(){
        $this->db->select('*');
        $this->db->from('resep');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function deleteresep($id_resep){
        $this->db->select('*');
        $this->db->where('id_resep', $id_resep);
        $this->db->delete('resep');
    }

    function getSearch($namaresep){
        $this->db->like('namaresep',$namaresep);
        $query = $this->db->get('resep');
        return $query->result_array();
    }
    //filter berdasarkan kategori

        function list_berkuah(){
        $this->db->select('*');
        $this->db->where('kategori','Berkuah');
        $query = $this->db->get('resep'); 
        return $query->result_array();
    }
    function list_gorengan(){
        $this->db->select('*');
        $this->db->where('kategori','Gorengan');
        $query = $this->db->get('resep'); 
        return $query->result_array();
    }

    

    function list_idBarang($id_barang){
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->where('id_barang',$id_barang);
        $query = $this->db->get();
        return $query->result_array();
    }

}
?>