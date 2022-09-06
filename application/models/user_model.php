
<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class user_model extends CI_Model{
    function __construct() {
        $this->load->database();
         is_logged_in();
    }
    public function get_users(){
        $query = $this->db->get_where('admins',['email'=>
        $this->session->userdata('email')])->row_array();

       
       

    }
}
    
   