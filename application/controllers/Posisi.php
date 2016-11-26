<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posisi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();		
		$this->load->model("M_posisi");
	}

	public function index()
	{
		$data['page'] = 'Index';
		$this->template->temp('template/index', $data);		
	}

	public function tables()
	{
		$data['page'] = 'posisi';
		$data['data_posisi'] = $this->M_posisi->getPosisi();
		$this->template->temp('posisi/tables', $data);
	}

	public function list_data()
	{
		$data['data_posisi'] = $this->M_posisi->getPosisi();
		$this->load->view('posisi/list-data', $data);
	}	

	public function add()
	{
		$data['page'] = 'add';		
		$data['posisi'] = $this->M_posisi->getPosisi();
	}

	public function act_tambah()
	{
		$this->form_validation->set_rules('nama', 'Nama Posisi', 'required');
		
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('alert_msg', err_msg(validation_errors()));
		} else {
			$param = $this->input->post();
			// $id = md5(DATE('ymdhms').rand());

			$proses = $this->M_posisi->act_tambah($param);
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
		$data['data_posisi'] = $this->M_posisi->getDetailPosisi($id);
		$data['data_posisi'] = $this->M_posisi->getPosisi();
	}

	public function act_edit()
	{
		$this->form_validation->set_rules('nama', 'Nama Posisi', 'required');
		
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('alert_msg', err_msg(validation_errors()));
			// redirect('welcome/add');
		} else {
			$param = $this->input->post();
			$proses = $this->M_posisi->act_edit($param);

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
		$proses = $this->M_posisi->act_hapus($id);

		if($proses >= 0){
			$this->session->set_flashdata('alert_msg', succ_msg('Berhasil hapus'));
			// redirect($_SERVER['HTTP_REFERER']);
		} else{
			$this->session->set_flashdata('alert_msg', err_msg('Gagal hapus'));
			// redirect($_SERVER['HTTP_REFERER']);
		}
	}	

}

/* End of file Posisi.php */
/* Location: ./application/controllers/Posisi.php */