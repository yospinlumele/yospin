<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeDokter extends CI_Controller {

	function __construct(){
		parent::__construct();
    	$this->load->model('MDokter');
		$this->load->model('MFaq');
	}
	public function index()
    {
		$data['body'] = "admin/dashboard";
		$data['doc'] = $this->MDokter->getDokter()->result();
		$data['fq'] = $this->MFaq->getFaq()->result();
		$this->load->view("admin/index", $data);
    }
	// ++++++++++++++++++++++++++++++ CRUD TABLE ++++++++++++++++++++++++
    // START TABEL DOKTER//
    public function DataDokter()
    {
		$data['body'] = "admin/DataDokter";
		$hasil = $this->MDokter->getDokter();
		$data['dokter'] = $hasil->result();
		$this->load->view('admin/index', $data);
    }
    public function addDokter(){
		$data['body'] = "admin/addDataDokter";
		$this->load->view("admin/index", $data);
	}
	public function editDokter($id = null){
		$data['body'] = "admin/editDataDokter";
		$hasil = $this->MDokter->getDokter($id);
		$data['dokter'] = $hasil->result();
		$this->load->view('admin/index', $data);
	}
	public function prosesDataDokter(){
		if(isset($_POST['add'])){
			$this->load->model('MDokter');
			$GName = $_FILES['picture']['name'];
			$GSize = $_FILES['picture']['size'];
			$GTmp = $_FILES['picture']['tmp_name'];
			$GType = $_FILES['picture']['type'];
			
			$nama_dokter = ucwords(strip_tags($this->input->post('name')));
			$email = $this->input->post('email');
			$password = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
			$name = strip_tags($this->input->post('username'));
			$gender = $this->input->post('gender');
			$specialist = $this->input->post('specialist');
			$bio = trim($this->input->post('bio'));
			$telp = $this->input->post('telp');

			$MovePic = "./assets/images/Dokter/".$GName;
			if($GName != null){
				if($GType == 'image/jpg' || $GType == 'image/png' || $GType == 'image/jpeg'){
					if($GSize <= 10000000){
						if(move_uploaded_file($GTmp, $MovePic)){
							$data = $this->MDokter->addDokter($name, $gender, $specialist, $bio, $telp, $email, $nama_dokter, $password, $GName); // variablenya gk sama dengna yg dibuat
							if($data){
								$this->session->set_flashdata("notif", "Data Recorded");
								redirect("admin/HomeDokter/DataDokter");
							}else{
								$this->session->set_flashdata('failed', "Failed To Recorded data");
								redirect("admin/HomeDokter/addDataDokter");
							}
						}else{
							$this->session->set_flashdata("failed", "Failed to Add Picture, Sorry!!");
							redirect("admin/HomeDokter/addDataDokter");
						}
					}else{
						$this->session->set_flashdata("failed", "Failed, The Size is To Big, Sorry!!");
						redirect("admin/HomeDokter/addDataDokter");
					}
				}else{
					$this->session->set_flashdata("failed", "Failed Wrong Type Of File Only Accept jpg, png, jpeg, Sorry!!");
					redirct("admin/HomeDokter/addDataDokter");
				}
			}else{
				$data = $this->MDokter->addDokterWithoutPicture($name, $gender, $specialist, $bio, $telp, $email, $nama_dokter, $password);
				if($data){
					$this->session->set_flashdata("notif", "Data Recorded");
					redirect("admin/HomeDokter/DataDokter");
				}else{
					$this->session->set_flashdata("failed", "Failed To Record data");
					redirect("admin/HomeDokter/addDataDokter");
				}
			}
		}
	}
	public function editData(){
		if(isset($_POST['edit'])){
			$this->load->model('MDokter');
			$GName = $_FILES['picture']['name'];
			$GSize = $_FILES['picture']['size'];
			$GTmp = $_FILES['picture']['tmp_name'];
			$GType = $_FILES['picture']['type'];

			$nama_dokter = ucwords(strip_tags($this->input->post('name')));
			$email = $this->input->post('email');
			$password = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
			$name = strip_tags($this->input->post('username'));
			$gender = $this->input->post('gender');
			$specialist = $this->input->post('specialist');
			$bio = trim($this->input->post('bio'));
			$telp = $this->input->post('telp');
			$id = $this->input->post('id_dokter');

			$MovePic = "./assets/images/Dokter/".$GName;	
			if($GName != null){
				if($GType == 'image/jpg' || $GType == 'image/png' || $GType == 'image/jpeg'){
					if($GSize <= 10000000){
						if(move_uploaded_file($GTmp, $MovePic)){								
		
							$oldPhoto = strip_tags($this->input->post('oldPhoto'));
							$path = '.assets/images/Dokter/'.$oldPhoto;
							if($oldPhoto != null){
								unlink($path);
							}
							$data = $this->MDokter->editDokter($name, $gender, $specialist, $bio, $telp, $email, $nama_dokter, $password, $GName, $id);
							if($data){
								$this->session->set_flashdata("notif", "Data Recorded");
								redirect("admin/HomeDokter/DataDokter");
							}else{
								$this->session->set_flashdata('failed', "Failed To Recorded data");
								redirect("admin/HomeDokter/editDokter");
							}
						}else{
							$this->session->set_flashdata("failed", "Failed to Add Picture, Sorry!!");
							redirect("admin/HomeDokter/editDokter");
						}
					}else{
						$this->session->set_flashdata("failed", "Failed, The Size is To Big, Sorry!!");
						redirect("admin/HomeDokter/editDokter");
					}
				}else{
					$this->session->set_flashdata("failed", "Failed Wrong Type Of File Only Accept jpg, png, jpeg, Sorry!!");
					redirct("admin/DataDokter/editDokter");
				}
			}else{
				$data = $this->MDokter->editDokterWithoutPicture($name, $gender, $specialist, $bio, $telp, $email, $nama_dokter, $password, $id);
				if($data){
					$this->session->set_flashdata("notif", "Data Recorded");
					redirect("admin/HomeDokter/DataDokter");
				}else{
					$this->session->set_flashdata("failed", "Failed To Record data");
					redirect("admin/HomeDokter/editDokter");
				}
			}
		}
	}
    public function deleteDataDokter(){
		if(isset($_POST['delete'])){
			$this->load->model('MDokter');
			$id = $this->input->post('id_dokter');
			$path = "./assets/images/Dokter".$old;
			$old = strip_tags($this->input->post('oldPhoto'));
			if($old != null){
				unlink($path);
			}
			$this->MDokter->deleteDokter($id);
			$this->session->set_flashdata('notif', 'Success Delete Data Doctor');
			redirect('admin/HomeDokter/DataDokter/index');
		}
	}
    
    // END TABEL DOKTER //
}