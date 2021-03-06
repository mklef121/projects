<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  
  <title><?php echo $title ?></title>
 
  <!-- ========== Css Files ========== -->
  <link href="css/root.css" rel="stylesheet">
 
 
  </head>
  <body>
  <!-- Start Page Loading 
  <div class="loading"><img src="img/loading.gif" alt="loading-img"></div>
 End Page Loading -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 
  <!-- START TOP -->
  <div id="top" class="clearfix">

    <!-- Start App Logo -->
    <div class="applogo">
      <a href="index.php" class="logo"><img src="img/uniuyo.png" style="width: 55px; height: 40px"> UNIUYO</a>
    </div>
    <!-- End App Logo -->

    <!-- Start Sidebar Show Hide Button -->
    <a href="#" class="sidebar-open-button"><i class="fa fa-bars"></i></a>
    <a href="#" class="sidebar-open-button-mobile"><i class="fa fa-bars"></i></a>
    <!-- End Sidebar Show Hide Button -->

    
    <!-- Start Sidepanel Show-Hide Button -->
    <a href="#sidepanel" class="sidepanel-open-button"><i class="fa fa-outdent"></i></a>
    <!-- End Sidepanel Show-Hide Button -->

    <!-- Start Top Right -->
    <ul class="top-right">



    <li class="dropdown link">
      <a href="#" data-toggle="dropdown" class="dropdown-toggle profilebox"><img src="img/uniuyo.png" alt="img"><b><?php echo return_single_value('officers_name', 'officers', 'officers_id', $_SESSION['user_id']) ;?></b><span class="caret"></span></a>
        <ul class="dropdown-menu dropdown-menu-list dropdown-menu-right">
        
          <li><a href="?action=logout"><i class="fa falist fa-power-off"></i> Logout</a></li>
        </ul>
    </li>

    </ul>
    <!-- End Top Right -->

  </div>
  <!-- END TOP -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 


<!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START SIDEBAR -->
<div class="sidebar clearfix">

<ul class="sidebar-panel nav">
  <li class="sidetitle">MAIN</li>
  <li><a href="index.php" class="active"><span class="icon color5"><i class="fa fa-home"></i></span>Dashboard<span class="label label-default">2</span></a>
  </li>

  <li>
    <a href="?action=allmes"><span class="icon color6">
      <i class="fa fa-envelope-o"></i></span>All Messages <span class="label label-default">19</span>
    </a>
  </li>

  <li>
    <a href="?action=newmes"><span class="icon color6">
      <i class="fa fa-envelope-o"></i></span>Unread Messages <span class="label label-default">19</span>
    </a>
  </li>

   <li>
    <a href="?action=newema">
      <span class="icon color8"><i class="fa fa-bar-chart"></i></span> Unattended Mails
    </a>
  </li>

  <li>
    <a href="?action=createemail"><span class="icon color6">
      <i class="fa fa-envelope"></i></span>Create E-Mails
    </a>
  </li>

  <li>
    <a href="?action=createhard"><span class="icon color6">
      <i class="fa fa-envelope"></i></span>Create Hard Copy Mails
    </a>
  </li>

 

 
 

</ul>

<ul class="sidebar-panel nav">
 
</ul>
<!-- <div class="sidebar-plan">
  Pro Plan<a href="#" class="link">Upgrade</a>
  <div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
  </div>
</div>
<span class="space">42 GB / 100 GB</span>
</div> -->

</div>
<!-- END SIDEBAR -->
<!-- //////////////////////////////////////////////////////////////////////////// --> 