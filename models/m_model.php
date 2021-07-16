<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_model extends CI_Model {
    public function getdataobat(){
        $this->db->select('*');
        $this->db->from('obat');
        $query = $this->db->get();
        return 
        $query->result();
    }

    public function insertobat($data){
        $this->db->insert('obat',$data);
    }

    public function editobat($data,$kode_obat){
        $this->db->where('kode_obat', $kode_obat);
        $this->db->update('obat',$data);
    }

    public function getobatdetail($kode_obat){
        $this->db->where('kode_obat',$kode_obat);
        $query=$this->db->get('obat');
        return $query->row();
    }

    public function deleteobat($kode_barang){
        $this->db->where('kode_obat',$kode_barang);
        $this->db->delete('obat');
    }
}