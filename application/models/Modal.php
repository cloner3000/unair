<?php 
class Modal extends CI_model
{


				  function tampil_data()
				  {
				  	$datanya= $this->db->get('registration');
				  	return $datanya->result_array();
				  }


				  function simpan_data($tabel,$isi)
				  {
				  	$this->db->insert($tabel,$isi);
				  }

				     
				      public function login($username,$password)

				  {

				   return   $this->db->get_where('user', array('username' => $username ,'password' => md5($password)))->row();

				  } 
    
    					
   


} ?>