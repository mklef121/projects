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
                    <?php 
                      $simuoidal="SELECT * FROM course WHERE lect_id = '$lect_id'";
                      $errorfunction = mysqli_query($db,$simuoidal);
                      $slope = mysqli_num_rows($errorfunction);
                      if (empty($slope)) {
                        ?>
                        <div class="jumbotron">
                          <h1 class="text-center">OOPS!</h1>
                          <p>Sorry you have not entered any course, thus you can not edit any. Kindly go back to your dashboard
                           here <a class="btn btn-primary btn-sm" href="index.php" role="button">Home</a> and add a course.</p>
                          <p>
                        </div>

                      <?php
                      }

                      else{
                    ?>
                    
                    <div class="table-responsive">
                     <table class="table table-striped  table-hover" > 
                      <?php if (isset($_GET['success'])): ?>
                              
                          <caption> <h4><b class="text-danger">YOUR DATA HAS BEEN SUCCESSFULY EDITED</b></h4></caption>

                          <?php endif ?>
                          <?php while ($row = mysqli_fetch_array($errorfunction)):
                          
                          ?>
                          <form action ="update.php?id=<?php echo $row['id'] ;?>" method="POST">
                            
                          <tr>
                              
                              <td ><label > <b>Course Name:</b></label> <input class="form-control"   name="name" type="text" 
                                                      value = "<?php echo htmlspecialchars($row['course_name']);?>"  style="color: rgb(0, 0, 0);"></td>
                              <td> <label > <b>Course Code:</b></label> <input class="form-control"   name="code" type="text" 
                                              value = "<?php echo htmlspecialchars($row['course_code']);?>"  style="color: rgb(0, 0, 0);"> </td>

                              <td><label ><b>Session:</b></label> 
                                                      <select class="form-control" id="session" name ="session" style="color: rgb(0, 0, 0);">
                                                        <option value = "<?php echo htmlspecialchars($row['session']);?>" ><?php echo htmlspecialchars($row['session']);?></option>
                                                        <option value = "2015/2016">2015/2016</option>
                                                        <option value = "2016/2017">2016/2017</option>
                                                        <option value = "2017/2018">2017/2018</option>
                                                        <option value = "2018/2019">2018/2019</option>
                                                        <option value = "2019/2020">2019/2020</option>
                                                      </select>
                              </td>

                             <td><label ><b>Semester:</b></label> 
                                                      <select class="form-control" id="session" name ="semester" style="color: rgb(0, 0, 0);">
                                                        <option value = "<?php echo htmlspecialchars($row['semester']);?>" ><?php echo htmlspecialchars($row['semester']).' '. 'Semester';?></option>
                                                        <option value = "First">First Semester</option>
                                                        <option value = "Second">Second Semester</option>
                                                        
                                                      </select>
                              </td>

                              <td ><label > <b>Credit:</b></label> <input class="form-control"   name="credit" type="text" 
                                                      value = "<?php echo htmlspecialchars($row['credit']);?>"  style="color: rgb(0, 0, 0);"></td>

                              <td  >  <label >&nbsp;</label>   <button  class="btn btn-danger btn-md" type = "submit" name = "akpabio" style="color: rgb(0, 0, 0);">
                                                  <span class="fa fa-wrench" ></span> UPDATE</button> </td>
                              
                          </tr>
                          </form>

                          <?php endwhile; ?>
                         
                     </table>
              </div>
            <?php } ?>

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
