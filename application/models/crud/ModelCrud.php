<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelCrud extends CI_Controller {

	function getAllMessage()
	{
    $this->db->select('*');
		$this->db->from('messages');
	
		$this->db->order_by('created_at', 'DESC');
		$query = $this->db->get();
		return $query->result_array();
	}

  function getMessageById($id)
	{
		return $this->db->get_where('messages', array('id' => $id))->row_array();
	}

  function addMessage($data)
	{
		$this->db->insert('messages', $data);
		return $this->db->insert_id();
	}

  function updateMessage($id, $data)
	{
		$this->db->where('id', $id);
		return $this->db->update('messages', $data);
	}

  function deleteMessage($id)
	{
		$data = $this->db->delete('messages', array('id' => $id));
		return $data;
	}

}
