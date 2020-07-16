<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PenggunaController extends CI_Controller {

	public function __construct(){

	     parent::__construct();

	     // Load model
	     $this->load->model('Admin');
	    $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
 	}


	public function list()
	{
		$data = $this->Admin->getAdmin();
		$data = array(
			'content' => 'page/pengguna/list_pengguna',
			'title'  => 'List Pengguna',
			'data' => $data

		);

		$this->load->view('template/master', $data);
	}



	public function showTambah()
	{
		$data = array(
			'content' => 'page/pengguna/tambah_pengguna',
			'title'  => 'Tambah Pengguna'

		);

		$this->load->view('template/master', $data);
	}

	public function doTambah(){
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required', [
			'required' => 'Masukkan nama!'
		]);
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
			'required' => 'Masukkan email!',
			'valid_email' => 'Email tidak valid!'
		]);
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]',[
			'required' => 'Masukkan password!',
			'min_length' => 'Password kurang dari 6 karakter!'
		]);

		if ($this->form_validation->run() == false) {
			$this->showTambah();
		} else {
			$this->Admin->storeAdmin();
			redirect(base_url('pengguna/list'));
		}
	}

	public function showEdit($id){
		$dataAdmin = $this->Admin->getAdminById($id);
		$dataRole = $this->Admin->getRole();
		$data = array(
			'content' => 'page/pengguna/edit_pengguna',
			'title'  => 'Edit Pengguna',
			'data' => $dataAdmin,
			'dataRole'  => $dataRole

		);

		$this->load->view('template/master', $data);
	}

	public function doEdit(){
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required', [
			'required' => 'Masukkan nama!'
		]);
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
			'required' => 'Masukkan email!',
			'valid_email' => 'Email tidak valid!'
		]);
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]',[
			'required' => 'Masukkan password!',
			'min_length' => 'Password kurang dari 6 karakter!'
		]);
		$id = $this->input->post('id');

		if ($this->form_validation->run() == false) {
			$this->showEdit($id);
		} else {
			$this->Admin->updateAdmin();
			redirect(base_url('pengguna/list'));
		}
	}

	public function doDelete($id){

	    $data = array('id' => $id);
	    $this->Admin->delete($data,'admin');
	    redirect(base_url('pengguna/list'));
  	}

}
