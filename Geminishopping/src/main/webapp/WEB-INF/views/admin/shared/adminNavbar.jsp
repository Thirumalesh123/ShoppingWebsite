<head>
  <title>G-Shopping</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<nav class="navbar navbar-default" style="max-widht:100%">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">G-Shopping</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li>  <a class="nav-item nav-link active" href="${contextRoot}/admin/insert/category"> <span class="sr-only">(current)</span></a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Category<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="${contextRoot}/admin/insert/category">Add Category</a></li>
          <li><a href="${contextRoot}/admin/category/view">Manage Category</a></li>
        </ul>
      </li>
     <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Products<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="${contextRoot}/admin/insert/products">Add Product</a></li>
          <li><a href="${contextRoot}/admin/product/view">Manage Product</a></li>
        </ul>
      </li>   
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Slider<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="${contextRoot}/admin/insert/slider">Add Slider</a></li>
          <li><a href="${contextRoot}/admin/slider/view">Manage Slider</a></li>
        </ul>
      </li> 
       <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Settings<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="${contextRoot}/admin/details">Edit Details</a></li>
          <li><a href="#">Edit Password</a></li>
        </ul>
      </li>   
       <li  ><a href="${contextRoot}/admin/user/view">User</a></li>
        <li  ><a href="${contextRoot}/admin/contact/view">Contact</a></li>
      <li ><a href="${contextRoot}/logout" >logout</a></li>
      
      
      
     <%--  <security:authorize access="isAuthenticated()">
					<li class="dropdown"><a class="btn btn-default"
						href="javascript:void(0)" id="dropdownMenu1"
						data-toggle="dropdown"> ${userModel.fullName} <span
							class="caret"></span>
					</a>
						<ul class="dropdown-menu" aria-labelledby=dropdownMenu1>
							<security:authorize access="hasAuthority('USER')">
								<li id="cart"><a href="${contextRoot}/cart/show"> <span class="glyphicon glyphicon-shopping-cart"></span> &#160;
									<span class="badge">${userModel.cart.cartLines}</span>-&#8377;${userModel.cart.grandTotal}
										<span class="glyphicon glyphicon-shopping-cart">CART</span>
								</a></li>
								<li role="seperator" class="divider"></li>
							</security:authorize>
							<li id="logout"><a href="${contextRoot}/logout">Logout</a></li>
						</ul></li>
				</security:authorize> --%>
      
      
    </ul>
  </div>
</nav>





