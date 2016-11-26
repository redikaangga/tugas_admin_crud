<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_posisi extends CI_Model {

	public function getPosisi()
	{
		$this->db->select('posisi.id, posisi.nama as posisi');
		
		$this->db->from('posisi');

		$data = $this->db->get();

		return $data->result();
	}

	public function getDetailPosisi($id)
	{
		$this->db->where('id', $id);
		$data = $this->db->get('posisi');

		return $data->row();
	}

	public function act_tambah($param)
	{
		$data=  $this->db->insert('posisi', $param);

		return $this->db->affected_rows();
	}

	public function act_edit($param)
	{
		$object = [
			'nama'		=> $param['nama'],
		];
		$this->db->where('id', $param['id']);
		$this->db->update('posisi', $object);

		return $this->db->affected_rows();
	}	

	public function act_hapus($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('posisi');

		return $this->db->affected_rows();
	}	

}

/* End of file M_kota.php */
/* Location: ./application/models/M_kota.php */