<!DOCTYPE html>
<html>
<head>
<link href="<?=base_url()?>/assets/upload.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<script src="./assets/nav.js"></script>
<link href="<?=base_url()?>/assets/nav.css" rel="stylesheet" type="text/css">

</head>
<style>
 body{
    background-color:#f1f1f1;
font-family: sans-serif;
background-repeat: no-repeat;
background-position: center;
background-attachment: fixed;
background-size: cover;
}

textarea 
{
  width: 80%;
  height:20%;
 margin-left:10%;
  background: #f1f1f1;
 
}

    label{
        margin-left:10%;
        margin-top:15px;
    }
   input[type=text],input[type=number],input[type="file"]{
  width: 80%;
  padding: 15px;
 margin-top:15px;
 margin-left:10%;
  display: inline-block;
  border: none;
  background: #f1f1f1;
  align:center;
}
select
{
background: #f1f1f1;    
width: 80%;
padding: 15px;
cursor: pointer;
 margin-top:15px;
 margin-left:10%;
  display: inline-block;
  border: none;
  align:center;
}
.option
{
background: #f1f1f1;    
width: 80%;
padding: 15px;
cursor: pointer;
 margin-top:15px;
 margin-left:10%;
  display: inline-block;
  border: none;
  align:center;
}

input[type="submit"]
{
    width: 80%;
  padding: 15px;
 margin-top:15px;
 margin-left:10%;
  display: inline-block;
  border: none;
  align:center;
}  </style>
  
<body>

<form action="./blockupload" method="POST" enctype="multipart/form-data" >

<h1 align="center" style="color:;">BLOCK  UPLOAD FORM</h1><br>
<div class="container" style="width:60%;">
       
    <label for="title"><b>NAME OF THE BLOCK </b></label><br>
       <input type="text" placeholder="ENTER NAME OF THE SLIDER" name="name" required><br> <br>
     <label for=" link"><b> TYPE OF THE PRODUCTS :</b></label><BR>
    <input type="text" placeholder="ENTER TYPE OF THE PRODUCTS" name="link" style="text-transform:uppercase;" required><br> <br>
   

    <label for="pics"><b> UPLOAD PICTURES OF SLIDER :</b></label><BR>
    <input required  type="file"  name="userfile" size="40">
       <input type="submit" name="submit" value="Upload"><br>
        <br>
         </div>
  
</form>

</body>
</html>