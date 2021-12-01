
<%@ taglib prefix="sf" uri="http://www.springframework.org/tags/form" %>
<style>
.errormsg{
color:red;
}
</style>
<div class="container">

<c:if test="${not empty message}">
	<div class="row">
		<div class="col-xs-12 col-md-offset-2 col-md-8">
			<div class="alert alert-info fade in">${message}</div>
		</div>
	</div>
	
</c:if>



	<div class="row">
		<div class="col-offset-6 col-md-12">
			<div class="panel panel-success">
			<div class="panel-heading">
				<h2 align="center">Admin Details </h2>
			</div>	
		
			<div class="panel-body">
				   <sf:form class="form-horizontal"
				   action="${contextRoot}/admin/edit/details"
				    modelAttribute="user" method="POST">

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
						<sf:hidden path="id" />
						
												
		<div class="form-group">
							<div class="col-md-offset-4 col-md-4">
								<input type="Submit" name="submit" value="submit"
									class="btn btn-primary" />
							</div>
						</div>				
			</sf:form>
			
				
			</div>
		</div>
	</div>
	
	
	