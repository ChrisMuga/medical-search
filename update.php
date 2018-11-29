<?php 

$dsn = 'mysql:host=localhost;dbname=register';
$admin_name = 'root';
$password = '';

try{
    // Connect To MySQL Database
    $con = new PDO($dsn,$admin_name,$password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (Exception $ex) {
    
    echo 'Not Connected'.$ex->getMessage();
    
}

$prescription_id = '';
$prescription = '';
$diagnosis = '';
$commments = '';

function getPosts()
{
    $posts = array();
    
    $posts[0] = $_POST['prescription_id'];
    $posts[1] = $_POST['prescription'];
    $posts[2] = $_POST['diagnosis'];
    $posts[3] = $_POST['commments'];
    
    return $posts;
}

//Search And Display Data 

if(isset($_POST['search']))
{
    $data = getPosts();
    if(empty($data[0]))
    {
        echo 'Enter The prescription_id To Search';
    }  else {
        
        $searchStmt = $con->prepare('SELECT * FROM prescriptions,diagnosis & commments WHERE prescription_id = :prescription_id');
        $searchStmt->execute(array(
                    ':prescription_id'=> $data[0]
        ));
        
        if($searchStmt)
        {
            $user = $searchStmt->fetch();
            if(empty($user))
            {
                echo 'No Data For This prescription_id';
            }
            
            $prescription_id    = $user[0];
            $prescription = $user[1];
            $diagnosis = $user[2];
            $commments   = $user[3];
        }
        
    }
}

// Insert Data

if(isset($_POST['insert']))
{
    $data = getPosts();
    if(empty($data[1]) || empty($data[2]) || empty($data[3]))
    {
        echo 'Enter The prescription Data To Insert';
    }  else {
        
        $insertStmt = $con->prepare('INSERT INTO prescriptions,diagnosis & commments(prescription,diagnosis,commments) VALUES(:prescription,:diagnosis,:commments)');
        $insertStmt->execute(array(
                    ':prescription'=> $data[1],
                    ':diagnosis'=> $data[2],
                    ':commments'  => $data[3],
        ));
        
        if($insertStmt)
        {
                echo 'Data Inserted';
        }
        
    }
}

//Update Data

if(isset($_POST['update']))
{
    $data = getPosts();
    if(empty($data[0]) || empty($data[1]) || empty($data[2]) || empty($data[3]))
    {
        echo 'Enter The prescription Data To Update';
    }  else {
        
        $updateStmt = $con->prepare('UPDATE prescriptions,diagnosis & commments SET prescription = :prescription, diagnosis = :diagnosis, commments = :commments WHERE prescription_id = :prescription_id');
        $updateStmt->execute(array(
                    ':prescription_id'=> $data[0],
                    ':prescription'=> $data[1],
                    ':diagnosis'=> $data[2],
                    ':commments'  => $data[3],
        ));
        
        if($updateStmt)
        {
                echo 'Data Updated';
        }
        
    }
}

// Delete Data

if(isset($_POST['delete']))
{
    $data = getPosts();
    if(empty($data[0]))
    {
        echo 'Enter The prescription_id To Delete';
    }  else {
        
        $deleteStmt = $con->prepare('DELETE FROM prescriptions,diagnosis & commments WHERE prescription_id = :prescription_id');
        $deleteStmt->execute(array(
                    ':prescription_id'=> $data[0]
        ));
        
        if($deleteStmt)
        {
                echo 'Prescription Deleted';
        }
        
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP UPDATE PAGE(USING MySQL PDO): Insert, Update, Delete, Search</title>  
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
            <?php if (isset($_SESSION["admin_name"])): ?>
            <p>Welcome <strong><?php echo $_SESSION['admin_name']; ?></strong></p>
            <p><a href="" style="color: red;">Logout</a></p>
        <?php endif ?>

        <form action="php_mysql_insert_update_delete_search.php" method="POST">

            <input type="text" name="prescription_id" placeholder="prescription_id" value="<?php echo $prescription_id;?>"><br><br>
            <input type="text" name="prescription" placeholder="Prescription" value="<?php echo $prescription;?>"><br><br>
            <input type="text" name="diagnosis" placeholder="Diagnosis" value="<?php echo $diagnosis;?>"><br><br>
            <input type="number" min="50" max="300" name="comments" placeholder="comments" value="<?php echo $comments;?>"><br><br>
            
            <input type="submit" name="insert" value="Insert">
            <input type="submit" name="update" value="Update">
            <input type="submit" name="delete" value="Delete">
            <input type="submit" name="search" value="Search">

        </form>

    <?php endif ?>

<?php if (isset($_SESSION["admin_name"])): ?> 
  <p>Welcome <strong><?php echo $_SESSION['admin_name']; ?></strong></p>
 <p><a href="" style="color: blue;">Logout</a></p>

    <?php endif ?>

</body>    
</html>

