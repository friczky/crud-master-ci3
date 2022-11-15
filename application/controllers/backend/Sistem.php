<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sistem extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}
	public function index()
	{
		if (isset($_POST['update'])){
			$config['allowed_types'] = 'jpg|png|gif';
			$config['max_size'] = '0';
			$config['upload_path'] = './uploads/sistem/';
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('logo')) {
				$fotolama = $this->input->post('logo_old');
				if ($fotolama != 'default.jpg') {
					unlink(FCPATH . './uploads/sistem/' . $fotolama);
				}
				$fotobaru = $this->upload->data('file_name');
				$this->db->set('logo', $fotobaru);
			} else {
				$this->upload->display_errors();
			}
			$data = [
				'nama_web'			=> $this->input->post('nama_web'),
				'nama_ppm'			=> $this->input->post('nama_ppm'),
				'nama_pimpinan'		=> $this->input->post('nama_pimpinan'),
				'nama_pengasuh'		=> $this->input->post('nama_pengasuh'),
				'tentang'			=> $this->input->post('tentang')
			];
			$this->db->update('tb_sistem',$data);
			$this->session->set_flashdata('sukses', '<div class="alert alert-info">Berhasil memperbahrui Halaman Tentang !</div>');
			redirect(base_url('dashboard/sistem'));
		}
		$data['title'] = 'Sistem Website';
		$data['sistem'] = $this->db->where('id_sistem',1)->get('tb_sistem')->row_array();
		$this->load->view('backend/sistem/sistem',$data);
	}

	public function kontak(){
        if (isset($_POST['update'])){
            $data = [
                'telpon' 	=> $this->input->post('telpon'),
                'email'		=> $this->input->post('email'),
                'facebook' 	=> $this->input->post('facebook'),
                'instagram' => $this->input->post('instagram'),
                'youtube' 	=> $this->input->post('youtube'),
				'maps' 		=> $this->input->post('maps'),
			];
			$this->db->where('id_sistem',1)->update('tb_sistem',$data);
			redirect(base_url('dashboard/sistem/kontak'));
        }else {
			$data['title'] = 'Kontak';
			$data['sistem'] = $this->db->where('id_sistem',1)->get('tb_sistem')->row_array();
			$this->load->view('backend/sistem/kontak',$data);
		}
	}

	public function update(){
       
    }

}
