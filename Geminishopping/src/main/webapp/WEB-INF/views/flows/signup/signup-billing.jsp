<%@taglib prefix="sf" uri="http://www.springframework.org/tags/form"%>
<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
	pageEncoding="ISO-8859-1"%>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core"%>
<%@ taglib prefix="spring" uri="http://www.springframework.org/tags"%>
<spring:url var="css" value="/resource/css" />
<spring:url var="js" value="/resource/js" />
<spring:url var="asset" value="/resource/assets" />
<spring:url var="images" value="/resource/images" />
<c:set var="contextRoot" value="${pageContext.request.contextPath}" />
<%@include file="../../links/header.jsp"%>

<body class="animsition">
	<!-- Responsive navbar-->
	<%@include file="../../shared/nav.jsp"%>


	<%@taglib prefix="sf" uri="http://www.springframework.org/tags/form"%>




	<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Login</title>
<link
	href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap"
	rel="stylesheet">
<link rel="stylesheet"
	href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
<link rel="stylesheet"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>
<link href="${css}/login.css" rel="stylesheet" />
<body>
	<br>
	<br>
	<main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
	<div class="container">
		<div class="card login-card">
			<div class="row no-gutters">
				<div class="col-md-5">
					<img src="${images}/logos/login.jpg" alt="login"
						class="login-card-img">
				</div>
				<div class="col-md-7">
					<div class="card-body">
						<div class="brand-wrapper">
							<!--  <img src="	" alt="logo" class="logo"> -->
						</div>
						<p class="login-card-description">Add Address</p>
					<sf:form class="form-horizontal" modelAttribute="billing"
						method="POST">

						<div class="form-group">
							<label class="control-label " for="addressLineOne">Address
								Line One:</label>
							
								<sf:input path="addressLineOne" type="text" id="name"
									placeholder="address Line One" class="form-control" />
								<sf:errors path="addressLineOne" style="color: red" element="em"></sf:errors>
							
						</div>

						<div class="form-group">
							<label class="control-label" for="addressLineTwo">
								Address Line Two:</label>
						
								<sf:input path="addressLineTwo" type="text" id="name"
									placeholder="address Line Two" class="form-control" />
								<sf:errors path="addressLineTwo" style="color: red" element="em"></sf:errors>
						
						</div>

						<div class="form-group">
							<label class="control-label" for="city"> city:</label>
							
								<sf:input path="city" type="text" id="name"
									placeholder="Enter City Name" class="form-control" />
								<sf:errors path="city" style="color: red" element="em"></sf:errors>
						
						</div>

						<div class="form-group">
							<label class="control-label" for="state">State:</label>
							
								<sf:input path="state" type="text" id="name"
									placeholder="Enter State" class="form-control" />
								<sf:errors path="state" style="color: red" element="em"></sf:errors>
							
						</div>

						<div class="form-group">
							<label class="control-label" for="country">
								Country:</label>
							
								<sf:input path="country" type="text" id="name"
									placeholder="Enter Country name" class="form-control" />
								<sf:errors path="country" style="color: red" element="em"></sf:errors>
							
						</div>

						<div class="form-group">
							<label class="control-label" for="postalcode">Postal
								Code:</label>
							
								<sf:input path="postalcode" type="text" id="name"
									placeholder="*******" class="form-control" />
								<sf:errors path="postalcode" style="color: red" element="em"></sf:errors>
							
						</div>
						<div class="row"> 
						<div class="form-group col-md-6">
							<div class="col-md-offset-4 ">
								<button type="submit" class="btn btn-primary"
									name="_eventId_personal">
									<span class="glyphicon glyphicon-chevron-left">  <-
										Signup</span>
								</button>
							</div>
							</div>
							<div class="col-md-offset-4 col-md-6">
								<button type="submit" class="btn btn-primary"
									name="_eventId_confirm">
									Next -> Confirm<span class="glyphicon glyphicon-chevron-right"></span>
								</button>
							</div>
						
						</div>
					</sf:form>



					</div>
				</div>
			</div>
		</div>

	</div>
	</main>
	<br>
	<br>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script
		src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script
		src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<%@include file="../../links/scriptlinks.jsp"%>
	<!-- Footer-->
	<%@include file="../../shared/footer.jsp"%>
</body>
</html>



