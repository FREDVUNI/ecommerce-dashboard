<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brand extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('brand_model','brands');
	}

	public function index()
	{
		$this->load->view('admin/brands');
	}

	public function ajax_list()
	{
		$list = $this->brands->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $brands) {
			$no++;
			$row = array();
			$row[] = $brands->brand;
			//add html for action
			$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_person('."'".$brands->brand_id."'".')"><i class="fa fa-pencil"></i> Edit</a>
				  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_person('."'".$brands->brand_id."'".')"><i class="fa fa-trash-o"></i> Delete</a>';
		
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->brands->count_all(),
						"recordsFiltered" => $this->brands->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}
}
	