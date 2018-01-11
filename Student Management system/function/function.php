<?php // Function to trim Data of Evil intentions............
    function clean($data) {
       include('../db2.php');
        
        $data = stripslashes($data);
        $data = htmlentities( $data, ENT_QUOTES, 'utf-8' );
        $data = htmlspecialchars($data);
        $data = strip_tags($data);
        $data = mysqli_real_escape_string($db, $data);
        

        return $data;
  }
  
  
  function send_email($from, $to, $subject, $message){
         
         $header = "From: " .$from. "\r\n";
         $header .= "Cc: mbooksmailer@mbooks.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         return  $retval;
         
    }

  ?>