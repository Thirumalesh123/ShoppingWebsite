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
foreach($products as $product)  
 {
     ?>
 <h1 align="center">STOCK  UPDATE FORM.</h1><br>
<form action="./stockupdate?token='.<?php echo  base64_encode(base64_encode(base64_encode($product->id))); ?>.'" method="POST" enctype="multipart/form-data">
  <div class="container">
    <?php echo "<div style='color:green; background-color:white; margin-left:100px;'>".$this->session->flashdata("upload_done")."</div>"; ?> 
    <label for="product_id" name="product_id" value="<?php echo $product->product_id; ?>"><b>PRODUCT ID :&nbsp &nbsp  &nbsp &nbsp&nbsp &nbsp  &nbsp &nbsp  &nbsp  &nbsp  &nbsp  &nbsp&nbsp &nbsp
     &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp  &nbsp  
       <?php echo $product->product_id; ?></b></label><BR>    
    <label for="title"><b>NAME OF THE PRODUCT : &nbsp  &nbsp &nbsp  &nbsp  &nbsp  &nbsp  &nbsp &nbsp  &nbsp  &nbsp  &nbsp  &nbsp <?php echo $product->title; ?></b></label><br>
     
    <label for="quantity"><b> CATEGORY :</b></label>&nbsp &nbsp  &nbsp &nbsp&nbsp &nbsp  &nbsp &nbsp  &nbsp  &nbsp  &nbsp  &nbsp&nbsp &nbsp
     &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp  &nbsp &nbsp &nbsp <?php echo $product->category; ?><br>
     <label for="quantity"><b> QUANTITY :</b></label>&nbsp &nbsp  &nbsp &nbsp&nbsp &nbsp  &nbsp &nbsp  &nbsp  &nbsp  &nbsp  &nbsp&nbsp &nbsp
     &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp  &nbsp &nbsp &nbsp <?php echo $product->quantity; ?><br>
   
    <label for="category"><b>  QUANTITY :</b></label> &nbsp &nbsp  &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        <input type="number" placeholder="ENTER THE QUANTITY OF THE PRODUCTS" min=1 name="quantity" required ><br> <BR>
  <input type="submit" name='login' value="UPDATE">                                         
        </div>
         <?php
 }
 ?>
</form>
</body>
</html>
