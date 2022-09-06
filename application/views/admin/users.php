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
           <div class="main-col">          
        <div class="panel panel-default">
        <div class="panel-heading">
          <i class="fa fa-users"></i> USERS
        </div>
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th></th>
                    <th></th>
                  </tr>

              </thead>
              <tfoot>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th></th>
                    <th></th>
                  </tr>
              </tfoot>
              <tbody>
                    <tr>
                      <td><?php echo $i=1; $i++; ?></td>
                      <td><?php echo $admins['name']; ?></td>
                      <td><?php echo $admins['email']; ?></td>
                      <td>
                        <?php
                          if($admins['role_id'] == 1){
                            echo "Administrator";
                          }elseif ($admins['role_id'] == 2) {
                            echo "Seller";
                          }else{
                            echo "Editor";
                          }
                        ?>
                        </td>
                      <td class="text-center">
                        <a href="#view<?=$admins['id'];?>" data-toggle="modal" title="view customer details" style="text-decoration: none;">
                          <button type='button' class='btn btn-warning btn-sm'>
                            <span class='fa fa-eye ' aria-hidden='true'></span>
                          </button>
                        </a>
                      </td>
                      <td class="text-center">
                         <a href="#delete<?php// echo $value['id'];?>" data-toggle="modal" title="delete <?php //echo $value['name'];?>" style="text-decoration: none;">
                          <button type='button' class='btn btn-danger btn-sm'>
                            <span class='fa fa-trash-o' aria-hidden='true'></span>
                          </button>
                        </a>
                      </td>
                    </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!--View Modal -->
        <div id="view<?=$admins['id'];?>" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class=" text-center"><i class="fa fa-user"></i> view Details</h4>
                    </div>
                    <div class="modal-body">
                        <div class="table-responsive">
                            <table class="table table-boredered">
                              <tr>
                                <td><strong>Name</strong></td>
                                <td><?=$admins['name'];?></td>
                              </tr>
                              <tr>
                                <td><strong>Email</strong></td>
                                <td><?=$admins['email'];?></td>
                              </tr>
                              <tr>
                                <td><strong>Role</strong></td>
                                <td>
                                    <?php
                                        if($admins['role_id'] == 1){
                                          echo "Administrator";
                                        }elseif ($admins['role_id'] == 2) {
                                          echo "Seller";
                                        }else{
                                          echo "Editor";
                                      }
                                    ?>
                                </td>
                              </tr>
                              <tr>
                                <td><strong>Profile Picture</strong></td>
                                <td>
                                  <img src="<?= base_url('assets/uploads/').$admins['image'];?>" class="img-circle" width="50px;"/>
                                </td>
                              </tr>
                              <tr>
                                <td><strong>Join Date</strong></td>
                                <td><?=$admins['date_created'];?></td>
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
</div>
</div>