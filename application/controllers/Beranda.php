<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index()
	{
		
		$data['gejala'] = $this->db->query("SELECT * FROM gejala where kode_ya ='Pilih Kode Gejala' and kode_tidak ='Pilih Kode Gejala' ")->row();
		$data['content']  = 'page/pengunjung/beranda';
		$data['title']  = 'Beranda';

		$this->load->view('page/pengunjung/master',$data);
	}

	public function diagnosa()
	{

		
		$gejala = $_GET['kode_gejala'];
		if ($_GET['jawaban']== 'ya'){
		$data['gejala'] = $this->db->query("SELECT * FROM gejala where kode_ya ='".$gejala."' and kode_tidak ='' ")->row();
		} else {
		$data['gejala'] = $this->db->query("SELECT * FROM gejala where kode_ya ='' and kode_tidak ='".$gejala."' ")->row();
		}

		$this->load->view('page/beranda', $data);
	}
}
