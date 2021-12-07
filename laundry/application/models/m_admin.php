<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_admin extends CI_Model
{

	function getData()
	{
		$query = $this->db->get('user');
		return $query->result();
	}

	function deleteData($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('user');
	}

	// function insertData($data)
	// {
	// 	$this->db->insert('user', $data);
	// }

	// function getDataDetail($struk)
	// {
	// 	$this->db->where('struk', $struk);
	// 	$query = $this->db->get('user');
	// 	return $query->row();
	// }

	// function updateDataLaundry($struk, $data)
	// {
	// 	$this->db->where('struk', $struk);
	// 	$this->db->update('user', $data);
	// }


}
