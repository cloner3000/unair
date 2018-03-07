<?php

class Welcome extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('modal');
	}

	function login() {
		$this->load->view('p_login');
	}

	function logout() {
		$user_data = $this->session->all_userdata();
		foreach ($user_data as $key => $value) {
			if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
				$this->session->unset_userdata($key);
			}
		}
		$this->session->sess_destroy();
		redirect('/');
	}

	function registrasi() {
		$this->load->view('daftar_akun_baru');
	}

	public function index() {
		$this->load->view('front-end');
	}

//user menyimpan data
	function simpan() {
		$a = $this->input->post('f_name');
		$b = $this->input->post('m_name');
		$c = $this->input->post('l_name');
		$d = $this->input->post('certificat');
		$e = $this->input->post('pasport');
		$f = $this->input->post('ttl');
		$g = $this->input->post('nasional');
		$h = $this->input->post('insti');
		$i = $this->input->post('address');
		$j = $this->input->post('pos');
		$k = $this->input->post('country');
		$l = $this->input->post('email');
		$m = $this->input->post('telephone');
		$n = $this->input->post('request');
		$o = $this->input->post('register');
		$p = $this->input->post('will');

		$inputan = array(
			'first_name' => $a,
			'middle_name' => $b,
			'last_name' => $c,
			'certificat' => $d,
			'passport' => $e,
			'ttl' => $f,
			'nasionallity' => $g,
			'institution' => $h,
			'address' => $i,
			'pos_code' => $j,
			'country' => $k,
			'email' => $l,
			'phone' => $m,
			'request' => $n,
			'register' => $o,
			'will' => $p,
		);

		$this->modal->simpan_data('registration', $inputan);
		redirect("Welcome/usernya?halaman=mahasiswa&simpan");
	}

//admin menyimpan data
	function daftar() {
		$a = $this->input->post('f_name');
		$b = $this->input->post('m_name');
		$c = $this->input->post('l_name');
		$d = $this->input->post('certificat');
		$e = $this->input->post('pasport');
		$f = $this->input->post('ttl');
		$g = $this->input->post('nasional');
		$h = $this->input->post('insti');
		$i = $this->input->post('address');
		$j = $this->input->post('pos');
		$k = $this->input->post('country');
		$l = $this->input->post('email');
		$m = $this->input->post('telephone');
		$n = $this->input->post('request');
		$o = $this->input->post('register');
		$p = $this->input->post('will');

		$inputan = array(
			'first_name' => $a,
			'middle_name' => $b,
			'last_name' => $c,
			'certificat' => $d,
			'passport' => $e,
			'ttl' => $f,
			'nasionallity' => $g,
			'institution' => $h,
			'address' => $i,
			'pos_code' => $j,
			'country' => $k,
			'email' => $l,
			'phone' => $m,
			'request' => $n,
			'register' => $o,
			'will' => $p,
		);

		$this->modal->simpan_data('registration', $inputan);
		redirect("Welcome/adminnya?halaman=daftarkan&simpan");
	}

	function masuk() {

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$user = $this->modal->login($username, $password);

		if ($user->status == "user") {

			redirect('Welcome/usernya');

		}

		if ($user->status == "admin") {
			redirect('Welcome/adminnya');
		}
		if ($user->status == "participant") {
			redirect('Welcome/partisipan');
		} else {

			// redirect('Welcome/masuk');
			header('location: ' . base_url('index.php/welcome/?gagal'));
			echo "<script>alert('Account not yet registered, please registration first')</script>";
		}
	}

	function usernya() {

		$data['datanya'] = $this->modal->tampil_data();
		$this->load->view('pendaftaran', $data);

	}

	function adminnya() {
		$this->load->model('upload_model');
		$data['dataUpload'] = $this->upload_model->get_data();
		$data['datanya'] = $this->modal->tampil_data();
		$this->load->view('admin', $data);

	}

	function partisipan() {

		$data['datanya'] = $this->modal->tampil_data();
		$this->load->view('partisipan', $data);

	}

}

?>