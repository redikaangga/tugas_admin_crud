<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kota extends CI_Controller {

	public function __construct()
	{
		parent::__construct();		
		$this->load->model("M_kota");
	}

	public function index()
	{
		$data['page'] = 'Kota';
		$this->template->temp('kota/index', $data);
	}

	public function tables()
	{
		$data['page'] = 'kota';
		$data['data_kota'] = $this->M_kota->getKota();
		$this->template->temp('kota/tables', $data);
	}

	public function list_data()
	{
		$data['data_kota'] = $this->M_kota->getKota();
		$this->load->view('kota/list_data', $data);
	}

	public function add()
	{
		$data['page'] = 'add';		
		$data['kota'] = $this->M_kota->getKota();
	}

	public function act_tambah()
	{
		$this->form_validation->set_rules('nama_kota', 'Nama Kota', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('alert_msg', err_msg(validation_errors()));
		} else {
			$param = $this->input->post();
			$proses = $this->M_kota->act_tambah($param);
			if($proses >= 0){
				$this->session->set_flashdata('alert_msg', succ_msg('Berhasil input'));
			} else{
				$this->session->set_flashdata('alert_msg', err_msg('Gagal input'));
			}
			
		}
	}

	public function edit($id)
	{
		$data['page'] = 'edit';		
		$data['data_kota'] = $this->M_kota->getDetailKota($id);
		$data['data_kota'] = $this->M_kota->getKota();
	}

	public function act_edit()
	{
		$this->form_validation->set_rules('nama_kota', 'Nama', 'required');
		
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('alert_msg', err_msg(validation_errors()));

			// redirect('welcome/add');
		} else {
			$param = $this->input->post();
			$proses = $this->M_kota->act_edit($param);

			if($proses >= 0){
				$this->session->set_flashdata('alert_msg', succ_msg('Berhasil edit'));
				// redirect('welcome/tables');
			} else{
				$this->session->set_flashdata('alert_msg', err_msg('Gagal edit'));
				// redirect($_SERVER['HTTP_REFERER']);
			}
		}		
	}

	public function hapus($id)
	{
		$proses = $this->M_kota->act_hapus($id);

		if($proses >= 0){
			$this->session->set_flashdata('alert_msg', succ_msg('Berhasil hapus'));
			// redirect($_SERVER['HTTP_REFERER']);
		} else{
			$this->session->set_flashdata('alert_msg', err_msg('Gagal hapus'));
			// redirect($_SERVER['HTTP_REFERER']);
		}			
	}	

}

/* End of file Kota.php */
/* Location: ./application/controllers/Kota.php */