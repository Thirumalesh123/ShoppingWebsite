<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="./assets1/images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./assets1/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./assets1/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./assets1/fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./assets1/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./assets1/fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./assets1/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./assets1/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./assets1/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./assets1/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./assets1/vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./assets1/vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./assets1/css/util.css">
	<link rel="stylesheet" type="text/css" href="./assets1/css/main.css">
<!--===============================================================================================-->
</head>
<style>
#logo1{
	font-family: sans-serif;
background-repeat: no-repeat;
background-position: center;
background-attachment: fixed;
background-size: cover;
	width:100%;
  height:300px;
	object-fit:cover;
	
}
</style>
<body class="animsition">

	<!-- Header -->
<?php
include("header.php");
?>
	<!-- Title Page -->
					<!-- Product -->

					<div class="row py-1">
					<?php foreach($products as $product)
						 {
							 $id=base64_encode(base64_encode(base64_encode($product->product_id)));
							?>
							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
									<a href="#">	<img id="logo1"src="./assets/events/<?php echo $product->id;?>/<?php echo $product->view_image;?>" alt="IMG-PRODUCT"></a>

										<div class="block2-overlay trans-0-4">
											<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
												</a>

											<div class="block2-btn-addcart w-size1 trans-0-4">
												<!-- Button -->
												<a  href="./productdetail?token=<?php echo $id;?>">	<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												VIEW DETAIL
												</button></a>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="./productdetail?token=<?php echo $id;?>" class="block2-name dis-block s-text3 p-b-5">
											<?php echo $product->title;?>
										</a>
										<?php if($product->offer==0){?>
										<span class="block2-oldprice m-text7 p-r-5">
										
										</span>
										<span class="block2-newprice m-text8 p-r-5">
										₹<?=$product->cost?>
										</span>
<?php }else{ 
	$offer_amount=($product->cost*$product->offer)/100;
	$offer_price=$product->cost-	$offer_amount
	?>
	                     <span class="block2-newprice m-text8 p-r-5">
										₹<?=$offer_price?>
										</span>
	                   <span class="block2-oldprice m-text7 p-r-5">
										 ₹<?=$product->cost?>	
									   	</span>(<?=$product->offer?>% off)
<?php }
?>							
										</span>
									</div>
								</div>
							</div>
						<?php }
						?>
					
		
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
	<script type="text/javascript" src="./assets1/vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="./assets1/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="./assets1/vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="./assets1/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="./assets1/vendor/sweetalert/sweetalert.min.js"></script>


<!--===============================================================================================-->
	<script type="text/javascript" src="./assets1/vendor/noui/nouislider.min.js"></script>
	<script type="text/javascript">
		/*[ No ui ]
	    ===========================================================*/
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 50, 200 ],
	        connect: true,
	        range: {
	            'min': 50,
	            'max': 200
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]) ;
	    });
	</script>
<!--===============================================================================================-->
	<script src="./assets1/js/main.js"></script>

</body>
</html>
        