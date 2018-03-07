<?php 
class paper_m extends CI_model

{

		 function tampil_data()
		 {
		 	$data=$this->db->get('paper');
		 	return $data->result_array();

		 }


         //menyimpan data yg di inputkan
		 function simpan_data($tabel,$isi)
		 {
		 	$this->db->insert($tabel,$isi);
		 }


}


 ?>