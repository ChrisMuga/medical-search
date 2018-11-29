<?php
//if user is not logged in they cannot access this page




if(isset($_POST['search']))
{
    $symptomtosearch = $_POST['symptomtosearch'];
    
    // search in all table columns using concat mysql function
    $query = "SELECT * FROM `prescriptions,diagnosis & comments` WHERE concat(`prescription_id`, `prescription`, `diagnosis`, `comments`) LIKE '%".$symptomtosearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `prescriptions,diagnosis & comments`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "register");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}
//logout for user
if(isset($_GER['logout'])) {
   session_destroy();
   unset($_SESSION['Username']);
   header('location:login.php');
    }


?>


<!DOCTYPE html>
<html>
    <head>
        <title>STD USER SEARCH SYSTEM</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <div class="content">
            <?php if (isset($_SESSION['success'])): ?>
            <div class="error success"> 
                <h1>
                    <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                        ?>
                    </h1>
                </div>
            <?php endif ?>
            <?php if (isset($_SESSION["Username"])): ?>
            <p>Welcome <strong><?php echo $_SESSION['Username']; ?></strong></p>
            <p><a href="" style="color: blue;">Logout</a></p>
        <?php endif ?>

        </div>
        <form action="php_html_table_data_filter.php" method="post">
            <input type="text" name="symptomTosearch" placeholder="symptomTosearch"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            
            <table>
                <tr>
                    <th>Prescription_Id</th>
                    <th>Prescription</th>
                    <th>Diagnosis</th>
                    <th>Comments</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['prescription_id'];?></td>
                    <td><?php echo $row['prescription'];?></td>
                    <td><?php echo $row['diagnosis'];?></td>
                    <td><?php echo $row['comments'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>

</html>