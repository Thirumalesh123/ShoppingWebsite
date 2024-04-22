<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>SHOPPING</title>
        <!-- Make sure the path to CKEditor is correct. -->
        <script src="./assets/ckeditor/ckeditor.js"></script>
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
</style>    
    <body>
        <div class="container">
        <h1 align="center" style="color:BLACK;">ANNOUNCEMENTS</h1><br>
<BR><BR>
<?php foreach($products as $product)  
 {
     ?>
 
        <form action="./updateannouncement?token='.<?php echo  base64_encode(base64_encode(base64_encode($product->id))); ?>.'" method="post" enctype="multipart/form-data" >
        <label for="product_id"><h4><b>TITLE :<?php echo $product->announcement_name; ?></h4></b></label><br>
        <label for="product_id"><h4><b>CONTENT:</h4></b></label><BR>
            <textarea name="content" id="editor1" rows="0" cols="0">
            <?php echo $product->content; ?>
            </textarea><BR><BR>
           
            
             <input type="submit" name='upload' value="UPDATE">                                         
       
        </form> 
        <?php
 }
 ?>
    </div>
    </body>
    <script>
   CKEDITOR.replace( 'editor1' );
</script>

</html>