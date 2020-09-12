<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_data extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_data', 'mData');
        
    }

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

    public function prosesLogin()
    {
        if ($this->mData->getUserLogin()) {
            
            redirect('home');
        
        } else {
           
          redirect('login');
           
        }
        
    }

    public function insertUser()
    {
        $data= array(
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
        );
        if ($this->db->insert('user', $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function getUser()
    {
        $result = $this->db->get('user')->result();
        return $result;
    }

    public function getUserbyId($id = 0)
    {
        $result = $this->db->where('id_user', $id)->get('user')->row();
        return $result;
    }

    public function getUserLogin()
    {
        if ($this->loginUser()) {
            return true;
        } else {       
            $result = $this->db->where('email', $this->input->post('email'))->where('password', $this->input->post('password'))->get('user');
            if ($result->num_rows()) {
                
                $user = array(
                    'id_user' => $result->row()->id_user,
                    'fullname' => $result->row()->username,
                    'email' => $result->row()->email,
                    'password' => $result->row()->password,
            );
            $this->session->set_userdata( $user );            
            return true;
        } else {
            return false;
        }
    }

}

    public function loginUser()
    {
        $result = $this->db->where('email', $this->input->post('email'))->where('password', $this->input->post('password'))->get('user');
        if ($result->num_rows()) {
            
            $user = array(
                'id_user' => $result->row()->id_user,
                'email' => $result->row()->email,
            );
            $this->session->set_userdata( $user );            
            return true;
        } else {
            return false;
        }
    }


}

/* End of file Model_data.php */
