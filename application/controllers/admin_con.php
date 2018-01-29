<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_con extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));
	}
	public function index()
	{
		$this->load->view('loginadmin');
	}

	public function dashboard()
	{
		$this->cek_session();
		$data['content'] = 'dashboardadmin';
		$data['menu'] = 'dashboardadmin';
		$data['ses_username'] = $this->session->username;
		$where = array('username' => $data['ses_username']);
		$data['dataadmin'] = $this->ukk_mod->getAdminByUsername($where,'user');
		$this->load->view('layoutadmin', $data);
	}

	public function tampildata()
	{
		$this->cek_session();
		$data['content'] = 'tampildata';
		$data['menu'] = 'tampildata';
		$data['ses_username'] = $this->session->username;
		$where = array('username' => $data['ses_username']);
		$data['dataadmin'] = $this->ukk_mod->getAdminByUsername($where,'user');
		$data['datauser'] = $this->ukk_mod->getUserAll();
		$this->load->view('layoutdata', $data);
	}

	public function adminnyaLogin()
	{
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		// $result = $this->ukk_mod->cek_user($username, $password);
		// if($result->num_rows() > 0)
		// {
		// 	foreach ($result->result() as $row) 
		// 	{
		// 		$username = $row->username;
		// 		$password = $row->password;
		// 	}

		// 	$where = array
		// 	(
		// 		'username' => $username,
		// 		'password' => $password
		// 	);

		// 	$this->session->set_userdata($where);
		// 	redirect('admin_con/dashboard');
		// }
		// else
		// {
		// 	$this->session->set_flashdata('messages', '<div class="alert alert-danger"><strong>Sorry Babe</strong> Dirimu bukan admin :*</div>');
		// 	redirect(base_url().'admin_con');
		// }

		$where = array('username' => $username,
			'password' => $password);
		$cek= $this->ukk_mod->getDataAdminByEmailPass($where,'user')->num_rows();
		if($cek>0){
			$dataarray=array(
				"username"=>$username,
				"password"=>$password,
				"level"=>"admin"
				);
			$this->session->set_userdata($dataarray);
			redirect(base_url().'admin_con/dashboard');
		}else
		{
			$this->session->set_flashdata('messages', '<div class="alert alert-danger"><strong>Sorry Babe</strong> Dirimu bukan admin :*</div>');
			redirect(base_url().'admin_con');
		}
	}

	public function cek_session()
	{
		$sesion = $this->session->level;
		if(empty($sesion))
		{
			redirect(base_url().'admin_con');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url().'admin_con');
	}

	public function addUser()
	{
		$idcard=$this->input->post('idcard');
		$namapanjang=$this->input->post('namapanjang');
		$alamat=$this->input->post('alamat');
		$notelp=$this->input->post('notelp');
		$jenkel=$this->input->post('jenkel');
		$email=$this->input->post('email');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$repassword=$this->input->post('repassword');
		$level=$this->input->post('level');
		$dataUser = array(
			'id_card' => $idcard,
			'nama' => $namapanjang,
			'alamat' => $alamat,
			'notelp' => $notelp,
			'jenkel' => $jenkel,
			'email' => $email
			);
		$dataUserSatunya = array(
			'username' => $username,
			'password' => $password,
			'repassword' => $repassword,
			'id_card' => $idcard,
			'namapanjang' => $namapanjang,
			'level' => $level
			);

		$submitData = $this->ukk_mod->saveUser($dataUser);
		$submitDataSatunya = $this->ukk_mod->saveUserSatunya($dataUserSatunya);
		if ($submitData==1 && $submitDataSatunya==1){
			$this->session->set_flashdata('messages', '<div class="alert alert-success">Data Telah Ter<strong>simpan</strong></div>');
		}else{
			$this->session->set_flashdata('messages', '<div class="alert alert-danger>Maaf Anda <strong>gagal</strong> Mendaftar. Kami Mohon Maaf</div>');
		}
		redirect(base_url().'user_con/signup_user');
	}
}
