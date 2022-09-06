<?php
	class Pages extends CI_Controller{
		public function view($page ='index'){
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}
			$data['title'] ="Earlcommunications";

			$this->load->view('templates/header',$data);
			$this->load->view('Pages/'.$page,$data);
			$this->load->view('templates/footer');
		}
	}