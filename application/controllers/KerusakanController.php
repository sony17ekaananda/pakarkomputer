<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KerusakanController extends CI_Controller {

	public function __construct(){

	     parent::__construct();

	     // Load model
	    $this->load->model('Kerusakan');
	    $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
 	}


	public function list()
	{
		$data = $this->Kerusakan->getKerusakan();
		$data = array(
			'content' => 'page/kerusakan/list_kerusakan',
			'title'  => 'List Kerusakan',
			'data' => $data

		);

		$this->load->view('template/master', $data);
	}



	public function showTambah()
	{
		$data = array(
			'content' => 'page/kerusakan/tambah_kerusakan',
			'title'  => 'Tambah kerusakan'

		);
		$data['kode_kerusakan'] = $this->db->query("SELECT * FROM kerusakan order by kode_kerusakan asc")->result();

		$this->load->view('template/master', $data);
	}

	public function doTambah(){
		$this->form_validation->set_rules('kode_kerusakan', 'Kode_kerusakan', 'trim|required',[
			'required' => 'Masukkan kode kerusakan!'
		]);
		$this->form_validation->set_rules('kerusakan', 'Kerusakan', 'trim|required',[
			'required' => 'Masukkan kerusakan!'
		]);
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required',[
			'required' => 'Masukkan deskripsi!'
		]);
		$this->form_validation->set_rules('pencegahan', 'Pencegahan', 'trim|required',[
			'required' => 'Masukkan pencegahan!'
		]);

		if ($this->form_validation->run() == false) {
			$this->showTambah();
		} else {
			$this->Kerusakan->storeKerusakan();
			redirect(base_url('kerusakan/list'));
		}
	}

	public function showEdit($id){
		$dataKerusakan = $this->Kerusakan->getKerusakanById($id);
		$data = array(
			'content' => 'page/kerusakan/edit_kerusakan',
			'title'  => 'Edit Kerusakan',
			'data' => $dataKerusakan,

		);
		$data['kode_kerusakan'] = $this->db->query("SELECT * FROM kerusakan order by kode_kerusakan asc")->result();

		$this->load->view('template/master', $data);
	}

	public function doEdit(){
		$this->form_validation->set_rules('kode_kerusakan', 'Kode_kerusakan', 'trim|required',[
			'required' => 'Masukkan kode kerusakan!'
		]);
		$this->form_validation->set_rules('kerusakan', 'Kerusakan', 'trim|required',[
			'required' => 'Masukkan kerusakan!'
		]);
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required',[
			'required' => 'Masukkan deskripsi!'
		]);
		$this->form_validation->set_rules('pencegahan', 'Pencegahan', 'trim|required',[
			'required' => 'Masukkan pencegahan!'
		]);
		$id = $this->input->post('id');

		if ($this->form_validation->run() == false) {
			$this->showEdit($id);
		} else {
			$this->Kerusakan->updateKerusakan();
			redirect(base_url('kerusakan/list'));
		}
	}

	public function doDelete($id){

	    $data = array('id' => $id);
	    $this->Kerusakan->delete($data,'kerusakan');
	    redirect(base_url('kerusakan/list'));
  	}

}
