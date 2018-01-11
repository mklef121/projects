
<?php include'../includes/header.php'; ?>
		
<div class ="container-fluid wrapper">

<?php include'../includes/sidebar.php'; ?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header" style="margin-bottom:2px; padding-bottom:2px">Dashboard</h1>
			</div>
		</div><!--/.row-->
		
	<?php include'../includes/statistics.php'; ?>

    

            <?php if(isset($_GET['onyi']) && $_GET['onyi'] == 'accepted' ):
                    $course_name = $_GET['course_name']; ?>

                         <div class="alert bg-success fade-in col-xs-12" role="alert">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                            <span class="sr-only">Error:</span>
                            <label  style="color:#000">Congratulations!!!, you have been able to add student(s) to the course:  <?php echo "<strong>".ucwords($course_name)."</strong>"; ?>, with this software we believe you can do more...</label>
                         </div>
                    
                        <?php endif; ?>

                <?php if(isset($_GET['mad']) && $_GET['mad'] == 'gabriel' ):
                     $numb = $_GET['bless'];
                     $course_name = $_GET['course_name']; ?>

                        <div class="alert bg-success fade-in col-xs-12" role="alert">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                            <span class="sr-only">Error:</span>
                            <label  style="color:#000">Congratulations!!!, you have been able to grade <?php echo $numb ?> student(s) successfully for the course:  <?php echo "<i>".ucwords($course_name)."</i>"; ?>, with this software we believe you can even do greater...</label>
                         </div>
                    
                        <?php endif; ?>


                <?php if(isset($_GET['gbedu']) && $_GET['gbedu'] == 'brain' ):
                     $peeps = $_GET['beast'];
                     $course_name = $_GET['course'];
                      ?>

                         <div class="alert bg-success fade-in col-xs-12" role="alert">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                            <span class="sr-only">Error:</span>
                            <label  style="color:#000">Yuppy!!!, you have just been able to mark attendance for <?php echo $peeps ?>  today <?php echo date('D-M-Y'); ?>, for the course :  <?php echo "<i>".ucwords($course_name)."</i>"; ?>, with this software we believe you can even do greater...</label>
                         </div>
                    
                        <?php endif; ?>


		
		
		<div class="row" >
			<div class="col-lg-12">
				<div class="panel ">
					<div class="panel-heading">Lecturers Data Board</div>
					<div class="panel-body"  style="background-color:#000; padding-top:50px">
						<div class="col-md-4">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <div class="row">
                                                    <div class="col-xs-12 col-md-12" style="font-size:96%">
                                                        <i class="fa fa-plus fa-2x"></i> &nbsp;ADD COURSES
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" data-toggle="modal" data-target="#courses">
                                                <div class="panel-footer">
                                                    <span class="pull-left">HERE</span>
                                                    <span class="pull-right"><i class="fa fa-spin fa-arrow-circle-right fa-2x"></i></span>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="panel panel-success">
                                            <div class="panel-heading">
                                                <div class="row">
                                                    <div class="col-xs-12 col-md-12" style="font-size:91%">
                                                        <i class="fa fa-user-plus fa-2x"></i> &nbsp;REGISTER STUDENT
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" data-toggle="modal" data-target="#studentsadd">
                                                <div class="panel-footer">
                                                    <span class="pull-left">HERE</span>
                                                    <span class="pull-right"><i class="fa fa-spin fa-arrow-circle-right fa-2x"></i></span>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                <div class="row">
                                                    <div class="col-xs-12 col-md-12" style="font-size:91%">
                                                        <i class="fa fa-book fa-2x"></i> &nbsp;ENTER RESULTS
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" data-toggle="modal" data-target="#resultentry">
                                                <div class="panel-footer">
                                                    <span class="pull-left">HERE</span>
                                                    <span class="pull-right"><i class="fa fa-spin fa-arrow-circle-right fa-2x"></i></span>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="panel panel-warning"> 
                                           <div class="panel-heading">
                                                <div class="row">
                                                    <div class="col-xs-12 col-md-12" style="font-size:91%">
                                                        <i class="fa fa-print  fa-2x"></i> &nbsp;VIEW/PRINT RESULTS
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" data-toggle="modal" data-target="#printresult">
                                                <div class="panel-footer">
                                                    <span class="pull-left">HERE</span>
                                                    <span class="pull-right"><i class="fa fa-spin fa-arrow-circle-right fa-2x"></i></span>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <div class="row">
                                                    <div class="col-xs-12 col-md-12" style="font-size:91%">
                                                        <i class="fa fa-check-square-o fa-2x"></i> &nbsp;MARK ATTENDANCE
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" data-toggle="modal" data-target="#attendance">
                                                <div class="panel-footer">
                                                    <span class="pull-left">HERE</span>
                                                    <span class="pull-right"><i class="fa fa-spin fa-arrow-circle-right fa-2x"></i></span>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="panel panel-danger">
                                            <div class="panel-heading">
                                                <div class="row">
                                                    <div class="col-xs-12 col-md-12" style="font-size:93%">
                                                        <i class="fa fa-edit fa-2x"></i> &nbsp;VIEW&AMP;EDIT COURSES
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="<?php echo htmlspecialchars('editcourse.php'); ?>">
                                                <div class="panel-footer">
                                                    <span class="pull-left">HERE</span>
                                                    <span class="pull-right"><i class="fa fa-spin fa-arrow-circle-right fa-2x"></i></span>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		
	</div>	<!--/.main-->

</div>

	


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
