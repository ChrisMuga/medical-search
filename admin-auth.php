
<?php session_start(); include('conn.php');?>

<?php
    #fetch
    $password = $_POST['password'];
    $email_address = $_POST['email_address'];

    #query
    $sql = "SELECT * FROM users WHERE email_address = '".$email_address."' AND class='admin'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
           $hashed_password =  $row["password"];

           #auth check
           if(password_verify($password, $hashed_password)) 
            {
                $_SESSION['name'] = $row['first_name']." ".$row['last_name'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['class'] = $row['class'];
                $_SESSION['auth'] = 1;
                header('location: admin-dash.php');
            } 
            else
            {
                $_SESSION['auth'] = 0;
                $_SESSION['auth_msg'] = 'Error: Wrong Credentials | Network Error';
                header('location: admin.php');
            }
         
        }
    } else {
                $_SESSION['auth'] = 0;
                $_SESSION['auth_msg'] = 'Error: Wrong Credentials | Network Error';
                header('location: admin.php');
    }
    $conn->close();
?>