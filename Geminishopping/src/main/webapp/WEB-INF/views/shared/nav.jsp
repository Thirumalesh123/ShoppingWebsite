<%@taglib prefix="security" uri="http://www.springframework.org/security/tags" %>
<script>
	window.userRole='${userModel.role}';
</script>
	<!-- Header -->
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
					Free shipping for All orders
				</span>

				<div class="topbar-child2">
					<span class="topbar-email">
						shopping@gmail.com
					</span>

					
				</div>
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="${contextRoot}/index" class="logo">
					<img src="${images}/logos/logo.png"  width=100px; height=300px; alt="IMG-LOGO">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li class="sale-noti">
								<a href="${contextRoot}/index">Home</a>
								
							</li>

							<li>
								<a href="${contextRoot}/men">Men</a>
							</li>

							<li >
								<a href="${contextRoot}/women">Women</a>
							</li>

							<li>
								<a href="${contextRoot}/children">Children</a>
							</li>

						

							<li>
								<a href="${contextRoot}/about">About</a>
							</li>

							<li>
								<a href="${contextRoot}/insert/contact">Contact</a>
							</li>
							
							
							
					
						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				<div class="header-icons">
				<security:authorize access="isAnonymous()">
					<a href="${contextRoot}/login" class="header-wrapicon1 dis-block">
						<img src="${asset}/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>
				</security:authorize>
 <security:authorize access="isAuthenticated()">
			<div class="header-wrapicon2">
						<img src="${asset}/images/icons/icon-header-01.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<li class="header-cart-item">
									<p>Name:  ${userModel.fullName}</p>
									
								</li>
								<hr>
								<li>
									<p>Mail Id: ${userModel.email} </p>
															
								</li>	
								<hr>
								<li>
									<li id="logout"><a href="${contextRoot}/logout">Logout</a></li>					
								</li>	
							</ul>
						</div>
					</div>
</security:authorize>	

					<span class="linedivide1"></span>



					<div class="header-wrapicon2">
					<security:authorize access="isAnonymous()">
					<a href="${contextRoot}/login" class="header-wrapicon1 dis-block">
						<img src="${asset}/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						
						</a>
					</security:authorize>
					 <security:authorize access="hasAuthority('USER')">
					 <a href="${contextRoot}/cart/view" class="header-wrapicon1 dis-block">
						<img src="${asset}/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">${userModel.cart.cartLines}</span>
						
						</a>
					 </security:authorize>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="index.html" class="logo-mobile">
				<img src="${images}/logos/logo.png" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
									<security:authorize access="isAnonymous()">
					<a href="${contextRoot}/login" class="header-wrapicon1 dis-block">
						<img src="${asset}/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>
				</security:authorize>
 <security:authorize access="isAuthenticated()">
			<div class="header-wrapicon2">
						<img src="${asset}/images/icons/icon-header-01.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<li class="header-cart-item">
									<p>Name:  ${userModel.fullName}</p>
									
								</li>
								<hr>
								<li>
									<p>Mail Id: ${userModel.email} </p>
															
								</li>	
								<hr>
								<li>
									<li id="logout"><a href="${contextRoot}/logout">Logout</a></li>
									
															
								</li>	
							</ul>
						</div>
					</div>
</security:authorize>	
					<span class="linedivide2"></span>

					<div class="header-wrapicon2">
					<security:authorize access="isAnonymous()">
						<a href="${contextRoot}/login" class="header-wrapicon1 dis-block">
							<img src="${asset}/images/icons/icon-header-02.png"
							class="header-icon1 js-show-header-dropdown" alt="ICON">
						</a>
					</security:authorize>
					<security:authorize access="hasAuthority('USER')">
						<a href="${contextRoot}/cart/view" class="header-wrapicon1 dis-block">
							<img src="${asset}/images/icons/icon-header-02.png"
							class="header-icon1 js-show-header-dropdown" alt="ICON">
							<span class="header-icons-noti">${userModel.cart.cartLines}</span>

						</a>
					</security:authorize>
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
						<span class="topbar-child1">
							Free shipping for standard order over $100
						</span>
					</li>

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">
							<span class="topbar-email">
								gemini@gmail.com
							</span>

							
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
<li>
								<a href="${contextRoot}/index" style="color:black;">Home</a>
								
							</li>

							<li>
								<a href="${contextRoot}/men"  style="color:black;">Men</a>
							</li>

							<li class="sale-noti">
								<a href="${contextRoot}/women"  style="color:black;">Women</a>
							</li>
							<li>
								<a href="${contextRoot}/children"  style="color:black;">Children</a>
							</li>
							<li>
								<a href="${contextRoot}/about"  style="color:black;">About</a>
							</li>

							<li>
								<a href="${contextRoot}/insert/contact"  style="color:black;">Contact</a>
							</li>


			</ul>
			</nav>
		</div>
	</header>

