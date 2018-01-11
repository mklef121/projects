<?php 

    @session_start();
    $level = isset($_SESSION['level']) ? $_SESSION['level']: null;
    if($level == null){
         ?> <script >window.location.href='<?php echo "../index.html";?>' </script><?php
    }
    
    elseif($level != 'lecturer'){
            header('location:../'.$level.'');
        }

    if( isset($_SESSION['last_acted_on']) && (time() - $_SESSION['last_acted_on'] > 60*60) ){
    ?> <script >window.location.href='<?php echo "../logout.php";?>' </script><?php
    
    }
    else{
        
        $_SESSION['last_acted_on'] = time();
    }

   
    
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>GROUP1 - Dashboard</title>

<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<link href="css/register.css" rel="stylesheet" />
<link href="css/main.css" rel="stylesheet" />

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!-- Font Awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">


<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>
<?php include 'modals.php' ?>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="non-printable">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span></span>Admin</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> <?php echo $_SESSION['name'];?> <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="profile.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
							<li><a href="../logout.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>