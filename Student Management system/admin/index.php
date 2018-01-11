<?php include'modal.php';
      
     include'../db.php' ;
        $r1 = mysqli_query($db,'SELECT count(*) FROM lecturer');
        $r2 = mysqli_query($db,"SELECT count(*) FROM student ");
        $r3 = mysqli_query($db,"SELECT count(*) FROM course ");
        $r4 = mysqli_query($db,"SELECT count(*) FROM admin ");

        $count1 = mysqli_fetch_array($r1);
        $count2 = mysqli_fetch_array($r2);
        $count3 = mysqli_fetch_array($r3);
        $count4 = mysqli_fetch_array($r4);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group Admin dashboard</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
     <link href="assets/css/register.css" rel="stylesheet" />
    <link href="assets/css/main.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <style type="text/css">
    .rose{background-color: #AFEEEE}
    </style>
   </head>
<body onload="startTime()">
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar" style="background-color:#000">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="../assets/images/logo-265x294-10.png" alt="" />
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
               

                
                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-2x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            
                            <div class="user-info">
                                <div style="font-size:70%">Nwabueze <strong>Miracle</strong></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li class="sidebar-search">
                        <!-- search section-->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!--end search section-->
                    </li>
                    <li class="selected">
                        <a href="index.php"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>
                    
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12">
                    <div class="alert alert-info">
                        <i class="fa fa-folder-open"></i><b>&nbsp;Hello ! </b>Welcome Back <b>Nwabueze Miracle </b>
 <i class="fa  fa-pencil"></i><b>&nbsp; &nbsp; &nbsp; 200 </b>complains are waiting to be resolved.
                    </div>
                </div>
                <!--end  Welcome -->
            </div>

            <?php if(isset($_GET['imageextension']) && $_GET['imageextension'] == 'notgoodatall' ):
                    ?>

                         <div class="alert alert-danger fade in col-xs-12 row" role="alert">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <span class="fa fa-retweet fa-2x" aria-hidden="true"></span>
                            <span class="sr-only">Error:</span>
                            <label  style="color:#000">OOPS!!!, you have Selected a wrong image extension. Kindly Choose an image file</label>
                         </div>
                    
                        <?php endif; ?>


            <?php if(isset($_GET['success']) && $_GET['success'] == 'successful' ):
                    ?>

                         <div class="alert alert-danger fade in col-xs-12 row" role="alert">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <span class="fa fa-certificate fa-2x" aria-hidden="true"></span>
                            <span class="sr-only">Error:</span>
                            <label  style="color:#000">YESS!!!, you have successful added a lecturer to the database. He/She can now login with the email and password you used</label>
                         </div>
                    
                        <?php endif; ?>

            <?php if(isset($_GET['admin']) && $_GET['admin'] == 'successful' ):
                    ?>

                         <div class="alert alert-danger fade in col-xs-12 row" role="alert">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <span class="fa fa-certificate fa-2x" aria-hidden="true"></span>
                            <span class="sr-only">Error:</span>
                            <label  style="color:#000">YESS!!!, you have successful added an admin to help oversee and monitor this software.</label>
                         </div>
                    
                        <?php endif; ?>


            <div class="row">
                <!--quick info section -->
                <div class="col-lg-3">
                    <div class="alert alert-danger text-center">
                        <i class="fa fa-calendar fa-3x"></i>&nbsp;<b> <?php echo $count1[0]; ?> </b>Lecturer(s) are using this software

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-success text-center">
                        <i class="fa  fa-beer fa-3x"></i>&nbsp;<b><?php echo $count4[0]; ?> </b>Administrator(s) manage this software  
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-info text-center">
                        <i class="fa fa-rss fa-3x"></i>&nbsp;<b><?php echo $count2[0]; ?></b> student(s) have been added by lecturers

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-warning text-center">
                        <i class="fa  fa-pencil fa-3x"></i>&nbsp;<b><?php echo $count3[0]; ?></b> Course(s) are managed on this platform
                    </div>
                </div>
                <!--end quick info section -->
            </div>

            <div class="row">
                <div class="col-lg-8">



                    <!--Admin Detailsz example -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-user fa-fw"></i>Your Profile
                            
                        </div>

                        <div class="panel-body">
                            

                
                
                <div class="register-info-wraper" style="background-color:#010101">
                    <div id="register-info">
                        <div class="cont2">
                            <div class="thumbnail">
                                <img src="assets/img/face.jpg" alt="Marcel Newman" class="img-circle" style="width:180px; height:150px; padding-top:10px">
                            </div><!-- /thumbnail -->
                            <h2>Nwabueze Miracle</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="cont3">
                                    <p><ok>Username:</ok> BASICOH</p>
                                    <p><ok>Mail:</ok> hola@basicoh.com</p>
                                    <p><ok>Location:</ok> Madrid, Spain</p>
                                    <br>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="cont3">
                                <p><ok>Registered:</ok> April 9, 2010</p>
                                <p><ok>Last Login:</ok> January 29, 2013</p>
                                <p><ok>Phone:</ok> +34 619 663553</p>
                                <br>
                                </div>
                            </div>
                        </div><!-- /inner row -->
                        <hr>
                       
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>

                            
                        </div> <!--End of panel Body -->

                    </div>
                    <!--End area chart example -->
                   

                </div>

                <div class="col-lg-4">
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body green">
                            <i id="date" class="fa  fa-2x"></i> <br><br>
                            <h3 id="time"> time</h3>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">Local time and Date
                            </span>
                        </div>
                    </div>
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body blue">
                           <button class ="btn btn-danger" data-toggle="modal" data-target="#lecturer"> <i class="fa fa-pencil-square-o fa-2x"></i> &nbsp; Add Lecturer 
                           </button>
                           <br>
                           <br>

                            <button class ="btn btn-danger" data-toggle="modal" data-target="#admin"> <i class="fa fa-plus-square-o fa-2x"></i> &nbsp; Add New Admin 
                            </button>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">Admin Console
                            </span>
                        </div>
                    </div>
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body green">
                            <button class ="btn btn-danger" data-toggle="modal" data-target="#myModal"> <i class="fa fa-pencil-square-o fa-2x"></i> &nbsp; Edit / Delete Lecturer
                           </button>
                           <br>
                           <br>
                           
                            <button class ="btn btn-danger"> <i class="fa fa-thumbs-up fa-2x"></i> &nbsp; View Complains
                            </button>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">Admin Edit Console
                            </span>
                        </div>
                    </div>
                    



                </div>

            </div>

          

         


        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/plugins/morris/morris.js"></script>
    <script src="assets/scripts/dashboard-demo.js"></script>

    <!--Timer javascript code below -->

<script>
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);

    var dd = today.getDate();
    var mm = today.getMonth() + 1;
    var yy = today.getFullYear();

    if (dd<10) {
        dd='0' +dd;
    };

    if (mm<10) {
        mm='0' +mm;
    };
    document.getElementById('date').innerHTML =
    dd + "-" + mm + "-" + yy;

    document.getElementById('time').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
</script>



</body>

</html>


