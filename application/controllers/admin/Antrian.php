<?php

class Antrian extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('Antrian_model');
		if ( $this->session->userdata('role_id') != '1' )
		{
			redirect('user');
		}
	}

	public function dashboard()
	{
		
		$this->load->view('admin/dashboard', $data);
	}

	public function panggil($id = null)
	{
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

	public function ambil_nomor()
	{
		$data['judul'] = 'Admin';
		$this->load->view('templates/admin/header', $data);
		$this->load->view('admin/ambil_antrian', $data);
	}

	public function riwayat_daftar($id)
	{
		if ( $this->session->userdata('aktif') != '1')
		{
			redirect('user');
		} else {
			$data['judul'] = 'Riwayat Daftar';
			$this->db->where('antrian.id_user', $id);
			$data['riwayat_daftar'] = $this->db->get('antrian')->result_array();
			$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
			$this->load->view('templates/admin/header', $data);
			$this->load->view('admin/riwayat_daftar', $data);
		}
	}

	public function info_antrian()
	{
		if ( $this->session->userdata('aktif') != '1')
		{
			redirect('user');
		} else {
			$this->load->view('admin/info_antrian');
		}
	}

	public function dilayani()
	{
		$data = $this->Antrian_model->info_pelayanan();

		foreach ($data as $row) {
			echo $row['no_antrian'];
		}
	}

	public function waktu_mulai()
	{
		$data = $this->Antrian_model->info_pelayanan();
		
		foreach ($data as $row) {
			echo $row['waktu_mulai'];
		}
	}
}