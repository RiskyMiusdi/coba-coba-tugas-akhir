<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('auth');
	}

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('v_login');
		/*	$this->load->view('templates/footer'); */
	}


	public function proses()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if ($this->auth->login_user($username, $password)) {
			redirect('c_home');
		} else {
			$this->session->set_flashdata('error', 'Username & Password salah');
			redirect('c_home/index');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('is_login');
		redirect('c_login/index');
	}
}
