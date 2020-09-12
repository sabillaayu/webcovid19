<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_data', 'mData');
        
    }

    public function insertLaporan()
    {
        if ($this->mData->insertLaporan()) {
            redirect('laporan_view','refresh');
        } else {
            redirect('laporan_view','refresh');
        }
    }

    
    public function insertUser()
    {
        if ($this->mData->insertUser()) {
            redirect('user_view','refresh');
        } else {
            redirect('user_view','refresh');
        }
    }


}

/* End of file Data.php */
