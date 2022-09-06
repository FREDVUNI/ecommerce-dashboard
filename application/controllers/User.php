<?php
class User extends CI_Controller{
    public function __construct(){
        parent:: __construct();
        $this->load->model('user_model');
        is_logged_in();
    }
   public function profile(){
       $data['title'] = 'EARL | Dashboard';
       $data['admins'] = $this->db->get_where('admins',['email'=>
       $this->session->userdata('email')])->row_array();
       $this->load->view('templates/d_header',$data);
       $this->load->view('admin/profile',$data);
       $this->load->view('templates/d_footer');
        }

  public function users(){
        $data['title'] = 'Earl | Dashboard';
        //$data['admins'] = $this->user_model->get_users();
        $data['admins'] = $this->db->get_where('admins',['email'=>
       $this->session->userdata('email')])->row_array();
        $this->load->view('templates/d_header', $data);
        $this->load->view('admin/users',$data);
        $this->load->view('templates/d_footer');

    }
         

    public function edit(){
        $data['title'] = 'EARL | Dashboard';
        $data['admins'] = $this->db->get_where('admins',['email'=>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/d_header',$data);
        $this->load->view('admin/users/edit',$data);
        $this->load->view('templates/d_footer');
    }

    }