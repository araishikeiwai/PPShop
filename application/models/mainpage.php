<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mainpage extends CI_Model {

	function __construct() {
		parent:: __construct();
	}

	function getRecent(){
		$query = $this->db->query("SELECT * FROM pp ORDER BY `timestamp` desc LIMIT 6 OFFSET 0");
		$array = $query->result_array();
		return $array;
	}

	function getFeatured(){
		$query = $this->db->get('featured');
		$array = $query->result_array();
		return $array;
	}

	function getAbout(){
		$this->db->where('title', 'About');
		$query = $this->db->get('pages');
		$array = $query->result_array();
		return $array;
	}

	function getContact(){
		$this->db->where('title', 'Contact');
		$query = $this->db->get('pages');
		$array = $query->result_array();
		return $array;
	}

	function getCategory($category,$num,$offset){
		$this->db->where('group',$category);
		$this->db->order_by('timestamp','desc');
		$query = $this->db->get('pp',$num, $offset);
		return $query->result_array();
	}

	function searchPP($query){
		$data = $this->db->query("SELECT * FROM (SELECT * FROM pp WHERE UPPER(name) LIKE '%".$query."%' OR name LIKE '%".$query."%' OR LOWER(name) LIKE '%".$query."%') as asd ORDER BY NAME asc");
		return $data->result_array();
	}

	function getData($group){
		$data = $this->db->query("SELECT * FROM pp ");
		return $data;
	}


}