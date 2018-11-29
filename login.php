<?php include ('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>User login page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Login</h2>
	</div>
	<form method="post" action="login.php">
		<!--display validation errors -->
		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="Username">
		</div>
		
	<div class="input-group">
		     <label>Password</label>
		     <input type="text" name="Password">


	<div class="input-group">
		     <button type="submit" name="Login" class="btn">Login</button>

	</div>
	
	<p>
		Not yet a member? <a href="register.php">Sign up</a>
	</p>

</form>




</body>
</html>