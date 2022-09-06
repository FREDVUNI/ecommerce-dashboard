<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>
        <?=$title;?>
    </title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/')?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/')?>datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/')?>css/style.css" rel="stylesheet">
  <!-- Add custom CSS here -->
    <link href="<?php echo base_url('assets/')?>css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/')?>font-awesome/css/font-awesome.min.css">
  </head>
  <body>
   <div id="wrapper">
  <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">EARL ADMIN</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
          <!--Query menu-->
          <?php
                $role_id =$this->session->userdata('role_id');
                /*$query ="SELECT `user_menu`.`id`,`menu` FROM `user_menu`
                 JOIN `access_menu` ON `user_menu`.`id` =`access_menu`.`menu_id` 
                 WHERE `access_menu`.`role_id`= $role_id
                 ORDER BY `access_menu`.`menu_id` ASC";
                 $menu = $this->db->query($query)->result_array();*/


          ?>
         
            <li><a href="<?= base_url('admin/index');?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <?php// if($role_id == 1) :?>
            <li><a href="<?= base_url('admin/services');?>"><i class="fa fa-rss"></i>  Services</a></li>
            <li><a href="<?= base_url('admin/categories');?>"><i class="fa fa-tags"></i> Categories</a></li>
            <li><a href="<?= base_url('admin/brands');?>"><i class="fa fa-gift"></i>  Brands</a></li>
            <li><a href="<?= base_url('admin/products');?>"><i class="fa fa-gift"></i>  Products</a></li>
            <?php //endif;?>
            <li><a href="<?= base_url('admin/orders');?>"><i class="fa fa-link"></i>  Orders</a></li>
            <?php //if($role_id == 1) :?>
            <li><a href="<?= base_url('admin/messages');?>"><i class="fa fa-trophy"></i> Messages</a></li>
            <li><a href="<?= base_url('admin/subscriptions');?>"><i class="fa fa-bar-chart-o"></i> Subscriptions</a></li>
            <li><a href="<?= base_url('admin/customers');?>"><i class="fa fa-users"></i> Clients</a></li>
            <li><a href="<?= base_url('admin/seller');?>"><i class="fa fa-money"></i> Sellers</a></li>
            <hr/>
            <li><a href="<?= base_url('admin/users');?>">
              <img src="<?=base_url('assets/uploads/').$admins['image'];?>" class="img-circle" width="25px;">  Admins</a></li>
            <?php //endif;?>
          </ul>
         <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown messages-dropdown">
              <a href="messages.php"><i class="fa fa-envelope"></i> Messages <span class="badge">1</span></a>
            </li>
            <li class="dropdown alerts-dropdown">
              <a href="order.php"><i class="fa fa-bell"></i> Orders <span class="badge">5</span></a>
            </li>
            <li class="dropdown user-dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?=base_url('assets/uploads/').$admins['image'];?>" class="img-circle" width="25px;"> <?= $admins['name']; ?>  <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              <li><a href="<?= base_url('admin/profile');?>"><i class="fa fa-user"></i>
               <strong>My Profile</strong>
                </a>
              </li>
              <!--login/logout area starts-->
            <li class="divider"></li>
            <li><a href="<?php echo base_url('admin-login');?>">
              <i class="fa fa-power-off"></i> 
              <strong>Sign Out</strong>
               </a>
             </li>
          </ul>
        </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>