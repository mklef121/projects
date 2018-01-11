<?php
include('../db.php');
include'../function/function.php';
$lect_id = $_SESSION['id'];
$course_name = ucwords(strtolower(clean($_GET['coursename'])));
$course_code = ucwords(strtolower(clean($_GET['coursecode'])));
$session = $_GET['session'];
$semester = $_GET['semester'];
$credit = $_GET['credithour'];
$course_name2 = trim($course_name);
$course_code2 = trim($course_code);


$querylogin = "SELECT * FROM course WHERE course_name='$course_name' and course_code='$course_code' and session='$session' and semester='$semester' and credit='$credit'";
if (empty($course_name2) == TRUE) {
	echo "
		<div class='alert alert-warning alert-dismissible mesefhere fade-in' role='alert' >
		<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
		<strong class='glyphicon glyphicon-check'>"."Alert!"."</strong>" ." <p>Please Insert a course name</p> 
		</button>
		</div>";
}

elseif (empty($course_code2) == TRUE) {
	echo "
		<div class='alert alert-warning alert-dismissible mesefhere fade-in' role='alert'>
		<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
		<strong class='glyphicon glyphicon-check'>"."Alert!"."</strong>" ." <p>Please Insert a course code</p> 
		</button>
		</div>";
}

else{

	$sqlme = "INSERT INTO course (lect_id,course_name,course_code,session,semester,credit) VALUES ('$lect_id ', '$course_name', '$course_code', '$session', '$semester','$credit')";

	$ins = mysqli_query($db,$sqlme);

		if (isset($ins)) {
		echo "
			<div class='alert alert-warning alert-dismissible mesefhere fade-in' role='alert'>
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
			<strong class='glyphicon glyphicon-check'>"."Alert!"."</strong>" ." <p>Your Course has been added successfully. You can add another course or close.</p> 
			</button>
			</div>";
		# code...
		}

		else
			echo "
			<div class='alert alert-warning alert-dismissible' role='alert fade-in'>
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
			<strong class='glyphicon glyphicon-check'>"."Alert!"."</strong>" ." <p>problem inserting Course</p> 
			</button>
			</div>";
	
}






?>


     
                    