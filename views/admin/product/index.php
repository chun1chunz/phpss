
<!DOCTYPE html>
<html>
<head>
<?php 
require_once './views/admin/_share/top_asset.php';
 ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php 
require_once './views/admin/_share/header.php';
 ?>
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
                <table class="table table-bordered border-secondary">
                    <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Product Image</th>
                        <th>Mô tả ngắn</th>
                        <th>Description</th>
                        <th>Sell_price</th>
                        <th>List_price</th>
                        <th>Status</th>
                        <th>
                            <a class="btn btn-xs btn-success" href="<?= $baseUrl . "admin/product-add" ?>">
                                Thêm mới
                            </a>
                        </th>
                    </tr>
                    <?php foreach($products as $item) :?>
                        <tr>
                            <td><?= $item->id ?></td>
                            <td><?= $item->product_name ?></td>
                            <td>
                                <img src="<?= $baseUrl . "public/" . $item->image ?>" width="180" height="180">
                            </td>
                            <td><?= $item->info_1 ?></td>
                            <td><textarea rows="9" cols="50"><?= $item->detail ?></textarea></td>
                            <td><?= $item->sell_price ?></td>
                            <td><?= $item->list_price ?></td>
                            <td><?= $status=($item->status == 0) ? 'Còn Hàng' : 'Hết hàng'; ?></td>
                            <td>
                                <span class="">
                                    <a class="btn btn-xs btn-info" href="<?= $baseUrl . "admin/product-edit?id=" . $item->id?>">Sửa</a>
                                </span>

                                <span>
                                    <a class="btn btn-xs btn-danger btn-remove" href="javascript:;"
                          linkurl="<?= $baseUrl . "admin/product-remove?id=" . $item->id?>">Xóa</a>                        
                                </span>
                            </td>

                        </tr>
                    <?php endforeach; ?>
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
