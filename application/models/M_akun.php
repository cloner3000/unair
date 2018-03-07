<?php 
class m_akun extends CI_model{
	

public function daftar($nama1,$nama2,$nama3,$status,$email,$username,$sandi,$confirm)
	{
		
		$data_daftar = array('f_name' => $nama1,'m_name' => $nama2,'l_name' => $nama3,'status' => $status,'email'=>$email, 'username' => $username, 'password'=> md5($sandi), 'confirm' => $confirm);
		$this->db->insert('user', $data_daftar);
	}




}
 ?>
