<?php

class SolusiController extends CI_Controller {

	public function __construct(){

	     parent::__construct();
defined('BASEPATH') OR exit('No direct script access allowed');

	     // Load model
	    $this->load->model('Solusi');
	    $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
 	}


	public function list()
	{
		$data = $this->Solusi->getSolusi();
		$data = array(
			'content' => 'page/solusi/list_solusi',
			'title'  => 'List Solusi',
			'data' => $data

		);

		$this->load->view('template/master', $data);
	}



	public function showTambah()
	{
		$data = array(
			'content' => 'page/solusi/tambah_solusi',
			'title'  => 'Tambah Solusi'

		);

		$this->load->view('template/master', $data);
	}

	public function doTambah(){
		$this->form_validation->set_rules('solusi', 'Solusi', 'trim|required',[
			'required' => 'Masukkan solusi!'
		]);

		if ($this->form_validation->run() == false) {
			$this->showTambah();
		} else {
			$this->Solusi->storeSolusi();
			redirect(base_url('solusi/list'));
		}
	}

	public function showEdit($id){
		$dataSolusi = $this->Solusi->getSolusiById($id);
		$data = array(
			'content' => 'page/solusi/edit_solusi',
			'title'  => 'Edit Solusi',
			'data' => $dataSolusi,

		);

		$this->load->view('template/master', $data);
	}

	public function doEdit(){
		$this->form_validation->set_rules('solusi', 'Solusi', 'trim|required',[
			'required' => 'Masukkan solusi!',
		]);
		$id = $this->input->post('id');

		if ($this->form_validation->run() == false) {
			$this->showEdit($id);
		} else {
			$this->Solusi->updateSolusi();
			redirect(base_url('solusi/list'));
		}
	}

	public function doDelete($id){

	    $data = array('id' => $id);
	    $this->Solusi->delete($data,'solusi');
	    redirect(base_url('solusi/list'));
  	}

}
