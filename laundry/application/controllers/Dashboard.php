<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_dashboard');
	}

	public function index()
	{
		$data = array(
			'n_transaksi' =>  $this->m_dashboard->jmlTransaksi(),
			'pendapatan' =>  $this->m_dashboard->ttlPendapatan(),
			'n_user' =>  $this->m_dashboard->jmlUser(),
		);


		$this->load->view('/template/v_header');
		$this->load->view('/template/v_navigation');
		$this->load->view('/dashboard/v_dashboard', $data);
		$this->load->view('/template/v_footer');
	}
}
