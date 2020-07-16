<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Role extends CI_Model {

  function getRole(){
 
    $response = array();
 
    // Select record
    $this->db->select('*');
    $q = $this->db->get('role');
    $response = $q->result_array();

    return $response;
  }

  function storeRole(){

  	$data = array(
            'role'      => $this->input->post('role'),
        );
    return $this->db->insert('role', $data);

  }

  function getRoleById($id){
          // Select record
      $this->db->select('*');
      $q = $this->db->get_where('role', array('id' => $id));
      $response = $q->row();

      return $response;
  }

  function updateRole(){

        $data = array(
            'role'      => $this->input->post('role'),
        );
    $this->db->where('id',$this->input->post('id'));
    return $this->db->update('role', $data);

  }

 public function delete($where,$table) {
        $this->db->where($where);
        $q = $this->db->delete($table);
  
    }

}