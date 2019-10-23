
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
                <form class="col-sm-6" name="myForm" id="signupForm" action="<?= $baseUrl . "admin/user-save-add"?>" method="post" class="">
                    <div class="form-group">
                        <label class="">Name</label>
                        <div class="">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" />
                                <?php if(isset($_GET['nameerr'])):?>
                                    <span class="text-danger err"><?= $_GET['nameerr'] ?></span>
                                <?php endif?>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="" for="email">Email</label>
                        <div class="">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email" />
                                <?php if(isset($_GET['emailerr'])):?>
                                    <span class="text-danger err"><?= $_GET['emailerr'] ?></span>
                                <?php endif?>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="" for="password">Password</label>
                        <div class="">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
                                <?php if(isset($_GET['passworderr'])):?>
                                    <span class="text-danger err"><?= $_GET['passworderr'] ?></span>
                                <?php endif?>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="" for="confirm_password">Confirm password</label>
                        <div class="">
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm password" />
                                <?php if(isset($_GET['cpassworderr'])):?>
                                    <span class="text-danger err"><?= $_GET['cpassworderr'] ?></span>
                                <?php endif?>

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="">
                            <label>Role</label>
                            <select name="role" id="role" class="role form-control">
                                <option value="">---</option>
                                <option value="900">Admin</option>
                                <option value="700">Moderator</option>
                                <option value="1">Memner</option>
                            </select>
                                <?php if(isset($_GET['roleerr'])):?>
                                    <span class="text-danger err"><?= $_GET['roleerr'] ?></span>
                                <?php endif?>

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-4">
                            <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Sign up</button>
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
