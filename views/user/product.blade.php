
<?php 
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
  require_once 'commons/util.php';
  $pageNumber = isset($_GET['page']) == true ? $_GET['page'] : 1;
// dd($pageNumber);
// lay pageSize
$pageSize = 10;
// lay offset
$offset = ($pageNumber-1)*$pageSize;
$totalPage=1;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Gourmet &mdash; Colorlib Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php include_once 'share/css.php'; ?>
  </head>
  <body>

    <!-- END header -->
    
    <div class="slider-wrap">
      <div class="slider-item" style="background-image: url('././public/img/hero_1.jpg');">
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 ">
                
              <h1 data-aos="fade-up">About Gourmet</h1>
              <p class="mb-5 float-justify" data-aos="fade-up" data-aos-delay="100">A delicious and tasty food</p>
             
              <p data-aos="fade-up"><a href="cart" class="btn btn-white btn-outline-white float-right">Những món đã mua</a></p>
              <p data-aos="fade-up"><a href="signup" class="btn btn-white btn-outline-white float-left">Đăng kí</a></p>
              <p data-aos="fade-up"><a href="user_login" class="btn btn-white btn-outline-white float-left">Đăng Nhập</a></p>
            </div>
          </div>
          
        </div>
       
      </div>
    <!-- END slider -->
    </div> 
    <section class="section bg-light pt-5  bottom-slant-gray">
            <div class="container">
              <div class="row">
                    <?php foreach($model as $item) :?>
                        <div class="col-md-6 mb-4 mb-lg-5 col-lg-3 text-center service-block" data-aos="fade-up" data-aos-delay="">
                            <span><img src="<?= $baseUrl . "public/" . $item->image ?>" width="250" height="250"></span>
                            <br />
                            <br />
                            <a href="detail?id=<?= $item->id ?>"><h3 class="mb-2 text-primary"><?= $item->product_name ?></h3></a>
                            <p><?= $item->info_1 ?></p>
                        </div>
                    <?php endforeach; ?>
              </div>
              <div class="box-footer clearfix">
                <div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                      <?php 
                      // PHẦN HIỂN THỊ PHÂN TRANG
                      // BƯỚC 7: HIỂN THỊ PHÂN TRANG
            
                      // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
                      if ($current_page > 1 && $total_page > 1){
                          echo '<li class="page-item"><a class="page-link" href="product?page='.($current_page-1).'">Previous</a></li>';
                      }
            
                      // Lặp khoảng giữa
                      for ($i = 1; $i <= $total_page; $i++){
                          // Nếu là trang hiện tại thì hiển thị thẻ span
                          // ngược lại hiển thị thẻ a
                          if ($i == $current_page){
                              echo '<li class="page-item"><a class="page-link" href="product?page='.$i.'">'.$i.'</a></li>';
                          }
                          else{
                              echo '<li class="page-item"><a class="page-link" href="product?page='.$i.'">'.$i.'</a></li>';
                          }
                      }
            
                      // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
                      if ($current_page < $total_page && $total_page > 1){
                          echo '<li class="page-item"><a class="page-link" href="product?page='.($current_page+1).'">Next</a></li>';
                      }
                      ?>
                    </ul>
                  </nav>
               </div>
              </div>
            </div>
    </section>
    <footer class="site-footer" role="contentinfo">
      
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4 mb-5">
            <h3>About Us</h3>
            <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus et dolor blanditiis consequuntur ex voluptates perspiciatis omnis unde minima expedita.</p>
            <ul class="list-unstyled footer-link d-flex footer-social">
              <li><a href="#" class="p-2"><span class="fa fa-twitter"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-facebook"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-linkedin"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-instagram"></span></a></li>
            </ul>

          </div>
          <div class="col-md-5 mb-5">
            <div class="mb-5">
              <h3>Opening Hours</h3>
              <p><strong class="d-block font-weight-normal text-black">Sunday-Thursday</strong> 5AM - 10PM</p>
            </div>
            <div>
              <h3>Contact Info</h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block">
                  <span class="d-block text-black">Address:</span>
                  <span>34 Street Name, City Name Here, United States</span></li>
                <li class="d-block"><span class="d-block text-black">Phone:</span><span>+1 242 4942 290</span></li>
                <li class="d-block"><span class="d-block text-black">Email:</span><span>info@yourdomain.com</span></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 mb-5">
            <h3>Quick Links</h3>
            <ul class="list-unstyled footer-link">
              <li><a href="#">About</a></li>
              <li><a href="#">Terms of Use</a></li>
              <li><a href="#">Disclaimers</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
          <div class="col-md-3">
          
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-md-center text-left">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

            </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#cf1d16"/></svg></div>

    <?php include_once 'share/js.php'; ?>
    
  </body>
</html>