<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_transaksi extends CI_Model
{

	function getData()
	{
		$query = $this->db->get('transaksi');
		return $query->result();
	}

	function insertData($data)
	{
		$this->db->insert('transaksi', $data);
	}

	function getDataDetail($struk)
	{
		$this->db->where('struk', $struk);
		$query = $this->db->get('transaksi');
		return $query->row();
	}

	function updateDataLaundry($struk, $data)
	{
		$this->db->where('struk', $struk);
		$this->db->update('transaksi', $data);
	}

	function deleteData($struk)
	{
		$this->db->where('struk', $struk);
		$this->db->delete('transaksi');
	}
}
