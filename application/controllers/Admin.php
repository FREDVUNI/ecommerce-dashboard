<?php
class Admin extends CI_Controller{
    public function __construct(){
        parent:: __construct();
        is_logged_in();
       // $crud_method =$this->load->model('crud_method');
    }
   public function index(){
       $data['title'] = 'EARL | Dashboard';
       $data['admins'] = $this->db->get_where('admins',['email'=>
       $this->session->userdata('email')])->row_array();
       $this->load->view('templates/d_header',$data);
       $this->load->view('admin/index',$data);
       $this->load->view('templates/d_footer');
   }

   public function view($page ='index'){
      if(!file_exists(APPPATH.'views/admin/'.$page.'.php')){
        show_404();
      }
      $data['title'] ="EARL | Dashboard";
      $data['admins'] = $this->db->get_where('admins',['email'=>
      $this->session->userdata('email')])->row_array();
      $this->load->view('templates/d_header',$data);
      $this->load->view('admin/'.$page,$data);
      $this->load->view('templates/d_footer');
    }
    
  }
  