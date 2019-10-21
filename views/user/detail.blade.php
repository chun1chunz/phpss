
<?php 
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
require_once 'commons/util.php';
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
          <p class="mb-5" data-aos="fade-up" data-aos-delay="100">A delicious and tasty food</p>
          <p data-aos="fade-up" data-aos-delay="200"><a href="product" class="btn btn-white btn-outline-white">Trang chủ</a></p>
        </div>
      </div>
    </div>

  </div>
<!-- END slider -->
</div> 
<section class="section bg-light pt-5  bottom-slant-gray">
        <div class="container">
          <div class="row">
                    <div class="col-md-6 mb-6 mb-lg-6 col-lg-6 text-center service-block" data-aos="fade-up" data-aos-delay="">
                        <span><img src="<?= $baseUrl . "public/" . $model->image ?>" width="350" height="350"></span>
                        
                        <h2 class="mb-2 text-primary"><?= $model->product_name ?></h2>
                        <p><?= $model->info_1 ?></p>
                    </div>
                    <div class="col-md-6 text-justify">
                      <p><?= $model->detail ?></p>
                      <p><strong>Số lượng:</strong></p>
                      <input type="number" name="quantitys" value="1" min="1" placeholder="1" id="number" name="number">
                      <input type="hidden" name="id" value="104">
                      <br/><br/>
                      <button class="btn btn-button btn-success" onclick="addCart(<?= $model->id; ?>)">Đặt ngay</button>
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