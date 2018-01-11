<?php 
  include('db.php');


include'function/function1.php';


        
    if(isset($_POST['why'])){
        
        $mail = strtolower(clean($_POST['email']));
        $pass = clean($_POST['password']);
        $query = "SELECT * FROM user_table WHERE email='$mail' ";
        $r = mysqli_query($db,$query);
        if(mysqli_num_rows($r) >= 1){
            $row = mysqli_fetch_assoc($r);
            $_SESSION['level'] = $row['access_type'];
            
        }else{
            header('location:home.php?user=usererror');
        }
    }

    if(isset($_SESSION['level'])){
        $querier = "SELECT * FROM student WHERE email='$mail' and password='$pass'";
        $m = mysqli_query($db,$querier);
        if(mysqli_num_rows($m) >= 1){
            $rower = mysqli_fetch_assoc($m);
            $_SESSION['mail'] = $rower['email'];
            $_SESSION['name'] = $rower['fname'].' '.$rower['lname'];
            $_SESSION['id'] = $rower['id'];
            $_SESSION['last_acted_on'] = time();
            @session_regenerate_id(TRUE);
        }


        include('functions/authenticate.php');
        $supdate1 = "UPDATE student SET     status = 'online' WHERE email = '$mail'";
        mysqli_query($db,$supdate1);
        
        

     
        header('location:'.$_SESSION['level'].'');   
    }
    
?>

?>

<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v3.9.2, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v3.9.2, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <meta name="description" content="">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
<section id="menu-e">

    <nav class="navbar navbar-dropdown bg-color transparent navbar-fixed-top">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <a href="" class="navbar-logo"><img src="assets/images/group.png" alt="Mobirise"></a>
                        <a class="navbar-caption" href="#"></a>
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">

                      <li class="nav-item"><a class="nav-link link" href="#" aria-expanded="false"><span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>HOME</a></li>

                      <li class="nav-item"><a class="nav-link link" href="#" aria-expanded="false"><span class="mbri-idea mbr-iconfont mbr-iconfont-btn"></span>ABOUT</a></li>

                      <li class="nav-item"><a class="nav-link link" href="#" aria-expanded="false"><span class="mbri-users mbr-iconfont mbr-iconfont-btn"></span>THE TEAM</a></li>

                      <li class="nav-item"><a class="nav-link link" href="#" aria-expanded="false"><span class="mbri-map-pin mbr-iconfont mbr-iconfont-btn"></span>CONTACT</a></li>

                      <li class="nav-item"><a class="nav-link link" href="#" aria-expanded="false"></a></li>

                    </ul>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>

</section>

<section class="mbr-section mbr-after-navbar" id="form1-g" style="background-color: rgb(255, 255, 255); padding-top: 120px; padding-bottom: 120px;">
    
    <div class="mbr-section mbr-section__container mbr-section__container--middle">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-center">
                    <h3 class="mbr-section-title display-2">LOGIN HERE</h3>
                    <small class="mbr-section-subtitle">Login with the username and password given to you by the admin</small>
                </div>
            </div>
        </div>
    </div>
    <div class="mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1" >

                    <form action="dash/" method="post" >

                        

                        <div class="row row-sm-offset">

                            <div class="col-xs-12 col-md-8 col-md-offset-2">
                                <div class="form-group">
                                    <label class="form-control-label" >Email<span class="form-asterisk">*</span></label>
                                    <input type="text" class="form-control" name="email" placeholder="Enter your email" required >
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-8 col-md-offset-2">
                                 <div class="form-group">
                                    <label class="form-control-label" for="form1-g-email">Password<span class="form-asterisk">*</span></label>
                                    <input type="password" class="form-control" name="password" placeholder="Enter your password Password" required >
                                </div>
                            </div>

                            
                        </div>

                        

                        <div class="col-md-offset-4 col-lg-offset-2"><a href ="dash/"><button name = "why" type="submit" class="btn btn-primary" >LOGIN</button></a></div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="footer1-f" style="background-color: rgb(50, 50, 50); padding-top: 1.75rem; padding-bottom: 1.75rem;">
    
    <div class="container">
        <p class="text-xs-center">Copyright (c) 2016 Software Engineering Team 1</p>
    </div>
</footer>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="assets/viewportChecker/jquery.viewportchecker.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchSwipe/jquery.touchSwipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  
  
  <input name="animation" type="hidden">
   <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon"></i></a></div>
  </body>
</html>