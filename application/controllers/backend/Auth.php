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
			}
			// } else {
			// 	$data_sess = array(
			// 		'id'       		=> $user['id_pengguna'],
			// 		'role'          => $user['role'],
			// 	);
			// 	$this->session->set_userdata($data_sess);
			// 	redirect(base_url('santri'));
			// }
		} else {
			$this->session->set_flashdata('alert', '<div class="alert alert-warning">Username atau Kata Sandi Salah !</div>');
			redirect(base_url('login'));
		}
	}

	// Fungsi untuk logout
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}


        
    /* End of file  Login.php */
