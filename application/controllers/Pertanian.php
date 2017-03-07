<?php

class Pertanian extends CI_Controller{

	public function index(){
		$this->load->view("header");
		$this->load->view("data_pertanian");
		$this->load->view("footer");
	}
}