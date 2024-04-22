<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cart</title>
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
<body class="animsition">
<?php
include("header.php");
?>
	<?php foreach($images as $image){

?>
<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(<?php echo $image->image;?>);">
	<?php 
}
?>
<h2 class="l-text2 t-center">
		YOUCAN ADD MAIN TEXT
	</h2>
	<p class="m-text13 t-center">
		YOU CAN ADD SUB TEXT
	</p>
</section><br>	

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
							<th class="column-4"style="width:100px;">Quantity</th>
							<th class="column-4" >Update</th>
							<th class="column-6"style="width:100px;">Total</th>
							</tr>
						<?php 
						$sum=0;
						foreach($productids as $productid)
						{ 
							
						
							$this->load->database();
							$this->db->where("product_id",$productid->product_id);
							$data=$this->db->get("product_table");
							$site=$data->row();
							if($site->offer_price==0)
							{
						   $cost=$site->cost;
						   }
						   else{
							   $cost=$site->offer_price;
						 }
						 
							$i=$productid->quantity;
							$i=$i*$cost;
							$id=base64_encode(base64_encode(base64_encode($productid->id)));
							$id1=base64_encode(base64_encode(base64_encode($site->id)));
                                  
								?>
									<form action="./updatecart?token=<?php echo $id;?>" method="post">
						<tr class="table-row">
							<td class="column-1">
							<a href="./deletecartproduct?token=<?php echo $id;?>"><div class="cart-img-product b-rad-4 o-f-hidden">
									<img src="./assets/events/<?php echo $site->id;?>/<?php echo $site->view_image;?>" alt="IMG-PRODUCT">
								</div></a>
							</td>
							<td class="column-2"><a href="./productdetail?token=<?php echo $id1;?>"><?php echo $site->title;?></a></td>
							<td class="column-3">1 x ₹ <?php echo $cost;?></td>
							<td class="column-4">
								<div class="flex-w bo5 of-hidden w-size17">
									<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2" >
										<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
									</button>

									<input class="size8 m-text18 t-center num-product" type="number" name="quantity" min="1" max="<?php echo $site->quantity;?>" value=<?php echo $productid->quantity; ?>>
									<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
									</button>
								</div>
							</td>
							<td> 	
						
							<div class="size10 trans-0-4 m-t-10 m-b-10">
					<button type="submit" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
						Update Cart
					</button>
				</div></td>
				<td> ₹ <?php echo $i; ?></td>
						</tr></form>
					
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
					Cart Total= ₹ <?php echo $sum; ?>
				</h5>

			
			</div>
			<div id="embedMap" style="width: 400px; height: 300px;">
                                   <!--Google map will be embedded here-->
                                   </div>
		

			<!-- Total -->
			<div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
				<h5 class="m-text20 p-b-24">
					Cart Totals
				</h5>

				<!--  -->
				<div class="flex-w flex-sb-m p-b-12">
					<span class="s-text18 w-size19 w-full-sm">
						Subtotal:
					</span>
                      <?php echo $sum; ?>
					<span class="m-text21 w-size20 w-full-sm">
					
					</span>
				</div>
				<form action="./checkout?token=<?php echo base64_encode($sum);?>" id="submit-p" method="post">

				<!--  -->
				<div class="flex-w flex-sb bo10 p-t-15 p-b-20">
					<span class="s-text18 w-size19 w-full-sm">
						Shipping:
					</span>

					<div class="w-size20 w-full-sm">
						<p class="s-text8 p-b-23">
							There are no shipping methods available. Please double check your address, or contact us if you need any help.
						</p>
						</div>
						<div class="flex-w flex-sb bo10 p-t-15 p-b-20">
					        <span class="s-text w-size w-full">
					           Enter your Address
					        </span>	<br><br>
						       
					
						<div class="size13 bo4 m-b-22" >
						<input class="sizefull s-text7 p-l-15 p-r-15" style="width:200px;" type="text" name="address" placeholder="Enter your Address" required>
						</div>

						<div class="size13 bo4 m-b-22">
							<input class="sizefull s-text7 p-l-15 p-r-15" style="width:200px;"type="text" name="pincode" placeholder="Postcode" required>
						</div>
						<div class="size19 bo4 m-b-22">
							<input class="sizefull s-text7 p-l-1 p-r-15" style="width:200px;"type="text" name="phonenumber" placeholder="Working Phone Number"required>
						</div>

						<div class="size14 trans-0-4 m-b-10">
							<!-- Button -->
							
						</div>
						</div>
				</div>

				<!--  -->
				<div class="flex-w flex-sb-m p-t-26 p-b-30">
					<span class="m-text22 w-size19 w-full-sm">
						Total:
					</span>

					<span class="m-text21 w-size20 w-full-sm">
					₹ <?php echo $sum; ?>
					</span>
				</div>

				<div class="size15 trans-0-4">
					<!-- Button -->
					<button type="submit" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
						Proceed to Checkout
					</button>
				</div>
				</form>
			</div>
		</div>
	</section>



	<!-- Footer -->
	<?php include('footer.php');?>
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

</body>
</html>
