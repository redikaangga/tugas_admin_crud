<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kelamin extends CI_Model {

	public function getKelamin()
	{
		$data = $this->db->get('j_kelamin');

		return $data->result();
	}	

}

/* End of file M_kelamin.php */
/* Location: ./application/models/M_kelamin.php */