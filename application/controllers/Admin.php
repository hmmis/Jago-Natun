<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('topic_category_model');
		$this->load->model('janao_janao_model');
		
	}

	public function index()
	{

		$data['title']="Admin Dashbord";

		$this->load->view('dashboard_header',$data);
		$this->load->view('dashboard_topmenu');
		$this->load->view('dashboard_menu');
		$this->load->view('admin_home',$data);
		$this->load->view('dashboard_footer');
	}

	//=========================================jano o janao
	public function jano_janao_new_post()
	{

		$data['title']="Admin Dashbord";
		$data['category_type']=$this->topic_category_model->get_category_type();
		$data['old_post']=$this->janao_janao_model->get_janao_natun();
		$this->load->view('dashboard_header',$data);
		$this->load->view('dashboard_topmenu');
		$this->load->view('dashboard_menu');
		$this->load->view('admin_jano_janao_new_post',$data);
		$this->load->view('dashboard_footer');
	}
	
	public function submit_janao_natun_post()
	{
		$insert=array(
			'category_id' =>$this->input->post('cat_id'),
			'is_vranto_dharona' =>'0',
			'jano_janao_title' =>$this->input->post('title'),
			'jano_jano_description' =>$this->input->post('description'),
			'created_by' =>"admin"
		);

		
		$this->janao_janao_model->insert_janao_natun($insert);

		redirect(base_url().'admin/jano_janao_new_post');
	}


	public function submit_janao_natun_edit()
	{

		$id=$this->input->post('id');
		$update=array(
			'jano_janao_title' =>$this->input->post('title'),
			'jano_jano_description' =>$this->input->post('description')
		);

		
		$this->janao_janao_model->update_janao_natun($update,$id);


		redirect(base_url().'admin/jano_janao_new_post');
	}



	public function edit_jano_janao($id='')
	{
		$data['title']="Edit Jano Janao";
		$data['post_details']=$this->janao_janao_model->get_janao_natun_by_id($id);
		$this->load->view('dashboard_header',$data);
		$this->load->view('dashboard_topmenu');
		$this->load->view('dashboard_menu');
		$this->load->view('admin_jano_janao_edit',$data);
		$this->load->view('dashboard_footer');
	}




	public function delete_jano_janao($id='')
	{
		$data['title']="Admin Dashbord";
		$this->janao_janao_model->delete_janao_natun_by_id($id);
		redirect(base_url().'admin/jano_janao_new_post');
	}


	//=========================================jano o janao
	public function vranto_dharona_post()
	{

		$data['title']="Admin Dashbord";
		$data['category_type']=$this->topic_category_model->get_category_type();
		$data['old_post']=$this->janao_janao_model->get_janao_natun_vranto_dharona();
		$this->load->view('dashboard_header',$data);
		$this->load->view('dashboard_topmenu');
		$this->load->view('dashboard_menu');
		$this->load->view('admin_vranto_dharona_post',$data);
		$this->load->view('dashboard_footer');
	}
	public function submit_vranto_dharona_post()
	{
		$insert=array(
			'category_id' =>$this->input->post('cat_id'),
			'is_vranto_dharona' =>'1',
			'jano_janao_title' =>$this->input->post('title'),
			'jano_jano_description' =>$this->input->post('description'),
			'created_by' =>"admin"
		);

		
		$this->janao_janao_model->insert_janao_natun($insert);

		redirect(base_url().'admin/vranto_dharona_post');
	}
	public function submit_vranto_dharona_edit()
	{

		$id=$this->input->post('id');
		$update=array(
			'jano_janao_title' =>$this->input->post('title'),
			'jano_jano_description' =>$this->input->post('description')
		);

		
		$this->janao_janao_model->update_janao_natun($update,$id);


		redirect(base_url().'admin/vranto_dharona_post');
	}
	
	public function edit_vranto_dharona($id='')
	{
		$data['title']="Edit Vranto Dharona";
		$data['post_details']=$this->janao_janao_model->get_janao_natun_by_id($id);
		$this->load->view('dashboard_header',$data);
		$this->load->view('dashboard_topmenu');
		$this->load->view('dashboard_menu');
		$this->load->view('admin_vranto_dharona_edit',$data);
		$this->load->view('dashboard_footer');
	}

	public function delete_vranto_dharona($id='')
	{
		$data['title']="Admin Dashbord";
		$this->janao_janao_model->delete_janao_natun_by_id($id);
		redirect(base_url().'admin/vranto_dharona_post');
	}

	//=======================================Category
	public function category_type()
	{

		$data['title']="Admin Dashbord";
		$data['category_type']=$this->topic_category_model->get_category_type();

		$this->load->view('dashboard_header',$data);
		$this->load->view('dashboard_topmenu');
		$this->load->view('dashboard_menu');
		$this->load->view('admin_category_type',$data);
		$this->load->view('dashboard_footer');
	}

	public function submit_cate_type()
	{
		$insert=array(
			'category_name' =>$this->input->post('cat_name'),
			'created_by' =>"admin"
		);

		
		$this->topic_category_model->insert_type($insert);

		redirect(base_url().'admin/category_type');
	}


}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */