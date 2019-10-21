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
                          <form class="form-horizontal" name="myForm" id="signupForm" action="<?= $baseUrl . "postSignup"?>" method="post">
                              <div class="form-group">
                                  <label class="col-md-3 control-lable">Name</label>
                                  <div class="col-md-9">
                                      <input type="text" class="form-control" id="name" name="name" placeholder="Name" />
                                          <?php if(isset($_GET['nameerr'])):?>
                                              <span class="text-danger err"><?= $_GET['nameerr'] ?></span>
                                          <?php endif?>
          
                                  </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-lable"for="address">Address</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="address" name="address" placeholder="Address" />
                                        <?php if(isset($_GET['addresserr'])):?>
                                            <span class="text-danger err"><?= $_GET['addresserr'] ?></span>
                                        <?php endif?>
        
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-lable"for="phone">Phone</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" />
                                        <?php if(isset($_GET['phoneerr'])):?>
                                            <span class="text-danger err"><?= $_GET['phoneerr'] ?></span>
                                        <?php endif?>
        
                                </div>
                            </div>
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
                                  <label class="col-md-3 control-lable" for="confirm_password">Confirm password</label>
                                  <div class="col-md-9">
                                      <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm password" />
                                          <?php if(isset($_GET['cpassworderr'])):?>
                                              <span class="text-danger err"><?= $_GET['cpassworderr'] ?></span>
                                          <?php endif?>
          
                                  </div>
                              </div>
          
                              <div class="form-group">
                                  <div class="col-md-9">
                                      <label>Role</label>
                                      <select name="role" id="role" class="role form-control">
                                          <option value="">---</option>
                                          <option value="5">User</option>
                                          <option value="1">Admin</option>
                                          <option value="2">Moderator</option>
                                          <option value="3">Memner</option>
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
</div>

<?php include_once 'share/js.php'; ?>