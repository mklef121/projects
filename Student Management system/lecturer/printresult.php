<style type="text/css">
.hellen{clear: both;
        height: auto;}

#hello{
    border-radius: 15px;
    padding: 10px;
}

input[type=text],input[type=number] {
    
    
    border: 1px solid #2F4F4F;
    box-sizing: border-box;
    border-radius: 4px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

.me{border: .5px solid #696969;
        }


    @media print
    {
        #non-printable { display: none; }
        #printable { display: block;
                        margin-left:0px; }
    }
</style>

    
    <script type="text/javascript">
        function check(){
                        window.print();
        }
    </script> 



 <link rel="stylesheet" href="../assets/theme/css/style.css">
  <link rel="stylesheet" href="../assets/mobirise/css/mbr-additional.css" type="text/css">

<?php

include('../db.php') ; 
include'../function/function.php';
$lect_id = $_SESSION['id'];
if (isset($_GET['course_id']) ) {
    $course_id = $_GET['course_id'];
    $course_name = $_GET['course_name'];
    $session = $_GET['session'];
    $semester = $_GET['semester'];
    $credit = $_GET['credit'];

    $lect = "SELECT * FROM lecturer WHERE id = '$lect_id' ";
    $kill = mysqli_query($db,$lect);
    $hotel = mysqli_fetch_array($kill);
    $lect_name = $hotel['name'];
    $department = $hotel['department'];


}

include'../includes/header.php'; 
include('../function/ajaxfunctions.php') ;?>
		
<div class ="container-fluid wrapper">

<?php include'../includes/sidebar.php'; ?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row" id="non-printable">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">dashboard / Print Course Results</li>
			</ol>
		</div><!--/.row-->
		
		
		
		<div class="row" >
			<div class="col-lg-12">
				<div class="form-horizontal panel panel-success">
					
					 <div class="panel-body"  style=" padding-top:30px">
                      <div id="page" class="page " style = " padding-bottom:3%;">
        
         <?php                        
                        $m = "SELECT * FROM student ORDER BY id ASC";
                        $w =mysqli_query($db,$m);
         
                        
        ?>
      <div class="table-responsive">
           <table class="table table-striped  table-hover" > 
            <caption class = "alert-success"> 

              <div class="col-lg-6" style="color:#00000">
              <b><h4>Lecturer Name: <?php echo $lect_name ;?></h4></b>
              <h4>Course Name: <?php echo $course_name ;?></h4></b>
              <h4>Session: <?php echo $session ;?></h4></b>
            </div>

            <div class="col-lg-6" style="color:#00000">
              <b><h4>Lecturer Department: <?php echo $department ;?></h4></b>
              <b><h4>Credit Unit: <?php echo $credit ;?></h4></b>
              <b><h4>Semester: <?php echo $semester.' '. 'Semester';?></h4></b>
            </div> 
          </caption>
            <thead>
              <tr style="background-color:#3D566E;">
                <th style="color:#FFFBF0">Name</th>
                <th style="color:#FFFBF0">Reg. Number</th>
                <th style="color:#FFFBF0">CA Score</th>
                <th style="color:#FFFBF0">Exam Score</th>
                <th style="color:#FFFBF0">Total Score</th>
                <th style="color:#FFFBF0">Grade </th>
                
              </tr>
            </thead>
            <tbody>
                
                  <?php
                      $jul = "SELECT * FROM course_result WHERE course_id = '$course_id' AND lect_id = '$lect_id' ";
                      $mima =mysqli_query($db,$jul);
                      
                      
                     
                      while ($investigate = mysqli_fetch_array($mima)) {
                        $ca_score = $investigate['ca_score'];
                        $exam_score = $investigate['exam_score'];
                        $total_score = $investigate['total_score'];
                        $grade = $investigate['grade'];
                        $std_id = $investigate['std_id'];

                        $chukwu = "SELECT * FROM student WHERE id = '$std_id' AND lect_id = '$lect_id' ";
                        $good =mysqli_query($db,$chukwu);
                        $ten = mysqli_fetch_array($good);
                        $std_name = $ten['lname'].' '.$ten['fname'];
                        $std_reg = $ten['std_reg'];
                  ?>
                
                <tr>
                     
                    <td  ><?php echo $std_name; ?></td>

                    <td ><?php echo $std_reg; ?></td>

                     <td ><?php echo $ca_score; ?></td>
                     <td ><?php echo $exam_score; ?></td>

                     <td  ><?php echo $total_score; ?></td>
                      <td><?php echo $grade; ?></td>
                    
                    
                </tr>
                


                <?php 
                 }?>

              </tbody>
               <hr>
               
           </table>
        </div>  
            
            
          
    </div><!-- /.row -->
                                    
                          <!--Panel Footer-->
                                        <div class="panel-footer" id="sm1end"> 
                                            
                                            <div class="text-left" >
                                               <button type="submit" id="non-printable" class="btn btn-primary " name="danfulani" id="hello" onclick="return check()">PRINT</button>
                                                
                                            </div>
                                            
                                       </div> 
                                       <!--End Of Panel Footer-->            
                          
					         </div>
            </div> 
				</div><!--panel beginning-->
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
