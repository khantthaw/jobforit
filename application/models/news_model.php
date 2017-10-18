<?php
class news_model extends CI_Model{

	function __construct(){
		$this->load->database();
	}
	function getPosition(){
	     
	     $query = $this->db->get('job_position');
                $result= $query->result_array();
                return $result;
	}

	function getPositionbyId($id){
		
	 	$this->db->where('id',$id);
	 	$this->db->select('pos_name');
	 	$q=$this->db->get('job_position');
	 	$result=$q->result_array();
		return $result;
	}
	function getPosWithEdu(){
		// $this->db->get('job_position');
		$this->db->select('pos_name,edu_name');
		$this->db->from('job_position');
		$this->db->join('job_edu','job_position.id=job_edu.jid');
		$result=$this->db->get();
		$res=$result->result_array();
		return $res;

	}
	function insertNews($data){
		$this->db->insert('job_news',$data);
		$result=$this->db->insert_id();
		return $result;
	}
}