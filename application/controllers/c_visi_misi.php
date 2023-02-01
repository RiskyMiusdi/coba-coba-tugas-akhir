<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_visi_misi extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('v_visi_misi');
		$this->load->view('templates/footer');
	}	
}