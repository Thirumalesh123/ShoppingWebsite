	<!-- Slide1 -->
	<section class="slide1">
		<div class="wrap-slick1">
			<div class="slick1">
			<c:forEach items="${sliders}" var="slider">
				<div class="item-slick1 item1-slick1" style="background-image: url(${images}/slider/${slider.image_url}.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
							${slider.heading}
						</span>

						<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
							${slider.description}
						</h2>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
							<!-- Button -->
							<a href="${contextRoot}/show/category/${slider.categoryId}/products" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								Shop Now
							</a>
						</div>
					</div>
				</div>
			</c:forEach>
				

				

			</div>
		</div>
	</section>

	<!-- Banner -->
	<section class="banner bgwhite p-t-40 p-b-40">
		<div class="container">
			<div class="row">
				<c:forEach items="${categories}" var="category">
				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<!-- block1 -->
					<a href="${contextRoot}/show/category/${category.id}/products">
							
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="${images}/categoryimages/${category.image_url}.jpg" width=250px; height=350px; alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="${contextRoot}/show/category/${category.id}/products" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								${category.name}
							</a>
						</div>
					</div>
					</a>
				</div>
				</c:forEach>
			</div>
		</div>
	</section>

	<!-- New Product -->
	<section class="newproduct bgwhite p-t-45 p-b-105">
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					Featured Products
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">
<c:forEach items="${featuredproducts}" var="featuredproduct">
					<div class="item-slick2 p-l-15 p-r-15">
						<!-- Block2 -->
						<div class="block2">
						<a href="${contextRoot}/show/${featuredproduct.id}/product">
							<div class="block2-img wrap-pic-w of-hidden pos-relative">
								<img src="${images}/productimages/${featuredproduct.code}.jpg" style="height:300px;"alt="IMG-PRODUCT">

								<div class="block2-overlay trans-0-4">
									

									
								</div>
							</div>
							</a>
							<div class="block2-txt p-t-20">
								<a href="${contextRoot}/show/${featuredproduct.id}/product" class="block2-name dis-block s-text3 p-b-5">
									${featuredproduct.name}
								</a>

								<span class="block2-price m-text6 p-r-5">
									&#8377 ${featuredproduct.cost}
								</span>
							</div>
						</div>
					</div>
</c:forEach>


				</div>
			</div>

		</div>
	</section>


<!--ourproducts-->
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
						<a class="nav-link active" data-toggle="tab" href="#top-rate" role="tab">Top Rate</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#featured" role="tab">Featured</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#viewproducts" role="tab">Most Viewed </a>
					</li>
					
				</ul>

				<!-- Tab panes -->
				<div class="tab-content p-t-35">
					<!-- - -->
					<div class="tab-pane fade show active" id="top-rate" role="tabpanel">
						<div class="row">
						<c:forEach items="${ratedproducts}" var="ratedproduct">
							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								<!-- Block2 -->
								<div class="block2">
								<a href="${contextRoot}/show/${ratedproduct.id}/product">
									<div class="block2-img wrap-pic-w of-hidden pos-relative ">
										<img src="${images}/productimages/${ratedproduct.code}.jpg" alt="IMG-PRODUCT">
								<div class="block2-overlay trans-0-4">
									

									
								</div>
									</div>
								</a>
									<div class="block2-txt p-t-20">
										<a href="${contextRoot}/show/${ratedproduct.id}/product" class="block2-name dis-block s-text3 p-b-5">
											${ratedproduct.name}
										</a>

										<span class="block2-price m-text6 p-r-5">
											&#8377 ${ratedproduct.cost}
										</span>
									</div>
								</div>
							</div>
							</c:forEach>
							

							

							

							

							
						</div>
					</div>

					<!-- - -->
					<div class="tab-pane fade" id="featured" role="tabpanel">
						<div class="row">
						<c:forEach items="${featuredproducts}" var="featuredproduct">
							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								<!-- Block2 -->
								<div class="block2">
								<a href="${contextRoot}/show/${featuredproduct.id}/product">
									<div class="block2-img wrap-pic-w of-hidden pos-relative ">
										<img src="${images}/productimages/${featuredproduct.code}.jpg" style="height:300px;" alt="IMG-PRODUCT">

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
										<a href="${contextRoot}/show/${featuredproduct.id}/product" class="block2-name dis-block s-text3 p-b-5">
											${featuredproduct.name}
										</a>

										<span class="block2-oldprice m-text7 p-r-5">
											&#8377 ${featuredproduct.cost}
										</span>

										
									</div>
								</div>
							</div>
							</c:forEach>


						</div>
					</div>

					<!--  -->
					<div class="tab-pane fade" id="viewproducts" role="tabpanel">
						<div class="row">
						<c:forEach items="${viewedproducts}" var="viewedproduct">
							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								<!-- Block2 -->
								<div class="block2">
								<a href="${contextRoot}/show/${viewedproduct.id}/product">
									<div class="block2-img wrap-pic-w of-hidden pos-relative ">
										<img src="${images}/productimages/${viewedproduct.code}.jpg" alt="IMG-PRODUCT">

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
										<a href="${contextRoot}/show/${viewedproduct.id}/product" class="block2-name dis-block s-text3 p-b-5">
											${viewedproduct.name }
										</a>

										<span class="block2-price m-text6 p-r-5">
											&#8377 ${viewedproduct.cost}
										</span>
									</div>
								</div>
							</div>
							</c:forEach>
							

							

						
						</div>
					</div>

					<!--  -->

				</div>
			</div>
		</div>
	</section>









	<!-- Shipping -->
	<section class="shipping bgwhite p-t-62 p-b-46">
		<div class="flex-w p-l-15 p-r-15">
			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					Free Delivery Worldwide
				</h4>

				<a href="#" class="s-text11 t-center">
					Click here for more info
				</a>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
				<h4 class="m-text12 t-center">
					30 Days Return
				</h4>

				<span class="s-text11 t-center">
					Simply return it within 30 days for an exchange.
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

