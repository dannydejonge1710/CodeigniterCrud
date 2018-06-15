<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_m extends CI_Model{
	public function getBlog(){
		$query = $this->db->get('cops');
		if ($query->num_rows() . 0) {
			return $query->result();
		} else {
			return false;
		}
	}
}