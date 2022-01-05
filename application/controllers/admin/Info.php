<?php

class Info extends CI_Controller
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

	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['informasi'] = $this->Antrian_model->info2();
		$data['judul'] = 'Kelola Informasi';
		$this->load->view('templates/admin/header', $data);
		$this->load->view('admin/info', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['judul'] = 'Tambah Informasi';

		$this->form_validation->set_rules('isi', 'Informasi', 'required');

		if ($this->form_validation->run() == FALSE) {	
			$this->load->view('templates/admin/header', $data);
			$this->load->view('admin/tambah_info');
			$this->load->view('templates/footer');
		}	else {

			$tgl = date('Y-m-d');
			$data = [
			"isi" =>$this->input->post('isi'),
			"tgl" =>$tgl
		];
		$this->db->insert('info',$data);
		$this->session->set_flashdata('flash', '<div class="alert alert-success text-center" role="alert">Data Berhasil Ditambahkan!</div>');
		redirect('admin/info/index');
		}
	}

	public function edit($id)
	{
		$data['judul'] = 'Edit Informasi';

		$this->form_validation->set_rules('isi', 'Informasi', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data['info'] = $this->Antrian_model->edit_info($id);
			$this->load->view('templates/admin/header', $data);
			$this->load->view('admin/edit_info', $data);
			$this->load->view('templates/footer');
		}	else {
			
			$tgl = date('Y-m-d');
			$id=$this->input->post('id');

			$data = [
			"isi" =>$this->input->post('isi'),
			"tgl" =>$tgl
		];
			$this->db->where('id',$id);
			$this->db->update('info',$data);
			$this->session->set_flashdata('flash', '<div class="alert alert-success text-center" role="alert">Data Berhasil Diedit!</div>');
			redirect('admin/info/index');
		}
	}

	public function hapus($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('info');
		$this->session->set_flashdata('flash', '<div class="alert alert-success text-center" role="alert">Data Berhasil Dihapus!</div>');
		redirect('admin/info/index');
	}
}