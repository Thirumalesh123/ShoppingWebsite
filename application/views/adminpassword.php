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
<form action="./updateadminpassword?token='.<?php echo  base64_encode(base64_encode(base64_encode($detail->id))); ?>.'" method="post" enctype="multipart/form-data">
  <div class="container">
   <label for="product_id"><b>ADMIN NAME :</b></label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<?php echo $detail->admin; ?><br>
    <label for="contact"><b> PASSWORD :</b></label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        <input type="text"name="adminpassword" placeholder="Enter The Present Password"  required ><br> <BR>
        <?php echo "<div style='color:red; background-color:white; margin-left:100px;'>".$this->session->flashdata("adminpassworderror")."</div>"; ?> 
   
        <label for="contact"><b> PASSWORD :</b></label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        <input type="text"name="newadminpassword"  placeholder="Enter The New Password" required ><br> <BR>
    <label for="contact"><b>CONFIRM PASSWORD :</b></label> 
        <input type="text"name="confirmnewadminpassword"  placeholder="Enter The New Password" required ><br> <BR>
        <?php echo "<div style='color:red; background-color:white; margin-left:100px;'>".$this->session->flashdata("adminnewpasswordcheck")."</div>"; ?> 
   
        <input type="submit" name='upload' value="UPDATE">                                         
        </div>
       
         <?php
 }
 ?>
</form>
</body>
</html>
