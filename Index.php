
//if user is not logged in they canot access this page
if(empty($_SESSION['username'])) {
	header('location: login.php');
}

//if admin is not logged in they cannot acces this page
if(empty($_SESSION['admin_name'])) {
	header('location: admin.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>STD Diagnosis system</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
         <h2>Home page</h2>
	</div>

	<div class="content">
		<?php if (isset($_SESSION['success'])): ?>
		<div class="error success">
			<h3>
				<?php
				echo $_SESSION['success'];
				unset($_SESSION['success']);
				?>

				</h3>

</div>
<?php endif ?>

<?php if (isset($_SESSION["username"])): ?> 
  <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
 <p><a href="" style="color: blue;">Logout</a></p>

 <?php if (isset($_SESSION["admin_name"])): ?> 
  <p>Welcome <strong><?php echo $_SESSION['admin_name']; ?></strong></p>
 <p><a href="" style="color: red;">Logout</a></p>
<?php endif ?>
</div>

</body>
</html>