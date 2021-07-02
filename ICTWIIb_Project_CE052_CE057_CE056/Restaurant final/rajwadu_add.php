
<?php
include("connection.php");
error_reporting(0);
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>RAJWADU - Review Info.</title>

  <style>
    .c_pic{
      margin-left: 50px;
    }
  </style>
<!-- 
Cafe House Template
http://www.templatemo.com/tm-466-cafe-house
-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
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
          <h2 class="white-text tm-handwriting-font tm-welcome-header"><img src="img/header-line.png" alt="Line" class="tm-header-line">&nbsp;Add Review&nbsp;&nbsp;<img src="img/header-line.png" alt="Line" class="tm-header-line"></h2>
          
          <a href="#main" class="tm-more-button tm-more-button-welcome">Add Now</a>      
        </div>
        <img src="img/table-set.png" alt="Table Set" class="tm-table-set img-responsive">            
      </div>      
    </section>
    <div class="tm-main-section light-gray-bg">
      <div class="container" id="main">
        <section class="tm-section row">
          <h2 class="col-lg-12 margin-bottom-30">ADD A REVIEW</h2>
          <form action="#" method="post" class="tm-contact-form">
            <div class="col-lg-6 col-md-6">
                <div class="form-group">
                    <input type="text" id="contact_name" class="form-control" placeholder="SR NO" name="srno" />
                  </div>
              <div class="form-group">
                <input type="text" id="contact_name" class="form-control" placeholder="NAME" name="uname"/>
              </div>
              <div class="form-group">
                <input type="date" id="contact_name" class="form-control" placeholder="DATE" name="date" />
              </div>

              <div class="form-group">
                <input type="text" id="contact_name" class="form-control" placeholder="POINT (OUT OF 5)" name="point" />
              </div>
              
              <div class="form-group">
                <textarea id="contact_message" class="form-control" rows="6" placeholder="DESCRIPTION" name="description"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" class="be" name="submit" value="SUBMIT"> 
              </div>               
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="c_pic"><img src="img/menu-board.png" alt=""></div>
            </div> 
          </form>
        </section>
      </div>
    </div> 
    
   <!-- JS -->
   <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
   <script type="text/javascript" src="js/templatemo-script.js"></script>       
   
    </body>
    </html>




    <?php
$srno=$_POST['srno'];
$name=$_POST['uname'];
$date=$_POST['date'];
$point=$_POST['point'];
$description=$_POST['description'];

if ($_POST['submit']) {
    $query="INSERT INTO RAJWADU VALUE ('$srno','$name','$date','$point','$description')";
$data=mysqli_query($conn,$query);
if ($data) {
    echo "<script>alert('Record Updated')</script>";
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/my%20project/Restaurant%20final/rajwadu.php">
    <?php
}
else {
    echo "<script>alert('Record Not Added in Your DataBase')</script>";
}
    
}


?>
