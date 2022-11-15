<?php

$role = $this->session->datauser('role');

if ($role == '0'){
	redirect(base_url('dashboard'));
} elseif($role == '1'){
	redirect(base_url('santri'));
}

$this->session->set_flashdata('login', 'Anda harus login terlebih dahulu');

?>
