<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ImportSantri extends CI_Model {

	public function import($data_santri){
		
		$jumlah = count($data_santri);
		if ($jumlah > 0) {
			$this->db->replace('tb_santri', $data_santri);
		}
	}

}
