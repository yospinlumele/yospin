<?php

class Beranda extends CI_Controller
{
	public function registration(){
		$this->load->view('registration/registration');
	}

	public function daftar_antrian(){
		$data['pasien'] = $this->M_Admin->getDataAntrian()->result();
		$this->load->view('user/daftar_antrian',$data);
	}

	public function daftar_antrian1(){
		$data = array(
			'antrian' =>$this->input->post('antrian'), 
			'nama_pasien' =>$this->input->post('nama_pasien'), 
			'umur' =>$this->input->post('umur'), 
			'jenis_kelamin' =>$this->input->post('jenis_kelamin'), 
			'telepon' =>$this->input->post('telepon'), 
			'agama' =>$this->input->post('agama'), 
		);

		$this->M_Admin->daftar_antrian1($data);
		redirect(base_url('daftar_antrian'));
	}


	public function dokter(){
		$data['dokter'] = $this->M_Admin->getDataDokter1()->result();
		$data['jadwal'] = $this->M_Admin->getJadwal2()->result();
		$this->load->view('dokter', $data);
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

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Antrian_model');
	}

	public function index()
	{
		if ( $this->session->userdata('aktif') == '1' )
		{
			if ( $this->session->userdata('role_id') == '1' ) 
			{
				redirect('admin');
			}
			redirect('beranda/user');
		}
		$data['judul'] = 'Beranda';
		$data['informasi'] = $this->Antrian_model->info2();
		$data['info_pelayanan'] = $this->Antrian_model->info_pelayanan();
		$this->load->view('templates/header', $data);
		$this->load->view('beranda', $data);
	}

	public function user()
	{
		if ( $this->session->userdata('aktif') != '1')
		{
			redirect('beranda');
		}
		$data['judul'] = 'Beranda';
		$data['info'] = $this->Antrian_model->info();
		$data['informasi'] = $this->Antrian_model->info2();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['info_pelayanan'] = $this->Antrian_model->info_pelayanan();
		$this->load->view('templates/header_user', $data);
		$this->load->view('user/index', $data);
	}

	public function realtime()
	{
		$no_antri = $this->Antrian_model->antri();
		echo $no_antri;
		$this->session->set_flashdata('antrian', '<div class="alert alert-success alert-dismissible fade show" role="alert">Pendaftaran Berhasil!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	}

	public function realtime2()
	{
		$no_antri = $this->Antrian_model->antri2();
		echo $no_antri;
	}

	public function daftar()
	{
		if ( $this->session->userdata('aktif') != '1')
		{
			redirect('user');
		} else {

			$id = $this->session->userdata('id');

			$data=[
				"nama" 				=> $this->input->post('nama'),
				"no_antrian"		=> $this->input->post('no_antrian'),
				"tgl"				=> $this->input->post('tgl'),
				"keluhan"			=> $this->input->post('keluhan'),
				"id_user"			=> $id
			];

			$this->Antrian_model->add($data);
			$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Pendaftaran Berhasil!</div>');
			if ( $this->session->userdata('role_id') == '1' ) 
			{
				redirect('admin/antrian/semua_antrian');
			}
			redirect('beranda/user');
		}
	}

	public function riwayat_daftar()
	{
		if ( $this->session->userdata('aktif') != '1')
		{
			redirect('user');
		} else {
			$data['judul'] = 'Riwayat Daftar';
			$data['riwayat'] = $this->Antrian_model->riwayat_daftar();
			$data['info'] = $this->Antrian_model->info();
			$this->load->view('templates/header_user', $data);
			$this->load->view('user/riwayat_daftar', $data);
		}
	}

	public function jadwal()
	{
		$data['judul'] = 'jadwal';
		$data['jadwal'] = $this->db->get('jadwal')->row_array();
		$this->load->view('templates/header', $data);
		$this->load->view('jadwal', $data);
		$this->load->view('templates/footer');
	}

	public function jadwal_u()
	{
		if ( $this->session->userdata('aktif') != '1')
		{
			redirect('user');
		} else {

			$data['judul'] = 'jadwal';
			$data['jadwal'] = $this->db->get('jadwal')->row_array();
			$this->load->view('templates/header_user', $data);
			$this->load->view('user/jadwal', $data);
			$this->load->view('templates/footer');

		}
	}
}