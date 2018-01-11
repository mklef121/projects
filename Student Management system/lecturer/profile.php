
<?php include'../includes/header.php'; 
include'../includes/sidebar.php';
$lect_id = $_SESSION['id'];
$bend = "SELECT * FROM lecturer WHERE id ='$lect_id'";
$goodnight = mysqli_query($db,$bend);
$chance = mysqli_fetch_assoc($goodnight);
$email = $chance['email'];
$name = $chance['name'];
$dateadded = $chance['dateadded'];
$phone = $chance['phone'];
$image = $chance['image'];
$lastlogin = $chance['lastlogin'];
$department = $chance['department'];

$imagefolder="../image/";
?>

	
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">		
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">profile</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<b><h1 class="page-header" style="margin-bottom:2px; padding-bottom:2px; font-size:200%">Profile</h1></b>
			</div>
		</div><!--/.row-->
									
	<?php include'../includes/statistics.php'; ?>
		
		<div class="row">
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading"><svg class="glyph stroked email"><use xlink:href="#stroked-email"></use></svg> Complain Form</div>
					<div class="panel-body">
						<form class="form-horizontal" action="" method="post">
							<fieldset>
								<!-- Name input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Name</label>
									<div class="col-md-9">
									<input readonly id="name" name="name" type="text" placeholder="Your name" class="form-control" value="<?php echo $name; ?>">
									</div>
								</div>
							
								<!-- Email input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="email">Your E-mail</label>
									<div class="col-md-9">
										<input id="email" readonly name="email" type="text" placeholder="Your email" class="form-control" value="<?php echo $email; ?>">
									</div>
								</div>
								
								<!-- Message body -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="message">Your message</label>
									<div class="col-md-9">
										<textarea class="form-control" id="message" name="message" placeholder="Write to the Software admin here. You will get a solution sent to your mail..." rows="5"></textarea>
									</div>
								</div>
								
								<!-- Form actions -->
								<div class="form-group">
									<div class="col-md-12 widget-right">
										<button type="submit" class="btn btn-success btn-md" id="btn-chat">Submit</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
				


			</div><!--/.col-->
			
				<div class="col-md-4">
				
					<div class="panel panel-red">
						<div class="panel-heading dark-overlay"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg>Calendar</div>
						<div class="panel-body">
							<div id="calendar"></div>
						</div>
					</div>
					


				</div><!--/.col-->
		</div><!--/.row-->



		<div class="col-lg-12">



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
                                <img src="<?php echo $imagefolder. htmlspecialchars($chance['image']);?>" alt="Lecturer image" class="img-circle" style="width:180px; height:150px; padding-top:10px">
                            </div><!-- /thumbnail -->
                            <h2>Nwabueze Miracle</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="cont3">
                                    <p><ok>Name:</ok> <?php echo $name; ?></p>
                                    <p><ok>Mail:</ok> <?php echo $email; ?></p>
                                    <p><ok>Department:</ok> <?php echo $department; ?></p>
                                    <br>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="cont3">
                                <p><ok>Registered:</ok> <?php echo $dateadded; ?></p>
                                <p><ok>Last Login:</ok> <?php echo $lastlogin; ?></p>
                                <p><ok>Phone:</ok> <?php echo $phone; ?></p>
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

	</div>	<!--/.main-->
		  

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
