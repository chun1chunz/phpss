
<?php 
require_once 'commons/util.php';
$sum = 0;
?>
<?php include_once 'share/css.php'; ?>
<?php if (isset($_SESSION['success'])): ?> 
<div class="alert  alert-success">
  <strong style="color:brown"> Success!</strong>
  <?php echo $_SESSION['success']; unset($_SESSION['success'])?>
</div>
<?php endif?>
<?php if (isset($_SESSION['update'])): ?> 
<div class="alert  alert-success">
  <strong style="color:brown"> Update!</strong>
  <?php echo $_SESSION['update']; unset($_SESSION['update'])?>
</div>
<?php endif?>
<section class="col-md-12">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
              <div class="form-group col-md-12 ">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">STT</th>
                      <th scope="col">Tên Sản Phẩm</th>
                      <th scope="col">Ảnh Sản Phẩm</th>
                      <th scope="col">Số lượnng</th>
                      <th scope="col">Giá Món</th>
                      <th scope="col">Tổng tiền</th>
                      <th scope="col">Xoá || Sửa</th>
                    </tr>
                  </thead>
                  <tbody id="tbody">
                    <?php  $stt=1;  foreach ($_SESSION["cart"] as $key => $value): ?>
                        <tr class="tr">
                          <td><?php echo $stt?></td>
                          <td><?php echo $value['product_name']?></td>
                          <td><span><img src="<?= $baseUrl . "public/" . $value['image'] ?>" style="height:100px; width:100px;"></span>
                          </td>
                          <td><input type="number" name="number" id="number_<?php echo $key?>" class="form-control" value="<?php echo $value['number']?>" width="50px" height="50" min="0"></td>
                          <td><?php echo number_format($value['sell_price'])?> đ</td>
                          <td><?php echo number_format($value['sell_price']*$value['number'])?> đ</td>
                          <td>
                            <a href="remove?key=<?php echo $key?>" class="btn btn-xs btn-danger"><i class="fa fa-remove"></i>Remove</a>
                            
                            <button class="btn btn-button btn-info" onclick="updatecart(<?= $key ?>)">Update</button>
                          </td>
                        </tr>
                        <?php $sum+= $value['sell_price']*$value['number']; $_SESSION['tong']=$sum ?>
                    <?php $stt++; endforeach ?>
                  </tbody>
                </table>
                <div class="col-md-5 pull-right">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <h3>Thông tin đơn hàng:</h3>
                    </li> 
                    <li class="list-group-item">
                      Đơn giá: 
                      <span class="badge"><?php if(!isset($_SESSION['tong'])){echo 0;}else{
                        echo number_format($_SESSION['tong']);
                      }
                      ?> đ</span>
                    </li>
                    <li class="list-group-item">
                        Thuế VAT
                      <span class="badge"> 10%</span>
                      
                    </li>
                    <li class="list-group-item">
                        Tổng tiền thanh toán: 
                      <span class="badge"><?php if(!isset($_SESSION['tong'])){echo 0;}else{
                        $_SESSION['total']= $_SESSION['tong']*110/100; 
                      echo number_format($_SESSION['total']);} ?> đ</span>
                    </li>
                    <li class="list-group-item">
                        <a href="product" class="btn btn-success">Tiếp tục mua hàng</a> 
                        <a href="pay" class="btn btn-danger">Thanh toán</a> 
                    </li>
                  </ul>
                </div>
              </div>
        </div>
      </div>
    </div>
</section>



<?php include_once 'share/js.php'; ?>
