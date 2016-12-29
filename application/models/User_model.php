<?php

class User_model extends CI_Model
{

	public function create($data)
	{
		return $this->db->insert('users', $data) ? $this->db->insert_id() : null;
	}

	public function login($username, $password)
	{
		$data = $this->db->select('id, username, user_type')
			->from('users')
			->where(compact('username', 'password'))
			->get()
			->row_array();
		if(!$data){
			return [];
		}

		if($data['user_type'] === 'patient'){
			$result = $this->db->select('Patient_ID AS id')->limit(1)->get_where('patient', ['user_id' => $data['id']])->row_array();
			$data['patient_id'] = $result['id'];
		}else if($data['user_type'] === 'physician'){
			$result = $this->db->select('P_ID AS id')->limit(1)->get_where('physician', ['user_id' => $data['id']])->row_array();
			$data['physician_id'] = $result['id'];
		}

		return $data;
	}
}