<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>Edua | Shop</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/edua-icons.css">
<link rel="stylesheet" type="text/css" href="css/animate.min.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
<link rel="stylesheet" type="text/css" href="css/settings.css">
<link rel="stylesheet" type="text/css" href="css/bootsnav.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/loader.css">

<link rel="icon" href="images/favicon.png">

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
<a href="#" class="scrollToTop"><i class="fa fa-angle-up"></i></a>
<!--Loader-->
<?php include "loader.php"; ?>
<!--Header-->
<?php include "header.php"; ?>

<!--Search-->
<div id="search">
  <button type="button" class="close">×</button>
  <form>
    <input type="search" value="" placeholder="Search here...."  required/>
    <button type="submit" class="btn btn_common blue">Search</button>
  </form>
</div>


<!--Page Header-->
<section class="page_header padding-top">
  <div class="container">
    <div class="row">
      <div class="col-md-12 page-content">
        <h1>Shop</h1>
        <p>We offer the most complete house renovating services in the country</p>
        <div class="page_nav">
      <span>You are here:</span> <a href="index.php">Home</a> <span><i class="fa fa-angle-double-right"></i>Shop</span>
      </div>
      </div>
    </div>
  </div>
</section>
<!--Page Header-->



<!--SERVICE SECTION-->
<section id="shop" class="padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 cart_table wow fadeInUp" data-wow-delay="300ms">
      <div class="table-responsive">
        <table class="table table-bordered border-radius">
          <thead>
            <tr>
              <th>Product</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Total</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <img class="shopping-product" src="images/cart-item1.jpg" alt="your product">
                <div class="product-name">
                  <h4>Development Studies</h4>
                  <p>We offer the most complete in the country</p>
                </div>
              </td>
              <td><h4 class="price_product text-center">$130.00</h4></td>
              <td>
                <div class="quote text-center">
                  <input type="text" placeholder="1" class="border-radius quote">
                </div>
              </td>
              <td><h4 class="singl-price text-center">$136.00</h4></td>
              <td class="text-center"><a class="btn-close" href="#."><i class="icon-cross2"></i></a></td>
            </tr>
            <tr>
              <td>
                <img class="shopping-product" src="images/cart-item2.jpg" alt="your product">
                <div class="product-name">
                  <h4>Development Studies</h4>
                  <p>We offer the most complete in the country</p>
                </div>
              </td>
              <td><h4 class="price_product text-center">$130.00</h4></td>
              <td>
                <div class="quote text-center">
                  <input type="text" placeholder="1" class="border-radius quote">
                </div>
              </td>
              <td><h4 class="singl-price text-center">$136.00</h4></td>
              <td class="text-center"><a class="btn-close" href="#."><i class="icon-cross2"></i></a></td>
            </tr>
          </tbody>
        </table>
        </div>
        <div class="apply_coupon clearfix">
          <div class="row">
            <div class="col-md-6 col-sm-6 coupon">
              <form class="form-inline">
                <div  class="form-group">
                  <input type="text" placeholder="Coupon Code">
                </div>
                <input type="submit" value="Apply Coupon" class="btn_common blue border_radius">
              </form>
            </div>
            <div class="col-md-6 col-sm-6 coupon text-right">
              <a href="#." class="btn_common blue border_radius">update cart</a>
              <a href="#." class="btn_common yellow border_radius">checkout</a>
            </div>
          </div>
        </div>   
      </div>
  </div>
    <div class="row">
      <div class="col-md-6 wow fadeInLeft" data-wow-delay="300ms">
        <div class="border-radius totals margin_tophalf">
        <h3 class="bottom25">Calculate Shipping:</h3>
        <form class="total_form">
        <div class="form-group">
          <label class="select">
            <select name="country" id="country">
              <option>USA</option>
              <option>Canada</option>
              <option>Chilli</option>
              <option>France</option>
            </select>
          </label>
        </div>
        <div class="form-group">
          <label class="select">
            <select name="state" id="state">
              <option>State / Country</option>
              <option>Canada</option>
              <option>Chilli</option>
              <option>France</option>
            </select>
          </label>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Postal Code / Zip" required>
        </div>
        <a href="#."  class="btn_common yellow border_radius">Calculate</a>
      </form>
      </div>
      </div>
      <div class="col-md-6 wow fadeInRight" data-wow-delay="300ms">
        <div class="border-radius totals margin_tophalf">
        <h3 class="bottom20">Cart Totals:</h3>
        <table class="table table-responsive heading_space">
          <tbody>
          <tr><td>Cart Subtotal:</td> <td class="yellow_t text-right"><strong>$272.00</strong></td></tr>
          <tr><td>Shipping:</td> <td class="yellow_t text-right"><strong>Free Shipping</strong></td></tr>
          <tr><td>Order Total:</td> <td class="text-right"><strong>$272.00</strong></td></tr>
          </tbody>
        </table>
      </div>
      </div>
    </div>
 </div>
</section>



<!--FOOTER-->
<?php 
include "footer.php";
?>
<!--FOOTER ends-->
<div class="copyright">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <p>Copyright &copy; 2018 <a href="#.">Helping Hands</a>. all rights reserved.</p>
      </div>
    </div>
  </div>
</div>
<!--FOOTER ends-->

<script src="js/jquery-2.2.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootsnav.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/jquery-countTo.js"></script>
<script src="js/jquery.parallax-1.1.3.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.cubeportfolio.min.js"></script>
<script src="js/jquery.themepunch.tools.min.js"></script>
<script src="js/jquery.themepunch.revolution.min.js"></script>
<script src="js/revolution.extension.layeranimation.min.js"></script>
<script src="js/revolution.extension.navigation.min.js"></script>
<script src="js/revolution.extension.parallax.min.js"></script>
<script src="js/revolution.extension.slideanims.min.js"></script>
<script src="js/revolution.extension.video.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/functions.js"></script>


</body>
</html>
