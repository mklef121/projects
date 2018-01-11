<?php 
include'../db.php';
$lect_id=$_SESSION['lect_id'];
if (isset($_POST['akpabio'])) {
	$id = $_GET['id'];

	$course_name = $_POST['name'];
	$course_credit = $_POST['credit'];
	$semester = $_POST['semester'];
	$code = $_POST['code'];
	$session = $_POST['session'];
	

	$comot="UPDATE course SET  course_name = '$course_name', 
												course_code = '$code',
											   session = '$session',
											   semester = '$semester',
											   credit = '$course_credit' 
											   WHERE id = '$id' AND lect_id = '$lect_id'";

      $israel = mysqli_query($db,$comot);
      if (isset($israel)) {
      	 header('location:editcourse.php?success=changed');
      }
}

?>