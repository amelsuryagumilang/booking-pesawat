<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_con extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}
	public function index()
	{
		$this->load->view('loginadmin');
	}

	function searchKeyword()
    {
        $data['content'] = 'databuatuser';
		$data['menu'] = 'home';
        $keydari = $this->input->get('dari');
        $keyke = $this->input->get('ke');
        $keydate = $this->input->get('date');
        $brngkt=date('Y-m-d', strtotime($keydate));
        $key = array(
        		'kota_awal'=>$keydari,
        		'kota_akhir'=>$keyke,
        		'tanggalbrngkt'=>$brngkt
        	);
        $searchdata = $this->ukk_mod->search($key);
        $searchdataarray = $searchdata->row_array();
        $data['rute'] = $searchdata->result();
        $datatransport = $this->ukk_mod->gets_by_conditions('transport', array('id_trans' => $searchdataarray['id_trans']));
        $datatransportarray = $datatransport->row_array();
        $data['transport'] = $datatransport->result();
        $data['desklanjutan'] = $this->ukk_mod->gets_by_conditions('tipe_trans', array('id_tipetrans' => $datatransportarray['id_tipetrans']))->result();
        $this->load->view('layout',$data);
    }

	public function usermaupesen($id = 0)
	{
		$data['content'] = 'usermaupesen';
		$data['menu'] = 'usermaupesen';
		$data_trans = $this->ukk_mod->getruterute("where rute.id_rute = '$id' AND transport.id_trans = rute.id_trans")->result_array();
		$tina = array(
				'tanggalbrngkt' => $data_trans[0]['tanggalbrngkt']
			);
		$where = array('id_rute' => $id);
        
		$this->load->view('layoutpesen', $data, $tina);
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

	public function userdaftarbyadmin()
	{
		$this->cek_session();
		$data['content'] = 'userdaftarbyadmin';
		$data['menu'] = 'userdaftarbyadmin';
		$data['ses_username'] = $this->session->username;
		$where = array('username' => $data['ses_username']);
		$data['dataadmin'] = $this->ukk_mod->getAdminByUsername($where,'user');
		$this->load->view('layoutdata', $data);
	}

	public function inputtypetrans()
	{
		$this->cek_session();
		$data['content'] = 'inputtypetrans';
		$data['menu'] = 'inputtypetrans';
		$data['ses_username'] = $this->session->username;
		$where = array('username' => $data['ses_username']);
		$data['dataadmin'] = $this->ukk_mod->getAdminByUsername($where,'user');
		$this->load->view('layoutdata', $data);
	}

	public function inputtrans()
	{
		$this->cek_session();
		$data['content'] = 'inputtrans';
		$data['menu'] = 'inputtrans';
		$data['ses_username'] = $this->session->username;
		$where = array('username' => $data['ses_username']);
		$data['dataadmin'] = $this->ukk_mod->getAdminByUsername($where,'user');
		$data['datatipe'] = $this->ukk_mod->getTipeAll();
		$this->load->view('layoutdata', $data);
	}

	public function inputrute()
	{
		$this->cek_session();
		$data['content'] = 'inputrute';
		$data['menu'] = 'inputrute';
		$data['ses_username'] = $this->session->username;
		$where = array('username' => $data['ses_username']);
		$data['dataadmin'] = $this->ukk_mod->getAdminByUsername($where,'user');
		$data['datatrans'] = $this->ukk_mod->getTransAll();
		$this->load->view('layoutformtanggal', $data);
	}

	public function do_upload($fileloc)
	{
		$config['upload_path']          = './assets/admin/'.$fileloc;
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = '10000';
		$config['max_width']            = '5000';
		$config['max_height']           = '5000';
 
		$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
			// $this->load->view('v_upload', $error);
			print_r($error); die;
		}
		return $this->upload->data('file_name');
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
		$this->cek_session();
		$this->session->sess_destroy();
		redirect(base_url().'admin_con');
	}

	public function addUser()
	{
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$idcard=$this->input->post('idcard');
		$namapanjang=$this->input->post('namapanjang');
		$jenkel=$this->input->post('jenkel');
		$email=$this->input->post('email');
		$alamat=$this->input->post('alamat');
		$notelp=$this->input->post('notelp');
		$level=$this->input->post('level');
		$dataUser = array(
			'username' => $username,
			'password' => $password,
			'id_card' => $idcard,
			'namapanjang' => $namapanjang,
			'jenkel' => $jenkel,
			'email' => $email,
			'alamat' => $alamat,
			'notelp' => $notelp,
			'level' => $level
			);

		$submitData = $this->ukk_mod->saveUser($dataUser);
		if ($submitData==1){
			$this->session->set_flashdata('messages', '<div class="alert alert-success">Data Telah Ter<strong>simpan</strong></div>');
		}else{
			$this->session->set_flashdata('messages', '<div class="alert alert-danger>Maaf Anda <strong>gagal</strong> Mendaftar. Kami Mohon Maaf</div>');
		}
		redirect(base_url().'user_con/signup_user');
	}

	public function addRute()
	{
		$this->cek_session();
		$tanggalbrngkt=$this->input->post('tanggalbrngkt');
		$jambrngkt=$this->input->post('jambrngkt');
		$bandaraawal=$this->input->post('bandaraawal');
		$kotaawal=$this->input->post('kotaawal');
		$tanggalsampai=$this->input->post('tanggalsampai');
		$jamsampai=$this->input->post('jamsampai');
		$bandaraakhir=$this->input->post('bandaraakhir');
		$kotaakhir=$this->input->post('kotaakhir');
		$bandaratransit=$this->input->post('bandaratransit');
		$price=$this->input->post('price');
		$pesawat=$this->input->post('pesawat');
		$brngkt=date('Y-m-d', strtotime($tanggalbrngkt));
		$sampai=date('Y-m-d', strtotime($tanggalsampai));
		// $tanggaljambrngkt=$brngkt.''.$jambrngkt;
		// $tanggaljamsampai=$sampai.''.$jamsampai;
		$dataRute = array(
			'tanggalbrngkt' => $brngkt,
			'jam_brngkt' => $jambrngkt,
			'bandara_awal' => $bandaraawal,
			'kota_awal' => $kotaawal,
			'tanggalsampai' => $sampai,
			'jam_sampai' => $jamsampai,
			'bandara_akhir' => $bandaraakhir,
			'kota_akhir' => $kotaakhir,
			'bandara_transit' => $bandaratransit,
			'harga' => $price,
			'id_trans' => $pesawat
			);

		$submitData = $this->ukk_mod->saveRute($dataRute);
		if ($submitData==1){
			$this->session->set_flashdata('messages', '<div class="alert alert-success">Data Telah Ter<strong>simpan</strong></div>');
		}else{
			$this->session->set_flashdata('messages', '<div class="alert alert-danger>Maaf Anda <strong>gagal</strong> Mendaftar. Kami Mohon Maaf</div>');
		}
		redirect(base_url().'admin_con/inputrute');
	}

	public function addTrans()
	{
		$this->cek_session();
		$namatrans=$this->input->post('namatrans');
		$kodetrans=$this->input->post('kodetrans');
		$deskripsi=$this->input->post('deskripsi');
		$jmlhkrs=$this->input->post('jmlhkrs');
		$tipetrans=$this->input->post('tipetrans');
		$fileName=$this->do_upload('logo/');
		$dataTrans = array(
			'nama_trans' => $namatrans,
			'kode_trans' => $kodetrans,
			'deskripsi' => $deskripsi,
			'jml' => $jmlhkrs,
			'id_tipetrans' => $tipetrans,
			'logo' => $fileName
			);

		$submitData = $this->ukk_mod->saveTrans($dataTrans);
		if ($submitData==1){
			$this->session->set_flashdata('messages', '<div class="alert alert-success">Data Telah Ter<strong>simpan</strong></div>');
		}else{
			$this->session->set_flashdata('messages', '<div class="alert alert-danger>Maaf Anda <strong>gagal</strong> menyimpan data</div>');
		}
		redirect(base_url().'admin_con/inputtrans');
	}

	public function addTipeTrans()
	{
		$this->cek_session();
		$deskripsi=$this->input->post('desk');
		$dataTipe = array(
			'deskripsi' => $deskripsi
			);

		$submitData = $this->ukk_mod->saveTipe($dataTipe);
		if ($submitData==1){
			$this->session->set_flashdata('messages', '<div class="alert alert-success">Data Telah Ter<strong>simpan</strong></div>');
		}else{
			$this->session->set_flashdata('messages', '<div class="alert alert-danger>Maaf Anda <strong>gagal</strong> menyimpan data</div>');
		}
		redirect(base_url().'admin_con/inputtypetrans');
	}

	public function addUserbyAdmin()
	{
		$this->cek_session();
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$idcard=$this->input->post('idcard');
		$namapanjang=$this->input->post('namapanjang');
		$jenkel=$this->input->post('jenkel');
		$email=$this->input->post('email');
		$alamat=$this->input->post('alamat');
		$notelp=$this->input->post('notelp');
		$level=$this->input->post('level');
		$dataUser = array(
			'username' => $username,
			'password' => $password,
			'id_card' => $idcard,
			'namapanjang' => $namapanjang,
			'jenkel' => $jenkel,
			'email' => $email,
			'alamat' => $alamat,
			'notelp' => $notelp,
			'level' => $level
			);

		$submitData = $this->ukk_mod->saveUser($dataUser);
		if ($submitData==1){
			$this->session->set_flashdata('messages', '<div class="alert alert-success">Data Telah Ter<strong>simpan</strong></div>');
		}else{
			$this->session->set_flashdata('messages', '<div class="alert alert-danger>Maaf Anda <strong>gagal</strong> Mendaftar. Kami Mohon Maaf</div>');
		}
		redirect(base_url().'admin_con/userdaftarbyadmin');
	}

	public function hapusUser($id)
	{
		$this->cek_session();
		$userID = array('id_user' => $id);
		$hapusDataSatunya = $this->ukk_mod->hapusUserSatunya($userID);
		if ($hapusDataSatunya==1){
			$this->session->set_flashdata('messages', '<div class="alert alert-success">Data Telah Ter<strong>hapus</strong></div>');
		}else{
			$this->session->set_flashdata('messages', '<div class="alert alert-danger>Maaf Anda <strong>gagal</strong> menghapus.</div>');
		}
		redirect(base_url().'admin_con/tampildata');
	}

	public function edituser($id)
	{
		$this->cek_session();
		$data['content'] = 'edituser';
		$data['menu'] = 'edituser';
		$data['ses_username'] = $this->session->username;
		$where = array('username' => $data['ses_username']);
		$data['dataadmin'] = $this->ukk_mod->getAdminByUsername($where,'user');
		$data['datauser'] = $this->ukk_mod->getUserAll();
		$where2 = array('id_user' => $id);
		$data['user'] = $this->ukk_mod->getuserbuatedit($where2,'user')->result();
		$this->load->view('layoutadmin', $data);
	}

	public function updateUser()
	{
		$this->cek_session();
		$iduser=$this->input->post('iduser');
		$idcard=$this->input->post('idcard');
		$namapanjang=$this->input->post('namapanjang');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$alamat=$this->input->post('alamat');
		$notelp=$this->input->post('notelp');
		$jenkel=$this->input->post('jenkel');
		$email=$this->input->post('email');
		$level=$this->input->post('level');
		$dataUser = array(
			'id_user' => $iduser,
			'username' => $username,
			'password' => $password,
			'id_card' => $idcard,
			'namapanjang' => $namapanjang,
			'jenkel' => $jenkel,
			'email' => $email,
			'alamat' => $alamat,
			'notelp' => $notelp
			);
		$where = array(
			'id_user' => $iduser
		);

		$updateUsers = $this->ukk_mod->updateUsers($where,$dataUser,'user');
		if ($updateUsers==1){
			$this->session->set_flashdata('messages', '<div class="alert alert-success">Data Telah Ter<strong>update</strong></div>');
		}else{
			$this->session->set_flashdata('messages', '<div class="alert alert-danger>Maaf Anda <strong>gagal</strong> mengupdate</div>');
		}
		redirect(base_url().'admin_con/tampildata');
	}
}
