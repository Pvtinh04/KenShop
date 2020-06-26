<!DOCTYPE html>
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="images/favicon.png">
   <title>Welcome to KenShop</title>
   <!-- <title>Welcome to FlatShop</title> -->

   <link href="css/bootstrap.css" rel="stylesheet">
   <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
   <link href="css/font-awesome.min.css" rel="stylesheet">
   <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen"/>
   <link href="css/sequence-looptheme.css" rel="stylesheet" media="all"/>
   <link href="css/style.css" rel="stylesheet">
   <link href="css/myCSS.css?t=<?php echo filemtime('css/myCSS.css') ?>" rel="stylesheet">


</head>
<body id="home">
   <div class="wrapper">
      <div class="header">
         <div class="container">
            <?php
include_once 'layout/header.php';
?>
         </div>
      </div>
      <div class="clearfix"></div>

      <div class="hom-slider">
         <div class="container">
            <div id="sequence">
               <?php
if (isset($_GET['page'])) {
	$page = $_GET['page'];

} else {
	$page = 'home';
}

if ($page == 'home') {
	include_once 'layout/banner.php';
}

?>
         </div>
        <?php
if ($page == 'home') {
	include_once 'layout/promotion.php';
}

?>

         <div class="clearfix"></div>
         <div class="container_fullwidth">
            <div class="container">
                              <?php

switch ($page) {
case 'home':
	include_once 'mvc/controller/Product_c.php';
	$product = new Product_c();
	$product->product();
	break;
case 'details':
	include_once 'mvc/controller/Product_c.php';
	$product = new Product_c();
	$product->product();
	break;
case 'contact':
	include_once 'mvc/controller/Product_c.php';
	$product = new Product_c();
	$product->product();
	break;
case 'login':
	include_once 'mvc/controller/Product_c.php';
	$product = new Product_c();
	$product->product();
	break;
case 'register':
	include_once 'mvc/controller/Product_c.php';
	$product = new Product_c();
	$product->product();
	break;

default:
	// code...
	break;
}

?>

 <?php
include_once 'layout/brand_logo.php';

?>
         </div>
         <div class="clearfix"></div>

         <!-- START footer -->

            <?php

include_once 'layout/footer.php';
?>

         <!-- END footer -->
      </div>
   </div>
   <!-- Bootstrap core JavaScript==================================================-->
   <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
   <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
   <script type="text/javascript" src="js/bootstrap.min.js"></script>
   <script type="text/javascript" src="js/jquery.sequence-min.js"></script>
   <script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
   <script defer src="js/jquery.flexslider.js"></script>
   <script type="text/javascript" src="js/script.min.js" ></script>
</body>
</html>