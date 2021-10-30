<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelUser extends CI_Controller {

	function cek_login($user, $password)
  {
    $this->db->select("*");
    $this->db->from("users");
    $this->db->where("user", $user);
    $query = $this->db->get();
    $user = $query->row();
    if (!empty($user)) {
        if (password_verify($password, $user->password)) {
            return $query->result();
        } else {
            return FALSE;
        }
      } else {
        return FALSE;
      }
  }

  public function simpan_register($data) {
        return $this->db->insert("users", $data);
    }

}
