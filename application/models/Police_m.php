<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Police_m extends CI_Model{
	public function getPolice(){
		$query = $this->db->get('cops');
		if ($query->num_rows() . 0) {
			return $query->result();
		} else {
			return false;
		}
	}
}