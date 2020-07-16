<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kerusakan extends CI_Model {

  function getKerusakan(){
 
    $response = array();
 
    // Select record
    $this->db->select('*');
    $q = $this->db->get('kerusakan');
    $response = $q->result_array();

    return $response;
  }

  function storeKerusakan(){

  	$data = array(
            'kode_kerusakan' => $this->input->post('kode_kerusakan'),
            'kerusakan' => $this->input->post('kerusakan'),
            'deskripsi'      => $this->input->post('deskripsi'),
            'pencegahan'     => $this->input->post('pencegahan')
        );
    return $this->db->insert('kerusakan', $data);

  }

  function getKerusakanById($id){
          // Select record
      $this->db->select('*');
      $q = $this->db->get_where('kerusakan', array('id' => $id));
      $response = $q->row();

      return $response;
  }

  function updateKerusakan(){

        $data = array(
            'kode_kerusakan' => $this->input->post('kode_kerusakan'),
            'kerusakan'      => $this->input->post('kerusakan'),
            'deskripsi'     => $this->input->post('deskripsi'),
            'pencegahan'  => $this->input->post('pencegahan')
        );
    $this->db->where('id',$this->input->post('id'));
    return $this->db->update('kerusakan', $data);

  }

  public function delete($where,$table) {
        $this->db->where($where);
        $q = $this->db->delete($table);
  
    }

}