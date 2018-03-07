<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class upload_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function upload_file($tabel,$data)
	{
		$this->db->insert($tabel,$data);
	}

	public function get_data()
	{
		$datanya=$this->db->get('data');
		return $datanya->result();
	}

	public function delete_data($id_file)
	{
		$this->db->delete('data', array('id' => $id_file));
	}

}

/* End of file upload_model.php */
/* Location: ./application/models/upload_model.php */