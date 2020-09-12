<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_data', 'mData');
        
    }

    public function index()
    {
        $data['content']='laporan_view';
        $this->load->view('template', $data);
    }

    // public function beranda()
    // {
    //     $data['content']='home';
    //     $this->load->view('template', $data);
        
    // }

    public function insertLaporan()
    {
        $this->form_validation->set_rules('fullname', 'Name', 'trim|required');
        $this->form_validation->set_rules('address', 'Address', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('no_hp', 'No Hp', 'trim|required');
        $this->form_validation->set_rules('symptoms', 'Symptoms', 'trim|required');
        $this->form_validation->set_rules('city', 'City', 'trim|required');
        $this->form_validation->set_rules('province', 'Province', 'trim|required');

          if ($this->form_validation->run() == TRUE) {

        if ($this->mData->insertLaporan()) {

            $this->session->set_flashdata('notif','Berhasil');
            redirect('Laporan','refresh');
        } else {

            $this->session->set_flashdata('notif','Gagal');
            redirect('Laporan','refresh');
        }
        } else {
            $this->session->set_flashdata('notif',validation_errors());
                redirect('Laporan');
        }
    }



}

/* End of file Laporan.php */
