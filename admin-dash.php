<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<?php include('recent.php'); ?>
<?php $id = rand(10,10000);?>
<style>
.col-center{margin-top:33.3333vh;}
.col-md-3{text-align:center;}
.col-md-3:hover{cursor:pointer;}
img{align-self:center;}
p{font-size: 14px; text-align:center; font-weight: bold;}
.bold{font-weight:bold;}
</style>
<div class="row d-flex justify-content-center mt-4">
    <div class='col-md-8 col-center'>
        <div class="row">
            <!-- item -->
            <div class="col-md-3">
                <a href="users.php">
                    <img src="assets/users.png" alt="Users">
                    <hr>
                    <p>USERS</p>
                </a>
            </div>
            <!-- item -->

            <!-- item -->
            <div class="col-md-3">
                <a href="register-disease.php">
                    <img src="assets/register.png" alt="Users">
                    <hr>
                    <p>REGISTER DISEASE</p>
                </a>
            </div>
            <!-- item -->


            <!-- item -->
            <div class="col-md-3">
                <a href="home.php">
                    <img src="assets/science.png" alt="Users">
                    <hr>
                    <p>DISEASES</p>
                </a>
            </div>
            <!-- item -->

            <!-- item -->
            
            <div class="col-md-3">
                <a href="#" data-toggle="modal" data-target="#exampleModal">
                    <img src="assets/pin.png" alt="Users">
                    <hr>
                    <p>RECENTLY ADDED DISEASE</p>
                </a>
            </div>
            <!-- item -->
        
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Most Recent: <span class="text-danger"><?php echo $_SESSION['disease_name']; ?></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h1 class="text-center text-danger"><?php echo $_SESSION['disease_name']; ?></h1>
        <span class="badge badge-warning"><?php echo $_SESSION['disease_category']; ?></span>
        <hr>
        <ul class="list-group">
            <li class="list-group-item active"><h6>SYMPTOMS</h6></li>
            <?php foreach($symptoms as $index=>$symptom){?>
                <li class="list-group-item"><span class="badge badge-primary"><?php echo $index+1; ?></span> <span class="text-dark bold"><?php echo strtoupper($symptom); ?></span></li>
            <?php } ?>
        </ul>
        <hr>
        <h6 class="text-danger">PRESCRIPTION</h6>
        <p><?php echo $_SESSION['disease_prescription']; ?></p>
        <h6 class="text-danger">COMMENTS</h6>
        <p><?php echo $_SESSION['disease_comments']; ?></p>

        



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php include('footer.php'); ?>