<?php

class Administrative_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }

    function list_users() {
      
        $this->db->select('*');     
        $this->db->from('user_table');
        $this->db->join('user_logs', 'user_logs.user_id = user_table.id','left');
        $query = $this->db->get(); 
        return $query->result();
    } 
   
    
}  