<!DOCTYPE html>
<html lang="en">
<head>
	<title>BUY KNOW</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png"  href="./assets1/images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"  href="./assets1/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"  href="./assets1/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"  href="./assets1/fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"  href="./assets1/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"  href="./assets1/fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"  href="./assets1/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"  href="./assets1/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"  href="./assets1/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"  href="./assets1/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"  href="./assets1/vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"  href="./assets1/css/util.css">
	<link rel="stylesheet" type="text/css"  href="./assets1/css/main.css">
	
<!--===============================================================================================-->
</head>
<?php 
foreach($product_status as $product_statu)
{
	$status=$product_statu->track_status;
}
?>

  <style>
    	body{
		background-color:;
	   }
     .container{
        width:100%;
     }
     .progressbar{
        counter-reset: step;
     }
    .progressbar li{
       list-style-type: none;
       float:left;
       width:33.33%;
       position:relative;
       text-align:center;
      }
    .progressbar li:before{
       content:counter(step);
       counter-increment:step;
       width:30px;
       height:30px;
       line-height:30px;
       border:1px solid red;
       display:block;
       text-align:center;
       margin:0 auto 10px auto;
       border-radius:50%;
       background-color:white;
      }
	  .progressbar li:after{
   content:"";
   position:absolute;
   width:100%;
   height:5px;
   background-color:red;
   top:15px;
   left:-50%;
   z-index:-1;
}
	</style>
	<?php if($status=="start"){?>
		<div>
		<style>
         .progressbar li:first-child:after{
           content:none;
          }
            .progressbar li.active{
              color:green;
           }
           .progressbar li.active:before{
           border-color:green;
           }
	 </style>
	 </div>
<?php 
}
?>
<?php if($status=="started"){?>
<div>
	<style>
	.progressbar li:first-child:after{
 content:none;
}
.progressbar li.active{
 color:green;
}
.progressbar li.active:before{
 border-color:green;
}
.progressbar li.active + li:after{
background-color:green;
}
.progressbar li.active + li:before{
 border-color:green;
}
</style>
</div>
<?php }?>
<?php if($status=="DELIVERED"){?>
<div>
	<style>
.progressbar li:before{
   content:counter(step);
   counter-increment:step;
   width:30px;
   height:30px;
   line-height:30px;
   border:1px solid green;
   display:block;
   text-align:center;
   margin:0 auto 10px auto;
   border-radius:50%;
   background-color:white;
}
.progressbar li:after{
   content:"";
   position:absolute;
   width:100%;
   height:5px;
   background-color:green;
   top:15px;
   left:-50%;
   z-index:-1;
}
.progressbar li:first-child:after{
 content:none;
}
</style>
</div>
<?php }?>

<body class="animsition">

<?php
include("header.php");
?>	

	<!-- Cart -->
	 <section class="cart bgwhite p-t-70 p-b-100">
		<div class="container">
			<!-- Cart item -->
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
			
					<table class="table-shopping-cart">
						<tr class="table-head">
							<th class="column-1"></th>
							<th class="column-2">Product</th>
							<th class="column-3">Price</th>
							<th class="column-4">Quantity</th>
							<th class="column-5">Total</th>
							</tr>
						<?php 
						$sum=0;
						foreach($productids as $productid)
						{ 
							
						
							$this->load->database();
							$this->db->where("product_id",$productid->product_id);
							$data=$this->db->get("product_table");
							$site=$data->row();
							$i=$productid->quantity;
							$i=$i*$site->cost;
							$id=base64_encode(base64_encode(base64_encode($productid->id)));
							$id1=base64_encode(base64_encode(base64_encode($site->product_id)));
				        
								?>
										<tr class="table-row">
							<td class="column-1">
							<div class="cart-img-product ">
									<img src="./assets/events/<?php echo $site->id;?>/<?php echo $site->view_image;?>" alt="IMG-PRODUCT">
								</div></a>
							</td>
							<td class="column-2"><a href="./productdetail?token=<?php echo $id1;?>"><?php echo $site->title;?></a></td>
					 		<td class="column-3">1 x ₹ <?=$productid->actual_cost;?></td>
							<td class="column-4">&nbsp &nbsp
								<?=$productid->quantity?>
							</td>
						
				<td class="column-5"> ₹ <?=$productid->total_price; ?></td>
						</tr>
					
                      <?php $sum=$sum+$i;}
                          ?>
								</table>
							
				</div>
			</div>
			<?PHP echo $this->session->flashdata("carterror");?>
			<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
				<div class="flex-w flex-m w-full-sm">
				<!--	<div class="size11 bo4 m-r-10">
						<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="coupon-code" placeholder="Coupon Code">
					</div>

					<div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
						 Button
						<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
							Apply coupon
						</button>
					</div>-->
				</div>
				<h5 class="m-text20 p-b-24">
					 Total= ₹ <?=$productid->total_price; ?>
				</h5>

			
			</div><br>
			<h3 align="center" style=" color:green;"><b>THANKS FOR ORDERING</b> </h3> <br>
			<h4 align="center" style=" color:red;">PLEASE GIVE YOUR VALID FEED BACK (OR) REVIEW AFTER RECEIVING THE PRODUCT<h4>
			
</section>
<?php if($status=="DELIVERED"){?>
<h4 align="center" style=" color:green;">YOU CAN TRACK YOUR PRODUCT HERE<h4>
<?php
}?> 
<?php if($status=="start"){?>
<h4 align="center" ><label style=" color:green;">YOU CAN </label> TRACK YOUR PRODUCT HERE</h4>
<?php
}?> 
<?php if($status=="started"){?>
<h4 align="center"><label style=" color:green;">YOU CAN TRACK YOUR </label> PRODUCT HERE<h4>
<?php
}?> 
	
</body>



<div class="container">
    <ul class="progressbar">
        <li class="active">ORDER RECEIVED</li>
        <li>PACKED</li>
        <li>DELIVERED</li>
     </ul>
</div><br>
<br>
<br>
<br>
<br>
<?php if($status=="DELIVERED"){?>
  <form action="./review?token=<?=base64_encode(base64_encode(base64_encode($site->product_id)))?>" method="post">
	<label for="email" style=" margin-left:20%;">FEED BACK:</label>
      <textarea type="email" class="form-control border border-dark" style="width:60%; height:150px; margin-left:20%;" id="review" placeholder="Enter Your Review" name="review"></textarea><br>
  <input type="submit" style=" margin-left:35%; width:30%" class="btn btn-success lg"name="submit" value="SUBMIT" >
	</form>
<?php 
}?>



	<!-- Footer -->
	
	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>

<!--===============================================================================================-->
	<script type="text/javascript" src="./assets1/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="./assets1/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="./assets1/vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="./assets1/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="./assets1/vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
	<!--===============================================================================================-->
	<script src="./assets1/js/main.js"></script>






	<script src="https://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
function showPosition(){
    if(navigator.geolocation){
        navigator.geolocation.getCurrentPosition(showMap, showError);
    } else{
        alert("Sorry, your browser does not support HTML5 geolocation.");
    }
}
 
// Define callback function for successful attempt
function showMap(position){
    // Get location data
    lat = position.coords.latitude;
    long = position.coords.longitude;
    var latlong = new google.maps.LatLng(lat, long);
     
    var myOptions = {
        center: latlong,
        zoom: 16,
        mapTypeControl: true,
        navigationControlOptions: {style:google.maps.NavigationControlStyle.SMALL}
    }
    
    var map = new google.maps.Map(document.getElementById("embedMap"), myOptions);
    var marker = new google.maps.Marker({position:latlong, map:map, title:"You are here!"});
}
 
// Define callback function for failed attempt
function showError(error){
    if(error.code == 1){
        result.innerHTML = "You've decided not to share your position, but it's OK. We won't ask you again.";
    } else if(error.code == 2){
        result.innerHTML = "The network is down or the positioning service can't be reached.";
    } else if(error.code == 3){
        result.innerHTML = "The attempt timed out before it could get the location data.";
    } else{
        result.innerHTML = "Geolocation failed due to unknown error.";
    }
}
</script>

<?php include('footer.php');?>
</html>
