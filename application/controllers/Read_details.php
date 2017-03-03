<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Read_details extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('janao_janao_model');
		$this->load->model('post_comment_model');
	}

	public function index($id='')
	{
		
	}

	public function post($id='')
	{
		

		$data['post_id']=$id;
		$data['old_post']=$this->janao_janao_model->get_janao_natun_by_id($id);
		$data['old_comment']=$this->post_comment_model->get_comment_by_id($id);
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('view_read_details',$data);
		$this->load->view('footer');
	}

	public function comment_on_post()
	{
		$insert=array(
			'jano_janao_id' =>$this->input->post('post_id'),
			'comment_by' =>$this->input->post('comment_by'),
			'jano_janao_comment' =>$this->input->post('comment_details')
		);

		$this->post_comment_model->insert_post_comment($insert);

		redirect(base_url()."read_details/post/".$this->input->post('post_id'));
	}

	public function rate_post()
	{
		$rate=$this->input->post('post_rate');
		$post_id=$this->input->post('post_id');

		$session_key="post_rated_".$post_id;

		$array = array(
			$session_key => 'You Rated :'.$rate,
		);
		
		$this->session->set_userdata( $array );

		$this->post_comment_model->update_rating($rate,$post_id);

		redirect(base_url()."read_details/post/".$this->input->post('post_id'));
	}

}

/* End of file Read_details.php */
/* Location: ./application/controllers/Read_details.php */