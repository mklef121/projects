<?php 

include('../db.php');
include'../function/function.php';
$lect_id = $_SESSION['id'];

	
	if (!empty($_GET['test'])) {
		$test = $_GET['test'];

		$qu = "SELECT * FROM course WHERE lect_id = '$lect_id' ORDER BY course_name ASC";
                  $mimi =mysqli_query($db,$qu); 
                  echo "<option value='none'".">"."Select a Course"."</option>";                             
                      while($row = mysqli_fetch_array($mimi)){
                       
                       echo "<option value='". $row['id']."'>";
                       echo  $row['course_name']."  ||  " . $row['course_code'] . "  ||  ".$row['session'];
                       echo " Session"."</option>";
      
                   }
	}

			

	if (!empty($_GET['testis'])) {
		echo "<label for='addition'"."class="."'fade-in'".">How many students do you want to add?</label>";
                echo "<div class='input-group fade-in'>";
                    echo "<span class='input-group-addon rose'>"."<i class='fa fa-users'></i></span>";
                       echo"<select class='form-control'". "id='addition' name"." ='addition' >";
                          
                          for ($i=1; $i<101; $i++) { 
                      	
                          	   echo "<option value='". $i ."'>";
		                       echo  $i;
		                       echo "</option>";
                          }

                        echo"</select>";
                echo "</div>";


          echo "<br>" ."<br>" ."<button type='submit' class="."'btn btn-default threesome'id="."'subme' onclick="."'miracleme()' ><span>Submit</span></button> <br> </br>";
	}




	if (!empty($_GET['joshtalk'])) {

		$course = $_GET['joshtalk'];
		$std_number = $_GET['andyyarn'];
		if ($course == 'none') {
			
			echo "
			<div class='alert alert-warning alert-dismissible mesefhere fade-in' role='alert'>
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
			<strong class='glyphicon glyphicon-check'>"."Alert!"."</strong>" ." <p>Please choose a course and mind hovering over the Course input</p> 
			</button>
			</div>";
		}

		else{
			$jul = "SELECT * FROM course WHERE id = '$course' AND lect_id = '$lect_id' ";
                  $mima =mysqli_query($db,$jul);
                  $investigate = mysqli_fetch_array($mima);
                  $dept = $investigate['course_name'];
			echo "
			<div class='alert alert-warning  mesefhere fade-in' role='alert'>
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
			<strong class='glyphicon glyphicon-check'>"."Alert!"."</strong>" ." <p>you are about to register <b>".$std_number."</b> students 
			for the course <b> ".$dept." </b>click this button to continue 
				<a href='studentadd.php?course=".$course."&numb=".$std_number."'><button type='submit' class='btn btn-info threesome fa fa-sign-in' >&nbsp; &nbsp;<span>ADD STUDENTS</span></button></p> 
			</button></a>
			</div>";
		}
		
	}




	if (!empty($_GET['henessy'])) {

		$course_id = $_GET['henessy'];

		$jul = "SELECT * FROM course WHERE id = '$course_id' AND lect_id = '$lect_id'";
                  $mima =mysqli_query($db,$jul);
                  $investigate = mysqli_fetch_array($mima);

                  $course_name = $investigate['course_name'];
                  $session = $investigate['session'];


        $mekpa = "SELECT * FROM student WHERE course_id = '$course_id' AND lect_id = '$lect_id'";
	        		$girls =mysqli_query($db,$mekpa);
	                $tah = mysqli_fetch_array($girls);
	                $count = mysqli_num_rows($girls);
		
		if ($count < 1) {
			
			echo "
			<div class='alert alert-warning alert-dismissible mesefhere fade-in' role='alert'>
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
			<strong class='glyphicon glyphicon-check'>"."Alert!"."</strong>" ." <p>Sorry you have not registered a student yet for <b>".
			 $course_name. " , ".$session. "</b> academic session. click on this link to return to dashboard 
			 <button type='button' class='btn btn-info   fa fa-home' data-dismiss='modal'>&nbsp; &nbsp;<span>dashboard</span></button></p> 
			</button>
			</div>";
		}

		else{
			
			echo "
			<div class='alert alert-warning  mesefhere fade-in' role='alert'>
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
			<strong class='glyphicon glyphicon-fire'>"."Yess!"."</strong>" ." <p>you are about to grade your students for <b>".$course_name."</b>. 
			Click the button below to continue 
				<a href='gradethem.php?course=".$course_id."&session=".$session."'><button type='button'  class='btn btn-info threesome fa fa-sign-in' >&nbsp; &nbsp;<span>Go</span></button></p> 
			</button></a>
			</div>";
		}
		
	}




if (!empty($_GET['oil'])) {

		$course_id = $_GET['oil'];

		$jul = "SELECT * FROM course WHERE id = '$course_id' AND lect_id = '$lect_id'";
                  $mima =mysqli_query($db,$jul);
                  $investigate = mysqli_fetch_array($mima);

                  $course_name = $investigate['course_name'];
                  $session = $investigate['session'];


        $mekpa = "SELECT * FROM student WHERE course_id = '$course_id' AND lect_id = '$lect_id'";
	        		$girls =mysqli_query($db,$mekpa);
	                $tah = mysqli_fetch_array($girls);
	                $count = mysqli_num_rows($girls);
		
		if ($count < 1) {
			
			echo "
			<div class='alert alert-warning alert-dismissible mesefhere fade-in' role='alert'>
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
			<strong class='glyphicon glyphicon-check'>"."Alert!"."</strong>" ." <p>Sorry you have not registered a student yet for <b>".
			 $course_name. " , ".$session. "</b> academic session thus you can not mark attendance for the course. click on this link to return to dashboard 
			 <button type='button' class='btn btn-info   fa fa-home' data-dismiss='modal'>&nbsp; &nbsp;<span>dashboard</span></button></p> 
			</button>
			</div>";
		}

		else{
			
			echo "
			<div class='alert alert-warning  mesefhere fade-in' role='alert'>
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
			<strong class='glyphicon glyphicon-fire'>"."Yess!"."</strong>" ." <p>you are about to mark your students attendance for <b>".$course_name."</b>. 
			Click the button below to continue 
				<a href='attendancesheet.php?course=".$course_id."&session=".$session."'><button type='button'  class='btn btn-info threesome fa fa-sign-in' >&nbsp; &nbsp;<span>Go</span></button></p> 
			</button></a>
			</div>";
		}
		
	}



	if (!empty($_GET['trained'])) {

		$course_id = $_GET['trained'];

		$jul = "SELECT * FROM course WHERE id = '$course_id' AND lect_id = '$lect_id'";
                  $mima =mysqli_query($db,$jul);
                  $investigate = mysqli_fetch_array($mima);

                  $course_name = $investigate['course_name'];
                  $session = $investigate['session'];
                  $credit = $investigate['credit'];
                  $semester = $investigate['semester'];


		
			
			echo "<a  href='printresult.php?course_id=".$course_id."&course_name=".$course_name."&session=".$session."&semester=".$semester."&credit=".$credit."'><button  class='btn btn-info threesome fa fa-print' >&nbsp; &nbsp;<span>PRINT RESULT</span></button> 
			</button></a>";
		
		
	}

?>

	


				

                  

                  