
<html>
<head>
	<title>SHOPPING</title>
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
	<link rel="stylesheet" type="text/css" href="./assets1/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./assets1/vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./assets1/vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./assets1/css/util.css">
	<link rel="stylesheet" type="text/css" href="./assets1/css/main.css">
<!--===============================================================================================-->
</head>
<style>
#logo{
	font-family: sans-serif;
background-repeat: no-repeat;
background-position: center;
background-attachment: fixed;
background-size: cover;
	width:100%;
  height:100%;
	
}
#logo2{
	font-family: sans-serif;
background-repeat: no-repeat;
background-position: center;
background-attachment: fixed;
background-size: cover;
	width:100%;
  height:400px;
	object-fit:cover;
	
}
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
#image{
	font-family: sans-serif;
background-repeat: no-repeat;
background-position: center;
background-attachment: fixed;
background-size: cover;
width:250px;
height:100px;

}
.wrap_header_mobile{
	margin-left:0%;
	margin-top:0%;
	width:100%;
  height:50px;
}
</style>
<body class="animsition">

		<!-- header fixed -->
		<div class="wrap_header fixed-header2 trans-0-4">
		<!-- Logo -->
		<a href="index.html" class="logo">
		<?php foreach($logo as $image)
		{?>
			<img src="<?php echo $image->logo;?>" alt="IMG-LOGO">
			<?php
	    } ?>
		</a>

		<!-- Menu -->
		<div class="wrap_menu">
			<nav class="menu">
			<ul class="main_menu">
					<li class="sale-noti">
						<a href="index.php">HOME</a>
					</li>
					<li>
						<a href="<?= base_url();?>/men">MEN</a>
			
					</li>
					<li>
						<a href="<?= base_url();?>/women">WOMEN</a>
					</li>

					<li>
						<a href="<?= base_url();?>/children">CHILDREN</a>
					</li>

				
					<li>
						<a href="<?= base_url();?>/about">ABOUT</a>
					</li>

					<li>
						<a href="<?= base_url();?>/contact">CONTACT</a>
					</li>
				</ul>
						</nav>
		</div>

		<!-- Header Icon -->
		<div class="header-icons">
	<?php
			if($this->session->user)
			{
			?>

					<div class="header-wrapicon2">
					<img src="./assets1/images/icons/icon-header-01.png" class="header-icon1 js-show-header-dropdown" alt="ICON">

					<!--  DROPDOWN begin  -->		
					<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<li class="header-cart-item">
								<div class="header-cart-item-img">
										<img src="./assets1/images/icons/myorders.png" style="height:20px;width:20px;" alt="IMG">
									</div>
									<div class="header-cart-item-txt">
										<a href="./my_orders" class="header-cart-item-name">
											My Orders
										</a>
										</div>
								</li>
							
								<li class="header-cart-item">
								<div class="header-cart-item-img">
										<img src="./assets1/images/icons/editprofile.png" style="height:20px;width:20px;" alt="IMG">
									</div>
									<div class="header-cart-item-txt">
										<a href="./user_details_edit" class="header-cart-item-name">
											Edit profile
										</a>
										</div>
								</li>

								<li class="header-cart-item">
								<div class="header-cart-item-img">
										<img src="./assets1/images/icons/editpassword.png" style="height:20px;width:20px;" alt="IMG">
									</div>
									<div class="header-cart-item-txt">
										<a href="./user_details" class="header-cart-item-name">
											Edit password
										</a>
										</div>
								</li>

								<li class="header-cart-item">
								<div class="header-cart-item-img">
										<img src="./assets1/images/icons/logout.png" style="height:20px;width:20px;" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="./userlogout" class="header-cart-item-name">
											Logout
										</a>
									</div>
								</li>
							</ul>
						</div>
						<!--  DROPDOWN END   -->		
					</div>
			
          
			<?php
			}else{
			?>
					<a href="<?= base_url();?>/userlogin" class="header-wrapicon1 dis-block">
						<img src="./assets1/images/icons/icon-header-01.png"  alt="ICON">
					</a>
			
			<?php
			}
			?>
					<span class="linedivide1"></span>

					<a href="<?= base_url();?>/cart">	<img src="./assets1/images/icons/icon-header-02.png" class="header-icon1" alt="ICON">
					</a>	
                   
                    <?php
                    if($this->session->user)
                    {
											$count=0;
                        $this->load->database();
                    $userid=$this->db->get_where("login_table",array("username"=>$this->session->user))->row();
                    $count=$this->db->get("cart_table",$userid)->num_rows();
                    ?>

                    <span class="header-icons-noti"><?=$count?></span>
                    <?php
                    }
                    ?>

						<!-- Header cart noti -->
						
				</div>
			</div>
		</div>

	<!-- top noti -->
	<!--<div class="flex-c-m size22 bg0 s-text21 pos-relative">
		20% off everything! 
		<a href="product.html" class="s-text22 hov6 p-l-5">
			Shop Now
		</a>

		<button class="flex-c-m pos2 size23 colorwhite eff3 trans-0-4 btn-romove-top-noti">
			<i class="fa fa-remove fs-13" aria-hidden="true"></i>
		</button>
	</div>-->
		<!-- Header -->
	<header class="header2">
	
		<!-- Header desktop -->
		<div class="container-menu-header-v2 p-t-26">
			<div class="topbar2">
				<div class="topbar-social">
					<a href="#" class="topbar-social-item fa fa-facebook"></a>
					<a href="#" class="topbar-social-item fa fa-instagram"></a>
					<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
					<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
					<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
				</div>

				<!-- Logo2 -->
				<?php foreach($logo as $image)
		                {?>
				<a href="./index">
					<img src="<?php echo $image->logo;?>" id="image"alt="IMG-LOGO">
				</a>
                    <?php
                            }
                           ?>

				<div class="topbar-child2">
				  <?php foreach($logo as $image)
		           {?>
				
					<span class="topbar-email">
				<!--	<?php echo $image->gmail;?> -->
					</span>
					<?php }
	                         	?>

					

	<?php
			if($this->session->user)
			{
			?>

					<div class="header-wrapicon2">
					<img src="./assets1/images/icons/icon-header-01.png" class="header-icon1 js-show-header-dropdown" alt="ICON">

					<!--  DROPDOWN begin  -->		
					<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<li class="header-cart-item">
								<div class="header-cart-item-img">
										<img src="./assets1/images/icons/myorders.png" style="height:20px;width:20px;" alt="IMG">
									</div>
									<div class="header-cart-item-txt">
										<a href="./my_orders" class="header-cart-item-name">
											My Orders
										</a>
										</div>
								</li>
							
								<li class="header-cart-item">
								<div class="header-cart-item-img">
										<img src="./assets1/images/icons/editprofile.png" style="height:20px;width:20px;" alt="IMG">
									</div>
									<div class="header-cart-item-txt">
										<a href="./user_details_edit" class="header-cart-item-name">
											Edit profile
										</a>
										</div>
								</li>

								<li class="header-cart-item">
								<div class="header-cart-item-img">
										<img src="./assets1/images/icons/editpassword.png" style="height:20px;width:20px;" alt="IMG">
									</div>
									<div class="header-cart-item-txt">
										<a href="./user_details" class="header-cart-item-name">
											Edit password
										</a>
										</div>
								</li>

								<li class="header-cart-item">
								<div class="header-cart-item-img">
										<img src="./assets1/images/icons/logout.png" style="height:20px;width:20px;" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="./userlogout" class="header-cart-item-name">
											Logout
										</a>
									</div>
								</li>
							</ul>
						</div>
						<!--  DROPDOWN END   -->		
					</div>
			
          
			<?php
			}else{
			?>
					<a href="<?= base_url();?>/userlogin" class="header-wrapicon1 dis-block">
						<img src="./assets1/images/icons/icon-header-01.png"  alt="ICON">
					</a>
			
			<?php
			}
			?>
					<span class="linedivide1"></span>

					<a href="<?= base_url();?>/cart">	<img src="./assets1/images/icons/icon-header-02.png" class="header-icon1" alt="ICON">
					</a>	
						<!-- Header cart noti -->
						
				</div>
			</div>

			<div class="wrap_header">

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
					<ul class="main_menu">
					<li class="sale-noti">
						<a href="index.php">HOME</a>
					</li>
					<li>
						<a href="<?= base_url();?>/men">MEN</a>
			
					</li>
					<li>
						<a href="<?= base_url();?>/women">WOMEN</a>
					</li>

					<li>
						<a href="<?= base_url();?>/children">CHILDREN</a>
					</li>

				
					<li>
						<a href="<?= base_url();?>/about">ABOUT</a>
					</li>

					<li>
						<a href="<?= base_url();?>/contact">CONTACT</a>
					</li>
				</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				<div class="header-icons">

				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="./index" class="logo-mobile">
			<?php foreach($logo as $image)
		        {?>
				<img src="<?php echo $image->logo;?>" alt="IMG-LOGO">
				<?php
	             } ?>
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<a href="<?= base_url();?>/userlogin" class="header-wrapicon1 dis-block">
						<img src="./assets1/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide2"></span>

					<div class="header-wrapicon2">
				<a href="<?= base_url();?>/cart"><img src="./assets1/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
				</a><span class="header-icons-noti">0</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							
							
						</div>
					</div>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu">
			<nav class="side-menu" >
				<ul class="main-menu">
					

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">
						       <?php foreach($logo as $image)
		                         {?>
							<span class="topbar-email">
							<?php echo $image->gmail;?>
							</span>
							   <?php }
		                      ?>

							
						</div>
					</li>

					<li class="item-topbar-mobile p-l-10">
						<div class="topbar-social-mobile">
							<a href="#" class="topbar-social-item fa fa-facebook"></a>
							<a href="#" class="topbar-social-item fa fa-instagram"></a>
							<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
							<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
							<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
						</div>
					</li>

					

					<li class="item-menu-mobile">
					<a href="index.php">HOME</a>
					</li>

					<li class="item-menu-mobile">
					<a href="<?= base_url();?>/men">MEN</a>
					</li>

					<li class="item-menu-mobile">
					<a href="<?= base_url();?>/women">WOMEN</a>
					</li>

					<li class="item-menu-mobile">
					<a href="<?= base_url();?>/children">CHILDREN</a>
					</li>

					<li class="item-menu-mobile">
					<a href="<?= base_url();?>/about">ABOUT</a>
					</li>
					<li class="item-menu-mobile">
					<a href="<?= base_url();?>/contact">CONTACT</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>











	
	<!-- Slide1 -->
	<section class="slide1">
		<div class="wrap-slick1">
			
			<div class="slick1">

			<?Php $i=1; foreach($slides as $slide){?>
				<div class="item-slick1 item<?php echo $i++;?>-slick1">
				<a href="./productpage?token=<?php echo $slide->link;?>" id="logo"><img id="logo" src="<?php echo $slide->image;?>"></a>
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<h2 style="color:red;" class="caption1-slide1 xl-text2 t-center bo14 p-b-6 animated visible-false m-b-22" data-appear="fadeInUp">
							<?php echo $slide->quotation;?>
						</h2>

						<span class="caption2-slide1 m-text1 t-center animated visible-false m-b-33" data-appear="fadeInDown">
							New Collection 2018
						</span>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
							<!-- Button -->
							<a href="./productpage?token=<?php echo $slide->link;?>" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								Shop Now
							</a>
						</div>
					</div>
				</div>
			<?php }?>
		
			</div>
		</div>
	</section>


	<!-- Banner -->
	<div class=" bgred p-t-40 p-b-40">
		<div class="container">
			<div class="row">
				<?php  
				$i=0;
				foreach($blocks as $block){
					$i++;
					?>
				
				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
					<a href="./productpage?token=<?php echo $block->link;?>"><img id="logo2"src="<?php echo $block->image;?>"></a>

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="./productpage?token=<?php echo $block->link;?>" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								<?php echo $block->block_name ?>
							</a>
						</div>
					</div>
				</div>
				 <?php if($i==9){
					 break;
				 }
				}
				?>
				

				
			</div>
		</div>
	</div>


	<!-- Our product -->
	<section class="bgwhite p-t-45 p-b-58">
		<div class="container">
			<div class="sec-title p-b-22">
				<h3 class="m-text5 t-center">
					Our Products
				</h3>
			</div>

			<!-- Tab01 -->
			<div class="tab01">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#best-seller" role="tab">Best Seller</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#featured" role="tab">New Arrival</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#sale" role="tab">Sale</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#top-rate" role="tab">Top Rate</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#offers" role="tab">Offers</a>
					</li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content p-t-35">
					<!-- - -->
					<div class="tab-pane fade show active" id="best-seller" role="tabpanel">
						<div class="row">
							<?php 
							$i=0;
							foreach($products as $product)
						 {
							$id=base64_encode(base64_encode(base64_encode($product->product_id)));
				          $i++;
							?>
							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
									<a href="#"><img id="logo1"src="./assets/events/<?php echo $product->id;?>/<?php echo $product->view_image;?>" alt="IMG-PRODUCT"></a>

										<div class="block2-overlay trans-0-4">
											<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
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
											<?php echo $product->title; ?>
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
						<?php
						if($i==12) {
							break;
						}}
						?>
	

					</div>
					</div>

					<!-- - -->
					<div class="tab-pane fade" id="featured" role="tabpanel">
						<div class="row">
						<?php 
						$i=0;
						foreach($newproducts as $product)
						 { $i++;
							$id=base64_encode(base64_encode(base64_encode($product->product_id)));
				
							?>
							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
										<img  id="logo1"src="./assets/events/<?php echo $product->id;?>/<?php echo $product->view_image;?>" alt="IMG-PRODUCT">

										<div class="block2-overlay trans-0-4">
											<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
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
						 <?php if($i==12)
						 {
						break;
						 }}
						 ?>


							
						</div>
					</div>

					<!--  -->
					<div class="tab-pane fade" id="sale" role="tabpanel">
						<div class="row">
						<?php 
						$i=0;
						foreach($deals as $deal)
						{ $i++;
							$this->load->database();
							$this->db->where("product_id",$deal->product_id);
							$data=$this->db->get("product_table");
							$site=$data->row();
							$id=base64_encode(base64_encode(base64_encode($site->product_id)));
					?>
							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
										<img  id="logo1" src="./assets/events/<?php echo $site->id;?>/<?php echo $site->view_image;?>" alt="IMG-PRODUCT">

										<div class="block2-overlay trans-0-4">
											<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
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
											<?php echo $site->title; ?>
										</a>
										<?php if($site->offer==0){?>
										<span class="block2-oldprice m-text7 p-r-5">
										
										</span>
										<span class="block2-newprice m-text8 p-r-5">
										₹<?=$site->cost?>
										</span>
<?php }else{ 
	$additional_offer=$site->offer+$deal->offer;
	$offer_amount=($site->cost*$additional_offer)/100;
	$offer_price=$site->cost-	$offer_amount;
	?>
		                 <span class="block2-newprice m-text8 p-r-5">
										₹<?=$offer_price?>
										</span>
	                   <span class="block2-oldprice m-text7 p-r-5">
										 ₹<?=$product->cost?>	
									   	</span>(<?=$additional_offer?>% off)
										
<?php }
?>							
 

									</div>
								</div>
							</div>

							
						 <?php 
						 if($i==12){
							 break;
						 }
						 }
						 ?>
						</div>
					</div>
		<!-- - -->
		<div class="tab-pane fade" id="offers" role="tabpanel">
						<div class="row">
						<?php 
						$i=0;
						foreach($offerproducts as $product)
						 { $i++;
							$id=base64_encode(base64_encode(base64_encode($product->product_id)));
				
							?>
							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
										<img  id="logo1"src="./assets/events/<?php echo $product->id;?>/<?php echo $product->view_image;?>" alt="IMG-PRODUCT">

										<div class="block2-overlay trans-0-4">
											<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
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
						 <?php if($i==12)
						 {
						break;
						 }}
						 ?>


							
						</div>
					</div>
					<!--  -->
					<div class="tab-pane fade" id="top-rate" role="tabpanel">
						<div class="row">

												<?php
												$i=0;
												 foreach($rateingproducts as $rateingproduct)
					        	{
											$i++;
											$id=base64_encode(base64_encode(base64_encode($rateingproduct->product_id)));
				
						          	?>
              	<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
										<a href="">		<img  id="logo1" src="./assets/events/<?php echo $rateingproduct->id;?>/<?php echo $rateingproduct->view_image;?>" alt="IMG-PRODUCT"></a>
										<div class="block2-overlay trans-0-4">
											<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
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
											<?php echo $rateingproduct->title;?>
										</a>

										<?php if($rateingproduct->offer==0){?>
										<span class="block2-oldprice m-text7 p-r-5">
										
										</span>
										<span class="block2-newprice m-text8 p-r-5">
										₹<?=$rateingproduct->cost?>
										</span>
<?php }else{ 
	$offer_amount=($rateingproduct->cost*$rateingproduct->offer)/100;
	$offer_price=$rateingproduct->cost-$offer_amount;
	?>
	                       <span class="block2-newprice m-text8 p-r-5">
										₹<?=$offer_price?>
										</span>
	                   <span class="block2-oldprice m-text7 p-r-5">
										 ₹<?=$rateingproduct->cost?>	
									   	</span>(<?=$rateingproduct->offer?>% off)
<?php }
?>							
 

									</div>
								</div>
							</div>

							
							<?php if($i==12){
								break;
							}
						 }
						 ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- Banner video -->
	

	<!-- Blog -->
	
	
	<!-- Shipping -->
	<section class="shipping bgwhite p-t-62 p-b-46">
		<div class="flex-w p-l-15 p-r-15">
			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					Free Delivery IN VIJAYAWADA
				</h4>

				<a href="#" class="s-text11 t-center">
					Click here for more info
				</a>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
				<h4 class="m-text12 t-center">
					10 Days Return
				</h4>

				<span class="s-text11 t-center">
					Simply return it within 10 days for an exchange.
				</span>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					Store Opening
				</h4>

				<span class="s-text11 t-center">
					Shop open from Monday to Sunday
				</span>
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

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>

	<!-- Modal Video 01-->
	<div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">

		<div class="modal-dialog" role="document" data-dismiss="modal">
			<div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>

			<div class="wrap-video-mo-01">
				<div class="w-full wrap-pic-w op-0-0"><img src="./assets1/images/icons/video-16-9.jpg" alt="IMG"></div>
				<div class="video-mo-01">
					</div>
			</div>
		</div>
	</div>

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
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="./assets1/vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="./assets1/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="./assets1/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="./assets1/vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="./assets1/vendor/sweetalert/sweetalert.min.js"></script>
	
<!--===============================================================================================-->
	<script type="text/javascript" src="./assets1/vendor/parallax100/parallax100.js"></script>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="./assets1/js/main.js"></script>

</body>
</html>
