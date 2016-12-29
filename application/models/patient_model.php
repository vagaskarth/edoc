<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Patient_model extends CI_Model {

		 public function __construct()
        {
           //   parent::__construct();
       }


 function create($data){
		$this->db->insert('patient', $data);
	}


	public function all($q, $physician_id = false)
	{
		if($q){
			$this->db->like("CONCAT(fname, ' ', lname)", $q, 'both', false);
			// $this->db->like('fname', $q, 'both');
			// $this->db->or_like('lname', $q, 'both');
		}
		if($physician_id){
			// die('lol');
			$this->db->where("physician_id", $physician_id);
		}
		return $this->db->select('Patient_ID AS id, fname, lname, gender')->from('patient')->order_by('lname')->get()->result_array();
	}

	public function fetch($id)
	{
		return $this->db->get_where('patient', ['Patient_ID' => $id])->row_array();
	}
}