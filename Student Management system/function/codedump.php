<!-- All My Javascript, Jquery and Ajax Scripts goes here -->
<script type="text/javascript">
$(document).ready(function(){
  $("#subme").click(function(){
     var coursename = $("#coursename").val() ;
     var coursecode  = $("#coursecode").val();
     var session = $("#session").val();
     var semester  = $("#semester").val();
     var credithour  = $("#credithour").val();

     $.ajax({
      method: "post";
      url: "addcourse.php"
      data: {coursename: coursename, coursecode: coursecode, session: session, semester: semester, credithour: credithour}
     })

     .done(function(data){
      $("#result").html(data);
     });

  });

});

</script>
