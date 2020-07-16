<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Model {

  function getAdmin(){
 
    $response = array();
 
    // Select record
    $this->db->select('*');
    $q = $this->db->get('admin');
    $response = $q->result_array();

    return $response;
  }

  function storeAdmin(){

  	$data = array(
            'nama'      => $this->input->post('nama'),
            'email'     => $this->input->post('email'),
            'password'  => $this->input->post('password'),
            'role_id'   => $this->input->post('role'),
            'is_active' => 1
        );
    return $this->db->insert('admin', $data);

  }

  function getAdminById($id){
          // Select record
      $this->db->select('nama, email, id, password, role_id');
      $q = $this->db->get_where('admin', array('id' => $id));
      $response = $q->row();

      return $response;
  }

  function updateAdmin(){

        $data = array(
            'nama'      => $this->input->post('nama'),
            'email'     => $this->input->post('email'),
            'password'  => $this->input->post('password'),
            'role_id'   => $this->input->post('role')
        );
    $this->db->where('id',$this->input->post('id'));
    return $this->db->update('admin', $data);

  }

  function getRole(){
              // Select record
      $this->db->select('id, role');
      $q = $this->db->get('role');
      $response = $q->result_array();

      return $response;
  }

  public function delete($where,$table) {
        $this->db->where($where);
        $q = $this->db->delete($table);
  
    }

}