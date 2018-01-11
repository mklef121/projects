<?php 
	include('db.php');
    $id = $_SESSION['id'];

    $supdate1 = "UPDATE lecturer SET status = 'offline' WHERE id = '$id'";
    mysqli_query($db,$supdate1);
    session_regenerate_id();
    session_destroy();
    header('location:index.html');
?>