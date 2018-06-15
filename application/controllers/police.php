<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Police extends CI_Controller{

	function __construct(){
		parent:: __construct();
		$this->load->model('Police_m', 'm');
	}

	function index(){
		$data['cops'] = $this->m->getPolice();
		$this->load->view('template/header');
		$this->load->view('policeMap/index', $data);
		$this->load->view('template/footer');
	}

	public function add(){
		$this->load->view('template/header');
		$this->load->view('policeMap/add');
		$this->load->view('template/footer');

	}
}