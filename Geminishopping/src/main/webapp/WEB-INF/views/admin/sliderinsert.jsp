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
				<h2 align="center">Slider Management</h2>
			</div>	
		
			<div class="panel-body">
				<sf:form class="form-horizontal" modelAttribute="slider" 
				action="${contextRoot}/admin/insert/slider"  enctype="multipart/form-data">
					<div class="form-group">
						<label class="control-label col-md-4" for="heading">
						Enter Slider Name:</label>
						<div class="col-md-8">
							<sf:input path="heading" type="text" id="heading"
							placeholder="Slider Heading" class="form-control"/>
							<sf:errors path="heading" cssClass="errormsg" element="em" />
						</div>
					</div>
					
						<sf:hidden path="id" />
						<sf:hidden path="image_url" />
					<div class="form-group">
						<label class="control-label col-md-4" for="Description">
						Description:</label>
						<div class="col-md-8">
							<sf:textarea path="description" id="description" rows="4"
							placeholder="Description Of Category" class="form-control"/>
							<sf:errors path="description" cssClass="errormsg" element="em" />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-4" for="file">
						Image Of Slider:</label>
						<div class="col-md-8">
							<sf:input path="file" id="category" type="file"
							 class="form-control"/>
						<sf:errors path="file" cssClass="errormsg" element="em" />
						</div>
					</div>
					
						<div class="form-group">
							<label class="control-label col-md-4" for="categoryId">
								Select category</label>
							<div class="col-md-8">
								<sf:select class="control-label" id="categoryId"
									path="categoryId" items="${categories}" itemLabel="name"
									itemValue="id">
								</sf:select>
					
							</div>
							</div>
					
					<div class="form-group">
						<div class="col-md-offset-4 col-md-4">
							<input type="submit" name="submit" value="Submit"/>
						</div>
					</div>
					
					
					
				</sf:form>
				
				
			</div>
		</div>
	</div>
	
	
	