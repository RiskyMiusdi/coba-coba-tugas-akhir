<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_profil extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('v_profil');
		$this->load->view('templates/footer');
	}	
}