	<!-- Header -->
	
	
	<style>
		.wrap_header_mobile{
	margin-left:0%;
	margin-top:0%;
	width:100%;
  height:50px;
}
		</style>

	<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
				<div class="topbar-social">
					<a href="#" class="topbar-social-item fa fa-facebook"></a>
					<a href="#" class="topbar-social-item fa fa-instagram"></a>
					<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
					<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
					<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
				</div>

				<span class="topbar-child1">
				</span>

				<div class="topbar-child2">
					<span class="topbar-email">
					<?php
					if($this->session->user)
					{
						echo "Welcome ".$this->session->user;
					}
					else{
					?>
					please login
					<?php
					}
					?>
					</span>


				</div>
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="index.html" class="logo">
				<?php foreach($logo as $image)
		                           {
			?>

			<img src="<?php echo $image->logo;?>" alt="IMG-LOGO">
			<?php
	    } ?>	</a>

					<div class="wrap_menu">
			<nav class="menu">
				<ul class="main_menu">
					<li class="sale-noti">
						<a href="<?= base_url();?>/index">HOME</a>
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
			}
			else{
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
                    $count=$this->db->get("cart_table")->num_rows();
                    ?>

                    <span class="header-icons-noti"><?=$count?></span>
                    <?php
                    }
                    ?>

						<!-- Header cart noti -->
						
				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="index.html" class="logo-mobile">
			<?php foreach($logo as $image)
		{?>
			<img src="<?php echo $image->logo;?>" alt="IMG-LOGO">
			<?php
	    } ?>		</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<a href="#" class="header-wrapicon1 dis-block">
						<img src="./assets1/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide2"></span>

					<div class="header-wrapicon2">
					<a href="<?= base_url();?>/cart">	<img src="./assets1/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						</a><span class="header-icons-noti">0</span>

						<!-- Header cart noti -->
						
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
		<div class="wrap-side-menu" >
			<nav class="side-menu">
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










