<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_con extends CI_Controller {
	public function index()
	{
		$data['content'] = 'home';
		$data['menu'] = 'home';
		$this->load->view('layout', $data);
	}

	public function signup_user()
	{
		$data['content'] = 'signup';
		$data['menu'] = 'home';
		$this->load->view('layout', $data);
	}

	public function weekend()
	{
		$data['content'] = 'weekend';
		$data['menu'] = 'weekend';
		$this->load->view('layout', $data);
	}

	public function deals()
	{
		$data['content'] = 'deals';
		$data['menu'] = 'deals';
		$this->load->view('layout', $data);
	}
}
