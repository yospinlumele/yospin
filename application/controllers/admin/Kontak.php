<?php

class Kontak extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();
		//$this->load->model('Antrian_model');
		if ( $this->session->userdata('role_id') != '1' )
		{
			redirect('user');
		}
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['kontak'] = $this->db->get('kontak')->row_array();
		$data['judul'] = 'Kelola Kontak';
		$this->load->view('templates/admin/header', $data);
		$this->load->view('admin/kontak', $data);
		$this->load->view('templates/footer');
	}

	public function edit($id)
	{
		$data['judul'] = 'Edit Kontak';

		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('telepon', 'Telepon', 'required|trim|numeric');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');

		if ($this->form_validation->run() == FALSE) {

			$data['kontak'] = $this->db->get_where('kontak', ['id'=>$id])->row_array();
			$this->load->view('templates/admin/header', $data);
			$this->load->view('admin/edit_kontak', $data);
			$this->load->view('templates/footer');

		}	else {
			
			$tgl = date('Y-m-d');
			$id=$this->input->post('id');

			$data = [
			"email" =>$this->input->post('email'),
			"telepon" =>$this->input->post('telepon'),
			"alamat" =>$this->input->post('alamat')
		];
			$this->db->where('id',$id);
			$this->db->update('kontak',$data);
			$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');
			redirect('admin/kontak/index');
		}
	}

	public function hapus($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('kontak');
		redirect('admin/kontak/index');
	}
}