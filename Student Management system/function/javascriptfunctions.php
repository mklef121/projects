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
</script>
