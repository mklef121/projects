<?php 
	  include'../db.php';
    include'../function/function.php';
      
if(isset($_POST['upload'])){
        

      $email = strtolower(clean($_POST['email']));
      
      $name = ucwords(strtolower(clean($_POST['name'])));
      
      $department = ucwords(strtolower(clean($_POST['department'])));
      $phone = clean($_POST['phone']);
      $password = clean($_POST['password']);

      $password = password_hash("$password", PASSWORD_DEFAULT);
      $status = clean($_POST['status']);



/*Section for Uploading the Image image_format*/
      $imagename = $_FILES['image']['name'];
      $imagesize =$_FILES['image']['size'];
	  
      $imageitself = $_FILES['image']['tmp_name'];
      $imagetype = $_FILES['image']['type'];
      
      $secimagename = mt_rand(100,100000)."_".$imagename;
      $thirdimagename = strtolower($secimagename);
      $finalimagename1 =str_replace(' ','_',$thirdimagename);
	  $finalimagename =str_replace(' ','_',$finalimagename1);





        $allowedimageExtensions = array("jpg","jpeg","gif","png","tif");
        $ipath_parts = pathinfo($imagename);
        $iext = strtolower($ipath_parts['extension']);

        //OR Use this
        $image_format = strtolower(end(explode('.',$imagename)));
	  




 if (!in_array($iext,$allowedimageExtensions)) {
            header('location: index.php?imageextension=notgoodatall');
        }

  else{

      /* My folders to hold the book and its image */
          $imagefolder = "../image/";
          
          $date = date('d-M-Y');
      	
      	
      	 if ( move_uploaded_file($imageitself,$imagefolder.$finalimagename)) {
          	
                  $sql="INSERT INTO lecturer (email,password,name,phone,image,department,dateadded,adminid,access_type) VALUES ('$email','$password','$name','$phone','$finalimagename','$department','$date','1','$status')";
                  $better="INSERT INTO user_table (email,password,access_type) VALUES ('$email','$password','$status')";
                  $result =  mysqli_query($db,$sql);
                  $money =  mysqli_query($db,$better);
                      if(isset($result)  and isset($money)) {  
                          header("location: index.php?success=successful");  
                      }
                     else
                          {
                          ?>
                          <script>
                          alert('error while uploading infomation to Database');
                          window.location.href='index.php?fail';
                          </script>
                          <?php
                          }


            }
          /* end of if statement  two*/
          	
        		else{
                  ?>
                  <script>
                  alert('error while uploading file');
                  window.location.href='index.php?fail';
                  </script>
                  <?php 
         		}
      		

    }
    
   
}








if(isset($_POST['admin'])){
        

      $email = strtolower(clean($_POST['email']));
      
      $name = ucwords(strtolower(clean($_POST['name'])));
      
      $phone = clean($_POST['phone']);
       $country = clean($_POST['country']);
      $password = clean($_POST['password']);

      $password = password_hash("$password", PASSWORD_DEFAULT);
       $status = clean($_POST['status']);



/*Section for Uploading the Image image_format*/
      $imagename = $_FILES['image']['name'];
      $imagesize =$_FILES['image']['size'];
    
      $imageitself = $_FILES['image']['tmp_name'];
      $imagetype = $_FILES['image']['type'];
      
      $secimagename = mt_rand(100,100000)."_".$imagename;
      $thirdimagename = strtolower($secimagename);
      $finalimagename1 =str_replace(' ','_',$thirdimagename);
    $finalimagename =str_replace(' ','_',$finalimagename1);





        $allowedimageExtensions = array("jpg","jpeg","gif","png","tif");
        $ipath_parts = pathinfo($imagename);
        $iext = strtolower($ipath_parts['extension']);

        //OR Use this
        $image_format = strtolower(end(explode('.',$imagename)));
    




 if (!in_array($iext,$allowedimageExtensions)) {
            header('location: index.php?imageextension=notgoodatall');
        }

  else{

      /* My folders to hold the book and its image */
          $imagefolder = "../image/";
          
          $date = date('d-M-Y');
        
        
         if ( move_uploaded_file($imageitself,$imagefolder.$finalimagename)) {
            
                  $sql="INSERT INTO admin (email,name,password,location,registereddate,phone,image,access_type) VALUES ('$email','$name','$password','$country','$date','$phone','$finalimagename','$status')";
                  $better="INSERT INTO user_table (email,password,access_type) VALUES ('$email','$password','$status')";
                  $result =  mysqli_query($db,$sql);
                  $money =  mysqli_query($db,$better);
                      if(isset($result)  and isset($money)) {  
                          header("location: index.php?admin=successful");  
                      }
                     else
                          {
                          ?>
                          <script>
                          alert('error while uploading infomation to Database');
                          window.location.href='index.php?fail';
                          </script>
                          <?php
                          }


            }
          /* end of if statement  two*/
            
            else{
                  ?>
                  <script>
                  alert('error while uploading file');
                  window.location.href='index.php?fail';
                  </script>
                  <?php 
            }
          

    }
    
   
}
      
?>