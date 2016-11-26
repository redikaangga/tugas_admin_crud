<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();		
		$this->load->model("M_pegawai");
		$this->load->model("M_kota");
		$this->load->model("M_posisi");
		$this->load->model("M_kelamin");
	}

	// public function index()
	// {
	// 	// $data['judul'] = 'Menu Pegawai';
	// 	$data['data_pegawai'] = $this->M_pegawai->getPegawai();
	// 	$this->load->view('pegawai/view', $data);
	// }

	public function index()
	{
		$data['page'] = 'Index';
		$this->template->temp('pegawai/index', $data);
	}

	public function tables()
	{
		// $this->load->view('template/tables');
		$data['page'] = 'pegawai';
		$data['data_pegawai'] = $this->M_pegawai->getPegawai();
		$data['data_kota'] = $this->M_kota->getKota();
		$data['data_posisi'] = $this->M_posisi->getPosisi();
		$data['data_kelamin'] = $this->M_kelamin->getKelamin();
		$this->template->temp('pegawai/tables', $data);
	}

	public function list_data()
	{
		$data['data_pegawai'] = $this->M_pegawai->getPegawai();
		$this->load->view('pegawai/list_data', $data);
	}

	public function add()
	{
		// $data['judul'] = 'Tambah Siswa';
		$data['page'] = 'add';		
		$data['kota'] = $this->M_kota->getKota();
		$data['posisi'] = $this->M_posisi->getPosisi();
		// $this->template->temp('pegawai/form_tambah_pegawai', $data);
	}

	public function act_tambah()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('telepon', 'Telepon', 'required');
		$this->form_validation->set_rules('kota', 'Kota', 'required');
		$this->form_validation->set_rules('id_posisi', 'Posisi', 'required');
		$this->form_validation->set_rules('kelamin', 'Kelamin', 'required');
		
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('alert_msg', err_msg(validation_errors()));

			redirect('welcome/tables');
		} else {
			$param = $this->input->post();
			$proses = $this->M_pegawai->act_tambah($param);
			if($proses >= 0){
				$this->session->set_flashdata('alert_msg', succ_msg('Berhasil input'));
				redirect('welcome/tables');
			} else{
				$this->session->set_flashdata('alert_msg', err_msg('Gagal input'));
				redirect('welcome/tables');
			}
			
		}
	}

	public function edit($id)
	{
		$data['page'] = 'edit';		
		$data['data_pegawai'] = $this->M_pegawai->getDetailPegawai($id);
		$data['data_kota'] = $this->M_kota->getKota();
		$data['data_posisi'] = $this->M_posisi->getPosisi();
		$data['data_kelamin'] = $this->M_kelamin->getKelamin();
		// $this->template->temp('pegawai/form_edit_pegawai', $data);
	}

	public function act_edit()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('telepon', 'Telepon', 'required');
		$this->form_validation->set_rules('kota', 'Kota', 'required');
		$this->form_validation->set_rules('posisi', 'Posisi', 'required');
		$this->form_validation->set_rules('kelamin', 'Kelamin', 'required');
		
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('alert_msg', err_msg(validation_errors()));

			// redirect('welcome/add');
		} else {
			$param = $this->input->post();
			$proses = $this->M_pegawai->act_edit($param);

			if($proses >= 0){
				$this->session->set_flashdata('alert_msg', succ_msg('Berhasil edit'));
				// redirect('welcome/tables');
			} else{
				$this->session->set_flashdata('alert_msg', err_msg('Gagal edit'));
				redirect($_SERVER['HTTP_REFERER']);
			}
		}		
	}

	public function hapus($id)
	{
		$proses = $this->M_pegawai->act_hapus($id);

		if($proses >= 0){
			$this->session->set_flashdata('alert_msg', succ_msg('Berhasil hapus'));
			// redirect($_SERVER['HTTP_REFERER']);
		} else{
			$this->session->set_flashdata('alert_msg', err_msg('Gagal hapus'));
			// redirect($_SERVER['HTTP_REFERER']);
		}			
	}	

	public function chart()
	{
		$total = 0;
		$chart = $this->M_pegawai->getChart();
		foreach ($chart as $key => $value) {
			$total = $value->jumlah;
			$chart[$key]->jumlah = $total;
		}

		foreach ($chart as $key => $value) {
			$hasil = $value->jumlah;
			$hasil = floor($hasil);
			$chart[$key]->jumlah = $hasil;
		}

		$hasil = json_encode($chart);
		echo $hasil;
	}

	public function chartk()
	{
		$kota = 0;
		$chart = $this->M_pegawai->getChartKota();
		foreach ($chart as $key => $value) {
			$kota = $value->hasil;
			$chart[$key]->hasil = $kota;
		}

		foreach ($chart as $key => $value) {
			$hasil = $value->hasil;
			$hasil = floor($hasil);
			$chart[$key]->hasil = $hasil;
		}

		$hasil = json_encode($chart);
		echo $hasil;
	}

	public function chartkel()
	{
		$kelamin = 0;
		$chart = $this->M_pegawai->getChartKelamin();
		foreach ($chart as $key => $value) {
			$kelamin = $value->jumlah;
			$chart[$key]->jumlah = $kelamin;
		}

		foreach ($chart as $key => $value) {
			$hasil = $value->jumlah;
			$hasil = floor($hasil);
			$chart[$key]->jumlah = $hasil;
		}

		$hasil = json_encode($chart);
		echo $hasil;
	}
	
}
