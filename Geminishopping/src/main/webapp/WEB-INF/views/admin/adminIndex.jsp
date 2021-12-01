<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
 <%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>   
 <%@ taglib prefix="spring" uri="http://www.springframework.org/tags" %>   
  <spring:url var="css" value="/resource/css"/>
  <spring:url var="js" value="/resource/js"/>
  <spring:url var="asset" value="/resource/assets"/>
    <spring:url var="images" value="/resource/images"/>
    <c:set var="contextRoot" value="${pageContext.request.contextPath}"/> 
    
     
      
     
<!DOCTYPE html>
<html lang="en">
      <%@include file="./links/adminHeaderlinks.jsp" %>
    <body>
        <!-- Responsive navbar-->
       <%@include file="./shared/adminNavbar.jsp" %>
       <c:if test="${userClickAdminHome == true }">
       <%@include file="body.jsp" %>
       </c:if>
       <c:if test="${userClickInsertcategory == true }">
       <%@include file="category.jsp" %>
       </c:if>
        <c:if test="${userClickAdmincategoryview == true }">
        <%@include file="./links/adminHeaderlinks.jsp" %>
        <%@include file="categorylist.jsp" %>
       </c:if>
       <c:if test="${userClickAdminproductview == true }">
        <%@include file="./links/adminHeaderlinks.jsp" %>
      	<%@include file="listofproducts.jsp"%>
       </c:if>
       <c:if test="${userClickInsertProduct == true }">
       <%@include file="productinsert.jsp" %>
       </c:if>
        <c:if test="${userClickInsertslider == true }">
       <%@include file="sliderinsert.jsp" %>
       </c:if>
       <c:if test="${userClickeditdetails == true }">
       <%@include file="editdetails.jsp" %>
       </c:if>
        <c:if test="${userClickAdminsliderview == true }">
        <%@include file="./links/adminHeaderlinks.jsp" %>
      	<%@include file="sliderview.jsp"%>
       </c:if>
        <c:if test="${userClickAdminuserview == true }">
        <%@include file="./links/adminHeaderlinks.jsp" %>
      	<%@include file="userlist.jsp"%>
       </c:if>
        <c:if test="${userClickAdmincontactview == true }">
        <%@include file="./links/adminHeaderlinks.jsp" %>
      	<%@include file="contactus.jsp"%>
       </c:if>
    <script src="${js}/categorylist.js"></script>
     <script src="${js}/Producttable.js"></script>
      <script src="${js}/sliderlist.js"></script>
       <script src="${js}/user.js"></script>
        <script src="${js}/contact.js"></script>
    </body>
</html>
