yg
<script type="text/javascript">



function rebuke(faith){
 
		if (faith == "none") {
        document.getElementById("evidence").innerHTML = " ";
        return;
	    } else { 
	        if (window.XMLHttpRequest) {
	            // code for IE7+, Firefox, Chrome, Opera, Safari
	            grind = new XMLHttpRequest();
	        } else {
	            // code for IE6, IE5
	            grind = new ActiveXObject("Microsoft.XMLHTTP");
	        }
	        grind.onreadystatechange = function() {
	            if (this.readyState == 4 && this.status == 200) {
	                document.getElementById("evidence").innerHTML = this.responseText;
	            }
	        };

		  }


		var shortcut = faith;
        var queryString = "?trained=" + shortcut;


        grind.open("GET","addstudent.php" + queryString,true);
        grind.send();

}



function house(gen){

		if (gen == "none") {
        document.getElementById("myplace").innerHTML = " ";
        return;
	    } else { 
	        if (window.XMLHttpRequest) {
	            // code for IE7+, Firefox, Chrome, Opera, Safari
	            grind = new XMLHttpRequest();
	        } else {
	            // code for IE6, IE5
	            grind = new ActiveXObject("Microsoft.XMLHTTP");
	        }
	        grind.onreadystatechange = function() {
	            if (this.readyState == 4 && this.status == 200) {
	                document.getElementById("myplace").innerHTML = this.responseText;
	            }
	        };

		  }


		var scratch = gen;
        var queryString = "?oil=" + scratch;


        grind.open("GET","addstudent.php" + queryString,true);
        grind.send();

}




function distribute(shine){

		if (shine == "none") {
        document.getElementById("osinachi").innerHTML = " ";
        return;
	    } else { 
	        if (window.XMLHttpRequest) {
	            // code for IE7+, Firefox, Chrome, Opera, Safari
	            xmlhttp = new XMLHttpRequest();
	        } else {
	            // code for IE6, IE5
	            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	        }
	        xmlhttp.onreadystatechange = function() {
	            if (this.readyState == 4 && this.status == 200) {
	                document.getElementById("osinachi").innerHTML = this.responseText;
	            }
	        };

		  }


		var scratch = shine;
        var queryString = "?henessy=" + scratch;


        xmlhttp.open("GET","addstudent.php" + queryString,true);
        xmlhttp.send();

}




function miracleme(){

	$("#meform").submit(function(){
			return false;
		});

		var ajaxRequest;

	   try{
	      
	      // Opera 8.0+, Firefox, Safari
	      ajaxRequest = new XMLHttpRequest();
	   }catch (e){
	   
	      // Internet Explorer Browsers
	      try{
	         ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
	      }catch (e) {
	      
	         try{
	            ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
	         }catch (e){
	      
	            // Something went wrong
	            alert("Your browser broke!");
	            return false;
	         }
	      }
	   }


	   ajaxRequest.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

            	var ezenwanyi = this.responseText;
            	
                document.getElementById("mentor").innerHTML = ezenwanyi; 
                
            }
        };

	        // Now get the value from user and pass it to
	   // server script.
	   var course = document.getElementById('txtHint').value;
	   var number = document.getElementById('addition').value;
	   
	   var queryString = "?joshtalk=" + course ;

	   queryString +=  "&andyyarn=" + number;
	   
	   	ajaxRequest.open("GET","addstudent.php" + queryString,true);
        ajaxRequest.send();

}


function showUser(strip) {


  		var xmlhttp;  // The variable that makes Ajax possible!
    
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };

        

        
        var messi = strip;
        var queryString = "?test=" + messi ;
	   
	   

	   	xmlhttp.open("GET","addstudent.php" + queryString,true);
        xmlhttp.send();
    
}

function changeshit(stripper){

		if (stripper == "none") {
        document.getElementById("element").innerHTML = " ";
        return;
	    } else { 
	        if (window.XMLHttpRequest) {
	            // code for IE7+, Firefox, Chrome, Opera, Safari
	            xmlhttp = new XMLHttpRequest();
	        } else {
	            // code for IE6, IE5
	            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	        }
	        xmlhttp.onreadystatechange = function() {
	            if (this.readyState == 4 && this.status == 200) {
	                document.getElementById("element").innerHTML = this.responseText;
	                clearinput();
	            }
	        };

		  }


		var messisi = stripper;
        var queryString = "?testis=" + messisi;


        xmlhttp.open("GET","addstudent.php" + queryString,true);
        xmlhttp.send();

}


function clearinput() {
	$("#myform").submit(function(){
			return false;
		});

	$("#myform :input").each( function(){
		$(this).val(' ');
	});
}


</script>

<script type="text/javascript">
	/* ajax functions that creates ajax object */
	var ajaxRequest;  // The variable that makes Ajax possible!
	function ajaxFunction(){

		$("#myform").submit(function(){
			return false;
		});

		

	   try{
	      
	      // Opera 8.0+, Firefox, Safari
	      ajaxRequest = new XMLHttpRequest();
	   }catch (e){
	   
	      // Internet Explorer Browsers
	      try{
	         ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
	      }catch (e) {
	      
	         try{
	            ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
	         }catch (e){
	      
	            // Something went wrong
	            alert("Your browser broke!");
	            return false;
	         }
	      }
	   }


	   ajaxRequest.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("result").innerHTML = this.responseText;
            }
        };

	        // Now get the value from user and pass it to
	   // server script.
	   var code = document.getElementById('coursecode').value;
	   var name = document.getElementById('coursename').value;
	   var credit = document.getElementById('credithour').value;
	   var sess = document.getElementById('session').value;
	   var sem = document.getElementById('semester').value;
	   var queryString = "?coursecode=" + code ;
	   
	   queryString +=  "&coursename=" + name + "&credithour=" + credit + "&session=" + sess + "&semester=" + sem;

	   	ajaxRequest.open("GET","addcourse.php" + queryString,true);
        ajaxRequest.send();
        
        
	}




</script>