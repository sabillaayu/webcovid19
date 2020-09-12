<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class rs extends CI_Controller {

    public function index()
    {
        $data['content']='rs';
        $this->load->view('template', $data);
    }

}

/* End of file Chart.php */
