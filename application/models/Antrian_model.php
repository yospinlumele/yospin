<?php

class Antrian_model extends CI_Model

{
	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Makassar');
	}
	
	public function tampil_data()
	{
	  $tgl = date('Y-m-d');
	  $this->db->select('*');
	  $this->db->from('antrian');
	  $this->db->where('tgl', $tgl);
	  $this->db->where('terpanggil',0);
	  $query = $this->db->get();
	  return $query->result_array();
	}

	public function tampil_data_besok()
	{
	  $tgl = date('Y-m-d', strtotime('tomorrow'));
	  $this->db->select('*');
	  $this->db->from('antrian');
	  $this->db->where('tgl', $tgl);
	  $query = $this->db->get();
	  return $query->result_array();
	}

	public function add($data)
	{
		$this->db->insert('antrian',$data);
	}
	
	public function hapus_pasien($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('antrian');
	}

	public function hapus_user($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('user');
	}

	public function getdataById($id)
	{
		$query=$this->db->get_where('antrian',['id'=>$id]);
		return $query->row_array();
	}

	public function antri()
	{
		$tgl = date('Y-m-d');
		$this->db->select_max('no_antrian');
		$query = $this->db->get_where('antrian', ['tgl'=>$tgl]);
		
		if ($query->num_rows() > 0) {

			$row = $query->row();
			$urut = ((int)$row->no_antrian) + 1;
			$no_antri = sprintf ("%02s", $urut);

		}else{
			$no_antri = "01";
		}
		return $no_antri;		
	}

	public function antri2()
	{
		$tgl = date('Y-m-d', strtotime('tomorrow'));;
		$this->db->select_max('no_antrian');
		$query = $this->db->get_where('antrian', ['tgl'=>$tgl]);
		
		if ($query->num_rows() > 0) {

			$row = $query->row();
			$urut = ((int)$row->no_antrian) + 1;
			$no_antri = sprintf ("%02s", $urut);

		}else{
			$no_antri = "01";
		}
		return $no_antri;		
	}

	public function info()
	{
		$tgl = date('Y-m-d');
		$this->db->select_max('no_antrian');
		$this->db->where('tgl', $tgl);
		$this->db->where('antrian.id_user', $this->session->userdata('id'));
		$query = $this->db->get('antrian');
      return $query->row_array();
	}

	public function info_pelayanan()
	{
	  $tgl = date('Y-m-d');
	  $this->db->order_by('id', 'desc')->limit(1);
	  $this->db->where('tgl', $tgl);
	  $query = $this->db->get('pemanggilan');
	  return $query->result_array();
	}

	public function riwayat_daftar()
	{
		$this->db->where('antrian.id_user', $this->session->userdata('id'));
		$query = $this->db->get('antrian');
      return $query->result_array();
	}

	public function data_user()
	{
		$this->db->where('role_id',2);
		$this->db->where('aktif',1);
		$query = $this->db->get('user');
		return $query->result_array();
	}

	public function data_user_n()
	{
		$this->db->where('role_id',2);
		$this->db->where('aktif',0);
		$query = $this->db->get('user');
		return $query->result_array();
	}

	public function info2()
	{
		$query = $this->db->get('info');
		return $query->result_array();
	}

	public function edit_info($id)
	{
		$query = $this->db->get_where('info', ['id'=>$id]);
		return $query->row_array();
	}
}
