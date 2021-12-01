<%@ taglib prefix="sf" uri="http://www.springframework.org/tags/form"%>
<style>
.errormsg {
	color: red;
}
</style>	
<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(${images}/logos/contact.jpg);">
		<h2 class="l-text2 t-center">
			Contact
		</h2>
	</section>

	<!-- content page -->
	<section class="bgwhite p-t-66 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 p-b-30">
					<div class="p-r-20 p-r-0-lg">
						<div class="contact-map size21" id="google_map" data-map-x="40.614439" data-map-y="-73.926781" data-pin="images/icons/icon-position-map.png" data-scrollwhell="0" data-draggable="1"></div>
					</div>
				</div>

				<div class="col-md-6 p-b-30">
					<c:if test="${not empty message}">

		<div class="col-xs-12 col-md-offset-2 col-md-8">
			<div class="alert alert-info fade in">${message}</div>
		</div>
	
	
</c:if>
					<sf:form class="leave-comment" modelAttribute="contact"
						action="${contextRoot}/insert/contact" method="POST"
						enctype="multipart/form-data" >
						<h4 class="m-text26 p-b-36 p-t-15">
							Send us your message
						</h4>

						<div class="bo4 of-hidden size15 m-b-20">
						<sf:input path="name" type="text" id="name"
									placeholder="Full Name" class="sizefull s-text7 p-l-22 p-r-22" />
								<sf:errors path="name" cssClass="errormsg" element="em" />

						</div>

						<div class="bo4 of-hidden size15 m-b-20">
						<sf:input path="phoneno" type="text" id="phoneno"
									placeholder="Phone Number" class="sizefull s-text7 p-l-22 p-r-22" />
								<sf:errors path="phoneno" cssClass="errormsg" element="em" />
						
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<sf:input path="email" type="text" id="email"
									placeholder="Email Address" class="sizefull s-text7 p-l-22 p-r-22" />
								<sf:errors path="email" cssClass="errormsg" element="em" />
					
					    </div>
								<sf:textarea path="message" id="description" row="4"
									placeholder="Message" class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" />
								<sf:errors path="message" cssClass="errormsg" element="em" />
						

						<div class="w-size25">
							<!-- Button -->
							<button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
								Send
							</button>
						</div>
						</sf:form>
					
				</div>
			</div>
		</div>
	</section>
	
	
<!--===============================================================================================-->
	<script type="text/javascript" src="${asset}/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="${asset}/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="${asset}/vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="${asset}/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="${asset}/vendor/select2/select2.min.js"></script>
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

<!--===============================================================================================-->

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="${asset}/js/map-custom.js"></script>
