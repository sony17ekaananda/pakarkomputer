<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GejalaController extends CI_Controller {

	public function __construct(){

	     parent::__construct();

	     // Load model
	    $this->load->model('Gejala');
	    $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
 	}


	public function list()
	{
		$data = $this->Gejala->getGejala();
		$data = array(
			'content' => 'page/gejala/list_gejala',
			'title'  => 'List Gejala',
			'data' => $data

		);

		$this->load->view('template/master', $data);
	}



	public function showTambah()
	{
		$data = array(
			'content' => 'page/gejala/tambah_gejala',
			'title'  => 'Tambah Gejala'

		);
		$data['kode_gejala'] = $this->db->query("SELECT * FROM gejala order by kode_gejala asc")->result();

		$this->load->view('template/master', $data);
	}

	public function doTambah(){
		$kode_gejala  = $this->input->post('kode_gejala');
		$this->form_validation->set_rules('kode_gejala', 'Kode_gejala', 'trim|required', [
			'required' => 'Masukkan Kode gejala!'
		]);
		$this->form_validation->set_rules('gejala', 'Gejala', 'trim|required', [
			'required' => 'Masukkan gejala!'
		]);

		if ($this->form_validation->run() == false) {
			$this->showTambah();
		} else {
			$cek=$this->Gejala->checkExisting('gejala', 'kode_gejala', $kode_gejala);
			if ($cek->count_rows>0){
			?>
                    <script>
                        alert('Kode ini sudah ada!');
                        window.location.replace("<?=base_url('gejala/list');?>");
                    </script>
                <?php
			}else{
			$this->Gejala->storeGejala();
			redirect(base_url('gejala/list'));
			}
		}
	} 

	public function showEdit($id){
		$dataGejala = $this->Gejala->getGejalaById($id);
		$data = array(
			'content' => 'page/gejala/edit_gejala',
			'title'  => 'Edit Gejala',
			'data' => $dataGejala,

		);
		$data['kode_gejala'] = $this->db->query("SELECT * FROM gejala order by kode_gejala asc")->result();

		$this->load->view('template/master', $data);
	}

	public function doEdit(){
		$this->form_validation->set_rules('kode_gejala', 'Kode_gejala', 'trim|required',[
			'required' => 'Masukkan kode gejala!'
		]);
		$this->form_validation->set_rules('gejala', 'Gejala', 'trim|required',[
			'required' => 'Masukkan gejala!'
		]);
		$id = $this->input->post('id');

		if ($this->form_validation->run() == false) {
			$this->showEdit($id);
		} else {
			$this->Gejala->updateGejala();
			redirect(base_url('gejala/list'));
		}
	}

	public function doDelete($id){

	    $data = array('id' => $id);
	    $this->Gejala->delete($data,'gejala');
	    redirect(base_url('gejala/list'));
  	}

}
