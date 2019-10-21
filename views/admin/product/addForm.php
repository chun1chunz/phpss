
<!DOCTYPE html>
<html>
<head>
<?php 
require_once './views/admin/_share/top_asset.php';
 ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<!--- header --->
<!----------------------------------               ----------------------------------->
<?php 
require_once './views/admin/_share/header.php';
 ?>
<!----------------------------------               ----------------------------------->
  <!-- Left side column. contains the logo and sidebar -->
<!------------------------------------------------------------>  
<?php 
require_once './views/admin/_share/lside.php';
 ?>
 <!---------------------------------------------------------------->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>



<!------------------------------------------------------------------------------------>


<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
              <div class="box-body">
        <!----------------------------------------                                     -------------------------------------------->   
        <form name="myForm" id="signupForm" action="<?= $baseUrl . "admin/product-save-add"?>" method="post" enctype="multipart/form-data" >
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Tên món ăn</label> 
                        <input type="text" name="product_name" id="" class="form-control">

                        <?php if(isset($_GET['nameerr'])):?>
                            <span class="text-danger err"><?= $_GET['nameerr'] ?></span>
                        <?php endif?>

                    </div>
                    <div class="form-group">
                        <label for="">Giá sale</label>
                        <input type="number" name="sell_price" id="" class="form-control">
                        <?php if(isset($_GET['sell_priceerr'])):?>
                            <span class="text-danger err"><?= $_GET['sell_priceerr'] ?></span>
                        <?php endif?>

                    </div>
                    <div class="form-group">
                        <label for="">Giá niêm yết</label>
                        <input type="number" name="list_price" id="" class="form-control">
                        <?php if(isset($_GET['list_priceerr'])):?>
                            <span class="text-danger err"><?= $_GET['list_priceerr'] ?></span>
                        <?php endif?>

                    </div>
                    <div class="form-group">
                        <label>Trạng thái</label> &nbsp;
                        <input type="radio" name="status" value="0" checked=""> Hết hàng &nbsp;
                        <input type="radio" name="status" value="1"> Còn hàng 
                        <?php if(isset($_GET['statuserr'])):?>
                            <span class="text-danger err"><?= $_GET['statuserr'] ?></span>
                        <?php endif?>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="img-preview text-center">
                        <img width="300px" src="<?= $baseUrl ?>public/images/default-img.png" alt="" class="img-fluid">
                    </div>
                    <div class="form-group">
                        <label for="">Ảnh món ăn</label>
                        <input type="file" name="image" id="" class="form-control">
                        <?php if(isset($_GET['imageerr'])):?>
                            <span class="text-danger err"><?= $_GET['imageerr'] ?></span>
                        <?php endif?>

                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="">Mô tả ngắn</label>
                        <textarea name="info_1" id="" rows="2" class="form-control"></textarea>
                        <?php if(isset($_GET['info_1err'])):?>
                            <span class="text-danger err"><?= $_GET['info_1err'] ?></span>
                        <?php endif?>

                    </div>
                    <div class="form-group">
                        <label for="">Chi tiết</label>
                        <textarea name="detail" id="" rows="5" class="form-control"></textarea>
                        <?php if(isset($_GET['detailerr'])):?>
                            <span class="text-danger err"><?= $_GET['detailerr'] ?></span>
                        <?php endif?>

                    </div>
                </div>
                <div class="justify-content-end col-sm-12">
                    <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
                    <a href="<?= $baseUrl ."admin/product" ?>" class="btn btn-sm btn-danger">Hủy</a>
                </div>
            </div>
        </form>
   
        <!----------------------------------------                                     -------------------------------------------->                 
              </div>
              <!-- /.box-body -->
          </div>
        </div>
      </div>
    </section>

    <!-- /.content -->
<!---------------------------------------------------------------------------------------->


  </div>
  <!-- /.content-wrapper -->

<!------------------------------------------------------------------------------------------------------------------------------------>
<?php 
require_once './views/admin/_share/footer.php';
 ?>
<!----------------------------------               ----------------------------------->
  <!-- Control Sidebar -->
<!----------------------------------               ----------------------------------->
<?php 
require_once './views/admin/_share/control_sidebar.php';
 ?>
<!----------------------------------               ----------------------------------->

</div>
<!-- ./wrapper -->


<!----------------------------------               ----------------------------------->
<?php 
require_once './views/admin/_share/bottom_asset.php';
 ?>
<!----------------------------------               ----------------------------------->


</body>
</html>
