<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<link href="<?=base_url()?>/assets/nav.css" rel="stylesheet" type="text/css">
<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<script src="./assets/nav.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<?php
foreach($details as $detail)  
 {
     ?>
<div class="overlay">
    <form action="./logo" method="post"enctype="multipart/form-data">
    <h1 align="center">Enter website Details</h1><br>
     <input type="hidden" style="visibility:hidden;" name="size" value="1000000">
  	<div align="center">
	
	<img id="blah" src="<?php echo $detail->logo; ?>" alt="your image" style="display:;" />
      <label for="files"  name="files[]" class="btn" > UPLOAD LOGO</label>
      <input id="files" style="visibility:hidden;" id="output" type="file"  name="userfile" onchange="readURL(this);">
      <p align="left" style=" margin-left:25%;" >SITE NAME</p>
    <input type="text" name="site_name" placeholder="Enter your website name" value="<?php echo $detail->site_name; ?>"  ><br><br>
    <input type="submit" name="updatelogo" value="SAVE CHANGES">
 
  	</div>
  	
  		   </form>
         
         <?php
 }
 ?>
</div>
	</body>
	</html>