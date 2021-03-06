
  
  <!-- Start Row -->
  <div class="row">
    

    <div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-title"> 
          Fill in the Faculty details below.
        </div>

            <div class="panel-body">

              <form method="post" id="facform">

                <input type="hidden" class="form-control" id="facadd" name="facadd" >
                <div class="form-group">
                  <label for="input1" class="form-label">Name Of Faculty </label>
                  <input type="text" class="form-control" id="name" name="name">
                </div>

               


                <p><textarea class="textarea form-control wysihtml5-textarea" id = "description" placeholder="Short Description Of Faculty"  style="height:200px; width:100%;"></textarea></p>
                <button class="btn btn-default" id="enter">Send Post</button>

                <div id="error"></div>

              </form>

            </div>

      </div>
    </div>
    

  </div>
  <!-- End Row -->

  


<!-- ================================================
jQuery Library
================================================ -->
<script type="text/javascript" src="../js/jquery.min.js"></script>

<!-- ================================================
Bootstrap Core JavaScript File
================================================ -->
<script src="../js/bootstrap/bootstrap.min.js"></script>



<!-- ================================================
Bootstrap WYSIHTML5
================================================ -->
<!-- main file -->
<script type="text/javascript" src="../js/bootstrap-wysihtml5/wysihtml5-0.3.0.min.js"></script>
<!-- bootstrap file -->
<script type="text/javascript" src="../js/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>

<!-- ================================================
Summernote
================================================ -->
<script type="text/javascript" src="../js/summernote/summernote.min.js"></script>


<script>


  /* BOOTSTRAP WYSIHTML5 */
  $('.textarea').wysihtml5();

  /* SUMMERNOTE*/

 $('#summernote').summernote();

///////////////////////////////////////////////////////////////////////////


$("#enter").click(function (event){
      event.preventDefault();
      var name = $('#name').val();
      var html = $('#description').val();
      $("#facadd").val(html);
      var real = $('#facadd').val();

      //////////////////////////////////////////
      var letters = /^[a-zA-Z]+$/;
      var phonevali = /^\s*(?:\+?(\d{1,3}))?([-. (]*(\d{3})[-. )]*)?((\d{3})[-. ]*(\d{2,4})(?:[-.x ]*(\d+))?)\s*$/gm;


   if (name=="" || name.length < 1 ) {
            $('#error').html(errorme(" Sorry your Name input is empty or contains unaccepted characters and numbers") );
            $('#name')[0].focus();

     }else if (real=="" || real.length < 1 ) {
            $('#error').html(errorme(" Sorry your Faculty Description is empty ") );
            $('#description')[0].focus();

     }else{
        //alert(real);
        var details = $('#facform').serialize();
        $.ajax({

        type: "POST",                                            // GET or POST
        url: "process/alladmins.php", 
        data: details,                                          // Path to file
       // timeout: 2000,                                           // Waiting time
        beforeSend: function() {                               // Before Ajax 
          $('#enter').text('PROCESSING ... '); 
         $("#enter").attr("disabled", true);
           $('#error').html(' ');     // Load message
        },
        complete: function() {                                  // Once finished
         $('#enter').text(' Submit '); 
         $("#enter").removeAttr("disabled");                              // Clear message
        },
        success: function(data) {
          var me = data;
          if (me == 'great') {
          document.getElementById("facform").reset();
         $('#error').html(errorme("Your New Registration Was Succesful. ")).fadeIn(10000);
         }else{
          $('#error').html(errorme(data)).fadeIn(10000);
         }
        },
        error: function() {                                     // Show error msg 
         $('#error').html(errorme(" Error, Kindly Check Your Internet "));
        }
  });
    
     } //End Of Else


}); //End Of Onclick

function errorme(msg){
    var display = '<br><div class="alert alert-danger fade in col-xs-12" role="alert">';
    display += '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
    display += '<span class="fa fa-warning" aria-hidden="true"></span>';
    display += '<span class="sr-only">Error:</span>';
    display += '<label>  '+ msg +'  </label>';
    display += '</div> <br>';

    return display;

   }; //erorr mesage div

    function emailvali(mail){

        var are = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
        if (mail == '' || !(are.test(mail))) {
            return true;
        }
    };


</script>


