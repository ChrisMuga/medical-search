<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<?php $id = rand(10,10000);?>
<style>
label{font-size:20px; font-weight:bold;}
</style>
<form action="enter-disease.php" method="post">
<div class="row .d-flex justify-content-center my-1">
    <div class="col-md-10">
        <div class="row">
            <!-- col -->
            <div class="col-md-4">
                <h1>Medical Search</h1>
                <div class="alert alert-success">Register Disease</div> 
                
                    <h3 class="text-danger">ID: <?php echo $id;?> </h3>
                    <input type="hidden" class="form-control my-1" name="id" value="<?php echo $id; ?>">
                    <hr>
                    <label for="">Disease Name</label>
                    <input type="text" class="form-control my-1" name="disease_name" placeholder="Disease Name">
                    <label for="">Category</label>
                    <select class="form-control" name="category">
                        <option value="STD">STD</option>
                        <option value="IMMUNO-DEFICIENCY DISEASE">IMMUNO-DEFICIENCY DISEASE</option>
                        <option value="GENERAL">GENERAL</option>
                    </select>
                    <label for="">Symptoms</label>
                    <textarea class="form-control" name="symptoms" id="" cols="30" rows="10"></textarea>
                   
                
            </div>
            <!-- col -->
            <!-- col -->
            <div class="col-md-4">
                <label for="">Prescription</label>
                <textarea class="form-control" name="prescription" id="" cols="30" rows="10"></textarea>
                            
            </div>
            <!-- col -->
             <!-- col -->
             <div class="col-md-4">
                <label for="">Comments</label>
                <textarea class="form-control" name="comments" id="" cols="30" rows="10"></textarea>
                <hr>
                <input type="submit" value="Enter" class="form-control my-1 btn btn-success">
                <input type="reset" value="Clear" class="form-control my-1 btn btn-secondary">
               
            </div>
            <!-- col -->
        </div>
        
    </div>
</div>
</form>
<?php include('footer.php'); ?>