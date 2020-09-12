<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_data extends CI_Model {

    public function insertLaporan()
    {
        $data= array(
            'fullname' => $this->input->post('fullname'),
            'address' => $this->input->post('address'),
            'Email' => $this->input->post('email'),
            'no_hp' => $this->input->post('no_hp'),
            'symptoms' => $this->input->post('symptoms'),
            'City' => $this->input->post('city'),
            'province' => $this->input->post('province'),
        );
        
        if ($this->db->insert('report', $data)) {
            return true;
        } else {
            return false;
        }
    }

}

/* End of file Model_data.php */
