<?php

class PenyebabController extends CI_Controller {

	public function __construct(){

	     parent::__construct();
defined('BASEPATH') OR exit('No direct script access allowed');

	     // Load model
	    $this->load->model('Penyebab');
	    $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
 	}


	public function list()
	{
		$data = $this->Penyebab->getPenyebab();
		$data = array(
			'content' => 'page/penyebab/list_penyebab',
			'title'  => 'List Penyebab',
			'data' => $data

		);

		$this->load->view('template/master', $data);
	}



	public function showTambah()
	{
		$data = array(
			'content' => 'page/penyebab/tambah_penyebab',
			'title'  => 'Tambah Penyebab'

		);

		$this->load->view('template/master', $data);
	}

	public function doTambah(){
		$this->form_validation->set_rules('penyebab', 'Penyebab', 'trim|required',[
			'required' => 'Masukkan penyebab!'
		]);

		if ($this->form_validation->run() == false) {
			$this->showTambah();
		} else {
			$this->Penyebab->storePenyebab();
			redirect(base_url('penyebab/list'));
		}
	}

	public function showEdit($id){
		$dataPenyebab = $this->Penyebab->getPenyebabById($id);
		$data = array(
			'content' => 'page/penyebab/edit_penyebab',
			'title'  => 'Edit Penyebab',
			'data' => $dataPenyebab,

		);

		$this->load->view('template/master', $data);
	}

	public function doEdit(){
		$this->form_validation->set_rules('penyebab', 'Penyebab', 'trim|required',[
			'required' => 'Masukkan penyebab!',
		]);
		$id = $this->input->post('id');

		if ($this->form_validation->run() == false) {
			$this->showEdit($id);
		} else {
			$this->Penyebab->updatePenyebab();
			redirect(base_url('penyebab/list'));
		}
	}

	public function doDelete($id){

	    $data = array('id' => $id);
	    $this->Penyebab->delete($data,'penyebab');
	    redirect(base_url('penyebab/list'));
  	}

}
