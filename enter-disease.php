<?php include('conn.php');?>

<?php
    #id
    $id=$_POST['id'];

    #fetch values
    $disease_name = $_POST['disease_name'];
    $category = $_POST['category'];
    $symptoms = $_POST['symptoms'];
    $prescription = $_POST['prescription'];
    $comments = $_POST['comments'];



    #create sql statement
    $sql = "INSERT INTO diseases VALUES ('".$id."','".$disease_name."','".$category."','".$symptoms."','".$prescription."','".$comments."')";


    #conditional rendering
    if ($conn->query($sql) === TRUE) {
        header('location: register-disease.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>