<?php 
class M_login extends CI_Model {
	function cek_login($table,$where)
	{
		return $this->db->get_where($table,$where);
	}

	function insert_data($table,$where)
	{
		return $this->db->insert($table,$where);
	}
}
?>