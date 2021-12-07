<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_transaksi');
	}

	public function index()
	{
		$queryAllLaundry = $this->m_transaksi->getData();
		$data = array('queryAllLaundry' => $queryAllLaundry);
		$this->load->view('/template/v_header');
		$this->load->view('/template/v_navigation');
		$this->load->view('/transaksi/v_transaksi', $data);
		$this->load->view('/template/v_footer');
	}

	public function addPage()
	{
		$this->load->view('/template/v_header');
		$this->load->view('/template/v_navigation');
		$this->load->view('/transaksi/v_add');
		$this->load->view('/template/v_footer');
	}

	public function updatePage($struk)
	{
		$queryLaundryDetail = $this->m_transaksi->getDataDetail($struk);
		$data = array('queryLndryDetail' => $queryLaundryDetail);
		$this->load->view('/template/v_header');
		$this->load->view('/template/v_navigation');
		$this->load->view('/transaksi/v_update', $data);
		$this->load->view('/template/v_footer');
	}

	public function addData()
	{
		$struk = $this->input->post('struk');
		$tanggal = $this->input->post('tanggal');
		$pelanggan = $this->input->post('pelanggan');
		$berat = $this->input->post('berat');
		$harga = $berat * 6000;
		$status = $this->input->post('status');

		$ArrInsert = array(
			'struk' => $struk,
			'tanggal' => $tanggal,
			'pelanggan' => $pelanggan,
			'berat' => $berat,
			'harga' => $harga,
			'status' => $status
		);

		$this->m_transaksi->insertData($ArrInsert);
		redirect(base_url('transaksi'));
	}

	public function updateData()
	{
		$struk = $this->input->post('struk');
		$tanggal = $this->input->post('tanggal');
		$pelanggan = $this->input->post('pelanggan');
		$berat = $this->input->post('berat');
		$harga = $berat * 6000;
		$status = $this->input->post('status');

		$arrUpdate = array(
			'tanggal' => $tanggal,
			'pelanggan' => $pelanggan,
			'berat' => $berat,
			'harga' => $harga,
			'status' => $status
		);

		$this->m_transaksi->updateDataLaundry($struk, $arrUpdate);
		redirect(base_url('transaksi'));
	}

	public function deleteData($struk)
	{
		$this->m_transaksi->deleteData($struk);
		redirect(base_url('transaksi'));
	}
}
