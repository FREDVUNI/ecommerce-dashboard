<div id="page-wrapper">
 <div class="row">
          <div class="col-lg-12">
            <ol class="breadcrumb">
              <li><a href="../index.php">
                <i class="icon-dashboard" style="text-decoration:none;"></i>
                 <strong>View Website</strong>
               </a>
             </li>
              <li><a href="index.php">
                <i class="icon-dashboard" style="text-decoration:none;"></i>
                 <strong>Dashboard</strong>
               </a>
             </li>
            </ol>
          <?php
          #Display  messages

          ?>
          <div id="statusMsg"></div>
           <div class="main-col">          
        <div class="panel panel-default">
        <div class="panel-heading">
          <i class="fa fa-table"></i> CATEGORIES <button type="button" name="add" id="add_button" title="Add category" data-toggle="modal" data-target="#addcategory" class="btn btn-success btn-xs pull-right"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add category</button>
        </div>
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-----modal ----->
<!--script type="text/javascript">
  $(document.ready(function(){
    $(document).on('click',"#edit_btn",function(e){
        e.preventDefault();
        let edit_id =$(this).attr('data-edit_id');
        let action ='get_row';
        $.ajax({
          url:"admin/categories",
          method:"POST",
          data:{edit_id:edit_id,action:action},
          dataType:'json',
          success:function(data){
            
          }
        });
    });
   // view_data();
  });
</script-->
<script src="<?php echo base_url('assets/')?>js/jquery-1.10.2.js"></script>
<!--View Modal -->
        <div id="view<?=$category['catid'];?>" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class=" text-center"><i class="fa fa-gift"></i> view Details</h4>
                    </div>
                    <div class="modal-body">
                        <div class="table-responsive">
                            <table class="table table-boredered">
                              <tr>
                                <td><strong>Category</strong></td>
                                <td><?=$category['category'];?></td>
                              </tr>
                              <tr>
                                <td><strong>Details</strong></td>
                                <td><?=$category['details'];?></td>
                              </tr>
                              <tr>
                                <td><strong>Type</strong></td>
                                <td>
                                    <?php
                                        if($category['type'] == 1){
                                          echo "Software Product";
                                        }elseif ($category['type'] == 2) {
                                          echo "Security Product";
                                        }else{
                                          echo "No data";
                                      }
                                    ?>
                                </td>
                              </tr>
                            </table>
                          </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal"> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

 <div class="modal fade" id="addcategory" role="dialog">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title"><i class="fa fa-plus-circle"></i> Add Category</h4>
                  </div>
                  <div class="modal-body">
                    <form  id="category_form">
                    <div id="errors"></div>
                    <div class="form-group">
                    <input type="hidden" name="catid"> 
                    <input type="text" name="category" class="form-control" placeholder="Category" id="category">
                    <span><?php //echo form_error('category');?></span>
                  </div>
                   <div class="form-group">
                    <select class="form-control" id="select" name="type">
                    <option>Choose a type</option>
                    <option value="1">Software systems</option>
                    <option value="2">Security systems</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <textarea name="description" rows="8" class="form-control" placeholder="Description" id="description"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="hidden" name="action" id="action" value="create">
                    <input type="submit" name="submit" class="btn btn-primary" id="submit" value="SAVE">
                   
                  </div>
                  </form>
                  </div>
              </div>
          </div>
  </div>


  <div class="modal fade" id="category_id" role="dialog">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title"><i class="fa fa-plus-circle"></i> Edit Category</h4>
                  </div>
                  <div class="modal-body">
                    <form  id="category_form">
                    <div id="errors"></div>
                    <div class="form-group">
                    <input type="hidden" name="catid"> 
                    <input type="text" name="category" class="form-control" placeholder="Category" id="category">
                  </div>
                   <div class="form-group">
                    <select class="form-control" id="select" name="type">
                    <option disabled>Choose a type</option>
                    <option value="1">Software systems</option>
                    <option value="2">Security systems</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <textarea name="description" rows="8" class="form-control" placeholder="Description" id="description"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="hidden" name="action" id="update_id" value="update">
                    <input type="hidden" name="action" id="action" value="create">
                    <input type="submit" name="submit" class="btn btn-primary" id="submit" value="SAVE">
                   
                  </div>
                  </form>
                  </div>
              </div>
          </div>
      </div>
      <script type="text/javascript">
        $(document).ready(function(){
          $(document).on("click","#edit_btn",function(e){
            e.preventDefault();
          var edit =$(this).attr('data-edit');
          var action = 'get_single_row';
          $.ajax({
            url:"<?php echo base_url('Category/get_single_row');?>",
            method:"POST",
            data:{edit:edit,action:action},
            dataType:"json",
            success:function(data){
              $("#category_id").modal('show');
              $("#category").val(data.category);
              $("#select").val(data.type);
              $("#description").val(data.details);

              $("#action").val('update');
              $("#submit").val('update');
               $("#update_id").val('edit');
            }
          })
         });
          get_categories();
          function get_categories(){
            var action  ="view_categories";
            $.ajax({
                url:'<?php echo base_url('Category/view_categories');?>',
                method:'POST',
                data:{action:action},
                success:function(data){
                  $("#dataTable").html(data);
                }

            });
          }
          $(document).on("submit","#category_form",function(e){
              e.preventDefault();
              //let em_reg = /([a-zA-Z0-9_\-\.]+)@((\[[0-9]]))/;
              var category = $("#category").val();
              var type = $("#type").val();
              var description = $("#description").val();

              if(category == '' || description == ''  || type ==''){
                  $("#errors").html("<p class='alert alert-danger'>Fill out all the fields.</p>");

              }else{
                $.ajax({
                  method:'POST',
                  url:'<?php echo base_url('Category/add_category');?>',
                  data: new FormData(this),
                  contentType:false,
                  processData:false,
                  success:function(data){
                       $("#statusMsg").html("<p class='alert alert-success'>category was added successfully.</p>");
                       $("#category_form")[0].reset();
                       $("#addcategory").modal("hide");
                  }
                });
                  
              }
          });
        });
      </script>
<script src="<?php echo base_url('assets/')?>js/jquery-1.10.2.js"></script>
      