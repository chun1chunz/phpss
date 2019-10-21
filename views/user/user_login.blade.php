<?php 
require_once 'commons/util.php';
?>
<?php include_once 'share/css.php'; ?>
<div class="col-md-9 bor">
        <section class="content">
                <div class="row">
                  <div class="col-md-12">
                    <div class="box">
                        <div class="box-body">
                  <!----------------------------------------                                     -------------------------------------------->   
                          <form class="form-horizontal" name="myForm" id="loginForm" action="<?= $baseUrl . "postLogin"?>" method="post">
                              <div class="form-group">
                                  <label class="col-md-3 control-lable" for="email">Email</label>
                                  <div class="col-md-9">
                                      <input type="text" class="form-control" id="email" name="email" placeholder="Email" />
                                          <?php if(isset($_GET['emailerr'])):?>
                                              <span class="text-danger err"><?= $_GET['emailerr'] ?></span>
                                          <?php endif?>
          
                                  </div>
                              </div>
          
                              <div class="form-group">
                                  <label class="col-md-3 control-lable" for="password">Password</label>
                                  <div class="col-md-9">
                                      <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
                                          <?php if(isset($_GET['passworderr'])):?>
                                              <span class="text-danger err"><?= $_GET['passworderr'] ?></span>
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
</div>

<?php include_once 'share/js.php'; ?>