<!--	<!-- breadcrumb 
	<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
		<a href="index.html" class="s-text16">
			Home
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<a href="product.html" class="s-text16">
			Women
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<a href="#" class="s-text16">
			T-Shirt
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<span class="s-text17">
			Boxy T-Shirt with Roll Sleeve Detail
		</span>
	</div>--->
	<!-- Product Detail -->
	<div class="container bgwhite p-t-35 p-b-80">
		<div class="flex-w flex-sb">
			<div class="w-size13 p-t-30 respon5">
				<div class="wrap-slick3 flex-sb flex-w">
					<div class="wrap-slick3-dots"></div>

					<div class="slick3">
						<div class="item-slick3" data-thumb="${images}/productimages/${product.code}.jpg">
							<div class="wrap-pic-w">
								<img src="${images}/productimages/${product.code}.jpg" alt="IMG-PRODUCT">
							</div>
						</div>

						
					</div>
				</div>
			</div>

			<div class="w-size14 p-t-30 respon5">
				<h4 class="product-detail-name m-text16 p-b-13">
					${product.name}
				</h4>

				<span class="m-text17">
					&#8377 ${product.cost}
				</span>

				<p class="s-text8 p-t-10">
				We take all the COVID Precautions In Delivery of the Product
				</p>

				<!--  -->
				 <div class="p-t-33 p-b-60">
					<!-- <div class="flex-m flex-w p-b-10">
						<div class="s-text15 w-size15 t-center">
							Size
						</div>

						<div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
							<select class="selection-2" name="size">
								<option>Choose an option</option>
								<option>Size S</option>
								<option>Size M</option>
								<option>Size L</option>
								<option>Size XL</option>
							</select>
						</div>
					</div>  -->
					<!-- <div class="flex-m flex-w">
						<div class="s-text15 w-size15 t-center">
							Color
						</div>

						<div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
							<select class="selection-2" name="color">
								<option>Choose an option</option>
								<option>Gray</option>
								<option>Red</option>
								<option>Black</option>
								<option>Blue</option>
							</select>
						</div>
					</div> -->

					<div class="flex-r-m flex-w p-t-10">
						<div class="w-size16 flex-m flex-w">
							<div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">
								<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
								</button>

								<input class="size8 m-text18 t-center num-product" type="number" name="num-product"  value=1 min="1" max="5" >

								<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
									<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
								</button>
							</div>

							<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
								<!-- Button -->
								<security:authorize access="isAnonymous()">
								<a href="${contextRoot}/login">
								<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
									Add to Cart
								</button>
								</a>
								<br>
								<a href="${contextRoot}/login">
								<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" style="background-color:orange" >
									Buy Now
								</button>
								</a>
								</security:authorize>
								 <security:authorize access="hasAuthority('USER')">
								 <c:if test="${product.quantity > 0 }">
								<a href="${contextRoot}/cart/add/${product.id}/product">
								<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
									Add to Cart
								</button>
								</a>
								<br>
								<a href="${contextRoot}/cart/payment">
								<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" style="background-color:orange" >
									Buy Now
								</button>
								</a>
								</c:if>
								 <c:if test="${product.quantity <= 0 }">
								 <p style="color:red;">product out of stock</p>
								<a href="${contextRoot}/cart/add/${product.id}/product">
								<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" disabled>
									Add to Cart
								</button>
								</a>
								
								<br>
								<a href="${contextRoot}/cart/payment">
								<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" style="background-color:orange" disabled>
									Buy Now
								</button>
								</a><br>
								</c:if>
								</security:authorize>
							</div>
							<br>
						</div>
					</div>
				</div>

			
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
							${product.description}
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
					${product.additionalfeatures}	</p>
					</div>
				</div>

				<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Reviews (0)
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
						yes the product is good product
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Relate Product -->
	<section class="relateproduct bgwhite p-t-45 p-b-138">
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					Related Products
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">
			<c:forEach items="${relatedprojects}" var="rproduct">
					<div class="item-slick2 p-l-15 p-r-15">
						<!-- Block2 -->
						<div class="block2">
						<a href="${contextRoot}/show/${rproduct.id}/product" class="block2-name dis-block s-text3 p-b-5">	
								
							<div class="block2-img wrap-pic-w of-hidden pos-relative ">
								<img src="${images}/productimages/${rproduct.code}.jpg" height=300px alt="IMG-PRODUCT">

								<div class="block2-overlay trans-0-4">
									<!-- <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
									</a>

									<div class="block2-btn-addcart w-size1 trans-0-4">
										Button
										<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
											Add to Cart
										</button>
									</div> -->
								</div>
							</div>
							</a>
							<div class="block2-txt p-t-20">
								<a href="${contextRoot}/show/${rproduct.id}/product" class="block2-name dis-block s-text3 p-b-5">
									${rproduct.name}
								</a>

								<span class="block2-price m-text6 p-r-5">
									&#8377 ${rproduct.cost}
								</span>
							</div>
						</div>
					</div>
			</c:forEach>
				</div>
			</div>

		</div>
	</section>

