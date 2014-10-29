<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adminmodel extends CI_Model {
	
	function __construct() {
			parent:: __construct();
	}
	
	function login($username, $password) {
		$query = $this->db->query("SELECT * FROM admin WHERE username = '$username' AND Password = '".md5($password)."'");
		if($query->num_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}

	function addPP($array){
		$this->db->insert('pp',$array);
		return true;
	}

	function getPP(){
		$query = $this->db->get('pp');
		$array = $query->result_array();
		return $array;
	}

	function getPPInternal(){
		$this->db->where('externalurl',null);
		$query = $this->db->get('pp');
		$array = $query->result_array();
		return $array;
	}

	function getDetailPP($id){
		$query = $this->db->query("SELECT * from pp where id = '".$id."'");
		if ($query->num_rows() > 0 ) {
			$array = $query->result();
			foreach ($array as $data){
				$dataPP = array ( 
							'id' => $data->id,
							'name' => $data->name,
							'group' => $data->group,
							'team' => $data->team,
							'price' => $data->price,
							'type' => $data->type,
							'set' => $data->set,
							'stock' => $data->stock,
							'externalurl' => $data->externalurl,
							'detailtype' => $data->detailtype
							);
				return $dataPP;
			}
		}
		else {
			return null;
		}
	}

	function deletePP($id){
		$this->db->where('id', $id);
		$this->db->delete('pp'); 
		return TRUE;
	}

	function editPP($data){
		$this->db->where('id', $data['id']);
		$this->db->update('pp', $data); 
		return TRUE;
	}

	function getPages(){
		$query = $this->db->get('pages');
		$array = $query->result_array();
		return $array;
	}

	function addPage($array){
		$this->db->insert('pages',$array);
		return true;
	}

	function editPage($data){
		$this->db->where('id', $data['id']);
		$this->db->update('pages', $data); 
		return TRUE;
	}

	function getPageDetail($id){
		$query = $this->db->query("SELECT * from pages where id = '".$id."'");
		if ($query->num_rows() > 0 ) {
			$array = $query->result();
			foreach ($array as $data){
				$page = array ( 
							'id' => $data->id,
							'judul' => $data->title,
							'konten' => $data->text,
							);
				return $page;
			}
		}
		else {
			return null;
		}
	}

	function deletePage($id){
		$this->db->where('id', $id);
		$this->db->delete('pages'); 
		return TRUE;
	}

	function editPassword($data){
		$this->db->where('username', $data['username']);
		$this->db->update('admin', $data); 
	}

	function getFeatured(){
		$query = $this->db->get('featured');
		$array = $query->result_array();
		return $array;
	}

	function editFeatured($data){
		$this->db->where('sequence', $data['sequence']);
		$this->db->update('featured', $data); 
	}
}