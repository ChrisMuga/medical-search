<?php include('header.php'); ?>
<div class="row .d-flex justify-content-center my-1">
    <div class="col-md-6">

        <h1>Medical Search</h1>
        <div class="alert alert-success">Register</div> 
        <form action="register.php" method="post">
            <input type="text" class="form-control my-1" name="first_name" placeholder="First Name" required>
            <input type="text" class="form-control my-1" name="last_name" placeholder="Last Name" required>
            <input type="email" class="form-control my-1" name="email_address" placeholder="Email Address" required>
            <input type="password" class="form-control my-1" name="password" placeholder="Password" required>
            <input type="hidden" class="form-control my-1" name="class" value="user">
            <input type="submit" value="Enter" class="form-control my-1 btn btn-success">
            <input type="reset" value="Clear" class="form-control my-1 btn btn-secondary">
            <hr>
            <a class="badge badge-warning d-flex align-self-center text-center" href="login.php">Sign In Here</a>
            <a class="badge badge-secondary my-2 d-flex align-self-center text-center" href="admin.php">Admin Sign In Here</a>
        </form>
    </div>
</div>
<?php include('footer.php'); ?>