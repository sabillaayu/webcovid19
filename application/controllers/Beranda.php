<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

    public function index()
    {
        $data['content']='home';
        $this->load->view('template', $data);
        
    }

}

/* End of file Beranda.php */
