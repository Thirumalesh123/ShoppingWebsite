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
     
      <body>   
           <div class="container">
           <h3 align="center">DEALS UPLOAD </h3>  <BR><BR>
        <form action="./dealupload" method="post" >
           <div class="row">
           <div class="col-md-2 ">
           <label for="quantity"><b> DEAL STARTING DATE:</b></label>
           <input type="date"  name="deal_starting" class="form-control" value="" required ><br> 
       
           </div>
           <div class="col-md-2 ">
         <label for="category"><b> DEAL ENDING DATE: &nbsp &nbsp <b></label>
         <input type="date"  name="deal_ending" class="form-control" value="" required ><br>
    </div>
    <div class="col-md-2 ">
    <label for="deal_type"><b>DEAL TYPE : &nbsp &nbsp</b></label>
    <select name="deal_type" class="form-control">
    <option value="one_day">ONE DAY</option>
    <option value="week">WEEK</option>
    <option value="festival">FESTIVAL</option>
    <option value="monthly">MONTHLY</option>
      </select> <br>
    </div>
           <div class="col-md-3 "> 
         
           <label for="offer"><b>Deal name: &nbsp &nbsp</b></label> <br>
        <input type="text" class="form-control" name="deal_name" value="" required ><br>
        </div>
           <div class="col-md-3 ">
              
           <label for="offer"><b>OFFER: &nbsp &nbsp</b></label><br> 
        <input type="text" class="form-control" name="offer" value="" required ><br>
       
           </div>
           
           <div class="col-md-12">  
                <h3 align="center"></h3>  
                <br />   
                     <table id="example" class="table table-striped table-bordered">  
 
                     <thead>  
                               <tr>  
                                    <td>SNO</td>  
                                    <td style="width:100px;">ADD TO DEAL</td>
                                    <td>PRODUCT ID</td>  
                                    <td>TITLE</td>   
                                    <td>QUANTITY</td> 
                                    <td>OFFER</td>
                                    </tr>  
                          </thead>  
                          <?php  
                          $i=1;
                          foreach($products as $product)  
                          {  
                               $id=base64_encode($product->id);
                               echo '  
                               <tr>  
                               <td>'.$i++.'</td> 
                               <td><center><input type="checkbox" value='.$product->product_id.' name="deal[]" style="height:50px;"></center></td>
                               <td>'.$product->product_id.'</td>  
                               <td>'.$product->title.'</td>  
                               <td>'.$product->quantity.'</td>
                               <td>'.$product->offer.'</td>  
                              </tr>  ';
                                 
                          }  
                          ?>  
                     </table>  
                </div>  
                </div>

                <input type="submit" name="upload" style="width:100%;" value="submit">
                </form>
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



