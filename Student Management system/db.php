<?php
    @session_start();
    date_default_timezone_set ("Africa/Lagos");
  	$host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbase = 'group';
    $db = mysqli_connect($host,$user,$pass) or die(mysqli_error());
    mysqli_select_db($db,$dbase);

?>