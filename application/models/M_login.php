<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_login extends CI_Model {
	public function act_login($param)
	{
		$this->db->where('username', $param['username']);
		$this->db->where('password', $param['password']);
		
		$data = $this->db->get('user');
		return $data->row();
	}	
}