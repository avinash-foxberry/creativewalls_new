<?php
class Contact {

	function saveQuery($array){
		$ci =& get_instance();
		$ci->load->database();

		// Save Record In Database
		$check = $ci->db->insert('contact_us_querys',$array);
		return $ci->db->insert_id();
	}

	function saveEnquiry($array){
		$ci =& get_instance();
		$ci->load->database();

		// Save Record In Database
		$check = $ci->db->insert('enquiry_forms',$array);
		return $ci->db->insert_id();
	}

	function saveUserData($array){
		$ci =& get_instance();
		$ci->load->database();
		// Save Record In Database
		$check = $ci->db->insert('users',$array);
		return $ci->db->insert_id();
	}



}