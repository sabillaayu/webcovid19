<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Edukasi extends CI_Controller {

    public function index()
    {
        $data['content']='edukasi';
        $this->load->view('template', $data);
    }

}

/* End of file Chart.php */
