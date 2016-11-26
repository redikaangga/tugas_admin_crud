<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pegawai extends CI_Model {

	public function getPegawai()
	{
		$this->db->select('	pegawai.id_pegawai as id,
			pegawai.nama as nama, 
			pegawai.telepon,
			pegawai.status,
			kota.nama_kota as kota,
			j_kelamin.nama as kelamin,
			posisi.nama as posisi');

		$this->db->from('pegawai');

		$this->db->join('posisi', 'posisi.id = pegawai.id_posisi', 'left');
		$this->db->join('kota', 'kota.id_kota = pegawai.kota', 'left');
		$this->db->join('j_kelamin', 'j_kelamin.id_kelamin = pegawai.kelamin', 'left');

		$data = $this->db->get();

		return $data->result();
	}

	public function getDetailPegawai($id)
	{
		$this->db->where('id_pegawai', $id);
		$data = $this->db->get('pegawai');

		return $data->row();
	}

	public function act_tambah($param)
	{
		$data=  $this->db->insert('pegawai', $param);

		return $this->db->affected_rows();
	}

	public function act_edit($param)
	{
		$object = [
		'nama'		=> $param['nama'],
		'telepon'	=> $param['telepon'],
		'kota'		=> $param['kota'],
		'id_posisi'	=> $param['posisi'],
		'kelamin'	=> $param['kelamin'],
		];
		$this->db->where('id_pegawai', $param['id']);
		$this->db->update('pegawai', $object);

		return $this->db->affected_rows();
	}	

	public function act_hapus($id)
	{
		$this->db->where('id_pegawai', $id);
		$this->db->delete('pegawai');

		return $this->db->affected_rows();
	}	

	public function getChart()
	{
		$sql = "
		SELECT posisi.nama as posisi, COUNT(pegawai.nama) as jumlah
		FROM pegawai,posisi 
		WHERE pegawai.id_posisi = posisi.id
		GROUP BY posisi";
		
		$data=$this->db->query($sql);

		// $data = json_encode($hasil);

		return $data->result();
	}

	public function getChartKota()
	{
		$sql = "
		SELECT kota.nama_kota as asal, COUNT(pegawai.kota) as hasil
		FROM pegawai,kota 
		WHERE pegawai.kota = kota.id_kota
		GROUP BY kota";

		$data=$this->db->query($sql);

		// $data = json_encode($hasil);

		return $data->result();
	}

	public function getChartKelamin()
	{
		$sql = "
		SELECT j_kelamin.nama as jenis_kelamin, COUNT(pegawai.kelamin) as jumlah
		FROM pegawai, j_kelamin
		WHERE pegawai.kelamin = j_kelamin.id_kelamin
		GROUP BY kelamin";

		$data=$this->db->query($sql);

		return $data->result();
	}

}

/* End of file M_pegawai.php */
/* Location: ./application/models/M_pegawai.php */