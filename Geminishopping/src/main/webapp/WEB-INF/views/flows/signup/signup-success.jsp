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
 <link href="${css}/login.css" rel="stylesheet" />
<body>

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
              </div>Registered Successfully Please Login Here1!
						<c:if test="${not empty message}">
							<div class="row">
								<div class="col-xs-12 col-md-offset-2 col-md-12">
									<div class="login-card-description" style="color:red">${message}</div>
								</div>
							</div>
						</c:if>

						<c:if test="${not empty logout}">
							<div class="row">
								<div class="col-xs-12 col-md-offset-2 col-md-8">
									<div class="login-card-description"style="color:red">${logout}</div>
								</div>
							</div>
						</c:if>
			<p class="login-card-description">Sign into your account</p>
              <form  name="f"action="${contextRoot}/login" method="POST" id="loginExec">
                  <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="username" id="username" class="form-control" placeholder="Email address">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="***********">
                  </div>
                  <input type="submit"name="login" id="login" class="btn btn-block login-btn mb-4" type="button" value="Login">
                  <input type="hidden" name="${_csrf.parameterName}" value="${_csrf.token}">
                </form>
                <a href="#!" class="forgot-password-link">Forgot password?</a>
                <p class="login-card-footer-text">Don't have an account? <a href="${contextRoot}/signup" class="text-reset">Register here</a></p>
                <nav class="login-card-footer-nav">
                  <a href="#!">Terms of use.</a>
                  <a href="#!">Privacy policy</a>
                </nav>
            </div>
          </div>
        </div>
      </div>

    </div>
  </main>
 </body>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
   <%@include file="../../links/scriptlinks.jsp" %>
        <!-- Footer-->
	   <%@include file="../../shared/footer.jsp" %> 
    </body>
</html>


