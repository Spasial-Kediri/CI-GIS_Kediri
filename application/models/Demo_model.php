<?php

class Demo_model extends CI_Model{

	function get_data() {
 
		$this->db->select("id_jenis, nama");
		return $this->db->get("tb_jenis");
	 
	}
}

?>