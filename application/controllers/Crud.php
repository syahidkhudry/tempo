<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {
  function __construct()
  {
      parent::__construct();
      $this->load->model('crud/ModelCrud');
  }
  function index()
  {
      $data['message'] = $this->ModelCrud->getAllMessage();     
      $this->load->view('crud/list', $data);
	}

  function add()
  {
    
      if (isset($_POST) && count($_POST) > 0) {
          $data = array(
            'name' => $this->input->post('name'),
            'contact' => $this->input->post('contact'),
            'message' => $this->input->post('message'),
            'created_at' => date("Y-m-d H:i:s"),
          );
          $data = $this->ModelCrud->addMessage($data);
          redirect('crud');
      } else {
          $this->load->view('crud/add');
         
      }
  }

  function remove($id)
  {
      $message = $this->ModelCrud->getMessageById($id);

      if (isset($message['id'])) {
          $this->ModelCrud->deleteMessage($id);
         
          redirect('crud');
      } else
          show_error('The you are trying to delete does not exist.');
  }

  function edit($id)
    {
        $data['message'] = $this->ModelCrud->getMessageById($id);

        if (isset($data['message']['id'])) {
            if (isset($_POST) && count($_POST) > 0) {
                $data = array(
                  'name' => $this->input->post('name'),
                  'contact' => $this->input->post('contact'),
                  'message' => $this->input->post('message'),
                  'updated_at' => date("Y-m-d H:i:s"),
                );
                $this->ModelCrud->updateMessage($id, $data);
                redirect('crud');
            } else {               
                $this->load->view('crud/edit', $data);               
            }
        } else
            show_error('The you are trying to edit does not exist.');
    }
 
}
