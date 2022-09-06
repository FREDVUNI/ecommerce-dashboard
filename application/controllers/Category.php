<?php
class Category extends CI_Controller{
    public function __construct(){
        parent:: __construct();
        $this->load->helper('text');
        $this->load->model('category_model');
        is_logged_in();

    }
   public function index(){
       $data['title'] = 'EARL | Dashboard';
       $data['admins'] = $this->db->get_where('admins',['email'=>
       $this->session->userdata('email')])->row_array();

       $data['category'] = $this->db->get('category')->row_array();
       $this->load->view('templates/d_header',$data);
       $this->load->view('admin/categories',$data);
       $this->load->view('templates/d_footer');
        }
    public function add_category(){
       if(isset($_POST['action'])){
       if($_POST['action'] == "create"){
        $table ='category';
        $category_data = array(
            'category' =>$_POST['category'],
            'details' =>$_POST['description'],
            'type' =>$_POST['type'],
        );
        $insert = $this->category_model->insert($table,$category_data);
        if($insert){
            echo "created.";
        }
      }
    }
  }
  public function get_single_row(){
    if($_POST['action'] == 'get_single_row'){
        $output ='';
        $table='category';
        $edit =$_POST['edit'];
        $result=$this->category_model->single_row($table,$edit);
        foreach ($result as $row):
            $output['category'] =$row ->category;
            $output['description'] =$row ->details;
            $output['type'] =$row ->type;
        endforeach;
        echo json_encode($output);
    }
  }
  public function view_categories(){
    if($_POST['action'] == 'view_categories'){
        $table ='category';
        $output='';
        $result=$this->category_model->load_categories($table);
        if(!empty($result)){
            $output .= '<thead>
                    <tr>
                    <th>#</th>
                    <th>Category</th>
                    <th width="40%">Details</th>
                    <th>Type</th>
                    <th></th>
                    <th></th>
                    <th></th>
                  </tr>
              </thead>
              <tfoot>
                <tr>
                    <th>#</th>
                    <th>Category</th>
                    <th>Details</th>
                    <th>Type</th>
                    <th></th>
                    <th></th>
                    <th></th>
                  </tr>
              </tfoot>';
              $i=1;
              foreach ($result as $row):
                if($row->type ==1){
                    $type ="security system";
                }elseif($row->type ==2){
                    $type ="software system";
                }else{
                    $type ="no data";
                }
                  $output .='
                <tbody>
                    <tr>
                      <td>'.$i++.'</td>
                      <td>'.$row->category.'</td>
                      <td>'.word_limiter($row->details,8).'</td>
                      <td>'.$type.'</td>
                      <td class="text-center">
                        <a href="#view'.$row->catid.'" data-toggle="modal" title="view category" style="text-decoration: none;">
                          <button type="button" class="btn btn-warning btn-sm">
                            <span class="fa fa-eye" aria-hidden="true"></span>
                          </button>
                        </a>
                      </td>
                      <td class="text-center">
                        <a href="#" data-edit="'.$row->catid.'" data-toggle="modal" title="edit category" style="text-decoration: none;  " id="edit_btn">
                          <button type="button" class="btn btn-primary btn-sm">
                            <span class="fa fa-pencil" aria-hidden="true"></span>
                          </button>
                        </a>
                      </td>
                      <td class="text-center">
                         <a href="#" data-delete="'.$row->catid.'" data-toggle="modal" title="delete category" style="text-decoration: none;" id="delete_btn">
                          <button type="button" class="btn btn-danger btn-sm">
                            <span class="fa fa-trash-o" aria-hidden="true"></span>
                          </button>
                        </a>
                      </td>
                    </tr>
              </tbody>';
              endforeach; echo $output;
        }
    }
  }

}