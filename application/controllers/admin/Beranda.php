<?php

class Beranda extends CI_Controller
{
	public function __construct()
	{
		parent:__construct();
		$this->load->model('Antrian_model');
		if ( $this->session->userdata('role_id') != '1')
		{
			redirect('user');
		}
	}

	public function index()
	{
		$data['judul'] = 'Admin';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['terpanggil'] = $this->Antrian_model->info_pelayanan();
		$data['antrian'] = $this->Antrian_model->tampil_data();
		$this->load->view('templates/admin/header', $data);
		$this->load->view('admin/beranda', $data);
	}

	public function hapus($id)
	{
		$this->Antrian_model->hapus_pasien($id);
		redirect('admin/beranda');
	}

	public function data_user()
	{
		$data['judul'] = 'Admin';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['data_user'] = $this->Antrian_model->data_user();
		$data['data_user_n'] = $this->Antrian_model->data_user_n();
		$this->load->view('templates/admin/header', $data);
		$this->load->view('admin/data_user', $data);
	}

	public function hapus_user($id)
	{
		$this->Antrian_model->hapus_user($id);
		$this->session->set_flashdata('flash', 'div class="alert alert-success" role="alert"> Data Berhasil Dihapus!</div>');
		redirect('admin/beranda/data_user');
	}

	public function konfirmasi()
	{
		$id=$this->input->post('id');
		$data = [
			'aktif' => 1
		];
		$this->db->where('id',$id);
		$this->db->update('user',$data);
		$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">User Berhasil Diaktifkan!</div>');
		redirect('admin/beranda/data_user');
	}

	public function registrasi()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim', ['required' => 'Nama Tidak Boleh Kosong..!',]);
		$this->form_validation->set_rules('email', 'Email', 'required|trim|is_unique[user.email]', ['is_unique' => 'Email sudah terdaftar!',]);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
			'matches' => 'Password tidak sama!',
			'min_length' => 'Password terlalu pendek!']);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

		if ($this->form_validation->run() == false) {
			$data['judul'] = 'Form Registrasi';
			$this->load->view('templates/admin/header', $data);
			$this->load->view('admin/registrasi');
			$this->load->view('templates/footer');

		} else {
			$data = [
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' => 2,
				'aktif' => 1
			];
			$this->db->insert('user', $data);
			$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Pendaftaran Berhasil!</div>');
      	redirect('admin/beranda/data_user');
		}
	}

	public function info()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['informasi'] = $this->Antrian_model->info2();
		$data['judul'] = 'Kelola Informasi';
		$this->load->view('templates/admin/header', $data);
		$this->load->view('admin/info', $data);
		$this->load->view('templates/footer');
	}

}