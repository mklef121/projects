<?php 
include('../db.php') ; 
include'../function/function.php';
$lect_id = $_SESSION['id'];


//This is the POST field for inputing students info and course into database table student
        if (isset($_POST['night'])) {
           $counter = count($_POST['surn']);
            $surna = array();
            $firsta = array();
            $regn = array();
            $number = $_GET['couss'];
            $jul = "SELECT * FROM course WHERE id = '$number' ";
                  $mima =mysqli_query($db,$jul);
                  $investigate = mysqli_fetch_array($mima);
                  $dept = $investigate['course_name'];

            for ($i=0; $i < $counter; $i++) { 
               
               $surna = ucfirst(strtolower(clean($_POST['surn'][$i])));
               $firsta = ucfirst(strtolower(clean($_POST['first'][$i])));
               $regn = strtoupper(clean($_POST['reg'][$i]));

               $sleep="INSERT INTO student(course_id, lect_id, lname, fname, std_reg) VALUES ('$number', '$lect_id','$surna', '$firsta','$regn')";
               mysqli_query($db,$sleep);
                      
                        
                      
            }


                        ?>
                        <script type="text/javascript">
                                       
                                       window.location.href= 'index.php?onyi=accepted&course_name=<?php echo $dept ?>';
                          </script>

                        <?php

            
        }




        //This is the POST field for inputing results into database table course_result
        if (isset($_POST['danfulani'])) {
           $counter = count($_POST['cascore']);
            $cascore = array();
            $examscore = array();
            $std_id = array();
            $tscore = array();
            $grade = array();
            $course_id = $_GET['athome'];
            

            for ($i=0; $i < $counter; $i++) { 
               
               $cascore = clean($_POST['cascore'][$i]);
               $examscore = clean($_POST['exscore'][$i]);
               $tscore = clean($_POST['tscore'][$i]);
               $grade = clean($_POST['grade'][$i]);
               $std_id = clean($_POST['id'][$i]);

               $sleep="INSERT INTO course_result(course_id, lect_id, ca_score, exam_score, total_score, grade, std_id) VALUES ('$course_id', '$lect_id','$cascore', '$examscore','$tscore', '$grade', '$std_id')";
               mysqli_query($db,$sleep);
                      
            }

              $howwegodo="SELECT * FROM course WHERE id = $course_id";
              $rose=mysqli_query($db,$howwegodo);
              $list = mysqli_fetch_array($rose);
              $course_name = $list['course_name'];
            ?>
                        <script type="text/javascript">
                                       
                                       window.location.href= 'index.php?mad=gabriel&bless=<?php echo $counter ?>&course_name=<?php echo $course_name; ?>';
                          </script>

                        <?php

            
        }




        //This is the POST field for taking/Marking students attendance into the course_attend table
        if (isset($_POST['victor'])) {
           $counter = count($_POST['id']);
           $datemmi = $_POST['datelate'];
            $attendance = array();
            $std_id = array();
            $course_id = $_GET['elehon'];
            

            for ($i=0; $i < $counter; $i++) {

               if (isset($_POST['attend'][$i])) {
                 $attendance = "present";
               }
               else{
                $attendance ="absent";
               }
               
               $std_id = clean($_POST['id'][$i]);

               $sleep="INSERT INTO course_attend(course_id, lect_id, std_id, presence, dater) VALUES ('$course_id', '$lect_id','$std_id', '$attendance','$datemmi')";
               mysqli_query($db,$sleep);
                      
            }
            $howwegodo="SELECT * FROM course WHERE id = $course_id";
              $rose=mysqli_query($db,$howwegodo);
              $list = mysqli_fetch_array($rose);
              $course_name = $list['course_name'];

              
            ?>
                        <script type="text/javascript">
                                       
                                       window.location.href= 'index.php?gbedu=brain&beast=<?php echo $counter." Student(s)"?>&course=<?php echo $course_name ?>';
                          </script>

                        <?php

            
        }


?>