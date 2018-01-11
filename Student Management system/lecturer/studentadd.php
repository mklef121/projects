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
if (isset($_GET['course']) && isset($_GET['numb']) ) {
    $course_id = clean($_GET['course']);
    $number = clean($_GET['numb']);

    $jul = "SELECT * FROM course WHERE id = '$course_id' ";
                  $mima =mysqli_query($db,$jul);
                  $investigate = mysqli_fetch_array($mima);
                  $dept = $investigate['course_name'];
                  $session = $investigate['session'];
}

include'../includes/header.php'; ?>
		
<div class ="container-fluid wrapper">

<?php include'../includes/sidebar.php'; ?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">dashboard / add students</li>
			</ol>
		</div><!--/.row-->
		
		
		
		<div class="row" >
			<div class="col-lg-12">
				<div class="form-horizontal panel panel-success">
					<div class="panel-heading hellen">You are about adding students for <?php echo $dept; ?>, <?php echo $session." Session"; ?> </div>
					<div class="panel-body"  style=" padding-top:30px">
                       <div class="row panel-body panel-info">
                        <form  method="POST" action="enterstd.php?couss=<?php echo $course_id ; ?>" >
                            <?php for ($i=0; $i < $number; $i++) { 
                                echo "<div class=' row'>
                                <div class='col-md-3  ' style='margin-left:10px; margin-right:5px'>
                                                <div class='form-group' >
                                                    <input class='credits form-control' type='text' name = 'surn[]' placeholder='Surname' required>
                                                </div>

                                </div>

                                 <div class='col-md-3  col-md-offset-1' style=' margin-right:4px; margin-left:70px'>
                                                <div class='form-group' >
                                                    <input class='credits form-control' type='text' name = 'first[]' placeholder='First Name' required>
                                                </div>

                                 </div>


                                 <div class='col-md-3  col-md-offset-1' style=' margin-right:5px; margin-left:70px'>
                                                    <div class='form-group ' >
                                                        <input class='credits form-control' type='text' name = 'reg[]' placeholder='Reg. Number' required>
                                                    </div>

                                </div> 

                                </div><hr class='me'>";
                            }?>
    						
                       
                        
                      </div>
                                    
                          <!--Panel Footer-->
                                        <div class="panel-footer" id="sm1end"> 
                                            
                                            <div class="text-left" >
                                               <button type="submit" id="calc-do" class="btn btn-primary " name="night" id="hello">REGISTER</button>
                                                
                                            </div>
                                            
                                       </div> 
                                       <!--End Of Panel Footer-->            
                    </form>       
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
