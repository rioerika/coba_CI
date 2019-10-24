<?php 

class Mahasiswa_model extends CI_Model{
	public function getAllMahasiswa(){
		return $this->db->get('mahasiswa')->result_array();
	}


	public function tambahDataMhs(){
			$data = [
				'NAMA' => $this->input->post('NAMA' , true),
				'NRP' => $this->input->post('NRP' , true),
				'EMAIL' => $this->input->post('EMAIL' , true),
				'JURUSAN' => $this->input->post('JURUSAN', true)
			];

			$this->db->insert('mahasiswa', $data);
	}

	public function hapusDataMhs($No){
		// $this->db->where('No', $No);
		$this->db->delete('mahasiswa', ['No' => $No]);
	}

	public function getMahasiswaById($No){
		return $this->db->get_where('mahasiswa', ['No' => $No])->row_array();
	}

	public function ubahDataMhs(){
			$data = [
				'NAMA' => $this->input->post('NAMA' , true),
				'NRP' => $this->input->post('NRP' , true),
				'EMAIL' => $this->input->post('EMAIL' , true),
				'JURUSAN' => $this->input->post('JURUSAN', true)
			];

			$this->db->where('No', $this->input->post('No'));
			$this->db->update('mahasiswa', $data);
	}
}