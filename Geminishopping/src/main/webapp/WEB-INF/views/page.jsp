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
       
       
       <c:if test="${userClickHome == true }">
       <%@include file="index.jsp" %>
       </c:if>
       
       <c:if test="${userClickMen == true }">
       <%@include file="products.jsp" %>
       </c:if>
       <c:if test="${userClickWomen == true }">
       <%@include file="products.jsp" %>
       </c:if>
        <c:if test="${userClickChildren == true }">
       <%@include file="products.jsp" %>
       </c:if>
       
       <c:if test="${userClickContact == true }">
       <%@include file="contact.jsp" %>
       </c:if> 
       <c:if test="${userClickAbout == true }">
       <%@include file="about.jsp" %>
       </c:if>
        <c:if test="${userclickedlogin == true }">
       <%@include file="login.jsp" %>
       </c:if>
       <c:if test="${userClickCategoryProducts == true}">
       <%@include file="categoryproducts.jsp" %>
       </c:if>
       <c:if test="${userClickSingleProduct == true}">
       <%@include file="product-detail.jsp" %>
       </c:if>
        <c:if test="${userClickcart == true}">
       <%@include file="cart.jsp" %>
       </c:if>
         <c:if test="${userClickchechout == true}">
       <%@include file="payment.jsp" %>
       </c:if>
              <c:if test="${userClickaddress == true}">
       <%@include file="address.jsp" %>
       </c:if>
       <%@include file="./links/scriptlinks.jsp" %>
        <!-- Footer-->
	   <%@include file="./shared/footer.jsp" %> 
    </body>
</html>
