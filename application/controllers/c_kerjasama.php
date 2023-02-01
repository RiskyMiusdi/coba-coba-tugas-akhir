<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_kerjasama extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('v_kerjasama');
		$this->load->view('templates/footer');
	}	
}