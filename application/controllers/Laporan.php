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
        $data['content']='chart';
        $this->load->view('template', $data);
    }

    public function beranda()
    {
        $data['content']='home';
        $this->load->view('template', $data);
        
    }

    public function insertLaporan()
    {
        if ($this->mData->insertLaporan()) {
            redirect('laporan_view','refresh');
        } else {
            redirect('laporan_view','refresh');
        }
    }

    public function abc () {
        return 'asss';
    }


}

/* End of file Laporan.php */
