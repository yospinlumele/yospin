<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Admin extends CI_Model{

	public  function cekLogin($data){
		
		return $this->db->get_where('user', $data)->num_rows();


	}

	public function getDataDokter(){
		return $this->db->get('dokter');
	}

		public function getDataKontrol(){
		return $this->db->get('kontrol');
	}

	public function tambah_kontrol($data){
		return $this->db->insert('kontrol', $data);
	}

	public function getDataDokter1(){
		return $this->db->get('dokter');
	}

	public function getDataPasien(){
		return $this->db->get('rekam_medis');
	}

	public function getDataPasien1(){
		return $this->db->get('rekam_medis');
	}

	public function getDataAntrian(){
		return $this->db->get('pasien');
	}

	public function daftar_antrian1($data){
		return $this->db->insert('pasien', $data);
	}

	public function tambah_dokter($data){
		return $this->db->insert('dokter', $data);
	}
	public function tambah_pasien($data){
		return $this->db->insert('rekam_medis', $data);
	}

	public function tambah_pasien1($data){
		return $this->db->insert('rekam_medis', $data);
	}

	public function tambahmedis($data){
		return $this->db->insert('rekammedis', $data);
	}


	public function getJadwal(){
		return $this->db->get('jadwal');
	}

	public function getJadwal2(){
		return $this->db->get('jadwal');
	}

		public function getJadwal1(){
		return $this->db->get('rekam_medis');
	}

	public function hapusJadwal($id){
		$this->db->where('id', $id);
		return $this->db->delete('dokter');
	}
	public function hapusJadwal1($id){
		$this->db->where('id', $id);
		return $this->db->delete('rekam_medis');
	}

	public function getDataEditJadwal($id){
		$data  = array(
			'dokter.id' =>$id, 
		);
		return $this->db->get_where('dokter', $data);

	}
		public function getDataEditJadwal1($id){
		$data  = array(
			'rekam_medis.id' =>$id, 
		);
		return $this->db->get_where('rekam_medis', $data);

	}

	public function edit_jadwal($data){
		$this->db->where('id', $this->input->post('id'));
		return $this->db->update('dokter', $data);
	}
	public function edit_jadwal1($data){
		$this->db->where('id', $this->input->post('id'));
		return $this->db->update('rekam_medis', $data);
	}
}