 	<!-- Cart -->
 	<c:if test="${not empty message}">
		<div class="row" style="max-width:100%">
			<div class="col-xs-12 col-md-12">
				<div class=""><p align="center"><b>  ${message}</b></p></div>
			</div>
		</div>
	</c:if>
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
							<th class="column-4 p-l-70">Quantity</th>
							<th class="column-5 p-l-70">Update</th>
							<th class="column-6">Total</th>
						</tr>
						<c:forEach items="${cartLines}" var="cartLine">
						<tr class="table-row">
							<td class="column-1">
							<a href="${contextRoot}/cart/${cartLine.id}/delete">
								<div class="cart-img-product b-rad-4 o-f-hidden">
									<img src="${images}/productimages/${cartLine.product.code}.jpg" alt="IMG-PRODUCT">
								</div>
								</a>
							</td>
							<td class="column-2"><a href="${contextRoot}/show/${cartLine.product.id}/product" class="block2-name dis-block s-text3 p-b-5">
										${cartLine.product.name}
									</a></td>
							<td class="column-3"> &#8377  ${cartLine.product.cost }</td>
							<td class="column-4">
								<div class="flex-w bo5 of-hidden w-size17">
									<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
									</button>

									<input class="size8 m-text18 t-center num-product" id="count_${cartLine.id}" type="number"  value="${cartLine.productCount}" min="1" max="4">

									<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
									</button>
								</div>
							</td>
							<td class="column-5 ">
							<c:if test="${cartLine.available==true}">
							<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" style="height:40px;padding:20px;"name="refreshCart" value="${cartLine.id}">
								Refresh Cart
							</button>
							</c:if>
							</td>
							<td class="column-6">&#8377 ${cartLine.total}</td>
						</tr>
						</c:forEach>
						
					</table>
				</div>
			</div>

			<!-- <div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
				<div class="flex-w flex-m w-full-sm">
					<div class="size11 bo4 m-r-10">
						<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="coupon-code" placeholder="Coupon Code">
					</div>

					<div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
						Button
						<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
							Apply coupon
						</button>
					</div>
				</div>
 
				<div class="size10 trans-0-4 m-t-10 m-b-10">
					Button
					<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
						Update Cart
					</button>
				</div>
			</div>
 -->
 
			<!-- Total -->
			<c:if test="${userModel.cart.cartLines > 0 }">
			<div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
				<h5 class="m-text20 p-b-24">
					Cart Totals
				</h5>

				<!--  -->
				<div class="flex-w flex-sb-m p-b-12">
					<span class="s-text18 w-size19 w-full-sm">
						Subtotal:
					</span>

					<span class="m-text21 w-size20 w-full-sm">
						&#8377 ${userModel.cart.grandTotal}
					</span>
				</div>

				<!--  -->
				<div class="flex-w flex-sb bo10 p-t-15 p-b-20">
					<span class="s-text18 w-size19 w-full-sm">
						Shipping:
					</span>

					<div class="w-size20 w-full-sm">
						<p class="s-text8 p-b-23">
						shipping methods is Safe and We don't charge for Shipping.
						Please double check your address, or contact us if you need any help.
						</p>



					</div>
				</div>

				<!--  -->
				<div class="flex-w flex-sb-m p-t-26 p-b-30">
					<span class="m-text22 w-size19 w-full-sm">
						Total:
					</span>

					<span class="m-text21 w-size20 w-full-sm">
							&#8377 ${userModel.cart.grandTotal}

					</span>
				</div>

				<div class="size15 trans-0-4">
					<!-- Button -->
					<a href="${contextRoot}/cart/payment">
					<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
						Proceed to Checkout
					</button>
					</a>
				</div>
			</div>
			</c:if>
		</div>
	</section>
