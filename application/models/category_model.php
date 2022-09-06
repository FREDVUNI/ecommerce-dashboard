<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class category_model extends CI_Model{

public function insert($table,$category_data){
    $insert = $this->db->insert($table, $category_data);
    return $insert;
            
  }
public function load_categories($table){
    $this->db->select('*');
    $this->db->from($table);
    $this->db->order_by('catid','desc');
    $result=$this->db->get()->result();
    return $result;
            
  }
public function single_row($table,$edit){
    $this->db->where('catid',$edit);
    $result=$this->db->get($table);
    return $result->result();
}    
public function count_all()
    {
      $this->db->from($this->table);
      return $this->db->count_all_results();
    } 
public function delete_by_id($id)
    {
        $this->db->where('catid', $id);
        $this->db->delete($this->table);
    }
public function get_by_id($id)
    {
        $this->db->from($this->table);
        $this->db->where('catid',$id);
        $query = $this->db->get();

        return $query->row();
    }    

}