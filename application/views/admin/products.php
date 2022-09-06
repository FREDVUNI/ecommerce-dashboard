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
          #Display  messages?>
           <div class="main-col">          
        <div class="panel panel-default">
        <div class="panel-heading">
          <i class="fa fa-table"></i> PRODUCTS <button type="button" name="add" id="add_button" title="Add category" data-toggle="modal" data-target="#addproduct" class="btn btn-info btn-xs pull-right"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add</button>
        </div>
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                    <th>#</th>
                    <th>Product</th>
                    <th>Price (UGX)</th>
                    <th>Details</th>
                    <th></th>
                    <th></th>
                    <th></th>
                  </tr>

              </thead>
              <tfoot>
                <tr>
                    <th>#</th>
                    <th>Product</th>
                    <th>Price (UGX)</th>
                    <th>Details</th>
                    <th></th>
                    <th></th>
                    <th></th>
                  </tr>
              </tfoot>
              <tbody>
                <?php
                //$get_products=$pd->get_products();
                //$i=1;
                //if($get_products)
                //{
                 // while($value = $get_products->fetch_assoc()):  ?>
                    <tr>
                      <td><?php// echo $i++; ?></td>
                      <td><?php //echo $value['product']; ?></td>
                      <td><?php //echo number_format($value['price']); ?></td>
                      <td><?php //echo $fm->textShorten($value['body'],40); ?></td>
                      <td class="text-center">
                        <a href="#view<?php //echo $value['product_id'];?>" data-toggle="modal" title="view product" style="text-decoration: none;">
                          <button type='button' class='btn btn-warning btn-sm'>
                            <span class='fa fa-eye' aria-hidden='true'></span>
                          </button>
                        </a>
                      </td>
                      <td class="text-center">
                        <a href="#edit<?php// echo $value['product_id'];?>" data-toggle="modal" title="edit product" style="text-decoration: none;">
                          <button type='button' class='btn btn-primary btn-sm'>
                            <span class='fa fa-pencil' aria-hidden='true'></span>
                          </button>
                        </a>
                      </td>
                      <td class="text-center">
                         <a href="#delete<?php //echo $value['product_id'];?>" data-toggle="modal" title="delete product" style="text-decoration: none;">
                          <button type='button' class='btn btn-danger btn-sm'>
                            <span class='fa fa-trash' aria-hidden='true'></span>
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
<!----nodals----->

<div class="modal fade" id="addproduct" role="dialog">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title"><i class="fa fa-plus-circle"></i> Add Product</h4>
                  </div>
                  <div class="modal-body">
                    <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                    <input type="text" name="product" class="form-control" placeholder="product">
                  </div>
                   <div class="form-group">
                    <select class="form-control" id="select" name="catid">
                    <option>Choose a Category</option>
                    <option value=""></option>
                    </select>
                  </div>
                  <div class="form-group">
                    <input type="text" name="price" class="form-control" placeholder="product price">
                  </div>
                  <div class="form-group">
                    <input type="text" name="modal" class="form-control" placeholder="product modal">
                  </div>
                  <div class="form-group">
                    <input type="text" name="keywords" class="form-control" placeholder="product keywords">
                  </div>
                  <div class="form-group">
                    <input type="file" name="image" class="form-control" placeholder="product image">
                  </div>
                  <div class="form-group">
                    <textarea name="description" rows="6" class="form-control" placeholder="Description"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" name="add_product" id="add_product" value="SAVE" class="btn btn-primary" />
                  </div>
                  </form>
                  </div>
              </div>
          </div>
      </div>