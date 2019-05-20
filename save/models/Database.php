<?php
class Database extends CI_Model {
	public function get_news($slug = FALSE){
		if ($slug === FALSE)
		{
			$query = $this->db->get('HouseSale');
			return $query->result_array();
		}

		$query = $this->db->get_where('HouseSale', array('slug' => $slug));
		return $query->row_array();
	}
}
