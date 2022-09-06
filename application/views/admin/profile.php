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
                 <strong>Profile</strong>
               </a>
             </li>
            </ol>         
        </div>
 </div><!-- /.row -->
<!--cards-->
 <div class="row">
          <div class="card mb-5">
            <div class="col-md-2">
                <img src="<?=base_url('assets/uploads/').$admins['image'];?>" class="img-circle" width="120px;">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">
                        <?=$admins['name'];?>
                    </h5>
                    <p class="card-text">
                        <?=$admins['email'];?>
                    </p>
                    <p class="card-text">
                        <small class="text-muted">Member Since <?= $admins['date_created'];?></small>
                    </p>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">
                        Edit Profile 
                    </h5>
                </div>
            </div>
          </div>
        </div><!-- /.row -->  
    </div><!-- /#wrapper -->
   