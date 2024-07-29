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
  
  //$obj = new imgchange();
  //$res = $obj->getImg($name);



 ?>
<!--Search-->

<br>
<div class="row">
        <div class="col-sm-12 col-md-3 cs" style="border-right:1px dotted #cccccc; width:25%;">
</div>
<div class="col-md-9 blog-pull-right">
<table width="100%">
<tr>
  <td width="75%" height="35">
    <table width="100%" border="0" cellspacing="0" cellpadding="0"  class="pagetitle">
    <tr>
      
      
      <td height="38" align="left" valign="top" ><div class="welcome"><strong>Add Image Here</strong></div></td>
      </tr>
    </table></td>
</tr>
<tr>
  <td height="35">
					<form action="addprincipalimgaction.php" method="post">
					  <div class="form-group">
						
						<input type="file" class="form-control" id="Input1"  name="image" required>
					  </div>
					  
					
					
					  <div class="form-group">
						<button type="submit" class="btn btn-primary">ADD</button>
					  </div>
					  
					
					</form>
	 </td>
</tr>

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
