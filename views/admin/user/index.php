
<!DOCTYPE html>
<html>
<head>
<?php 
require_once './views/admin/_share/top_asset.php';
 ?>
 <style type="text/css">

 </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php 
require_once './views/admin/_share/lside.php';
 ?>
 <?php 
require_once './views/admin/_share/header.php';
 ?>
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
    <table class="table table-bordered border-secondary">
        <tr>
            <th>ID</th>

            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>
                <a class="btn btn-xs btn-success" href="">
                    Thêm mới
                </a>
            </th>
        </tr>
        <?php foreach($users as $item) :?>
            <tr>
                <td><?= $item->id ?></td>
                <td><?= $item->name ?></td>
                <td><?= $item->email ?></td>
                <td>
                    <?php 
                        if ($item->role == 1) {
                            echo "admin";
                        } elseif ($item->role == 2) {
                            echo "mod";
                        } elseif ($item->role == 3) {
                            echo "member";
                        } else {
                          echo "user";
                      }
                    ?>                    
                </td>
                <td>
                    <span class="">
                        <a class="btn btn-xs btn-info" href="<?= $baseUrl . "admin/user-edit?id=" . $item->id?>">Sửa</a>
                    </span>
                          <?php         
                          if ($item->id == 1) {
                          $disable = "isDisabled";
        } ?>
                    <span>
                        <a class="btn btn-xs btn-danger btn-remove <?= $disable ?>" href="javascript:;"
                          linkurl="<?= $baseUrl . "admin/user-remove?id=" . $item->id?>">Xóa</a>                        
                    </span>
                </td>

            </tr>
        <?php endforeach; ?>
    </table>
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
<!--------------------------------------------------------------------------------------------------------------------->
  <!-- /.content-wrapper -->
   <!--- footer --->   
<!----------------------------------               ----------------------------------->
<?php 
require_once './views/admin/_share/footer.php';
 ?>
<!----------------------------------               ----------------------------------->
  <!-- Control Sidebar -->
<!----------------------------------               ----------------------------------->
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
