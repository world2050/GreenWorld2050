<!DOCTYPE html>
<html>
<head> 
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
  <style type="text/css">
    input[type=file]{
      display: inline;
    }
    #image_preview{
      border: 1px solid black;
      padding: 10px;
    }
    #image_preview img{
      width: 200px;
      padding: 5px;
    }
  </style>


</head>
<body>


<div class=""> 
  <form action="uploadFile.php" method="post" enctype="multipart/form-data">
      <input type="file" id="uploadFile" name="uploadFile[]" multiple/>
      <input type="submit" class="btn btn-success" name='submitImage' value="Upload Image"/>
  </form>


  <br/>
  <div class="well" id="image_preview"></div>
</div>


</body>


<script type="text/javascript">
  

  $("#uploadFile").change(function(){
     $('#image_preview').html("");
     var total_file=document.getElementById("uploadFile").files.length;


     for(var i=0;i<total_file;i++)
     {
      $('#image_preview').append("<img class='img img-thumbnail'  src='"+URL.createObjectURL(event.target.files[i])+"'>");
     }


  });


  $('form').ajaxForm(function() 
   {
    alert("Uploaded SuccessFully");
   }); 


</script>
</html>