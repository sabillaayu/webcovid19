<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

    public function insertLaporan()
    {
        if ($this->mData->insertLaporan()) {
            redirect('laporan_view','refresh');
        } else {
            redirect('laporan_view','refresh');
        }
    }


}

/* End of file Data.php */
