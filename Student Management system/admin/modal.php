<?php include'../db.php' ;?>
<script>
  var openFile = function(event) {
    var input = event.target;

    var reader = new FileReader();
    reader.onload = function(){
      var dataURL = reader.result;
      var output = document.getElementById('output');
      output.src = dataURL;
    };
    reader.readAsDataURL(input.files[0]);
    document.getElementById('output').setAttribute("style","display:block;width:200px");
    document.getElementById('output').setAttribute("style","display:block;height:200px");
    document.getElementById('output').style.width='200px';
    document.getElementById('output').style.height='200px';
  };


  var startfile = function(event) {
    var input = event.target;

    var reader = new FileReader();
    reader.onload = function(){
      var dataURL = reader.result;
      var output = document.getElementById('out');
      output.src = dataURL;
    };
    reader.readAsDataURL(input.files[0]);
    document.getElementById('out').setAttribute("style","display:block;width:200px");
    document.getElementById('out').setAttribute("style","display:block;height:200px");
    document.getElementById('out').style.width='200px';
    document.getElementById('out').style.height='200px';
  };
</script>


<!-- Modal for lecturer addition-->
<div id="lecturer" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Lecturers Details</h4>
      </div>

   
      <div class="modal-body">
         <form action="upload.php" method="POST" enctype="multipart/form-data">
        
                <div class="form-group">
                    <label for="cousecode">Lecturers Name: </label>
                    <div class="input-group">
                        <span class="input-group-addon rose" ><i class="fa fa-user"></i></span>
                        <input type="text" name ="name" class="form-control" id="coursecode" placeholder="Name" required>
                    </div>
                </div>

                 <div class="form-group">
                    <label for="cousecode">@Email:</label>
                    <div class="input-group">
                        <span class="input-group-addon rose" ><i class="fa fa-envelope-o"></i></span>
                        <input type="email" name ="email" class="form-control" id="coursecode" placeholder="Email" required>
                    </div>
                </div>


                 <div class="form-group">
                    <label for="cousecode">Password:</label>
                    <div class="input-group">
                        <span class="input-group-addon rose" ><i class="fa fa-key"></i></span>
                        <input type="password" name ="password" pattern=".{6,}"  title="Minimum 6 characters required" class="form-control" id="coursecode" placeholder="Password" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="cousecode">Phone Number:</label>
                    <div class="input-group">
                        <span class="input-group-addon rose" ><i class="fa fa-phone"></i></span>
                        <input type="text" name ="phone" class="form-control" id="coursecode" placeholder="Phone Number" required>
                    </div>
                </div>


                <div class="form-group">
                    <label for="cousecode">Department:</label>
                    <div class="input-group">
                        <span class="input-group-addon rose" ><i class="fa fa-cog"></i></span>
                        <input type="text" name ="department" class="form-control" id="coursecode" placeholder="Department" required>
                    </div>
                </div>


                <div class="form-group">
                    <label for="cousecode">Image:</label>
                    <div class="input-group">
                        <span class="input-group-addon rose" ><i class="fa fa-picture-o"></i></span>
                        <input type="file" name ="image" class="form-control" accept='image/*' onchange='openFile(event)' placeholder="Lecturer Image" required>
                    </div>
                </div>

                <input type="hidden" name ="status" class="form-control" value="lecturer" required>

                <br>
                <img id='output' >

                  <br>
                <button type="submit" name="upload" class="btn btn-primary btn-md"> Submit</button>

          </form>
                
      </div>

    
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>





<!-- Modal for admin addition-->
<div id="admin" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Administrators Details</h4>
      </div>
      <div class="modal-body">
        <form action="upload.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="cousecode">Admin Name: </label>
                    <div class="input-group">
                        <span class="input-group-addon rose" ><i class="fa fa-user"></i></span>
                        <input type="text" name ="name" class="form-control" id="coursecode" placeholder="Name" required>
                    </div>
                </div>

                 <div class="form-group">
                    <label for="cousecode">@Email:</label>
                    <div class="input-group">
                        <span class="input-group-addon rose" ><i class="fa fa-envelope-o"></i></span>
                        <input type="email" name ="email" class="form-control" id="coursecode" placeholder="Email" required>
                    </div>
                </div>


                 <div class="form-group">
                    <label for="cousecode">Password:</label>
                    <div class="input-group">
                        <span class="input-group-addon rose" ><i class="fa fa-key"></i></span>
                        <input type="password" name ="password" class="form-control" id="coursecode" placeholder="Password" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="cousecode">Phone Number:</label>
                    <div class="input-group">
                        <span class="input-group-addon rose" ><i class="fa fa-phone"></i></span>
                        <input type="text" name ="phone" class="form-control" id="coursecode" placeholder="Phone Number" required>
                    </div>
                </div>


                <div class="form-group">
                    <label for="cousecode">Location</label>
                    <div class="input-group">
                        <span class="input-group-addon rose" ><i class="fa fa-globe"></i></span>
                        <select name="country" class="form-control">
                            <?php 
                              $q = "SELECT * FROM country";
                                $w =mysqli_query($db,$q);
                              
                              
                              while($row = mysqli_fetch_array($w)):
                              ?>
                              <option value="<?php echo $row['name'];  ?>"> <?php echo $row['name'];  ?></option>
                                        
                                        <?php endwhile; ?>
                        </select>
                    </div>
                </div>


                 <div class="form-group">
                    <label for="cousecode">Image:</label>
                    <div class="input-group">
                        <span class="input-group-addon rose" ><i class="fa fa-picture-o"></i></span>
                        <input type="file" name ="image" class="form-control" accept='image/*' onchange='startfile(event)' placeholder="Lecturer Image" required>
                    </div>
                </div>

            <input type="hidden" name ="status" class="form-control" value="admin" required>
              <br>
                <img id='out' >

              <br>
                <button type="submit" name="admin" class="btn btn-primary btn-md"> Submit</button>

            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
