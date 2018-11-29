<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	<form method="post" action="register.php">

		<!--display validation errors -->
		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="Username" value="<?php echo $Username; ?>">
			
		</div>
		<div class="input-group">
		     <label>Email</label>
		     <input type="text" name="Email" value="<?php echo $Email; ?>">

	</div>
	<div class="input-group">
		     <label>Password</label>
		     <input type="text" name="Password_1">


	</div>
	<div class="input-group">
		     <label>Confirm Password</label>
		     <input type="text" name="Password_2">


	</div>
	<div class="input-group">
		     <button type="submit" name="Register" class="btn">Register</button>

	<div class="input-group">
		     <button type="submit" name="Admin" class="btn">Admin</button>

	</div>
	
	<p>
		Already a member? <a href="login.php">Sign in</a>
	</p>

</form>




</body>
</html>