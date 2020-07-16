<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');

		if ($this->session->userdata('isLogin')!='true') {
			redirect(base_url('login'));
		}
	}

	public function index()
	{
		$data = array(
			'content' => 'page/dashboard',
			'title'  => 'Dashboard'

		);

		$this->load->view('template/master', $data);
	}
}
