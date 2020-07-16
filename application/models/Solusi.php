<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Solusi extends CI_Model {

  function getSolusi(){
 
    $response = array();
 
    // Select record
    $this->db->select('*');
    $q = $this->db->get('solusi');
    $response = $q->result_array();

    return $response;
  }

  function storeSolusi(){

  	$data = array(
            'solusi' => $this->input->post('solusi')
        );
    return $this->db->insert('solusi', $data);

  }

  function getSolusiById($id){
          // Select record
      $this->db->select('*');
      $q = $this->db->get_where('solusi', array('id' => $id));
      $response = $q->row();

      return $response;
  }

  function updateSolusi(){

        $data = array(
            'solusi'      => $this->input->post('solusi')
        );
    $this->db->where('id',$this->input->post('id'));
    return $this->db->update('solusi', $data);

  }

  public function delete($where,$table) {
        $this->db->where($where);
        $q = $this->db->delete($table);
  
    }

}