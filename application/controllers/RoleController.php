<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RoleController extends CI_Controller {

	public function __construct(){

	     parent::__construct();

	     // Load model
	    $this->load->model('Role');
	    $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
 	}


	public function list()
	{
		$data = $this->Role->getRole();
		$data = array(
			'content' => 'page/role/list_role',
			'title'  => 'List Role',
			'data' => $data

		);

		$this->load->view('template/master', $data);
	}



	public function showTambah()
	{
		$data = array(
			'content' => 'page/role/tambah_role',
			'title'  => 'Tambah Role'

		);

		$this->load->view('template/master', $data);
	}

	public function doTambah(){
		$this->Role->storeRole();

		redirect(base_url('role/list'));
	}

	public function showEdit($id){
		$dataRole = $this->Role->getRoleById($id);
		$data = array(
			'content' => 'page/role/edit_role',
			'title'  => 'Edit Role',
			'data' => $dataRole,

		);

		$this->load->view('template/master', $data);
	}

	public function doEdit(){
		$this->Role->updateRole();

		redirect(base_url('role/list'));
	}

	public function doDelete($id){

	    $data = array('id' => $id);
	    $this->Role->delete($data,'role');
	    redirect(base_url('role/list'));
  	}

}
