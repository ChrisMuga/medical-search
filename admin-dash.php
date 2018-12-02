<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<?php $id = rand(10,10000);?>
<style>
.col-center{margin-top:33.3333vh;}
.col-md-3{text-align:center;}
.col-md-3:hover{cursor:pointer;}
img{align-self:center;}
p{font-size: 14px; text-align:center; font-weight: bold;}
</style>
<div class="row d-flex justify-content-center mt-4">
    <div class='col-md-8 col-center'>
        <div class="row">
            <!-- item -->
            <div class="col-md-3">
                <img src="assets/users.png" alt="Users">
                <hr>
                <p>USERS</p>
            </div>
            <!-- item -->

            <!-- item -->
            <div class="col-md-3">
                <img src="assets/register.png" alt="Users">
                <hr>
                <p>REGISTER DISEASE</p>
            </div>
            <!-- item -->


            <!-- item -->
            <div class="col-md-3">
                <img src="assets/science.png" alt="Users">
                <hr>
                <p>DISEASES</p>
            </div>
            <!-- item -->

            <!-- item -->
            <div class="col-md-3">
                <img src="assets/pin.png" alt="Users">
                <hr>
                <p>RECENTLY ADDED DISEASE</p>
            </div>
            <!-- item -->
        
        </div>
    </div>
</div>
<?php include('footer.php'); ?>