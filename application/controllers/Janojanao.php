<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Janojanao extends CI_Controller {

	public function index()
	{
		$this->load->model('janao_janao_model');
		$data['old_post']=$this->janao_janao_model->get_janao_natun();
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('view_jano_janao',$data);
		$this->load->view('footer');
	}

}

/* End of file Janojanao.php */
/* Location: ./application/controllers/Janojanao.php */