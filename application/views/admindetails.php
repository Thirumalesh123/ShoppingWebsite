<!DOCTYPE html>
<html>
<head>
<link href="<?=base_url()?>/assets/upload.css" rel="stylesheet" type="text/css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<script src="./assets/nav.js"></script>
<link href="<?=base_url()?>/assets/nav.css" rel="stylesheet" type="text/css">

</head>
<style>
textarea 
{
  width: 80%;
  height:20%;
 margin-left:10%;
  background: #f1f1f1;
 
}
    div {
  border-radius: px;
  background-color: white;
  padding: 20px;
}

    label{
        margin-left:10%;
        margin-top:15px;
    }
input[type=number],input[type="file"]{
  width: 30%;
  padding: 15px;
 margin-top:15px;
 margin-left:10%;
  display: inline-block;
  border: none;
  background: #f1f1f1;
  align:center;
}
input[type="date"],input[type=text]{
    width: 30%;
  padding: 15px;
 margin-top:15px;
 margin-left:10%;
  display: inline-block;
  border: none;
  background: #f1f1f1;
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
} 
select{
  width: 30%;
  padding: 15px;
 margin-top:15px;
 margin-left:10%;
  display: inline-block;
  border: none;
  background: #f1f1f1;
  align:center;
}

</style>
  
<body>
<?php
foreach($details as $detail)  
 {
     ?>
 <h1 align="center">ADMIN DETAILS</h1><br>
<form action="./updateadmindetails?token='.<?php echo  base64_encode(base64_encode(base64_encode($detail->id))); ?>.'" method="post" enctype="multipart/form-data">
  <div class="container">
   <label for="product_id"><b>ADMIN NAME :</b></label>&nbsp
        <input type="text"  name="admin"  value="<?php echo $detail->admin; ?>"required >  <br>
       
    <label for="gmail"><b>EMAIL ID:</b></label> &nbsp &nbsp  &nbsp &nbsp &nbsp
       <input type="text"  name="gmail" value="<?php echo $detail->gmail; ?>" required><br>           
   <label for="contact"><b> CONTACTS :</b></label> &nbsp &nbsp&nbsp
        <input type="text"name="contact"  title="ENTER A VALID PHONE NUMBER" pattern="[789][0-9]{9}" value="<?php echo $detail->contact; ?>" required ><br> <BR>
   <input type="submit" name='upload' value="UPDATE">                                         
        </div>
       
         <?php
 }
 ?>
</form>
</body>
</html>
