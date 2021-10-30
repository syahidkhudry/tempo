<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function index()
	{
		$this->load->view('auth/login');
	}

  public function cek_login()
    {
        $this->load->model('auth/modelUser');
        $user = $this->input->post('user');
        $password = $this->input->post('password');
        $cek = $this->modelUser->cek_login($user, $password);
        if(!empty($cek)){
            echo "success";
        } else {            
            echo "error";
        }
    }
}
