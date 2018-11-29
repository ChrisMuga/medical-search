<?php include ('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin login page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Admin Login</h2>
	</div>
	<form method="post" action="admin_login.php">
		<!--display validation errors -->
		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Admin_name</label>
			<input type="text" name="admin_name">
		</div>
		
	<div class="input-group">
		     <label>Password</label>
		     <input type="text" name="password">


	<div class="input-group">
		     <button type="submit" name="admin" class="btn">Admin</button>

	</div>
	<p>
		Not yet an admin? <a href="register.php">Sign up</a>
	</p>

</form>




</body>
</html>