<?php 
  $adminAssetUrl = "http://localhost/book/views/admin/adminlte/";
?>
<!DOCTYPE html>
<html>
<head>
<?php 
require_once '_share/top_asset.php';
 ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<!--- header --->
<!----------------------------------               ----------------------------------->
<?php 
require_once '_share/header.php';
 ?>
<!----------------------------------               ----------------------------------->
  <!-- Left side column. contains the logo and sidebar -->
<!------------------------------------------------------------>  
<?php 
require_once '_share/lside.php';
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


<!--------------------------------------------------------------------------------------------------------------------->
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?= $count_Product ?></h3>
              <p>Sản phẩm</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?= $baseUrl . "admin/product"?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?= $count_User ?></h3>

              <p>Tài khoản</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?= $baseUrl . "admin/user"?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?= $count_User ?></h3>

              <p>Món đã đặt</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   <!--- footer --->   
<!------------------------------------------------------------------------------------------------------------------------------------>
<?php 
require_once '_share/footer.php';
 ?>
<!----------------------------------               ----------------------------------->
  <!-- Control Sidebar -->
<!----------------------------------               ----------------------------------->
<?php 
require_once '_share/control_sidebar.php';
 ?>
<!----------------------------------               ----------------------------------->

</div>
<!-- ./wrapper -->


<!----------------------------------               ----------------------------------->
<?php 
require_once '_share/bottom_asset.php';
 ?>
<!----------------------------------               ----------------------------------->

<script type="text/javascript" src="<?= $baseUrl ?>public/plugins/jquery/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
  <?php 
  if(isset($_GET['success']) && $_GET['success'] == 'true'){
    ?>
    swal('Đăng nhập thành công!');
  <?php
  }
   ?>
  $('.btn-remove').on('click', function(){
    var removeUrl = $(this).attr('linkurl');
    // var conf = confirm('Bạn có chắc chắn muốn xoá danh mục này không?');
    // if(conf){
    //  window.location.href = removeUrl;
    // }
    swal({
      title: "Cảnh báo",
      text: "Bạn có chắc chắn muốn xoá sản phẩm này không?",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        window.location.href = removeUrl;
      } 
    });
  });
</script>








</body>
</html>
