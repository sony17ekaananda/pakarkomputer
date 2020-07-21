<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index()
	{
		$data  = array(
			'title' => 'Tentang',
			'content' => 'page/pengunjung/tentang'

		 );
		$this->load->view('page/pengunjung/master', $data);
	}
}