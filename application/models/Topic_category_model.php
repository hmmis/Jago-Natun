<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Topic_category_model extends CI_Model {

	public function insert_type($insert='')
	{
		$this->db->insert('tbl_topic_category', $insert);
	}

	public function get_category_type()
	{
		$sql=$this->db->get('tbl_topic_category');

		return $sql->result_array();
	}

}

/* End of file topic_category_model.php */
/* Location: ./application/models/topic_category_model.php */