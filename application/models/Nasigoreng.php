<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nasigoreng extends CI_Model {

	function getDataNasigoreng() {
		$query = $this->db->get('admin');
		return $query->result();
	}

	function insertDataNasigoreng($data) {
		$this->db->insert('admin', $data);
	}

	function getDataNasgorDetail($kdadmin) {
		$this->db->where('kdadmin', $kdadmin);
		$query = $this->db->get('admin');
		return $query->row();
	}

	function updateDataNasigoreng($kdadmin, $data) {
		$this->db->where('kdadmin', $kdadmin);
		$this->db->update('admin', $data);
	}

	function deleteDataNasigoreng($kdadmin) {
		$this->db->where('kdadmin', $kdadmin);
		$this->db->delete('admin');
	}

}

/* End of file Nasigoreng.php */
/* Location: ./application/models/Nasigoreng.php */