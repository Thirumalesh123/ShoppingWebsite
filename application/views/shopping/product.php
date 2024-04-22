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
	<div class="col-sm-12 col-md-12 col-lg-12 p-b-50">
					<!--  -->
					<?php
					if($gender=="MALE")
					{
					?>
					<form action="./men" method="post">
					<?php
					}
					else if($gender=="children")
					{
						echo "<form action='./children' method='post'>";
					}
					else if($gender=="women")
					{
						echo "<form action='./women' method='post'>";
					}
					//echo $query;
					?>
					<div class="flex-sb-m flex-w p-b-35">
					
						<div class="flex-w">
             
						<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
								<select class="selection-2" name="typesorting">
									<option value="">Categories</option>
									<?php
									foreach($types as $type)
									{
									?>
									<option value='<?=$type->type?>'>
									<?=$type->type?>
									</option>
								<?php
									}
								?>
								</select>

							</div>

							<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
								<select class="selection-2" name="rangesorting">
									<option value="">Default Sorting</option>
									<option value="ltoh">Price: low to high</option>
									<option value="htol">Price: high to low</option>
								</select>
							</div>

							<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
								<select class="selection-2" name="pricesorting">
									<option value="">Price</option>
									<option value=" '100' AND '500' ">100 - 500</option>
									<option value=" '500' AND '1000' ">500 - 1000</option>
									<option value=" '1000' AND '5000' ">1000 - 5000</option>
									<option value=" '5000' AND '10000' ">5000 - 10000</option>
									<option value=" '10000' AND '20000' ">10000 - 20000</option>

								</select>
							</div>
						</div>

						<div class="search-product pos-relative bo4 of-hidden">
							<input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-product" placeholder="Search Products..." value="">

							<button name='search' class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4 bg-warning">
								<i class="fs-12 fa fa-search" aria-hidden="true"></i>
							</button>
						</div>
					</div>
				</form>
					<!-- Product -->

					<div class="row">
					<?php foreach($products as $product)
						 {
							 $id=base64_encode(base64_encode(base64_encode($product->product_id)));
							?>
							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
									<a href="#">	<img id="logo1" src="./assets/events/<?php echo $product->id;?>/<?php echo $product->view_image;?>" alt="IMG-PRODUCT"></a>

										<div class="block2-overlay trans-0-4">
											</a>

											<div class="block2-btn-addcart w-size1 trans-0-4">
											<a  href="./productdetail?token=<?php echo $id;?>">	<button	 class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
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
