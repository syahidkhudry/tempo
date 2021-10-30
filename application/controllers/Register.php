<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function index()
    {
        $this->load->view('auth/register');
    }

    public function simpan()
    {
        $this->load->model('auth/modelUser');

        $data = array(
            'user'       => $this->input->post('user'),
            'password'       => password_hash($this->input->post('password'), PASSWORD_DEFAULT),    
        );

        $register = $this->modelUser->simpan_register($data);

        if($register) {
            echo "success";
        } else {
            echo "error";
        }
    }

}