<?php include('header.php'); ?>
<?php include('conn.php'); ?>
<?php include('navbar.php'); ?>
<div class="row .d-flex justify-content-center my-1">
    <div class="col-md-12 users">
    <h1 class="text-danger text-center">Search For Symptoms</h1>
    <hr>
      <!-- table -->
      <div id="users">
  <input class="form-control search" placeholder="Search" />
  <button class="btn btn-danger my-4" class="sort" data-sort="name">
    Sort by Symptoms
  </button>
  <table class="table">
  <thead class="thead-light">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Symptoms</th>
                    <th scope="col">Prescription</th>
                    <th scope="col">Comments</th>
                </tr>
            </thead>
    <!-- IMPORTANT, class="list" have to be at tbody -->
    <tbody class="list">
    <?php
                #query
                $sql = "SELECT * FROM diseases";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    // output data of each row
                while($row = $result->fetch_assoc()) 
                {
            ?>
                        <tr>
                            <td><?php echo strtoupper($row['disease_name']);?></td>
                            <td><?php echo strtoupper($row['category']);?></td>
                            <td class="name"><?php echo strtoupper($row['symptoms']);?></td>
                            <td><?php echo strtoupper($row['prescription']);?></td>
                            <td><?php echo strtoupper($row['comments']);?></td>
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

<script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
<?php include('footer.php'); ?>