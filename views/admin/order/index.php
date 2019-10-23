
<!DOCTYPE html>
<html>
<head>
<?php 
$baseUrl = "http://localhost/book/";
$userUrl = "http://localhost/book/user/";
$adminUrl = "http://localhost/book/views/admin";
$adminAssetUrl = "http://localhost/book/views/admin/adminlte/";
require_once './views/admin/_share/top_asset.php';

 ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<!--- header --->
<!----------------------------------               ----------------------------------->

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



<!--------------------------------------------------------------------------------------------------------------------->


<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
              <div class="box-body">
              <table class="table-shopping-cart table-bordered border-secondary">
						<tr class="table-head">
							<th class="column-1">ID</th>
							<th class="column-2">Tên sản phẩm</th>
							<th class="column-3">Giá gốc</th>
							<th class="column-4">Giá khuyến mãi</th>
							<th class="column-5">Số lượng</th>
							<th class="column-6">Thành tiền</th>
							<th class="column-7">Xóa</th>
						</tr>
                        <?php foreach ($order as $item): ?>
                            <tr>
                                <td><?= $item->id?></td>
                            </tr>
                        <?php endforeach ?>
                </table>                
              </div>
              <!-- /.box-body -->
          </div>
        </div>
      </div>
    </section>

    <!-- /.content -->
<!--------------------------------------------------------------------------------------------------------------------->


  </div>
  <!-- /.content-wrapper -->
<!------------------------------------------------------------------------------------------------------------------------------------>

<!----------------------------------               ----------------------------------->

</div>
<!-- ./wrapper -->


<!----------------------------------               ----------------------------------->
<?php 
require_once './views/admin/_share/bottom_asset.php';
 ?>
<!----------------------------------               ----------------------------------->



<script type="text/javascript" src="<?= $baseUrl ?>public/plugins/jquery/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
  <?php 
  if(isset($_GET['success']) && $_GET['success'] == 'true'){
    ?>
    swal('Thêm Sản phẩm thành công!');
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
