<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_comment_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function insert_post_comment($insert='')
	{
		$this->db->insert('tbl_jano_janao_comment', $insert);
	}

	public function get_comment_by_id($id='')
	{
		$this->db->where('jano_janao_id', $id);
		$sql=$this->db->get('tbl_jano_janao_comment');

		return $sql->result_array();
	}

	public function update_rating($rate,$id)
	{
		$this->db->set('total_rate', '`total_rate`+'.$rate, FALSE);
		$this->db->set('total_rate_submit', 'total_rate_submit+1', FALSE);
		$this->db->where('jano_janao_id', $id);
		$this->db->update('tbl_jano_janao');
	}

	

}

/* End of file Post_model.php */
/* Location: ./application/models/Post_model.php */



