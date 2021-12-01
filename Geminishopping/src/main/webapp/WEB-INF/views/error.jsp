<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
 <%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>   
 <%@ taglib prefix="spring" uri="http://www.springframework.org/tags" %>   
  <spring:url var="css" value="/resource/css"/>
  <spring:url var="js" value="/resource/js"/>
  <spring:url var="asset" value="/resource/assets"/>
    <spring:url var="images" value="/resource/images"/>
    <c:set var="contextRoot" value="${pageContext.request.contextPath}"/> 
      <%@include file="./links/header.jsp" %>
       <meta name="_csrf" content="${_csrf.token}">
       <meta name="_csrf_header" content="${_csrf.headerName}">
	
      <script>
        window.menu='${title}';
      	window.contextRoot='${contextRoot}';
      </script>
       
   <body class="animsition">
        <!-- Responsive navbar-->
       <%@include file="./shared/nav.jsp" %>
  
          
     <div class="row">
     <div class="col-12">
   <div class="content">
   	<div class="container">
   		<div class="row">
   		<div class="col-12">
   				<div class="jumbotron" style="width:100%">
   				<h2 align="center">${errorTitle}</h2>   				
   				</div>
   				<blockquote>
   					<h4 align="center">${errorDescription}</h4>
   				</blockquote>
   				</div>
   		</div>
   	</div>
   	  </div>
     </div>
   </div>
     <div class="row" style="max-width:100%;">
            <div class="col-12">
           <p align="center" ><a class="navbar-brand" href="${contextRoot}/index">RedirectToHome</a></p>
            </div>
     </div>
       </body>   
		  <%@include file="./shared/footer.jsp" %>

  

