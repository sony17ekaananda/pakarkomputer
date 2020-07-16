<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Login');
		$this->load->helper('url');
	
	}

	public function showLogin()
	{
		if ($this->session->userdata('isLogin')=='true') {
			redirect(base_url('/dashboard'));
		}
		$data = array(
			'content' => 'page/login',
			'title' => 'Login'

		);

		$this->load->view('template/master_auth', $data);
	}

	function aksi_login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$where = array(
			'email' => $email,
			// 'password' => md5($password)
			'password' => $password
			);
		$cek = $this->Login->cek_login("admin",$where)->num_rows();
		$detail_users = $this->Login->detail_user("admin",$where);
		// print_r($email);
		if($cek > 0){
			foreach ($detail_users as $detail_user) {
                    $email   = $detail_user['email'];
                    $role		= $detail_user['role_id'];
                }
			$data_session = array(
				'email' 	=> $email,
				'role'		=> $role,
				'isLogin'	=> 'true'
				);

			$this->session->set_userdata($data_session);

			?>
			<script>
			// alert('Welcome to Aplikasi');
			window.location.replace("<?=base_url('/dashboard');?>");
			</script>
			<?php
			// $this->load->view('./admin/admin');
		} 
		else {
			?>
			<script>
			alert('Email atau Password anda salah');
			window.location.replace("<?=base_url('/login');?>");
			</script>
			<?php
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('/login'));
		//print_r($this->session->userdata('isLogin'));
	}
}

?>