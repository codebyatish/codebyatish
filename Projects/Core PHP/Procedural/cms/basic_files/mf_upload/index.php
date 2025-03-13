<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
  
$(function() {
  var status = $('.status');
  var percent = $('.percent');
  var bar = $('.bar');
 
  $('form').ajaxForm({
    dataType:'json',
    beforeSend: function() {
        status.fadeOut();
        bar.width('0%');
        percent.html('0%');
    },
 
    /* progress bar call back*/
    uploadProgress: function(event, position, total, percentComplete) {
        var pVel = percentComplete + '%';
        bar.width(pVel);
        percent.html(pVel);
    },
 
    /* complete call back */
    complete: function(data) {
        data = $.parseJSON(data.responseText);
        status.html(data + ' Files uploaded!').fadeIn();
    }
 
  });
});


</script>
  <style type="text/css">
    .container {
  background: #fff;
  border: 1px solid #ccc;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
  margin: 10px auto;
  padding: 10px 0;
  text-align: center;
  width: 600px;
}
.status {
  background: #008000;
  color: #fff;
  display: none;
  margin: 8px 0;
  padding: 5px;
}
.progress {
  margin: 10px auto;
  position: relative;
  width: 90%;
}
.bar {
  background: #008DE6;
  height: 20px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
  transition: width 0.3s ease 0s;
  width: 0;
}
.percent {
  color: #333;
  left: 48%;
  position: absolute;
  top: 0;
}
 
.button{
  margin: 5px 0;
}
  </style>
</head>
<body>

<div class="container">
  <div class="status"></div>
 
  <!-- multiple file upload form -->
  <form method='post' action='' enctype="multipart/form-data">
    <input type="file" id='files' name="files[]" multiple><br>
    <input type="button" id="submit" value='Upload'>
  </form>
 
<div id='successfully'></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
  
$(document).ready(function(){
$('#submit').click(function(){
var form_data = new FormData();
var allfiles = document.getElementById('files').files.length;
for (var i = 0; i < allfiles; i++) {
form_data.append("files[]", document.getElementById('files').files[i]);
}
$.ajax({
url: 'upload.php', 
type: 'post',
data: form_data,
dataType: 'json',
contentType: false,
processData: false,
success: function (success) {
var src = success;
$('#successfully').append('Your Multiple File is Upload.');
}
});
});
});


</script>

</body>
</html>
