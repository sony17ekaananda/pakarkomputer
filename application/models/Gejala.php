<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gejala extends CI_Model {

  function getGejala(){
 
    $response = array();
 
    // Select record
    $this->db->select('*');
    $q = $this->db->get('gejala');
    $response = $q->result_array();

    return $response;
  }

  function storeGejala(){

  	$data = array(
            'kode_gejala'      => $this->input->post('kode_gejala'),
            'gejala'      => $this->input->post('gejala'),
            'kode_ya'      => $this->input->post('kode_ya'),
            'kode_tidak'      => $this->input->post('kode_tidak')
        );
    return $this->db->insert('gejala', $data);

  }

  public function checkExisting($table, $where, $valueWhere){
        $query = $this->db->query("SELECT count(id) as count_rows FROM $table WHERE $where = '$valueWhere'")->row();
        return $query;
    }
  
  function getGejalaById($id){
          // Select record
      $this->db->select('*');
      $q = $this->db->get_where('gejala', array('id' => $id));
      $response = $q->row();

      return $response;
  }

  function updateGejala(){

        $data = array(
             'kode_gejala'      => $this->input->post('kode_gejala'),
             'gejala'      => $this->input->post('gejala'),
            'kode_ya'      => $this->input->post('kode_ya'),
            'kode_tidak'      => $this->input->post('kode_tidak')
        );
    $this->db->where('id',$this->input->post('id'));
    return $this->db->update('gejala', $data);

  }

 public function delete($where,$table) {
        $this->db->where($where);
        $q = $this->db->delete($table);
  
    }

}