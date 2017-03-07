<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('map');
		$this->load->view('footer');
	}

	public function view(){
		$this->load->view('header');
		$this->load->view('map2');
		$this->load->view('footer');
	}
}
