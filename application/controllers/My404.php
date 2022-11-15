<?php 
class My404 extends CI_Controller 
{
 public function __construct() 
 {
    parent::__construct(); 
 } 

 public function index() 
 { 
    $this->output->set_status_header('404');
    $data['title'] = 'Halaman Tidak Ditemukan' ;
    $this->load->view('frontend/komponen/header',$data);
    $this->load->view('frontend/komponen/navbar');
    $this->load->view('frontend/404');
 } 
} 