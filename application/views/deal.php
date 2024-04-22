<!DOCTYPE html>  
 <html>  
      <head> 
      <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="./assets/nav.js"></script>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<link href="<?=base_url()?>/assets/nav.css" rel="stylesheet" type="text/css">



<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">




<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>


           </head> 
           <style>
         .button {
  
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px 28px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  border-radius: 4px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}
.button1:hover {
  background-color: #4CAF50;
  color: white;
}
.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #f44336;
}

.button2:hover {
  background-color: #f44336;
  color: white;
}

       </style>     
     
      <body>   
           <div class="container">
           <h3 align="center">DEALS VIEW </h3>  
               
           <div class="col-md-12">  
                <h3 align="center"></h3>  
                <br />   
                     <table id="example" class="table table-striped table-bordered">  
 
                     <thead>  
                               <tr>  
                                    <td>SNO</td>  
                                    <td>PRODUCT ID</td>  
                                    <td>TITLE</td>   
                                    <td>OFFER</td>
                                    <td>STARTING DATE</td>
                                    <td>ENDING DATE</td>
                                   
                                   <td>DELETE</td>
                                    </tr>  
                          </thead>  
                          <?php  
                          $i=1;
                          foreach($products as $product)  
                          {  
                               $id=base64_encode(base64_encode(base64_encode($product->product_id)));
                               echo '  
                               <tr>  
                               <td>'.$i++.'</td> 
                               <td>'.$product->product_id.'</td>  
                               <td>'.$product->deal_name.'</td>  
                                <td>'.$product->offer.'</td>  
                               <td>'.$product->deal_starting.'</td>
                               <td>'.$product->deal_ending.'</td>
                              
                               <td>
                               <a href="./delete_deal?token='.$id.'" class="button button2" style="text-decoration:none" align:"center">DELETE</a> 
                               </td>                         
                               </tr>  ';
                                 
                          }  
                          ?>  
                     </table>  
                </div>  
       </div>
      </body>  
 </html>  

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



