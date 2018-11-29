<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Registration Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Admin</h2>
	</div>
	<!--include errors-->
	<?php include ('errors.php'); ?>
	<form method="post" action="admin_register.php">

		<!--display validation errors -->
		<?php include('errors.php'); ?>
	
	</div>
	<div class="input-group">
		     <label>Admin_name"</label>
		     <input type="text" name="admin_name"value="<?php echo $admin_name; ?>">


	</div>
	<div class="input-group">
		     <label>Password</label>
		     <input type="text" name="password"value="<?php echo $password; ?>">


	</div>
	<div class="input-group">
		     <button type="submit" name="Admin" class="btn">Admin</button>


    <p>
		Already an Admin? <a href="login.php">Sign in</a>
	</p>


</form>



</body>
</html>