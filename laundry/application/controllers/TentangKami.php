<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TentangKami extends CI_Controller
{

	public function index()
	{
		$this->load->view('/template/v_header');
		$this->load->view('/template/v_navigation');
		$this->load->view('/tentang/v_tentangkami');
		$this->load->view('/template/v_footer');
	}
}
