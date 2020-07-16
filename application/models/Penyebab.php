<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Penyebab extends CI_Model {

  function getPenyebab(){
 
    $response = array();
 
    // Select record
    $this->db->select('*');
    $q = $this->db->get('penyebab');
    $response = $q->result_array();

    return $response;
  }

  function storePenyebab(){

  	$data = array(
            'penyebab'      => $this->input->post('penyebab'),
        );
    return $this->db->insert('penyebab', $data);

  }

  function getPenyebabById($id){
          // Select record
      $this->db->select('*');
      $q = $this->db->get_where('penyebab', array('id' => $id));
      $response = $q->row();

      return $response;
  }

  function updatePenyebab(){

        $data = array(
            'penyebab'      => $this->input->post('penyebab'),
        );
    $this->db->where('id',$this->input->post('id'));
    return $this->db->update('penyebab', $data);

  }

  public function delete($where,$table) {
        $this->db->where($where);
        $q = $this->db->delete($table);
  
    }

}