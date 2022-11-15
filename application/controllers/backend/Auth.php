<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	// Halaman Login
	public function index()
	{
		$data['title'] = 'Login';
		$this->load->view('auth/login', $data);
	}

	// Fungsi untuk authentikasi login
	public function login()
	{

		$username   = $this->input->post('username');
		$password   = md5($this->input->post('password'));

		$data = $this->db->query("SELECT * FROM tb_pengguna where username='$username' and password='$password'");

		if ($data->num_rows() > 0) {
			$user = $data->row_array();
			if ($user['role'] == '0') {
				$data_sess = array(
					'id'       		=> $user['id_pengguna'],
					'role'          => $user['role']
				);
				$this->session->set_userdata($data_sess);
				redirect(base_url('admin'));
			} else {
				$data_sess = array(
					'id'       		=> $user['id_pengguna'],
					'role'          => $user['role'],
				);
				$this->session->set_userdata($data_sess);
				redirect(base_url('santri'));
			}
		} else {
			$this->session->set_flashdata('alert', '<div class="alert alert-warning">Username atau Kata Sandi Salah !</div>');
			redirect(base_url('login'));
		}
	}

	// Halaman Daftar
	public function register()
	{
		$data = $this->db->get('tb_pengaturan_pendaftaran')->row_array();
		if ($data['status'] == '1') {
			$data['title'] = 'Daftar Menjadi Santri';
			$this->load->view('auth/register', $data);
		} else {
			$this->session->set_flashdata('alert', '<div class="alert alert-warning">Pendaftaran Belum Dibuka !</div>');
			redirect(base_url('login'));
		}
	}

	// Fungsu untuk mendaftarkan akun
	public function store()
	{
		$id = rand(1, 999999);

		$data_pengguna = [
			'id_pengguna'	=> $id,
			'nama'		=> $this->input->post('namaewa'),
			'email'		=> $this->input->post('mael'),
			'username'	=> $this->input->post('uname'),
			'password'	=> md5($this->input->post('psswd')),
			'role'		=> '1'
		];

		$data_santri = [
			'id_pengguna'	=> $id,
			'status_santri'	=> '1',
		];

		$berkas = [
			'id_user'	=> $id,
		];

		$sosmed = [
			'id_pengguna' => $id
		];
		$validation_uname = $this->db->where('username', $data_pengguna['username'])->get('tb_pengguna')->row_array();
		$validation_email = $this->db->where('email', $data_pengguna['email'])->get('tb_pengguna')->row_array();

		if ($validation_uname > 0) {
			$this->session->set_flashdata('alert', '<div class="alert alert-danger">Username Sudah Terdaftar!</div>');
			redirect(base_url('daftar'));
		} elseif ($validation_email > 0) {
			$this->session->set_flashdata('alert', '<div class="alert alert-danger">Email Sudah Terdaftar!</div>');
			redirect(base_url('daftar'));
		} else {
			$this->db->insert('tb_pengguna', $data_pengguna);
			$this->db->insert('tb_santri', $data_santri);
			$this->db->insert('tb_pendaftaran', $data_santri);
			$this->db->insert('tb_berkas', $berkas);
			$this->db->insert('tb_sosmed', $sosmed);

			$email = $this->input->post('mael');
			$username = $this->input->post('uname');
			$password = $this->input->post('psswd');
			$pesan =
				'
			<img class="img" src="https://img.freepik.com/free-vector/businessman-holding-pencil-big-complete-checklist-with-tick-marks_1150-35019.jpg?t=st=1656734966~exp=1656735566~hmac=de7aea06101cb6465d306e6d836b961db27bd0c769961cb76209b636e7b22ac2&w=1060" width="100%" >
			<h1> PENDAFTARAN AKUN BERHASIL ' . $email . '</h1>
			Berikut akun anda untuk login di website PPM NUR BAITURRAHMAN. <br><br>
			<p> Username : <b>' . $username . '</b></p>
			<p> Password : <b>' . $password . '</b></p>
			<br>
			<p> Silahkan Login melalui link ini : <a href="' . base_url('login') . '">Klik Disini</a><p>
			<br><br>
			<p><b>PPM NUR BAITURRAHMAN</b></p>
			';
			$config = [
				'mailtype'  => 'html',
				'charset'   => 'utf-8',
				'protocol'  => 'smtp',
				'smtp_host' => 'smtp.gmail.com',
				'smtp_user' => 'akademi.my.id@gmail.com',  // Email gmail
				'smtp_pass'   => 'nhreekzyuzzatups',  // Password gmail
				'smtp_crypto' => 'ssl',
				'smtp_port'   => 465,
				'crlf'    => "\r\n",
				'newline' => "\r\n"
			];
			if (isset($_POST['daftar'])) {
				$this->load->library('email', $config);
				$this->email->from('ppmnurba@gmail.com', 'PPM NUR BAITURRAHMAN');
				$this->email->to($email);
				// $this->email->attach('');
				$this->email->subject('Pendaftaran Akun Berhasil | PPM NURBA');
				$this->email->message($pesan);
				if ($this->email->send()) {
					$this->session->set_flashdata('alert', '<div class="alert alert-success">Berhasil Mendaftarkan Akun, Silahkan cek Email anda !</div>');
					redirect(base_url('login'));
				} else {
					$this->session->set_flashdata('alert', '<div class="alert alert-danger">Pendaftaran Berhasil , Namun Email tidak terkirim, Kesalahan Server !</div>');
					redirect(base_url('login'));
				}
			} else {
			}

			// $this->session->set_flashdata('alert','<div class="alert alert-success">Berhasil Daftar, Silahkan Masuk !</div>');
			// redirect(base_url('login'));
		}
	}

	// fungsi untuk logout
	public function logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('alert', '<div class="alert alert-warning">Berhasil logout !</div>');
		redirect(base_url('login'));
	}

	// halaman lupa password
	public function lupa_password()
	{
		$data['title'] = 'RESET PASSWORD';
		$this->load->view('auth/password', $data);
	}

	// halaman ganti password
	public function ganti_password($token)
	{
		$data['title'] = 'GANTI PASSWORD';
		$data['pengguna'] = $this->db->where('token_reset', $token)->get('tb_pengguna')->row_array();
		if($data['pengguna'] > 0){
			$this->load->view('auth/ganti_password', $data);
		}else{
			$this->session->set_flashdata('alert', '<div class="alert alert-danger">Token Sudah Kadaluarsa !</div>');
			redirect(base_url('login'));
		}

		if(isset($_POST['ganti_password'])){
			$data = [
				'password' => md5($this->input->post('password')),
				'token_reset' => null
			];

			$this->db->where('token_reset',$token)->update('tb_pengguna',$data);
			$this->session->set_flashdata('alert', '<div class="alert alert-warning">Berhasil Reset Password , Silahkan Login !</div>');
			redirect(base_url('login'));
		}
	}

	// fungsi untuk reset password
	public function reset(){
		// Konfigurasi email
        $config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_user' => 'akademi.my.id@gmail.com',  // Email gmail
            'smtp_pass'   => 'nhreekzyuzzatups',  // Password gmail
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];

        $email = $this->input->post('email');
		$token = sha1(random_bytes(32));
		$data  = [
			'token_reset' => $token
		];
        $pesan = 
        '
        <h1> RESET PASSWORD '.$email.'</h1>
        Klik link dibawah ini untuk reset passsword. <br><br>
        '.
        '
        <a href="'.base_url('backend/auth/ganti_password/').$token.'">
        Klik Disini</a>
        <br><br>

        <p><b>PPM NUR BAITURRAHMAN</b></p>
        ';
		
		$validation_email = $this->db->where('email', $email)->get('tb_pengguna')->row_array();

		if ($validation_email > 0) {
			if (isset($_POST['reset'])){
				$this->load->library('email', $config);
				$this->email->from('ppmnurba@gmail.com', 'PPM NUR BAITURRAHMAN'); 
				$this->email->to($email); 
				$this->email->attach('');
				$this->email->subject('Reset Password | PPM NURBA');
				$this->email->message($pesan);
				if ($this->email->send()) {
					$this->db->where('email', $email)->update('tb_pengguna', $data);
					$this->session->set_flashdata('alert','<div class="alert alert-success">Berhasil Mengirim Email Reset Password !</div>');
					redirect(base_url('login'));
				} else {
					$this->session->set_flashdata('alert','<div class="alert alert-danger">Gagal Mengirim Email Reset Password, Kesalahan Server !</div>');
					redirect(base_url('login'));
				}
			}else{
	
			}
		}else {
			$this->session->set_flashdata('alert', '<div class="alert alert-danger">Email Belum Terdaftar , Silahkan Mendaftar!</div>');
			redirect(base_url('daftar'));
		}
        
        
	}
}
        
    /* End of file  Login.php */
