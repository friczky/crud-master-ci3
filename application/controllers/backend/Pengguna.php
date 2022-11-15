<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}
	public function index()
	{
		$data['title'] = 'Data Pengguna';
		$data['pengguna'] = $this->db->order_by('id_pengguna', 'desc')->get('tb_pengguna')->result();
		$this->load->view('backend/pengguna/index', $data);
	}

	public function tambah()
	{
		$data['title'] = 'Tambah Pengguna';
		$this->load->view('backend/pengguna/tambah', $data);
	}

	public function store()
	{
		$config['allowed_types'] = 'jpg|png|gif';
		$config['max_size'] = '0';
		$config['upload_path'] = './uploads/pengguna/';
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('foto')) {
			$foto = $this->upload->data('file_name');
		} else {
			$this->upload->display_errors();
		}
		$data = [
			'nama'			=> $this->input->post('nama'),
			'username'		=> $this->input->post('username'),
			'email'			=> $this->input->post('email'),
			'password'		=> $this->input->post('password'),
			'role'			=> $this->input->post('role'),
			'foto'          => $foto,
			'waktu_buat'    => date('Y-m-d H:i:s')
		];
		$this->db->insert('tb_pengguna', $data);
		$this->session->set_flashdata('sukses', '<div class="alert alert-success">Berhasil menambahkan Pengguna !</div>');
		redirect(base_url('dashboard/pengguna'));
	}

	public function edit($id_pengguna)
	{
		$data['title'] = 'Edit Pengguna';
		$data['pengguna'] = $this->db->where('id_pengguna', $id_pengguna)->get('tb_pengguna')->row_array();
		$this->load->view('backend/pengguna/edit', $data);
	}

	public function update($id_pengguna)
	{
		$config['allowed_types'] = 'jpg|png|gif';
		$config['max_size'] = '0';
		$config['upload_path'] = './uploads/pengguna/';
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('foto')) {
			$fotolama = $this->input->post('foto_old');
			if ($fotolama != 'default.jpg') {
				unlink(FCPATH . './uploads/pengguna/' . $fotolama);
			}
			$fotobaru = $this->upload->data('file_name');
			$this->db->set('foto', $fotobaru);
		} else {
			$this->upload->display_errors();
		}

		$data = [
			'nama'			=> $this->input->post('nama'),
			'username'		=> $this->input->post('username'),
			'email'			=> $this->input->post('email'),
			'role'			=> $this->input->post('role'),
			'waktu_update'  => date('Y-m-d H:i:s')
		];
		$this->db->where('id_pengguna', $id_pengguna)->update('tb_pengguna', $data);
		$this->session->set_flashdata('sukses', '<div class="alert alert-info">Berhasil memperbahrui Pengguna !</div>');
		redirect(base_url('dashboard/pengguna'));
	}

	public function ganti_password($id_pengguna)
	{
		$data = [
			'password' => md5($this->input->post('password')),
		];
		$url = 'dashboard/pengguna/edit/';
		$id = $id_pengguna;
		$hastag = '#ganti_password';
		$data_url = $url . $id . $hastag;
		$this->db->where('id_pengguna', $id_pengguna)->update('tb_pengguna', $data);
		$this->session->set_flashdata('sukses', '<div class="alert alert-info">Berhasil memperbahrui password !</div>');
		redirect(base_url($data_url));
	}


	public function hapus($id_pengguna)
	{
		$data = $this->db->where('id_pengguna', $id_pengguna)->get('tb_pengguna');
		foreach ($data->result() as $u) {
			unlink('uploads/pengguna/' . $u->foto);
		}
		$this->db->where('id_Pengguna', $id_pengguna)->delete('tb_pengguna');
		$this->session->set_flashdata('sukses', '<div class="alert alert-danger"> Berhasil Menghapus Pengguna !</div>');
		redirect(base_url('dashboard/pengguna'));
	}
}
