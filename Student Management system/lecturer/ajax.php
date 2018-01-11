<style type="text/css">
.hellen{clear: both;
        height: auto;}

#hello{
    border-radius: 15px;
    padding: 10px;
}

input[type=text] {
    
    padding: 12px 20px;
    border: 1px solid #2F4F4F;
    box-sizing: border-box;
    border-radius: 4px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

.me{border: .5px solid #696969;
        }
</style>
 <link rel="stylesheet" href="../assets/theme/css/style.css">
  <link rel="stylesheet" href="../assets/mobirise/css/mbr-additional.css" type="text/css">

<?php
include('../db.php') ; 
include'../function/function.php';

include'../includes/header.php'; 
$lect_id = $_SESSION['id'];
?>
		
<div class ="container-fluid wrapper">

<?php include'../includes/sidebar.php'; ?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb"> 
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">dashboard / View and Edit Courses</li>
			</ol>
		</div><!--/.row-->
		
		
		
		<div class="row" >
			<div class="col-lg-12">
				<div class="form-horizontal panel panel-success">
					<div class="panel-heading hellen">Welcome, you can easily edit courses here. Make sure you update your inputs before leaving this page.</div>
					<div class="panel-body"  style=" padding-top:30px">
                  <div class="row panel-body panel-info">
                    
                        <div class="jumbotron">
                          <h1 class="text-center">OOPS!</h1>
                          <div id="createtask" class="formclass"></div> 
                          <div id="autocompletediv" class="autocomp"></div>
                           <div id="taskbox" class="taskboxclass"></div>
                            <p> <a href="javascript://" onclick="showHideCalendar()">
                                    <img id="opencloseimg" src="image/open.png" alt="" title="" style="border: none; width: 15px; height: 15px;" />
                                </a>

                                 <a href="javascript://" onclick="showHideCalendar()">My Calendar</a>
                            </p> 
                               <div id="calendar1" style="width: 105px; text-align: left;"></div> 
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
