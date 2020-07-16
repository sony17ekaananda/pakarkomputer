<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Kontak');
		$this->load->helper('url');
	}
	
	public function index()
	{
		$this->load->view('page/kontak', $data);
	}
}