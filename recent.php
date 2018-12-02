<?php
include('conn.php');

#query
$sql = "SELECT * FROM diseases LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
       $_SESSION['disease_id'] = $row['id'];
       $_SESSION['disease_name'] = $row['disease_name'];
       $_SESSION['disease_category'] = $row['category'];
       $_SESSION['disease_symptoms'] = $row['symptoms'];
       $_SESSION['disease_prescription'] = $row['prescription'];
       $_SESSION['disease_comments'] = $row['comments'];

       #load to array
       $symptoms = explode(",",$_SESSION['disease_symptoms']);

    }
} else {
    echo "0 results";
}
$conn->close();

?>