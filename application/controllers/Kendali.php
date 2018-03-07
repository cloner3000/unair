<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class kendali extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('upload_model');
    }

    public function index()
    {
        $data = array(
            'file' => $this->upload_model->get_data(),
        );
        $this->load->view('tampilan', $data);
    }

    public function upload()
    {

        $file = $_FILES['file']['name'];
        $type_file = $_FILES['file']['type'];
        $des = $this->input->post('descrip');
        $tgl = $this->input->post('tgl');
        $sumber = $_FILES['file']['tmp_name'];
        $folder = "./file/";

        if (empty($file)) {
            $this->session->set_flashdata('galat', 'The file has not been selected from your folder!.');
        } else if (empty($des)) {
            $this->session->set_flashdata('galat', 'The file name is not yet filled!.');
        } else {
            move_uploaded_file($sumber, $folder . $file);

            $data = array(

                'file' => $file,
                'type_file' => $type_file,
                'description' => $des,
                'tgl' => $tgl,
            );
            $this->upload_model->upload_file('data', $data);
            redirect('Welcome/adminnya?halaman=upload&simpan');
        }

    }

    public function delete($id)
    {
        $this->upload_model->delete_data($id);
        $this->session->set_flashdata('sukses', 'Data successfully deleted!.');
        redirect('Welcome/adminnya?halaman=upload');
    }

}

/* End of file kendali.php */
/* Location: ./application/controllers/kendali.php */