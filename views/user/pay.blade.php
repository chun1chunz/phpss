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
                            <h3>Xin chào: <?php echo $user->name?></h3>
                  <!----------------------------------------                                     -------------------------------------------->   
                          <form class="form-horizontal" name="myForm" id="formPay" action="<?= $baseUrl . "postPay"?>" method="post">
                              <div class="form-group">
                                  <label class="col-md-3 control-lable">Tên thành viên</label>
                                  <div class="col-md-9">
                                      <input type="text" class="form-control" id="name" name="name" placeholder="Name" 
                                       value="<?php echo $user->name?>"/>
                                         
                                  </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-lable"for="address">Address</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="address" name="address" placeholder="Address" 
                                    value="<?php echo $user->address?>"/>
                                     
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-lable"for="phone">Phone</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" 
                                    value="<?php echo $user->phone?>"/>
                                       
                                </div>
                            </div>
                              <div class="form-group">
                                  <label class="col-md-3 control-lable" for="email">Email</label>
                                  <div class="col-md-9">
                                      <input type="text" class="form-control" id="email" name="email" placeholder="Email" 
                                      value="<?php echo $user->email?>"/>
                                        
                                  </div>
                              </div>
                              <div class="form-group">
                                    <label class="col-md-3 control-lable" for="money">Số tiền</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="money" name="money" 
                                        value="<?php echo number_format($_SESSION['total'])?> đ"/>
                                          
                                    </div>
                                </div>
                              <div class="form-group">
                                  <label class="col-md-3 control-lable" for="note">Hình thức thanh toán</label>
                                  <div class="col-md-9">
                                      <input type="text" class="form-control" id="note" name="note" />
                                        
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="col-sm-9 col-sm-offset-4">
                                      <button type="submit" class="btn btn-primary" name="" value="Sign up">Xác nhận</button>
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