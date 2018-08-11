<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Police_m extends CI_Model{

	public function getPolice(){
		$this->db->order_by('cops_firstname');
		$query = $this->db->get('cops');
		if ($query->num_rows() . 0) {
			return $query->result();
		} else {
			return false;
		}
	}

	public function addPolice(){
		$field = array(
			'cops_firstname'=>$this->input->post('cops_firstname'),
			'cops_lastname'=>$this->input->post('cops_lastname'),
			'cops_phonenumber'=>$this->input->post('cops_phonenumber'),
			'cops_email'=>$this->input->post('cops_email')
			);
		$this->db->insert('cops', $field);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function deletePolice(){


	}


}