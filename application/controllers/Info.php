<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends CI_Controller {

    public function index()
    {
        $data['content']='info';
        $this->load->view('template', $data);
    }

}

/* End of file Chart.php */
