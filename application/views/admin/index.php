<html>
<head>
  <title>SHOPPING</title>
  <link href="<?=base_url()?>/assets/admin.css" rel="stylesheet" type="text/css">
  <link rel="icon" 
      type="image/png" 
      href="<?= base_url();?>/assets/events/j.jpg">
 
 </head>
<body>
  <div class="header">
  	<h2>ADMIN LOGIN</h2>
  </div>
	 
  <form method="post" action="./adminlogin">
  
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="admin" required>
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password" required>
  	</div>
		<?php echo "<div style='color:red; background-color:white; margin-left:100px;'>".$this->session->flashdata("adminerror")."</div>"; ?> 
  
  	<div class="input-group">
  		<input type="submit" style="height:50px;" class="btn" name="login" value="login">
			 	</div>
  </form>
</body>
</html>