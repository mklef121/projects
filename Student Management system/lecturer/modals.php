<?php include('../db.php') ; 
      include('../function/ajaxfunctions.php') ;
      $lect_id = $_SESSION['id'];
?>
<meta http-equiv="refresh" content="" />





<style type="text/css">
/* Modified styles by Miracle*/

@-webkit-keyframes fadeIn {
  to {
    opacity: 1;
  }
}

@keyframes fadeIn {
  to {
    opacity: 1;
  }
}

.fade-in {alert-danger
    -webkit-animation: fadeIn .5s ease-in 1 forwards;
  animation: fadeIn .5s ease-in 1 forwards;
  opacity: 0;
}
.threesome:hover{ background-color:  #B22222;
                  color: #fff;
                  transition: all 0.5s;
                  cursor: pointer;} 
.threesome:focus{ background-color:  #8B008B;
                  color: #fff}
.threesome:active{ background-color: #8B0000;
                   color: #fff}

.threesome span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.3s;
}

.threesome span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -15px;
  transition: 0.3s;
}

.threesome:hover span {
  padding-right: 25px;
}

.threesome:hover span:after {
  opacity: 1;
  right: 0;
}

.rose{background-color: #AFEEEE}

.mesefhere{ 
            transition: 0.7s;
          }

</style>



<!-- ALL MY MODALS WILL BE HERE FOR NOW -->


<!-- Modal for Adding Courses -->
  <div class="modal fade" id="courses" role="dialog">
    <div class="modal-dialog modal-md">


<!-- Modal FOR  ADDING COURSES -->
      <div class="modal-content">
            <div class="modal-header"> <!--modal Header-->
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Add new courses by properly filling in the required columns </h4>
            </div> <!--End of modal Header-->

            <div class="modal-body">  <!--modal Body and form-->
             <form id="myform">
                  <div class="form-group">
                    <label for="cousecode">Course Code </label>
                    <div class="input-group">
                        <span class="input-group-addon rose" ><i class="fa fa-code"></i></span>
                        <input type="text" name ="coursecode" class="form-control" id="coursecode" placeholder="Course Code" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="coursename">Course Name</label>
                      <div class="input-group">
                       <span class="input-group-addon rose"><i class="fa fa-th-large"></i></span>
                       <input type="text" name = "coursename" class="form-control" id="coursename" placeholder="Course Name" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="credithour">Credit Hour</label>
                      <div class="input-group">
                       <span class="input-group-addon rose"><i class="fa fa-hourglass"></i></span>
                         <select class="form-control" id="credithour" name ="credithour" required>
                          <option value = "1">1</option>
                          <option value = "2">2</option>
                          <option value = "3">3</option>
                          <option value = "4">4</option>
                          <option value = "5">5</option>
                          <option value = "6">6</option>
                          <option value = "7">7</option>
                        </select>
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="session">Session</label>
                      <div class="input-group">
                       <span class="input-group-addon rose"><i class="fa fa-calendar"></i></span>
                         <select class="form-control" id="session" name ="session" required>
                          <option value = "2015/2016">2015/2016</option>
                          <option value = "2016/2017">2016/2017</option>
                          <option value = "2017/2018">2017/2018</option>
                          <option value = "2018/2019">2018/2019</option>
                          <option value = "2019/2020">2019/2020</option>
                        </select>
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="semester">semester</label>
                      <div class="input-group">
                       <span class="input-group-addon rose"><i class="fa fa-bookmark-o"></i></span>
                         <select class="form-control" id="semester" name="semester" required>
                          <option value = "first">First Semester</option>
                          <option value= "second">Second Semester</option>
          
                        </select>
                      </div>
                  </div>

                  <button type="submit" class="btn btn-default threesome" id="subme" onclick='ajaxFunction()'><span>Submit</span></button> <br> </br>

                  <div id="result"> </div>
                  
              </form>
            </div> <!--End of modal body and form-->

            <div class="modal-footer"> <!--modal Footer-->
              <button type="button" class="btn btn-default threesome fa fa-power-off" data-dismiss="modal">&nbsp; &nbsp;<span>Close</span></button>
            </div> <!--End of modal Header-->
      </div>

  	</div>
 </div>





 <!-- Modal for Registering Students -->
  <div class="modal fade" id="studentsadd" role="dialog">
    <div class="modal-dialog modal-md">


<!-- Modal   content  -->
      <div class="modal-content">
            <div class="modal-header"> <!--modal Header-->
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h5 class="modal-title"><b>Please select a course to add students into. Make sure you have good internet</b> </h5>
            </div> <!--End of modal Header-->

            <div class="modal-body">  <!--modal Body and form-->
             
             <form id="meform">

                  <div class="form-group">
                    <label for="course">Select Course</label>
                      <div class="input-group">
                       <span class="input-group-addon rose"><i class="fa fa-navicon"></i></span>
                         <select class="form-control" id="txtHint" name ="addstd"   onmouseover="showUser(this.value)" onchange="changeshit(this.value)">
                          <option value="none">Select a course</option>
                          
                         
                        </select>
                      </div>
                  </div>

                  <div id="element" class="form-group">

                  </div>
                  
              </form>
              <div id="mentor">
              </div>
            </div> <!--End of modal body and form-->

            <div class="modal-footer"> <!--modal Footer-->
              <button type="button" class="btn btn-default threesome fa fa-power-off" data-dismiss="modal">&nbsp; &nbsp;<span>Close</span></button>
            </div> <!--End of modal Header-->
      </div>

    </div>
 </div>






 <!-- Modal for Entering Students Results-->
  <div class="modal fade" id="resultentry" role="dialog">
    <div class="modal-dialog modal-md">


<!-- Modal   content  -->
      <div class="modal-content">
            <div class="modal-header"> <!--modal Header-->
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h5 class="modal-title"><b>Please select a course You want to grade your students on</b> </h5>
            </div> <!--End of modal Header-->

            <div class="modal-body">  <!--modal Body and form-->
             
             <form id="cali">

                  <div class="form-group">
                    <label for="course">Select Course</label>
                      <div class="input-group">
                       <span class="input-group-addon rose"><i class="fa fa-navicon"></i></span>
                         <select class="form-control" id="cali" name ="gradestd"   onchange="distribute(this.value)" >
                          <option value="none">Select a course</option>
                          <?php

                            $qu = "SELECT * FROM course WHERE lect_id = '$lect_id' ORDER BY course_name ASC";
                                     $mimi =mysqli_query($db,$qu); 
                                                                       
                                      while($row = mysqli_fetch_array($mimi)){
                                        ?>
                                               
                                      <option value="<?php echo $row['id'] ;?> "> <?php echo $row['course_name']."  ||  " . $row['course_code'] . "  ||  ".$row['session']." Session"; ?> </option>
                              
                                       <?php }
                          ?>
                         
                        </select>
                      </div>
                  </div>
                  <br>
                  <br>
                  <div id="osinachi" class="form-group">

                  </div>
                  
              </form>
              
            </div> <!--End of modal body and form-->

            <div class="modal-footer"> <!--modal Footer-->
              <button type="button" class="btn btn-default threesome fa fa-power-off" data-dismiss="modal">&nbsp; &nbsp;<span>Close</span></button>
            </div> <!--End of modal Header-->
      </div>

    </div>
 </div>





 <!-- Modal for Entering Students Results-->
  <div class="modal fade" id="attendance" role="dialog">
    <div class="modal-dialog modal-md">


<!-- Modal   content  -->
      <div class="modal-content">
            <div class="modal-header"> <!--modal Header-->
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h5 class="modal-title"><b>Please select a course you want to mark your students for</b> </h5>
            </div> <!--End of modal Header-->

            <div class="modal-body">  <!--modal Body and form-->
             
             <form id="cali">

                  <div class="form-group">
                    <label for="course">Select Course</label>
                      <div class="input-group">
                       <span class="input-group-addon rose"><i class="fa fa-navicon"></i></span>
                         <select class="form-control" id="else" name ="chick"   onchange="house(this.value)" >
                          <option value="none">Select a course</option>
                          <?php

                            $qu = "SELECT * FROM course WHERE lect_id = '$lect_id' ORDER BY course_name ASC";
                                     $mimi =mysqli_query($db,$qu); 
                                                                       
                                      while($row = mysqli_fetch_array($mimi)){
                                        ?>
                                               
                                      <option value="<?php echo $row['id'] ;?> "> <?php echo $row['course_name']."  ||  " . $row['course_code'] . "  ||  ".$row['session']." Session"; ?> </option>
                              
                                       <?php }
                          ?>
                         
                        </select>
                      </div>
                  </div>
                  <br>
                  <br>
                  <div id="myplace" class="form-group">

                  </div>
                  
              </form>
              
            </div> <!--End of modal body and form-->

            <div class="modal-footer"> <!--modal Footer-->
              <button type="button" class="btn btn-default threesome fa fa-power-off" data-dismiss="modal">&nbsp; &nbsp;<span>Close</span></button>
            </div> <!--End of modal Header-->
      </div>

    </div>
 </div>



 <!-- Modal for Printing Students Results-->
  <div class="modal fade" id="printresult" role="dialog">
    <div class="modal-dialog modal-md">


<!-- Modal   content  -->
      <div class="modal-content">
            <div class="modal-header"> <!--modal Header-->
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h5 class="modal-title"><b>Please select a course you want to print its reult sheet</b> </h5>
            </div> <!--End of modal Header-->

            <div class="modal-body">  <!--modal Body and form-->
             
             <form >

                  <div class="form-group">
                    <label for="course">Select Course</label>
                      <div class="input-group">
                       <span class="input-group-addon rose"><i class="fa fa-navicon"></i></span>
                         <select class="form-control" id="else" name ="down"   onchange="rebuke(this.value)" >
                          <option value="none">Select a course</option>
                          <?php

                          $qu = "SELECT DISTINCT course_id FROM course_result WHERE lect_id  = '$lect_id'";

                                     $mimi =mysqli_query($db,$qu); 
                                                                       
                                      while($row = mysqli_fetch_array($mimi)){
                                        $course_id = $row['course_id'];
                                        $me = "SELECT * FROM course WHERE id = '$course_id' AND lect_id  = '$lect_id'";
                                        $mouth =mysqli_query($db,$me);
                                        $repent = mysqli_fetch_array($mouth);
                                        ?>
                                               
                                      <option value="<?php echo $row['course_id'] ;?> "> <?php echo $repent['course_name']."  ||  " . $repent['course_code'] . "  ||  ".$repent['session']." Session"; ?> </option>
                              
                                       <?php }
                          ?>
                         
                        </select>
                      </div>
                  </div>
                  <br>
                  <br>
                  </form>
                  <div id="evidence" >

                  </div>
                  
              
              
            </div> <!--End of modal body and form-->

            <div class="modal-footer"> <!--modal Footer-->
              <button type="button" class="btn btn-default threesome fa fa-power-off" data-dismiss="modal">&nbsp; &nbsp;<span>Close</span></button>
            </div> <!--End of modal Header-->
      </div>

    </div>
 </div>