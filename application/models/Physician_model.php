<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Physician_model extends CI_Model {

		 public function __construct()
        {
           //   parent::__construct();
       }


 function create($data){
		$this->db->insert('physician', $data);
	}

	public function fetch($id)
	{
		return $this->db->get_where('physician', ['P_ID' => $id])->row_array();
	}
}