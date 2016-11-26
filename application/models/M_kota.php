<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kota extends CI_Model {

	public function getKota()
	{
		$this->db->select('kota.nama_kota as kota, kota.id_kota');

		$this->db->from('kota');

		$data = $this->db->get();

		return $data->result();
	}

	public function getDetailKota($id)
	{
		$this->db->where('id_kota', $id);
		$data = $this->db->get('kota');

		return $data->row();
	}

	public function act_tambah($param)
	{
		$data=  $this->db->insert('kota', $param);

		return $this->db->affected_rows();
	}

	public function act_edit($param)
	{
		$object = [
			// 'id_kota'	=> $param['telepon'],
			'nama_kota'	=> $param['nama_kota'],
		];
		$this->db->where('id_kota', $param['id_kota']);
		$this->db->update('kota', $object);

		return $this->db->affected_rows();
	}	

	public function act_hapus($id)
	{
		$this->db->where('id_kota', $id);
		$this->db->delete('kota');

		return $this->db->affected_rows();
	}	

}

/* End of file M_kota.php */
/* Location: ./application/models/M_kota.php */