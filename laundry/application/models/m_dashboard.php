<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_dashboard extends CI_Model
{


	function jmlTransaksi()
	{
		return $this->db->count_all('transaksi');
	}

	function ttlPendapatan()
	{
		$sql = "SELECT sum(harga) as harga FROM transaksi";
		$result = $this->db->query($sql);
		return $result->row()->harga;
	}

	function jmlUser()
	{
		return $this->db->count_all('user');
	}
}
