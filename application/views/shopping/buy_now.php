<!DOCTYPE html>
<html lang="en">
<head>
	<title>Buy now</title>
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

	<!-- Header -->
	<?php
	include("header.php");
	?>
		<h2 class="l-text2 t-center">
		</h2>
	</section>

	<!-- content page -->
	<?php
	if($quantity<=$thisproduct->quantity)
	{
	?>
	<section class="bgwhite p-t-66 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 p-b-30">
                <img src="./assets/events/<?=$thisproduct->id?>/<?=$thisproduct->view_image?>" style="width:100%;height:300px;object-fit:cover">
                <table class="table">
                <tr>
                <td><b>Product:</b></td><td><?=$thisproduct->title?></td></tr>
                <tr><td><b>Quantity:</b></td><td><?=$quantity?></td></tr>
				<?php if($thisproduct->offer_price==0)
				{
					$cost=$thisproduct->cost;
				}
				else{
					$cost=$thisproduct->offer_price;
				}
				?>
                <tr><td><b>Cost:</b></td><td><?=$quantity?>X<?=$cost?>=<?=$quantity*$cost?></td></tr>
                </table>
                </div>
				
				<div class="col-md-6 p-b-30">
				<form action="./buy_now_checkout" id="submit-p" method="post">

				<!--  -->
				<div class="w-100">
					<span class="s-text18 w-size19 w-full-sm">
                    <h3>  Enter your Address</h3>
                    </span>

					        <span class="s-text w-size w-full">
					      
					        </span>	<br><br>
						       <?php
								
								$pid=$thisproduct->product_id;
								$pow=base64_encode(base64_encode(base64_encode(base64_encode($quantity."|-|".$cost."|-|".$pid."|-|".$thisproduct->quantity))));
							   ?>
					    <input type="hidden" value="<?=$pow?>" name="data" >
						<div class="py-2">
						<textarea style="width:100%;height:100px" class="form-control" name="address" placeholder="Enter your Address" required></textarea>
						</div>

						<div class="py-2">
							<input class="form-control w-100 border border-rounded" style="height:50px;" type="text" name="pincode" placeholder="Postcode" required>
						</div>
						<div class="py-2">
							<input class="form-control w-100 border border-rounded" style="height:50px;" type="text" name="phonenumber" placeholder="Working Phone Number"required>
						</div>
						</div>
				<!--  -->
				<div class="flex-w flex-sb-m p-t-26 p-b-30">
					<span class="m-text22 w-size19 w-full-sm">
						Total:
					</span>

					<span class="m-text21 w-size20 w-full-sm">
					₹ <?=$quantity*$cost?>
					</span>
				</div>

				<div class="size15 trans-0-4">
					<!-- Button -->
				
                	<input type="submit" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" value="Proceed to Checkout">
						
					<br>
                    <a href="./index" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                    cancel
					</a>
			
            	</div>
				</form></div>
			</div>
		</div>
	</section>
<?php
	}else
	{
		echo "<center><h1>INVALID QUANTITY</h1></center>";
	}
?>

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
	<script src="./assets1/https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="./assets1/js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="./assets1/js/main.js"></script>

</body>
</html>
