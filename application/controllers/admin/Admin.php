<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

	public function keHalamanLogin(){
		$this->load->view('admin/login');
	}

	public function keHalamanLogin1(){
		$this->load->view('admin/login1');
	}

	public function keHalamanLogout(){
		$this->load->view('admin/login');
	}

	public function palimbong() {
		$data['rekam_medis'] = $this->M_Admin->getDataPasien()->result();
		$this->load->view('admin/palimbong', $data);
	}
	public function ririn() {
		$data['rekam_medis'] = $this->M_Admin->getDataPasien()->result();
		$this->load->view('admin/ririn', $data);
	}
	public function ely() {
		$data['rekam_medis'] = $this->M_Admin->getDataPasien()->result();
		$this->load->view('admin/ely', $data);
	}
	public function ahmad() {
		$data['rekam_medis'] = $this->M_Admin->getDataPasien()->result();
		$this->load->view('admin/ahmad', $data);
	}
	public function khrisanti() {
		$data['rekam_medis'] = $this->M_Admin->getDataPasien()->result();
		$this->load->view('admin/khrisanti', $data);
	}

	public function rekammedis() {
		$data['rekam_medis'] = $this->M_Admin->getDataPasien()->result();
		$this->load->view('admin/rekammedis', $data);
	}

	public function jadwal_kontrol(){
		$data['kontrol'] = $this->M_Admin->getDataKontrol()->result();
		$this->load->view('admin/kontrol', $data);
	}

	public function tambah_kontrol(){
		$data = array(
			'tanggal' =>$this->input->post('tanggal'),
			'nama_pasien' =>$this->input->post('nama_pasien'), 
			'jenis_kelamin' =>$this->input->post('jenis_kelamin'), 
			'umur' =>$this->input->post('umur'), 
			'alamat' =>$this->input->post('alamat'), 
			'dokter' =>$this->input->post('dokter'), 
		);

		$this->M_Admin->tambah_kontrol($data);
		redirect(base_url('admin/jadwal_kontrol'));
		
	}


	public function tambahpasien() {
		$data['rekam_medis'] = $this->M_Admin->getDataPasien()->result();
		$this->load->view('admin/tambahpasien', $data);
	}

	public function tambahpasien1() {
		$data['rekam_medis'] = $this->M_Admin->getDataPasien1()->result();
		$this->load->view('admin/tambahpasien1', $data);
	}



	public function dokter1() {
		$data['dokter'] = $this->M_Admin->getDataDokter()->result();
		$data['jadwal'] = $this->M_Admin->getJadwal()->result();
		$this->load->view('admin/dokter1', $data);	
	}

	public function tambah_pasien(){
		$data = array(
			'tanggal' =>$this->input->post('tanggal'), 
			'nama' =>$this->input->post('nama'), 
			'jenis_kelamin' =>$this->input->post('jenis_kelamin'), 
			'umur' =>$this->input->post('umur'), 
			'pekerjaan' =>$this->input->post('pekerjaan'), 
			'alamat' =>$this->input->post('alamat'), 
			'diagnosa' =>$this->input->post('diagnosa'), 
			'dokter' =>$this->input->post('dokter'),
		);

		$this->M_Admin->tambah_pasien($data);
		redirect(base_url('rekammedis'));
	}

		public function tambah_pasien1(){
		$data = array(
			'tanggal' =>$this->input->post('tanggal'), 
			'nama' =>$this->input->post('nama'), 
			'jenis_kelamin' =>$this->input->post('jenis_kelamin'), 
			'umur' =>$this->input->post('umur'), 
			'pekerjaan' =>$this->input->post('pekerjaan'), 
			'alamat' =>$this->input->post('alamat'), 
			'diagnosa' =>$this->input->post('diagnosa'), 
			'dokter' =>$this->input->post('dokter'),
		);

		$this->M_Admin->tambah_pasien1($data);
		redirect(base_url('rekammedis'));
	}

	


	public function tambah_dokter(){
		$data = array(
			'nama_dokter' =>$this->input->post('nama_dokter'), 
			'jenis_kelamin' =>$this->input->post('jenis_kelamin'), 
			'spesialis' =>$this->input->post('spesialis'), 
			'hari_praktek' =>$this->input->post('hari_praktek'), 
			'jam' =>$this->input->post('jam'), 
		);

		$this->M_Admin->tambah_dokter($data);
		redirect(base_url('dokter1'));
		
	}

	public function tambahmedis(){
		$data = array(
			'nama_pasien' =>$this->input->post('nama_pasien'), 
			'jenis_kelamin' =>$this->input->post('jenis_kelamin'), 
			'umur' =>$this->input->post('umur'), 
			'diagnose' =>$this->input->post('diagnose'), 
			'therapie' =>$this->input->post('therapie'), 
			
		);
		$this->M_Admin->tambahmedis($data);
		redirect(base_url('rekammedis'));

	}
	public function hapusJadwal($id){
		$this->M_Admin->hapusJadwal($id);
		redirect(base_url('dokter1'));
	}

	public function hapusJadwal1($id){
		$this->M_Admin->hapusJadwal1($id);
		redirect(base_url('rekammedis'));
	}


	public function keHalamanEditJadwal($id){
		$data['data_edit'] = $this->M_Admin->getDataEditJadwal($id)->row();
		$data['edit_jadwal'] = $this->M_Admin->getJadwal()->result();
		$this->load->view('admin/edit_jadwal', $data);
	}
	public function keHalamanEditJadwal1($id){
		$data['data_edit'] = $this->M_Admin->getDataEditJadwal1($id)->row();
		$data['edit_jadwal1'] = $this->M_Admin->getJadwal1()->result();
		$this->load->view('admin/edit_jadwal1', $data);
	}

	public function edit_jadwal(){
		$data = array(
			'nama_dokter' =>$this->input->post('nama_dokter'), 
			'jenis_kelamin' =>$this->input->post('jenis_kelamin'), 
			'spesialis' =>$this->input->post('spesialis'), 
			'hari_praktek' =>$this->input->post('hari_praktek'), 
			'jam' =>$this->input->post('jam')
		);

		$this->M_Admin->edit_jadwal($data);
		redirect(base_url('dokter1'));
		
	}
	public function edit_jadwal1(){
		$data = array(
			'tanggal' =>$this->input->post('tanggal'), 
			'nama' =>$this->input->post('nama'), 
			'jenis_kelamin' =>$this->input->post('jenis_kelamin'), 
			'umur' =>$this->input->post('umur'), 
			'pekerjaan' =>$this->input->post('pekerjaan'),
			'alamat' =>$this->input->post('alamat'),
			'diagnosa' =>$this->input->post('diagnosa'),
			'dokter' =>$this->input->post('dokter')
		);

		$this->M_Admin->edit_jadwal1($data);
		redirect(base_url('rekammedis'));
		
	}

	public function login(){
		$data = array(
			'email' => $this->input->post('email'),
			'password' => sha1($this->input->post('password'))
		);

		$cek = $this->M_Admin->cekLogin($data);

		if ($cek > 0){
			redirect(base_url('admin/dashboard'));
		}else{
			redirect(base_url('login'));
		}
	}

	public function keHalamanDashboard(){
		{
		$this->load->view('admin/dashboard');
	}
}

	public function panggil($id = null){
		$data = [
			'nama_pasien' => $this->input->post('nama'),
			'no_antrian'  => $this->input->post('no_antrian'),
			'tgl' 		  => date('Y-m-d'),
			'waktu_mulai' => date('h:i:s'),
			'lama_pemeriksaan' => $this->input->post('lama_pemeriksaan')
		];
		$this->db->insert('pemanggilan', $data);
		//update data antrian
		$id=$this->input->post('id');
		$data2 = [
			'terpanggil' => 1
		];
		$this->db->where('id',$id);
		$this->db->update('antrian',$data2); 
		redirect('admin/beranda');
	}

	public function logout(){
		$this->load->view('admin/logout');
	}

	
}

	