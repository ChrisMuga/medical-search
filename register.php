<?php include('conn.php');?>

<?php
    #id
    $id=rand(10,100000);

    #fetch values
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email_address = $_POST['email_address'];
    $password = $_POST['password'];
    $class = $_POST['class'];

    #hash password
    $password = password_hash($password, PASSWORD_DEFAULT);


    #create sql statement
    $sql = "INSERT INTO users VALUES ('".$id."','".$first_name."','".$last_name."','".$email_address."','".$password."','".$class."')";


    #conditional rendering
    if ($conn->query($sql) === TRUE) {
        header('location: login.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>