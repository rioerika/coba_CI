<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
	public function index()
	{
		$this->load->model('Mahasiswa_model'); //mhs adalah nama lain
		$data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
		$this->load->view('mahasiswa/index', $data);
	}

	public function tambah(){
		$this->load->library('form_validation');
		$this->load->model('Mahasiswa_model');

		$this->form_validation->set_rules('NAMA', 'Nama', 'required');
		$this->form_validation->set_rules('NRP', 'Nrp', 'required|numeric' );
		$this->form_validation->set_rules('EMAIL', 'Email', 'required|valid_email');

		if ($this->form_validation->run() === false) {
			$this->load->view('mahasiswa/tambah');
		}else{
			// $data = [
			// 	'NAMA' => $this->input->post('NAMA' , true),
			// 	'NRP' => $this->input->post('NRP' , true),
			// 	'EMAIL' => $this->input->post('EMAIL' , true),
			// 	'JURUSAN' => $this->input->post('JURUSAN', true)
			// ];

			// $this->db->insert('mahasiswa', $data);
			$this->Mahasiswa_model->tambahDataMhs();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('mahasiswa');
		}


	}

	public function hapus(){
		$this->db->delete('mahasiswa', array('No' => $No));
	}

}

