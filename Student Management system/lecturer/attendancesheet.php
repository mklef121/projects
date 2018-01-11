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


</style>


 <link rel="stylesheet" href="../assets/theme/css/style.css">
  <link rel="stylesheet" href="../assets/mobirise/css/mbr-additional.css" type="text/css">

<?php

include('../db.php') ; 
include'../function/function.php';
if (isset($_GET['course']) && isset($_GET['session']) ) {
    $course_id = $_GET['course'];
    $session = $_GET['session'];

    $jul = "SELECT * FROM course WHERE id = '$course_id' ";
    $mima =mysqli_query($db,$jul);
    $investigate = mysqli_fetch_array($mima);
    $dept = $investigate['course_name'];

}

include'../includes/header.php'; 
include('../function/ajaxfunctions.php') ;?>
		
<div class ="container-fluid wrapper">

<?php include'../includes/sidebar.php'; ?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">dashboard / Mark attendance</li>
			</ol>
		</div><!--/.row-->
		
		
		
		<div class="row" >
			<div class="col-lg-12">
				<div class="form-horizontal panel panel-success">
					<div class="panel-heading hellen">Attendance marking form for <?php echo $dept; ?>, <?php echo $session." Session"; ?> </div>
					<div class="panel-body"  style=" padding-top:30px">
                      <div id="page" class="page " style = " padding-bottom:3%;">
                      	<form name="ghana" method="POST" action="enterstd.php?elehon=<?php echo $course_id ?>">
	                      	<label for="date"><b>Date: </b></label>
	                      	<input class="form-control"  id="date" name="datelate" type="date" required value = "<?php echo date('d-M-Y'); ?>"  style="color: rgb(0, 0, 0);" >
        				
         <?php                        
                        $m = "SELECT * FROM student ORDER BY id ASC";
                        $w =mysqli_query($db,$m);
         
                        
        ?>
      <div class="table-responsive">
           <table class="table table-striped  table-hover" > 
            
                
                  <?php
                      $jul = "SELECT * FROM student WHERE course_id = '$course_id' ";
                      $mima =mysqli_query($db,$jul);
                      
                      
                      $g=1;
                      while ($investigate = mysqli_fetch_array($mima)) {
                        $lname = $investigate['lname'];
                        $fname = $investigate['fname'];
                        $name = $lname." ".$fname;
                        $id = $investigate['id'];
                        $stdregn = $investigate['std_reg'];
                  ?>
                
                <tr>
                    <input  type="hidden" class="form-control input-lg" id="id" name="id[]" value="<?php echo $id ?>" >
                     
                    <td> <label > <b>Name:</b></label> <input readonly class="form-control"   name="name[]" type="text" 
                                    value="<?php echo $name ?>"  style="color: rgb(0, 0, 0);"> </td>

                    <td ><label ><b>Reg. No:</b></label> <input class="form-control"   name="reg_no[]" type="text" 
                                            value = "<?php echo $stdregn ?>" readonly style="color: rgb(0, 0, 0);" ></td> 

                   
                    <td ><label > <b>Attendance: </b></label> <input class="form-control" checked value ="present" name="attend[]" type="checkbox" style="color: rgb(0, 0, 0);"  id="tscore<?php echo $g;?>" ></td>
                     
                    
                    
                </tr>
               

                <?php 
                 }?>

                
               <hr>
               
           </table>
        </div>  
            
            
          
    </div><!-- /.row -->
                                    
                          <!--Panel Footer-->
                                        <div class="panel-footer" id="sm1end"> 
                                            
                                            <div class="text-left" >
                                               <button type="submit" id="calc-do" class="btn btn-secondary " name="victor" id="hello">REGISTER</button>
                                                
                                            </div>
                                            
                                       </div> 
                                       <!--End Of Panel Footer-->            
                    </form>       
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
