<!DOCTYPE html>
<html>
<head>
<link href="<?=base_url()?>/assets/upload.css" rel="stylesheet" type="text/css">
<link rel="icon" 
      type="image/png" 
      href="http://themahasena.com//assets/siteimages/Logo_copy.jpg">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<script src="./assets/nav.js"></script>
<link href="<?=base_url()?>/assets/nav.css" rel="stylesheet" type="text/css">
<link href="<?=base_url()?>/assets/timeline.css" rel="stylesheet" type="text/css">

</head>
<style>
 body{
/*    background-image:url("./assets/events/bg.jpeg");*/
background-color:#302e2eb4;
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
} 
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
 </style>
  
<body>
<form action="./product_upload" method="POST" enctype="multipart/form-data" >
<div class="backgroundimage">
<h1 align="center" style="color:white;">PRODUCT UPLOAD FORM</h1><br>
    <div class="container" style="width:60%;">
    <?php echo "<div style='color:green; background-color:white; margin-left:100px;'>".$this->session->flashdata("upload_done")."</div>"; ?> 
    <label for="product_id"><b>MODEL NUMBER :</b></label><BR>
        <input type="text" placeholder="ENTER MODEL NUMBER OF THE PRODUCT" name="product_id" value="" required >  
    <?php echo "<div style='color:red; background-color:white; margin-left:100px;'>".$this->session->flashdata("product_id_error")."</div>"; ?> 
       
    <label for="title"><b>NAME OF THE PRODUCT </b></label><br>
       <input type="text" placeholder="ENTER NAME OF THE PRODUCT" name="title" required><br> <br>
    <label for="gender"><b>GENDER</b></label><br>
    <select name="gender"><br>
    <option style="width:50%;" value="UNISEX">UNISEX</option>
    <option style="width:50%;" value="WOMEN">WOMEN</option>
    <option  style="width:500px;" value="CHILDREN">CHILDREN</option>
    <option  style="width:500px;" value="MALE">MALE</option>
      </select> <BR>
      <label for="type"><b>SELECT COLOR : &nbsp  &nbsp</b></label>
       <input type="color" name="color" value="#D4AF37"><br><BR>
    <label for="features"><b>FEATURES</b></label><BR>
        <textarea type="text" placeholder="ENTER THE FEATURES OF THE PRODUCT" name="features"  ></textarea><br> <BR>
        <label for="additional_information"><b>ADDITIONAL INFORMATION</b></label><BR>
        <textarea type="text" placeholder="ENTER THE ADDITIONAL INFORMATION OF THE PRODUCT" name="additional_information" ></textarea><br> <BR>
        <label for="description"><b>DESCRIPTION</b></label><BR>
        <textarea type="text" placeholder="ENTER THE DESCRIPTION OF THE PRODUCT" name="description"  ></textarea><br> <BR>
       
        <label for="type"><b> TYPE :</b></label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   <label for=" type"><b>ADD NEW TYPE OF THE PRODUCTS :</b></label><BR>
       <select style="width:200px" name="type">        
      <?php foreach($types as $type){
      ?>
      <option style="width:50%;" value="<?php echo $type->type;?>"><?php echo $type->type;?></option>
      <?php
     }?>
    </select> 
     
      <input type="text" placeholder="ENTER TYPE" name="type1" style="text-transform:uppercase; width:200px; " ><br> <br>
    
        
    <label for=" cost"><b> COST :</b></label><BR>
    <input type="number" placeholder="ENTER COST OF THE PRODUCT" name="cost" required><br> <br>
   

    <label for="pics"><b> UPLOAD PICTURES OF PRODUCT :</b></label><BR>
    <input required type="file" name="files[]" size="40" multiple/>
                
   
   <label for=" offer"><b> OFFER :</b></label><BR>
        <input type="number" placeholder="ENTER THE OFFER PERCENTAGE OF THE PRODUCT" min="1" max="100" name="offer" required ><br> <BR>
    <label for="additional_offer"><b> ADDITIONAL_OFFER :</b></label><BR>
        <input type="number" placeholder="ENTER THE ADDITIONAL_OFFER PERCENTAGE OF THE PRODUCT" required name="additional_offer" ><br> <BR>
    <label for="quantity"><b> QUANTITY :</b></label><BR>
        <input type="number" placeholder="ENTER THE QUANTITY OF THE PRODUCTS" name="quantity" required ><br> <BR>
    <label for="category"><b> CATEGORY :</b></label><BR>
        <input type="text" placeholder="ENTER THE CATEGORY OF THE PRODUCTS" name="category" required ><br> <BR>
    <label for="size"><b> SIZE :</b></label><BR>
        <input type="text" placeholder="ENTER THE SIZE OF THE PRODUCTS" name="size" ><br> <BR>
    <label for="stone"><b>STONE</b></label><br>
    <select name="stone"><br>
    <option style="width:50%;" class="option" value="YES">YES</option>
    <option style="width:50%;" value="NO">NO</option>
   </select> <BR>
   <label for="priority">  PRIORITY</label><br>
   <label class="switch"> <input type="checkbox" value="checked" name="priority">
       <span class="slider round"></span>
      </label><BR>
    <label for="company_details"><b> COMPANY :</b></label><BR>
        <textarea type="text" placeholder="ENTER THE COMPANY DETAILS OF THE PRODUCTS" name="company_details" required></textarea><br> <BR>
    <label for="supplier_details"><b> SUPPLIER DETAILS :</b></label><BR>
        <textarea type="text" placeholder="ENTER THE SUPPLIER DETAILS OF THE PRODUCTS" name="supplier_details" ></textarea><br> <BR>
    <label for=" contact" required><b> CONTACT :</b></label><BR>
        <input type="number" placeholder="ENTER CONTACT DETAILS" name="contact" required ><br> <BR>
        <input type="submit" name="submit" value="Upload"><br>
        <br>
         </div>
         </div>
</form>

</body>
</html>
