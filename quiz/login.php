<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">	
</head>
<body>
  <div class="header w3-card">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php" class="w3-card">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php" class="w3-bar-item w3-button w3-hide-small w3-hover-grey w3-hover-text-white">Sign up</a>
  	</p>
  </form>
</body>
</html>