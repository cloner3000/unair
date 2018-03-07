<?php

class c_akun extends CI_Controller
{

    function __construct()
    {

        parent:: __construct();
        $this->load->model('m_akun');
    }


    public function daftar_akun()
    {
        $this->load->view('daftar_akun_baru');
    }

    public function daftar_akun_baru()
    {


        $nama1 = $this->input->post('f_name');
        $nama2 = $this->input->post('m_name');
        $nama3 = $this->input->post('l_name');
        $status = $this->input->post('status');
        $email = $this->input->post('email');
        $username = $this->input->post('username');
        $sandi = $this->input->post('sandi');
        $confirm = $this->input->post('confirm');
        $data_daftar = array();
        $cek_pengguna = $this->db->get_where('user', array('username' => $username))->num_rows();
        if ($sandi == $confirm) {
            $this->m_akun->daftar($nama1, $nama2, $nama3, $status, $email, $username, $sandi, $confirm);
            header('location: ' . base_url('?akun_berhasil_di_daftarkan'));
        } else {
            header('location: ' . base_url('index.php/c_akun/daftar_akun/?sandi_tidak_sinkron'));
        }

    }
}

?>
