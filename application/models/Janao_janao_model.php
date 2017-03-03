<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Janao_janao_model extends CI_Model {

	public function insert_janao_natun($insert='')
	{
		$this->db->insert(' tbl_jano_janao', $insert);
	}

	public function update_janao_natun($update='',$id='')
	{
		$this->db->where('jano_janao_id', $id);
		$this->db->update('tbl_jano_janao', $update);
		
	}

	public function delete_janao_natun_by_id($id='')
	{
		$this->db->where('jano_janao_id', $id);
		$this->db->delete('tbl_jano_janao');

	}

	public function get_janao_natun()
	{

		$this->db->where('tbl_jano_janao.is_vranto_dharona', '0');
		$this->db->join('tbl_topic_category', 'tbl_topic_category.topic_category_id = tbl_jano_janao.category_id', 'left');
		$sql=$this->db->get('tbl_jano_janao');

		return $sql->result_array();
	}

	
	public function get_janao_natun_vranto_dharona()
	{
		$this->db->where('tbl_jano_janao.is_vranto_dharona', '1');
		$this->db->join('tbl_topic_category', 'tbl_topic_category.topic_category_id = tbl_jano_janao.category_id', 'left');
		$sql=$this->db->get('tbl_jano_janao');

		return $sql->result_array();
	}

	public function get_janao_natun_by_id($id='')
	{

		$this->db->where('jano_janao_id', $id);
		$sql=$this->db->get('tbl_jano_janao');

		return $sql->result_array();
	}

}

/* End of file Janao_janao_model.php */
/* Location: ./application/models/Janao_janao_model.php */