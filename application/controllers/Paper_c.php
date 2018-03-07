<?php

class Paper_c extends CI_Controller
{


    function __construct()
    {
        parent:: __construct();
        $this->load->model('paper_m');
    }


// menyimpan data
    function simpan()
    {
        $a = $this->input->post('tittle');
        $b = $this->input->post('upload');
        $c = $this->input->post('file');
        $d = $this->input->post('status');
        $e = $this->input->post('author');
        $f = $this->input->post('comment');


        $inputan = array(
            'tittle' => $a,
            'date' => $b,
            'file' => $c,
            'status' => $d,
            'author' => $e,
            'comment' => $f,
        );

        $this->paper_m->simpan_data('paper', $inputan);
        redirect("<?php echo base_url('index.php/Welcome/usernya?halaman=paper&simpan');?>");
    }


}

?>
