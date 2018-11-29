<?php include('conn.php');?>

<?php
    #fetch
    $password = $_POST['password'];
    $email_address = $_POST['email_address'];

    #query
    $sql = "SELECT * FROM users WHERE email_address = '".$email_address."'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
           $hashed_password =  $row["password"];

           #auth check
           if(password_verify($password, $hashed_password)) 
            {
                header('location: home.php');
            } 
            else
            {
                header('location: login.php');
            }
        }
    } else {
        echo "0 results";
    }
    $conn->close();
?>