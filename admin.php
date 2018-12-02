<?php include('header.php'); ?>
<div class="row .d-flex justify-content-center my-1">
    <div class="col-md-6">

        <h1>Medical Search</h1>
        <div class="alert alert-success">Admin-Login</div> 
        <form action="admin-auth.php" method="post">
            <input type="text" class="form-control my-1" name="email_address" placeholder="Email Address" required>
            <input type="password" class="form-control my-1" name="password" placeholder="Password" required>
            <input type="submit" value="Enter" class="form-control my-1 btn btn-success">
            <input type="reset" value="Clear" class="form-control my-1 btn btn-secondary">
            <hr>
            <a class="badge badge-warning d-flex align-self-center text-center" href="index.php">Register Here</a>
        </form>
    </div>
</div>
<?php include('footer.php'); ?>