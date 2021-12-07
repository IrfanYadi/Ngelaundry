<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');
	}

	public function index()
	{
		$queryAllUser = $this->m_admin->getData();
		$data = array('queryAllUser' => $queryAllUser);
		$this->load->view('/template/v_header');
		$this->load->view('/template/v_navigation');
		$this->load->view('/admin/v_admin', $data);
		$this->load->view('/template/v_footer');
	}

	public function addPage()
	{
		$this->load->view('/template/v_header');
		$this->load->view('/template/v_navigation');
		$this->load->view('/admin/v_add');
		$this->load->view('/template/v_footer');
	}

	public function deleteData($id)
	{
		$this->m_admin->deleteData($id);
		redirect(base_url('admin'));
	}

	// public function updatePage($struk)
	// {
	// 	$queryLaundryDetail = $this->m_admin->getDataDetail($struk);
	// 	$data = array('queryLndryDetail' => $queryLaundryDetail);
	// 	$this->load->view('/template/v_header');
	// 	$this->load->view('/template/v_navigation');
	// 	$this->load->view('/admin/v_update', $data);
	// 	$this->load->view('/template/v_footer');
	// }

	// public function addData()
	// {
	// 	$struk = $this->input->post('struk');
	// 	$tanggal = $this->input->post('tanggal');
	// 	$pelanggan = $this->input->post('pelanggan');
	// 	$berat = $this->input->post('berat');

	// 	$harga = $berat * 6000;

	// 	$ArrInsert = array(
	// 		'struk' => $struk,
	// 		'tanggal' => $tanggal,
	// 		'pelanggan' => $pelanggan,
	// 		'berat' => $berat,
	// 		'harga' => $harga,
	// 	);

	// 	$this->m_admin->insertData($ArrInsert);
	// 	redirect(base_url('admin'));
	// }

	// public function updateData()
	// {
	// 	$struk = $this->input->post('struk');
	// 	$tanggal = $this->input->post('tanggal');
	// 	$pelanggan = $this->input->post('pelanggan');
	// 	$berat = $this->input->post('berat');

	// 	$harga = $berat * 6000;

	// 	$arrUpdate = array(
	// 		'tanggal' => $tanggal,
	// 		'pelanggan' => $pelanggan,
	// 		'berat' => $berat,
	// 		'harga' => $harga
	// 	);

	// 	$this->m_admin->updateDataLaundry($struk, $arrUpdate);
	// 	redirect(base_url('admin'));
	// }
}
