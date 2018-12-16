<!DOCTYPE html>
<html>
 <head>
  <title>Webslesson Tutorial | Facebook Style Header Notification using PHP Ajax Bootstrap</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br /><br />
  <div class="container">
   <h2 align="center">Facebook Style Header Notification using PHP Ajax Bootstrap</h2>
   <br />
   <form method="post" id="namaform">
    <div class="form-group">
     <label>Enter Subject</label>
     <input type="text" name="subject" id="subject" class="form-control">
    </div>
    <div class="form-group">
     <label>Enter Comment</label>
     <textarea name="comment" id="comment" class="form-control" rows="5"></textarea>
    </div>
    <div class="form-group">
     <input type="submit" name="post" id="post" class="btn btn-info" value="Post" />
    </div>
   </form>

   <div class="tampil">
   
   </div>
   
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 
 
 
 $('#namaform').on('submit', function(event){
  event.preventDefault();
  if($('#subject').val() != '' && $('#comment').val() != '')
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"insert.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     $('#namaform')[0].reset();
    }
   });
  }
  else
  {
   alert("Both Fields are Required");
  }
 });
 
});
</script>