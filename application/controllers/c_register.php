<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_register extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('auth');
	}

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('v_register');
		$this->load->view('templates/footer');
	}

	public function proses()
	{
		$this->form_validation->set_rules('username', 'username', 'trim|required|min_length[1]|max_length[255]|is_unique[tb_user.username]');
		$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('nama', 'nama', 'trim|required|min_length[1]|max_length[255]');
		if ($this->form_validation->run() == true) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$nama = $this->input->post('nama');
			$this->auth->register($username, $password, $nama);
			$this->session->set_flashdata('success_register', 'Proses Pendaftaran User Berhasil');
			redirect('c_login/index');
		} else {
			$this->session->set_flashdata('error', validation_errors());
			redirect('c_register');
		}
	}
}
