<?php include('header.php'); ?>
<?php include('conn.php'); ?>
<?php include('navbar.php'); ?>
<?php $id = rand(10,10000);?>
<style>
.col-center{margin-top:33.3333vh;}
.col-md-3{text-align:center;}
.col-md-3:hover{cursor:pointer;}
img{align-self:center;}
p{font-size: 14px; text-align:center; font-weight: bold;}
</style>
<style>
td{font-size:small}
</style>
<div class="row d-flex justify-content-center mt-4">
   <div class="col-md-8 text-center">
        <img src="assets/users.png" alt="Users">
        <br>
        <p>USERS</p>
        <hr>
   </div>
</div>
<div class="row .d-flex justify-content-center my-1">
    <div class="col-md-8 users">
    <h1 class="text-danger text-center">Search For Users</h1>
    <hr>
      <!-- table -->
      <div id="users">
  <input class="form-control search" placeholder="Search" />
  <table class="table mt-4">
  <thead class="thead-light">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">CLASS</th>
                </tr>
            </thead>
    <!-- IMPORTANT, class="list" have to be at tbody -->
    <tbody class="list">
    <?php
                #query
                $sql = "SELECT * FROM users";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    // output data of each row
                while($row = $result->fetch_assoc()) 
                {
            ?>
                        <tr>
                            <td><?php echo strtoupper($row['id']);?></td>
                            <td class="name"><?php echo strtoupper($row['first_name']).' '.strtoupper($row['last_name']);?></td>
                            <td><?php echo strtoupper($row['email_address']);?></td>
                            <td><?php echo strtoupper($row['class']);?></td>
                        </tr>
            <?php
                }
                    }
                else
                {

                }
            ?>
    </tbody>
  </table>

</div>
      <!-- table -->
    </div>
</div>

<script>
var options = {
  valueNames: [ 'name', 'born' ]
};

var userList = new List('users', options);
</script>
<?php include('footer.php'); ?>