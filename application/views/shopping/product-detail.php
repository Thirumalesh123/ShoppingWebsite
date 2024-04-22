<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product Detail</title>
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


	<!-- breadcrumb -->
	
	<!-- Product Detail -->
	<?php
$this->load->helper("directory");
$i=0;

  $dir = "assets/events/".$product->id; // Your Path to folder

  $map = directory_map($dir); /* This function reads the directory path specified in the first parameter and builds an array representation of it and all its contained files. */
  
     ?>
	<div class="container bgwhite p-t-35 p-b-80">
		<div class="flex-w flex-sb">
			<div class="w-size13 p-t-30 respon5">
				<div class="wrap-slick3 flex-sb flex-w">
					<div class="wrap-slick3-dots"></div>
                           
					<div class="slick3">
                                          <?php
                                                foreach($map as $k)
                                                  {
                                                      ?>   
						<div class="item-slick3" data-thumb="<?=base_url($dir)."/".$k;?>">
							<div class="wrap-pic-w">
								<img  src="<?=base_url($dir)."/".$k;?>" alt="IMG-PRODUCT">
							</div>
						</div>
						<?php
						}
						//current_url()."?".$_SERVER['QUERY_STRING'];
						
						?>
					
					
					</div>
				</div>
			</div>

			<div class="w-size14 p-t-30 respon5">
				<h4 class="product-detail-name m-text16 p-b-13">
					<?php echo $product->title;?>
				</h4>

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

				<p class="s-text8 p-t-10">
				<?php echo $product->features;?>
					</p>

				<!--  -->
				<div class="p-t-33 p-b-60">
					<div class="flex-m flex-w p-b-10">
						<div class="s-text15 w-size15 t-center">
						</div>
						<div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
					</div>
					<?php 	
												//echo $product->product_id;
												$id=base64_encode(base64_encode(base64_encode($product->product_id)));
												
			              	?>
							
					<div class="flex-r-m flex-w p-t-10">
						<div class="w-size16 flex-m flex-w">
						<form action="./buynow?token=<?=$id?>" method="post">
						
						only <?=$product->quantity?> left
							<div class="flex-w  of-hidden m-r-22 m-t-10 m-b-10">
								<br>
								<br>
								<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
								</button>

								<input class="size8 m-text18 t-center num-product" type="number" name="quantity" value="1" min="1" max="<?=$product->quantity?>">
								
								<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
								</button>
							</div>
<?php
if($product->quantity<=0)
{
?>
							<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
								<!-- Button -->
										<input type="submit" value="BUY NOW" class="flex-c-m size1 bg4 bo-rad-23 s-text1 trans-0-4 " style="opacity:0.5;" disabled>
									<br>
							</div>
							</form>
							
									<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10 ">
										<input type="button"  onclick="window.location='./cartproductadd?token=<?=$id?>'" class="flex-c-m size1 bg4 bo-rad-23  s-text1 trans-0-4 " style="opacity:0.5;" value='add to cart' disabled>
							</div>
						</div>
<?php
}else
{
	?>
								<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
								<!-- Button -->
										<input type="submit" value="BUY NOW" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4 " >
									<br>
							</div>
							</form>
							
									<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10 ">
										<input type="button"  onclick="window.location='./cartproductadd?token=<?=$id?>'" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4 " value='add to cart' >
							</div>
						</div>

	<?php
}
?>
					</div>
				</div>

			
<br>
<br>
				<!--  -->
				<div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Description
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
						<?php echo $product->description;?>
							</p>
					</div>
				</div>

				<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Additional information
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
						<?php echo $product->additional_information;?>
								</p>
					</div>
				</div>

				<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Reviews 
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>
          <?php foreach($reviews as $review){?>
					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
					 <label style="color:red"> <?=$review->user?> </label>:         	<?=$review->review_text?>
						</p>
					</div>
					<?php }
					?>
				</div>
			</div>
		</div>
	</div>


	<!-- Relate Product -->
	<section class="relateproduct bgwhite p-t-45 p-b-1">
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					Related Products
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">
				<?php foreach($products as $product){
					 $id=base64_encode(base64_encode(base64_encode($product->product_id)));
							
				?>
					<div class="item-slick2 p-l-15 p-r-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
								<img id="logo1" src="./assets/events/<?Php echo $product->id;?>/<?Php echo $product->view_image;?>" alt="IMG-PRODUCT">

								<div class="block2-overlay trans-0-4">
									<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
									</a>

									<div class="block2-btn-addcart w-size1 trans-0-4">
										<!-- Button -->
							
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
							</div>
						</div>
					</div>
				<?php }
				?>

								</div>
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
	<script type="text/javascript"  src="./assets1/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript"  src="./assets1/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript"  src="./assets1/vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript"  src="./assets1/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript"  src="./assets1/vendor/select2/select2.min.js"></script>
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
	<script type="text/javascript"  src="./assets1/vendor/slick/slick.min.js"></script>
	<script type="text/javascript"  src="./assets1/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript"  src="./assets1/vendor/sweetalert/sweetalert.min.js"></script>
	
<!--===============================================================================================-->
	<script  src="./assets1/js/main.js"></script>

</body>
</html>
