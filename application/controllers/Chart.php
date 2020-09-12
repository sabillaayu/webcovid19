<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Chart extends CI_Controller {

    public function index()
    {
        $data['content']='chart';
        $this->load->view('template', $data);
    }

}

/* End of file Chart.php */
