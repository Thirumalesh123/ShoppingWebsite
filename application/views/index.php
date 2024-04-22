<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Bootstrap core CSS -->
    <link href="./assets//vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./assets//css/simple-sidebar.css" rel="stylesheet">
    <link href="./assets1/css/particle.css">

</head>
<body id="particles-js">
<div class="section py-5">
<div class="container py-5"><div class="row">
<div class="col-md-4"></div>
<div class="col-md-4 py-4 bg-dark" style="color:white">

<form action="./check" method="POST">
<center><h3>User Login</h3></center><br>
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp" placeholder="Username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password"  name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <br>
 <?php echo "<div style='color:red;'>".$this->session->flashdata("error")."</div>"; ?> 
  <br>
  <input type="submit" name="login" class="btn btn-secondary" value="Login">
  <a href="./signup" class="btn btn-secondary">Sign Up</a>

</form>
</div>
</div>
<div class="col-md-4"></div>
</div>
</div>
</div>
</body>
<script src="./assets1/js/particle.js"></script>
<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib --> 
<script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
    <script src="./assets//vendor/jquery/jquery.min.js"></script>
    <script src="./assets//vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</html>

