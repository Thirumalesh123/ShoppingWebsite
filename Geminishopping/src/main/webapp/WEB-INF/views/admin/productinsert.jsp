<%@ taglib prefix="sf" uri="http://www.springframework.org/tags/form"%>
<style>
.errormsg {
	color: red;
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
					<h3>Product Management</h3>
				</div>
				<div class="panel-body">
					<sf:form class="form-horizontal" modelAttribute="product"
						action="${contextRoot}/admin/insert/products" method="POST"
						enctype="multipart/form-data" >
						<div class="form-group">
							<label class="control-label col-md-4" for="name">Enter
								product Name</label>
							<div class="col-md-8">
								<sf:input path="name" type="text" id="name"
									placeholder="Product Name" class="form-control" />
								<sf:errors path="name" cssClass="errormsg" element="em" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-4" for="brand">Enter
								Brand Name</label>
							<div class="col-md-8">
								<sf:input path="brand" type="text" id="brand"
									placeholder="Brand Name" class="form-control" />
								<sf:errors path="brand" cssClass="errormsg" element="em" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-4" for="description">
								Description</label>
							<div class="col-md-8">
								<sf:textarea path="description" id="description" row="4"
									placeholder="Description" class="form-control" />
								<sf:errors path="description" cssClass="errormsg" element="em" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-4" for="description">
								Additional information</label>
							<div class="col-md-8">
								<sf:textarea path="additionalfeatures" id="additionalfeatures" row="4"
									placeholder="" class="form-control" />
								<sf:errors path="additionalfeatures" cssClass="errormsg" element="em" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-4" for="unitPrice">
								Unit Price of Product</label>
							<div class="col-md-8">
								<sf:input path="cost" id="cost" type="number"
									placeholder="Unit price in &#8377" class="form-control" />
								<sf:errors path="cost" cssClass="errormsg" element="em" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-4" for="quantity">
								Quantity</label>
							<div class="col-md-8">
								<sf:textarea path="quantity" id="quantity" type="number"
									placeholder="Quantity" class="form-control" />
								<sf:errors path="quantity" cssClass="help-block" element="em" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-4" for="file"> Upload
								an image file</label>
							<div class="col-md-8">
								<sf:input path="file" type="file" class="form-control" multiple="multiple" />
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
								<div class="text-right">
									<br>
									<sf:hidden path="id" />
									<sf:hidden path="code" />
									<sf:hidden path="supplierId" />
									<sf:hidden path="Isactive" />
								</div>
								</div>
								<div class="form-group">
								 <label for="selectrole" class="control-label col-md-4">Add TO Featured List:</label>
								 <label class="radio-inline">&nbsp
								 <sf:radiobutton path="featured" value='true' checked="checked" /> YES
								</label>
								<label class="radio-inline">
								<sf:radiobutton path="featured" value='false' />NO
							</label>
							</div>
							<div class="form-group">
								 <label for="selectrole" class="control-label col-md-4">Gender:</label>
								 <label class="radio-inline">&nbsp
								 <sf:radiobutton path="gender" value='male' checked="checked" /> Men
								</label>
								<label class="radio-inline">
								<sf:radiobutton path="gender" value='women' />Women
							</label>
							<label class="radio-inline">
								<sf:radiobutton path="gender" value='children' />Children
							</label>
							<label class="radio-inline">
								<sf:radiobutton path="gender" value='unisex' />Unisex
							</label>
							</div>
						</div>
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



	

	</div>

</div>

