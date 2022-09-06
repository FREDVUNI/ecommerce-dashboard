<?php
class Auth extends CI_Controller{
    public function __construct()
		{
            parent:: __construct();
            $this->load->library('form_validation');
            if($this->session->userdata('email')){
                //redirect(base_url().'admin-login');

            }
            
		}
    public function login()
	{
        $this->form_validation->set_rules('email','Email','required|trim|valid_email');
        $this->form_validation->set_rules('password','Password','required|trim');

        if($this->form_validation->run() == FALSE){
        $data['title'] ='Admin | Dashboard';
        $this->load->view('templates/a_header',$data);
        $this->load->view('auth/admin-login');
        $this->load->view('templates/a_footer');
        }else{
            //when the validation works out
            $this->_login();
        }
    }
    private function _login(){
        $email=htmlspecialchars($this->input->post('email'));
        $password=htmlspecialchars($this->input->post('password'));

        $admin = $this->db->get_where('admins',['email' =>$email])->row_array();
        if($admin){
            //password verify and check if customer is active
            if($admin['is_active'] == 1){
                if(password_verify($password,$admin['password'])){
                        $data =[
                            'email' =>$admin['email'],
                            'role_id' =>$admin['role_id']
                        ];
                        $this->session->set_userdata($data);
                        if($admin['role_id'] == 1){
                            redirect('admin/index');
                        }else{
                            redirect('admin-login');
                        }
                }else{
                    $this->session->set_flashdata('message','<div class="text-danger text-center role="alert">
                    Invalid email or password.</div>');
                    redirect('admin-login');
                }
            }else{
                $this->session->set_flashdata('message','<div class="text-danger text-center role="alert">
                Activate your email address.</div>');
                redirect('admin-login');
            }

        }else{
            $this->session->set_flashdata('message','<div class="text-danger text-center role="alert">
            Invalid email or password.</div>');
            return redirect('admin-login');
        }
    }
    public function register()
    {
        $this->form_validation->set_rules('fname','First name','required|trim|min_length[3]');
        $this->form_validation->set_rules('lname','Last name','required|trim');
        $this->form_validation->set_rules('phone','Phone number','required|trim|min_length[10]');
        $this->form_validation->set_rules('email','Email Address','required|trim|valid_email|is_unique[customers.email]',[
            'is_unique' =>'This email is already registered.',
        ]);
        $this->form_validation->set_rules('password','Password','required|trim|min_length[8]|matches[confirm]',
        ['matches'=>'passwords didnot match!','min_length' =>'password should be atleast 8 characters.']);
        $this->form_validation->set_rules('confirm','confirm Password','required|trim|min_length[8]|matches[confirm]',
        ['matches'=>'passwords didnot match!','min_length' =>'password should be atleast 8 characters.']);

        if($this->form_validation->run() == FALSE){
	    $data['title'] ='Earlcommunications|customer-registration';
        $this->load->view('templates/header',$data);
        $this->load->view('customer/register');
        $this->load->view('templates/footer');
    }else{
        $data = [
            'first_name' => $this->input->post('fname'),
            'last_name' => $this->input->post('lname'),
            'email' => $this->input->post('email'),
            'password' => password_hash($this->input->post('password'),PASSWORD_DEFAULT),
            'phone' => $this->input->post('phone'),
            'is_active' => 1,
            'date_created' =>time(),
        ];
        $this->db->insert('customers',$data);
        $this->session->set_flashdata('message','<div class="alert alert-success role="alert">
        Your account has been created successfully! Login here.</div>');
        return redirect('customers/login');
    }
    }
    public function logout(){
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message','<div class="alert alert-success role="alert">
        You have logged out!</div>');
        return redirect('admin-login');
    }
}