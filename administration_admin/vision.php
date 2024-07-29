<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>JNTUA CEA</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/edua-icons.css">
<link rel="stylesheet" type="text/css" href="css/animate.min.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
<link rel="stylesheet" type="text/css" href="css/cubeportfolio.min.css">
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
<?php include "header.php";

require_once("functions.class.php");
  $obj = new vision();
  $res = $obj->getVision();
  $obj1 = new mission();
  $res1 = $obj1->getMission();
  $obj2 = new roadmap();
  $res2 = $obj2->getRoadmapentry();



 ?>
<!--Search-->

<br>
<div class="row">
        <div class="col-sm-12 col-md-3 cs" style="border-right:1px dotted #cccccc; width:25%;">
          <!-- widget categories -->
              <?php include "sidebar1.php";?>
</div>
<div class="col-md-9 blog-pull-right">
<div class="grid-col grid-col-9" style="min-height:450px;">
        <main>
          <section class="clear-fix"><table align="center" border="0" cellpadding="0" cellspacing="0"  width="98%">
</table>
<div class="span13" id="content">
<h2 class="head">Vision &amp; Mission</h2><br>
  <div class="body">

<table style="width: 100%;" border="0" cellpadding="0" cellspacing="0">
          <tbody>
            <tr>
              <td>
                <table border="0" cellpadding="1" cellspacing="1" style="text-align:justify;" width="100%">
  <tbody>
    <tr>
      <td align="left" colspan="2" height="30" valign="top">
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
          <tbody>
            <tr>
              <td align="left" valign="top">
                &nbsp;</td>
              <td align="left" valign="top">
                <p>
                  <strong>Vision : </strong></p>
                  <?php
                  for($i=0;$i<1;$i++){
                    ?>
                <p>
                  <?php echo $res[$i]['statement']; ?>.</p>
                   <?php
                    }
                  
                 ?>
                  <a href="addvision.php"><button type="button" class="btn btn-primary">UPDATE VISION</button></a><br /><br>
               
                <p>
                  <strong>Mission :</strong></p>
                
                <ul class="lists">
                <?php
                  for($i=0;$i<$res2['ival'];$i++){
                    ?>
                <p>
                  <?php echo "<li>&bull;&nbsp;".$res2[$i]['statement'].".</li>"; ?></p>
                   <?php
                    }
                    ?>
                  </ul>
                <a href="addroadmap.php"><button type="button" class="btn btn-primary">UPDATE MISSION</button></a><br />
              </td>
            </tr>
          </tbody>
        </table><br>
      </td>
    </tr>
  </tbody>
</table>              </td>
            </tr>
            
          </tbody>
        </table>
 </div>
</div>

<!--<textarea type="text"  name="txtarea" rows="5" style="font-family: Arial;font-size: 12pt;width:100%;">
</textarea> -->
<!--FOOTER-->

<!--FOOTER ends-->
<div class="copyright">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <p>Copyright &copy; <a href="policy.php">JNTUACEA</a>. all rights reserved.</p>
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
