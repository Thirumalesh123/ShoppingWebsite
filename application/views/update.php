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
<?php
$this->load->helper("directory");
$i=0;

  $dir = "assets/events/".$product->id; // Your Path to folder

  $map = directory_map($dir); /* This function reads the directory path specified in the first parameter and builds an array representation of it and all its contained files. */
  
     ?>
 <h1 align="center">PRODUCT UPDATE FORM.</h1><br>
<form action="./product_edit?token='.<?php echo  base64_encode(base64_encode(base64_encode($product->id))); ?>.'" method="POST" enctype="multipart/form-data">
  <div class="container">
    <?php echo "<div style='color:green; background-color:white; margin-left:100px;'>".$this->session->flashdata("upload_done")."</div>"; ?> 
    <label for="product_id"><b>PRODUCT ID :</b></label><br> 
    <input type="text" placeholder="ENTER NAME OF THE PRODUCT" name="product_id" value="<?php echo $product->product_id; ?>" required><br> <br>
 
    <?php echo "<div style='color:red; background-color:white; margin-left:100px;'>".$this->session->flashdata("product_id_error")."</div>"; ?> 
       
    <label for="title"><b>NAME OF THE PRODUCT </b></label><br>
       <input type="text" placeholder="ENTER NAME OF THE PRODUCT" name="title" value="<?php echo $product->title; ?>" required><br> <br>
    <label for="gender"><b>GENDER</b></label><br>
    <select name="gender"><br>
    <option name="<?php echo $product->gender; ?>"><?php echo $product->gender; ?></option>
    <option style="width:50%;" value="UNISEX">UNISEX</option>
    <option style="width:50%;" value="WOMEN">WOMEN</option>
    <option  style="width:500px;" value="CHILDREN">CHILDREN</option>
    <option  style="width:500px;" value="MALE">MALE</option>
      </select> <BR>
     <label for="type"><b>SELECT COLOR : &nbsp  &nbsp</b></label>
       <input type="color" name="color" value="#D4AF37" value="<?php echo $product->color; ?>"><br><BR>
    <label for="features"><b>FEATURES</b></label><BR>
        <textarea type="text" placeholder="ENTER THE FEATURES OF THE PRODUCT" name="features"  ><?php echo $product->features; ?></textarea><br> <BR>
   <label for="additional_information"><b>ADDITIONAL INFORMATION</b></label><BR>
        <textarea type="text" placeholder="ENTER THE ADDITIONAL INFORMATION OF THE PRODUCT" name="additional_information"  ><?php echo $product->additional_information; ?></textarea><br> <BR>
        <label for="description"><b>DESCRIPTION</b></label><BR>
        <textarea type="text" placeholder="ENTER THE DESCRIPTION OF THE PRODUCT" name="description"  ><?php echo $product->description; ?></textarea><br> <BR>
   
        <label for=" link"><b>ENTER THE TYPE :</b></label><BR>
    <input type="text" placeholder="ENTER THE TYPE OF THE PRODUCTS" name="type" style="text-transform:uppercase;" value="<?php echo $product->type;?>" required><br> <br>
   
     <label for=" cost"><b> COST :</b></label><BR>
    <input type="number" placeholder="ENTER COST OF THE PRODUCT" name="cost" value="<?php echo $product->cost; ?>" required><br> <br>
   
   <label for=" offer"><b> OFFER :</b></label><BR>
        <input type="number" placeholder="ENTER THE OFFER PERCENTAGE OF THE PRODUCT" name="offer" min="1" max="100" value="<?php echo $product->offer; ?>" required ><br> <BR>
    <label for="additional_offer"><b> ADDITIONAL_OFFER :</b></label><BR>
        <input type="number" placeholder="ENTER THE ADDITIONAL_OFFER PERCENTAGE OF THE PRODUCT" value="<?php echo $product->additional_offer; ?>" required name="additional_offer" ><br> <BR>
    <label for="quantity"><b> QUANTITY :</b></label><BR>
        <input type="number" placeholder="ENTER THE QUANTITY OF THE PRODUCTS" name="quantity" value="<?php echo $product->quantity; ?>" required ><br> <BR>
    <label for="category"><b> CATEGORY :</b></label><BR>
        <input type="text" placeholder="ENTER THE CATEGORY OF THE PRODUCTS" name="category" value="<?php echo $product->category; ?>" required ><br> <BR>
    <label for="size"><b> SIZE :</b></label><BR>
        <input type="text" placeholder="ENTER THE SIZE OF THE PRODUCTS" name="size" value="<?php echo $product->size; ?>" ><br> <BR>
    <label for="stone"><b>STONE</b></label><br>
    <select name="stone"><br>
    <option value="<?php echo $product->stone; ?>"><?php echo $product->stone; ?></option>
    
    <option style="width:50%;" class="option" value="YES">YES</option>
    <option style="width:50%;" value="NO">NO</option>
   </select> <BR>
   <label for="priority">  PRIORITY</label><br>
   <label class="switch"> <input type="checkbox" name="priority" value="checked"<?php echo $product->priority; ?>>
       <span class="slider round"></span>
      </label><BR>
    
    <label for="company_details"><b> COMPANY :</b></label><BR>
        <textarea type="text" placeholder="ENTER THE COMPANY DETAILS OF THE PRODUCTS"  name="company_details" required><?php echo $product->company_details; ?></textarea><br> <BR>
    <label for="supplier_details"><b> SUPPLIER DETAILS :</b></label><BR>
        <textarea type="text" placeholder="ENTER THE SUPPLIER DETAILS OF THE PRODUCTS" name="supplier_details" ><?php echo $product->supplier_details; ?></textarea><br> <BR>
    <label for=" contact" required><b> CONTACT :</b></label><BR>
        <input type="number" placeholder="ENTER CONTACT DETAILS" name="contact" value="<?php echo $product->contact; ?>" required ><br> <BR>
 
    <table id="example" class="table table-striped table-bordered" style="width:80%; margin-left:10%;">  
        <thead>  
     <tr>
       <td>SNO</td>
       <td> IMAGE</td>
       <td style="width:150px;">ADD AS MAIN PIC</td>
       <td style="width:150px;"> DELETE</td>
</tr>
</thead>
 <?php
 foreach($map as $k)
  {
  ?>
 
 <tr><td><?=++$i?></td>
 <td><img src="<?=base_url($dir)."/".$k;?>"  style="width:200px; height:100px; "  alt=""></td>
 <td style="width:100px;"><a class="btn btn-success" style="margin-top:25px;margin-left:15px;" href="./mainproductimage?imagepath=<?=base64_encode($product->id."/".$k)?>">ADD</a></td>

 <td><a class="btn btn-danger" style="margin-top:25px;margin-left:15px;"  href="./deleteproductimage?imagepath=<?=base64_encode($product->id."/".$k)?>">Delete</a></td></tr>
  <?php
  }
   ?>
</table>
 
   <input type="submit" name='login' value="UPDATE">                                         
        </div>
</form>

</body>
<script type="text/javascript" language="javascript" >
 $(document).ready(function() {
    var table = $('#example').DataTable( {
        

        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
    } );
 
    table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
} );
</script>
</html>
