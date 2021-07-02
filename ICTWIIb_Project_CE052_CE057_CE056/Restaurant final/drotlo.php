<?php
include("connection.php");
error_reporting(0);

$query="SELECT * FROM DROTLO";
$data=mysqli_query($conn,$query);
$rows=mysqli_num_rows($data);

?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DROTLO - Food and Drink</title>

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet'
    type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Damion' rel='stylesheet' type='text/css'>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/templatemo-style.css" rel="stylesheet">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />


</head>

<body>
  <!-- Preloader -->
  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>
  <!-- End Preloader -->
  <div class="tm-top-header">
    <div class="container">
      <div class="row">
        <div class="tm-top-header-inner">
          <div class="tm-logo-container">
            <img src="img/logo.png" alt="Logo" class="tm-site-logo">
            <h1 class="tm-site-name tm-handwriting-font">Review.com</h1>
          </div>
          <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
          </div>
          <nav class="tm-nav">
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="#">About Us</a></li>
              
              <li><a href="contact.php">Contact</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <section class="tm-welcome-section">
    <div class="container tm-position-relative">
      <div class="tm-lights-container">
        <img src="img/light.png" alt="Light" class="light light-1">
        <img src="img/light.png" alt="Light" class="light light-2">
        <img src="img/light.png" alt="Light" class="light light-3">
      </div>
      <div class="row tm-welcome-content">
        <h2 class="white-text tm-handwriting-font tm-welcome-header"><img src="img/header-line.png" alt="Line"
            class="tm-header-line">&nbsp;D'Rotlo's Review&nbsp;&nbsp;<img src="img/header-line.png" alt="Line"
            class="tm-header-line"></h2>
        
        <a href="#main" class="tm-more-button tm-more-button-welcome">Get Review</a>
        <a href="drotlo_add.php" class="tm-more-button tm-more-button-welcome">Add Review</a>
      </div>
      <img src="img/table-set.png" alt="Table Set" class="tm-table-set img-responsive">
    </div>
  </section>
  <div class="tm-main-section light-gray-bg">
    <div class="container" id="main">
      <section class="tm-section row">
        <div class="col-lg-12 tm-section-header-container margin-bottom-30">
          <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="img/logo.png" alt="Logo"
              class="tm-site-logo"> Our Reviews</h2>
          <div class="tm-hr-container">
            <hr class="tm-hr">
          </div>
        </div>
        <div>
          <div class="col-lg-3 col-md-3">
            <div class="tm-position-relative margin-bottom-30">
              <nav class="tm-side-menu">
                <ul>
                  <li><a href="#" class="active">Affogato</a></li>
                  <li><a href="#">Caffè Americano</a></li>
                  <li><a href="#">Caffè latte</a></li>
                  <li><a href="#">Coffee milk</a></li>
                  <li><a href="#">Café mocha</a></li>
                  <li><a href="#">Cappuccino</a></li>
                  <li><a href="#">Espresso</a></li>
                  <li><a href="#">Iced coffee</a></li>
                  <li><a href="#">Instant coffee</a></li>
                  <li><a href="#">Mocha</a></li>
                  <li><a href="#">black coffee</a></li>
                </ul>
              </nav>
              <img src="img/vertical-menu-bg.png" alt="Menu bg" class="tm-side-menu-bg">
            </div>
          </div>
          <div class="tm-menu-product-content col-lg-9 col-md-9">
            <!-- menu content -->






            <?php

if ($rows) {

            while ($result=mysqli_fetch_assoc($data)) {
            ?>
               <div class="tm-product" id="main">
                <div class="tm-product-text">
                  <h4 class="tm-product-title">Name:<?php echo " ". $result['name'] ?></h4>
                  <h4 class="tm-product-title">Point:<?php echo " ". $result['point'] ?></h4>
                  <h4 class="tm-product-title">Date:<?php echo " ". $result['date'] ?></h4>
                  <p class="tm-product-description">Description:<?php echo " ".$result['description'] ?></p>
                </div>
              </div>
  
             <?php  
             }
            
             ?>

  
    
    

   <?php 
}
else {
    echo "<center>Sorry Record Was Not Found !!<center>";
}
?>


          </div>
        </div>
    </div>
    </section>
  </div>
  </div>
 
  <!-- JS -->
  <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script> <!-- jQuery -->
  <script type="text/javascript" src="js/templatemo-script.js"></script> <!-- Templatemo Script -->

</body>

</html>