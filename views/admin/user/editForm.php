
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

<!----------------------------------               ----------------------------------->
  <!-- Left side column. contains the logo and sidebar -->
<!------------------------------------------------------------>  

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
                <form name="myForm" id="signupForm" action="<?= $baseUrl . "admin/user-save-edit"?>" method="post" class="col-sm-6">
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?= $user->id ?>">
                        <label class="" for="name">Name</label>
                        <div class="">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?= $user->name ?>" />
                                <?php if(isset($_GET['nameerr'])):?>
                                    <span class="text-danger err"><?= $_GET['nameerr'] ?></span>
                                <?php endif?>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="" for="email">Email</label>
                        <div class="">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= $user->email ?>" />
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
                            <?php
                            $select = "";
                            foreach ($users as $u){
                                if ($u->role === $user->role) {
                                   $select = "selected";
                                }
                            }
                             ?>
                            <select name="role" id="role" class="role form-control">
                                <option value="">---</option>
                                <option <?= $select ?> value="900">Admin</option>
                                <option <?= $select ?> value="700">Moderator</option>
                                <option <?= $select ?> value="1">Member</option>
                            </select>

                                <?php if(isset($_GET['roleerr'])):?>
                                    <span class="text-danger err"><?= $_GET['roleerr'] ?></span>
                                <?php endif?>

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-4">
                            <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Edit</button>
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
