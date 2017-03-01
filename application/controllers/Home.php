<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->load->view('view_home_page');
	}

	public function index2()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('demo2');
		$this->load->view('footer');
	}

	public function index3()
	{
		$this->load->view('dashboard_header');
		$this->load->view('dashboard_topmenu');
		$this->load->view('dashboard_menu');
		$this->load->view('dashboard_body');
		$this->load->view('dashboard_footer');
	}
}
