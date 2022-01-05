<?php 

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}

	public function index()
	{
		if ( $this->session->userdata('aktif') == '1' ) {
			redirect('beranda/user');
		}
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', ['required' => 'Email tidak boleh kosong!']);
		$this->form_validation->set_rules('password', 'Password', 'required|trim', ['required' => 'Password tidak boleh kosong!']);

		if ( $this->form_validation->run() == FALSE )
		{
			$data['judul'] = 'Halaman Login';
			$this->load->view('templates/header', $data);
			$this->load->view('login');
			$this->load->view('templates/footer');
		}else{
			$this->login();
		}
	}

	private function login()
	{
		$email = $this->input->post('email');
	   $password = $this->input->post('password');

	   $user = $this->db->get_where('user', ['email' => $email])->row_array();

	    //jika user ada
	   if ($user) {
	    	//jika user aktif
	    	if ($user['aktif'] == 1) {
	    		//cek pw
	    		if (password_verify($password, $user['password'])) {
	    			$data = [
	    					'id' => $user['id'],
                     'email' => $user['email'],
                     'aktif' => $user['aktif'],
                     'role_id' => $user['role_id'] 
                  ];
                  //var_dump($data); die;
                  $this->session->set_userdata($data);
                  if ($user['role_id'] == 1) {
                  	redirect('admin/beranda');
                  } else {
                  	redirect('beranda/user');
                  }	    				
	    		} else {
	    			$this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
	    			redirect('user');
	    		}
	    	} else {
	    		$this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert">Akun Belum Aktif!</div>');
	    		redirect('user');
	    	}
	   } else {
	    	$this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert">Akun tidak terdaftar!</div>');
	    	redirect('user');
	   }
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('beranda');
	}

	public function registrasi()
	{
		if ($this->session->userdata('email')) {
			redirect('beranda/user');
		}
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim', ['required' => 'Nama Tidak Boleh Kosong..!',]);
		$this->form_validation->set_rules('email', 'Email', 'required|trim|is_unique[user.email]', ['is_unique' => 'Email sudah terdaftar!',]);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
			'matches' => 'Password tidak sama!',
			'min_length' => 'Password terlalu pendek!']);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

		if ($this->form_validation->run() == false) {
			$data['judul'] = 'Form Registrasi';
			$this->load->view('templates/header', $data);
			$this->load->view('registrasi ');
			$this->load->view('templates/footer');

		} else {

			$email = $this->input->post('email', true);

			$data = [
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'email' => htmlspecialchars($email),
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' => 2,
				'aktif' => 0
			];

			// token aktivasi
			$token = base64_encode(random_bytes(32));
			$user_token = [
				'email'			=> $email,
				'token'			=> $token,
				'date_created'	=> time()
			];

			$this->db->insert('user', $data);
			$this->db->insert('user_token', $user_token);

			//https://accounts.google.com/b/0/DisplayUnlockCaptcha
			$this->sendEmail($token, 'verify');

			$this->session->set_flashdata('flash', '<div class="alert alert-warning" role="alert">Berhasil dibuat, cek email untuk aktivasi akun anda!</div>');
      	redirect('user');
		}
	}

	private function sendEmail($token, $type)
	{
		$config = [
			'protocol'	=> 'smtp',
			'smtp_host'	=> 'ssl://smtp.googlemail.com',
			'smtp_user'	=> 'nobplayer372@gmail.com',
			'smtp_pass'	=> '03Desember',
			'smtp_port'	=> 465,
			'mailtype'	=> 'html',
			'charset'	=> 'iso-8859-1',
			'wordwrap' => TRUE,
			'newline'	=> "\r\n"
		];

		$this->load->library('email', $config);
		$this->email->initialize($config);

		$this->email->from('nobplayer372@gmail.com', 'Admin');
		$this->email->to($this->input->post('email'));

		if ($type == 'verify') {

			$this->email->subject('Verifikasi Akun Anda');
			$this->email->message('Klik Link Berikut Untuk Mengaktifkan Akun Anda: <a href="'. base_url() . 'user/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Aktifkan</a>');

		} elseif ($type == 'lupaPassword') {
			
			$this->email->subject('Reset Password');
			$this->email->message('Klik Link Berikut Untuk Menggantik Password Akun Anda: <a href="'. base_url() . 'user/resetPassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Ganti Password</a>');

		}

		if ($this->email->send()) {
			return true;
		} else {
			echo $this->email->print_debugger();
			die;
		}
	}

	public function verify()
	{
		$email = $this->input->get('email');
		$token = $this->input->get('token');

		$user = $this->db->get_where('user', ['email' => $email])->row_array();

		if ($user) {

			$user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

			if ($user_token) {
				
				if (time() - $user_token['date_created'] < 86400) {
					
					$this->db->set('aktif', 1);
					$this->db->where('email', $email);
					$this->db->update('user');

					$this->db->delete('user_token', ['email' => $email]);

					$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">'. $email .' berhasil diaktifkan.</div>');
      			redirect('user');

				} else {

					$this->db->delete('user', ['email' => $email]);
					$this->db->delete('user_token', ['email' => $email]);

					$this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert">Aktifasi gagal, token kadaluarsa!</div>');
      			redirect('user');

				}
			}else {

				$this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert">Aktifasi gagal, token tidak valid!</div>');
      		redirect('user');

			}
		} else {

			$this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert">Aktifasi gagal, email tidak valid!</div>');
      	redirect('user');

		}
	}

	public function lupaPassword()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', ['required' => 'Email tidak boleh kosong!']);

		if ( $this->form_validation->run() == FALSE ) {
			$data['judul'] = 'Lupa Password';
			$this->load->view('templates/header', $data);
			$this->load->view('lupa_password');
			$this->load->view('templates/footer');
		} else {
			$email = $this->input->post('email');
			$user = $this->db->get_where('user', ['email' => $email, 'aktif' => 1])->row_array();

			if ($user) {
				$token = base64_encode(random_bytes(32));
				$user_token = [
					'email'			=> $email,
					'token'			=> $token,
					'date_created'	=> time()
				];

				$this->db->insert('user_token', $user_token);
				$this->sendEmail($token, 'lupaPassword');

				$this->session->set_flashdata('flash', '<div class="alert alert-warning" role="alert">Cek email anda untuk mengganti password!</div>');
      		redirect('user/lupaPassword');

			} else {
				$this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert">Email tidak terdaftar atau Email belum aktif!</div>');
	    		redirect('user/lupaPassword');
			}
		}
	}

	public function resetPassword()
	{
		$email = $this->input->get('email');
		$token = $this->input->get('token');

		$user = $this->db->get_where('user', ['email' => $email])->row_array();

		if ($user) {
			$user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

			if ($user_token) {
				$this->session->set_userdata('reset_email', $email);
				$this->gantiPassword();
			} else {
				$this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert">Token tidak valid!</div>');
	    		redirect('user');
			}
		} else {
			$this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert">Gagal mengganti password, Email tidak valid!</div>');
	    	redirect('user');
		}
	}

	public function gantiPassword()
	{
		if (!$this->session->userdata('reset_email')) {
			redirect('user');
		}
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
			'matches' => 'Password tidak sama!',
			'min_length' => 'Password terlalu pendek!']);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

		if ( $this->form_validation->run() == FALSE ) {
			$data['judul'] = 'Lupa Password';
			$this->load->view('templates/header', $data);
			$this->load->view('ganti_password');
			$this->load->view('templates/footer');
		} else {
			$password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
			$email = $this->session->userdata('reset_email');

			$this->db->set('password', $password);
			$this->db->where('email', $email);
			$this->db->update('user');

			$this->session->unset_userdata('reset_email');

			$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Password berhasil diubah!</div>');
	    	redirect('user');
		}
	}
}



