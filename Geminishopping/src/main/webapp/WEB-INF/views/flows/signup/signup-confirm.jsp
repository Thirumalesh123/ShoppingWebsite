<%@taglib prefix="sf" uri="http://www.springframework.org/tags/form"%>

<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
 <%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>   
 <%@ taglib prefix="spring" uri="http://www.springframework.org/tags" %>   
  <spring:url var="css" value="/resource/css"/>
  <spring:url var="js" value="/resource/js"/>
  <spring:url var="asset" value="/resource/assets"/>
    <spring:url var="images" value="/resource/images"/>
    <c:set var="contextRoot" value="${pageContext.request.contextPath}"/> 
      <%@include file="../../links/header.jsp" %>
       
  <body class="animsition">
        <!-- Responsive navbar-->
       <%@include file="../../shared/nav.jsp" %>


<%@taglib prefix="sf" uri="http://www.springframework.org/tags/form"%>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login </title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>
 <link href="${css}/login.css" rel="stylesheet" />
<body>
<br><br>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
				<div class="col-md-6">
					<div class="card-body">
					
							
							<p class="login-card-description">Personal Details
								</p>
								
							<div class="text-center">
								<p>
									Name:<strong>${registerModel.user.firstname}
										${registerModel.user.lastname}</strong>
								</p>
								<p>
									Email:<strong>${registerModel.user.email}</strong>
								</p>
								<p>
									Contact Number:<strong>${registerModel.user.contactNo}</strong>
								</p>
								<p>
									Role:<strong>${registerModel.user.role}</strong>
								</p>

								<p>
									<a href="${flowExecutionUrl}&_eventId_personal"
										class="btn btn-primary">Edit Personal</a>
								</p>
							</div>
						</div>
					
					</div>
	

				<div class="col-md-6">
            <div class="card-body">

              <p class="login-card-description">Billing Details </p>

						<div class="panel-body">
							<div class="text-center">
								<p>
								
									Address line1:<strong>${registerModel.billing.addressLineOne},</strong>
								</p>
								<p>
									Address line2:<strong>${registerModel.billing.addressLineTwo},</strong>
								</p>
								<p>
									Postalcode: <strong>${registerModel.billing.city},${registerModel.billing.postalcode}</strong>
								</p>
								<p>
									State: <strong>${registerModel.billing.state},</strong>
								</p>
								<p>
									country: <strong>${registerModel.billing.country}</strong>
								</p>

								<p>
									<a href="${flowExecutionUrl}&_eventId_billing"
										class="btn btn-primary">Edit Billing</a>
								</p>
							</div>
						</div>



					</div>
					<div class="row">
<div class="col-sm-9 col-sm-offset-4">
<div class="text-center">
<a href="${flowExecutionUrl}&_eventId_submit" class="btn btn-primary">Submit</a>
</div>
</div>
</div>
          </div>
        </div>
      </div>

    </div>
  </main>
  <br>
  <br>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
   <%@include file="../../links/scriptlinks.jsp" %>
        <!-- Footer-->
	   <%@include file="../../shared/footer.jsp" %> 
    </body>
</html>



