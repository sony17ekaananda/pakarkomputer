<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KontakController extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index()
	{
		$data  = array(
			'title' => 'Kontak',
			'content' => 'page/pengunjung/kontak'

		 );
		$this->load->view('page/pengunjung/master', $data);

	}
}