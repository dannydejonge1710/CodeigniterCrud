<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller{

	function __construct(){
		parent:: __construct();
		$this->load->model('Blog_m', 'm');
	}

	function index(){
		$data['cops'] = $this->m->getBlog();
		$this->load->view('template/header');
		$this->load->view('blog/index', $data);
		$this->load->view('template/footer');
	}

	public function add(){
		$this->load->view('template/header');
		$this->load->view('blog/add');
		$this->load->view('template/footer');

	}
}