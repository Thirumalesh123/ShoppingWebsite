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
           <div class="col-md-5">
            <img src="${images}/logos/login.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
               <!--  <img src="	" alt="logo" class="logo"> -->
              </div>
              <p class="login-card-description">SignUp into your account</p>
            <sf:form class="form-horizontal" modelAttribute="user" method="POST">

						<div class="form-group">
						 <label for="name"class="control-label"> First Name:</label>
							
								<sf:input path="firstname" type="text" id="name"
									placeholder="Enter your First Name" class="form-control " />
								<sf:errors path="firstname" style="color: red" element="em"></sf:errors>
							
						</div>
						
						<div class="form-group">
						 <label for="lastname" class="control-label"> Last Name:</label>
							
								<sf:input path="lastname" type="text" id="name"
									placeholder="Enter your Last Name" class="form-control" />
								<sf:errors path="lastname" style="color: red" element="em"></sf:errors>
							
						</div>
						
						<div class="form-group">
						 <label for="email" class="control-label"> Email:</label>
								<sf:input path="email" type="text" id="name"
									placeholder="Email required" class="form-control" />
								<sf:errors path="email" style="color: red" element="em"></sf:errors>
							
						</div>
						
						<div class="form-group">
						 <label for="contactnumber" class="control-label">Contact Number:</label>
						
							
								<sf:input path="contactNo" type="text" id="name"
									placeholder="Enter Contact Number" class="form-control" />
								<sf:errors path="contactNo" style="color: red" element="em"></sf:errors>
							
						</div>
						
						<div class="form-group">
						 <label for="password" class="control-label">Password:</label>
							
								<sf:input path="password" type="password" id="name"
									placeholder="***Password**" class="form-control"  />
								<sf:errors path="password" style="color: red" element="em" ></sf:errors>
							
						</div>
							
						<div class="form-group">
						 <label for="password" class="control-label">Confirm Password:</label>
							
								<sf:input path="confirmPassword" type="password" id="name"
									placeholder="***Password**" class="form-control" />
								<sf:errors path="confirmPassword" style="color: red" element="em"></sf:errors>
							
						</div>
						<div class="form-group">
						 <label for="selectrole" class="control-label">Select Role:</label>
							<label class="radio-inline">&nbsp
								<sf:radiobutton path="role" value="USER" checked="checked" /> User
							</label>
								
								<label class="radio-inline">
								<sf:radiobutton path="role" value="SUPPLIER"/>Supplier
							</label>
							
						</div>
						
		<div class="form-group">	
							<div class="col-md-offset-8 col-md-8" style="float:right">
								<button type="submit" class="btn btn-primary" name="_eventId_billing">
									Add Address -><span class="glyphicon glyphicon-chevron-right"></span>
								
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
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
   <%@include file="../../links/scriptlinks.jsp" %>
        <!-- Footer-->
	   <%@include file="../../shared/footer.jsp" %> 
    </body>
</html>


