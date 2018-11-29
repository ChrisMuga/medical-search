<?php
session_start();
session_destroy();
$Username = "";
$Email = "";
$Password = "";
$password = "";
$admin_name = "";
$errors = array();
$Password_1 = "";
$Password_2 = "";

//connection to the database
$db = mysqli_connect('localhost', 'root', '', 'register');

//action when register button is clicked to register user
if (isset($db,$_POST['Register'])) {
	$Username = mysqli_real_escape_string($db,$_POST['Username']);
	$Email = mysqli_real_escape_string($db,$_POST['Email']);
	$Password_1 = mysqli_real_escape_string($db,$_POST['Password_1']);
	$Password_2 = mysqli_real_escape_string($db,$_POST['Password_2']);
}

	

	//ENSURE FORM FIELDS FOR REGISTRATION ARE FILLED WELL//
	if (empty($Username)) { array_push($errors, "Username is required"); }

if (empty($Email)) { array_push($errors, "Email is required"); }

if (empty($Password_1)) { array_push($errors, "password is required"); }

if ($Password_1 != $Password_2){ array_push($errors, "The two passwords do not match "); }

//if no errors user is added to database
if(count($errors) == 0) {
    $Password = md5($Password_1); //security feature for password encryption before storage
    $query = "INSERT INTO users (Username, Email, Password)
                 VALUES ('$Username', '$Email', '$Password')";
    mysqli_query($db, $query);
    $_SESSION['Username'] = $Username;
    $_SESSION['success'] = "You are now logged in";
    header('location: search.php'); //redirect to SEARCH page
    

    }
//check if user already exists
$user_check_query = "SELECT * FROM users WHERE Username='$Username' OR Email='$Email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['Username'] === $Username) {
      array_push($errors, "Username already exists");
    }

    if ($user['Email'] === $Email) {
      array_push($errors, "Email already exists");
    }
  }

 //log user in from login page(button configuration)
if(isset($db,$_POST['Login'])) {
    $Username = mysqli_real_escape_string($db,$_POST['Username']);
    $Password = mysqli_real_escape_string($db,$_POST['Password']);

//ensure that form fields for login are filled properly
    if (empty($Username)) {
        array_push($errors, "username is required");

    }
    if (empty($Password)) {
        array_push($errors, "password is required");
    }
  }


if (count($errors)== 0) {
     $Password = md5($Password); //encryption before comparing passwords from database
     $query = "SELECT *  FROM users WHERE Username='$Username' AND Password='$Password'" ;
     $result = mysqli_query($db, $query);
     if (mysqli_num_rows($result) == 1) {

         //log user in
        $_SESSION['Username'] = $Username;
        $_SESSION['success'] = "You are now logged in";
        header('location: search.php');// redirect to SEARCH page

       

     }else{
        array_push($errors,"Wrong username/password combination");
       
     }

   }    



//logout for user
if(isset($_GER['logout'])) {
   session_destroy();
   unset($_SESSION['Username']);
   header('location:login.php');
    }



//*******************ADMIN*****************************************
  
  

//action when admin button is clicked
  if (isset($db,$_POST['Admin'])) {
    $admin_name = mysqli_real_escape_string($db,$_POST['admin_name']);
    $password = mysqli_real_escape_string($db,$_POST['password']);
  }


//ensure fields for admin registration are filled properly//
if(empty($admin_name)) { array_push($errors, "admin_name is required"); }

if (empty($password)) { array_push($errors, "password is required"); }


//if no errors admin is added to database
if(count($errors) == 0) {
	$password = md5($password);
	$sql = "INSERT INTO admin (admin_name, password)
	VALUES('$admin_name','$password')";
	mysqli_query($db, $query);
	$_SESSION['admin_name'] = $admin_name;
    $_SESSION['success'] = "Admin is logged in";
	header('location:update.php');//rediredct to update page

}


 //check if admin already exists
$user_check_query = "SELECT * FROM admin WHERE admin_name='$admin_name' OR password='$password' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if admin exists
    if ($admin_name['admin_name'] === $admin_name) {
      array_push($errors, "Username already exists");
    }

    if ($password['password'] === $password) {
      array_push($errors, "password already exists");
    }

   }

//log admin in from registration page 
    if (isset($_POST['register'])) {
        $admin_name = mysqli_real_escape_string($db,$_POST['admin_name']);
        $password = mysqli_real_escape_string($db,$_POST['password']);


 //ensure that form fields for login (admin) are filled properly
    if (empty($admin_name)) {
        array_push($errors, "admin_name is required");

    }
    if (empty($password)) {
        array_push($errors, "password is required");
    }   

    }   
    

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM admin WHERE admin_name='$admin_name' AND password='$password'" ;
        $result = mysqli_query($db, $query);
        if (mysqli_num_rows($result) == 1){

         //log admin in
        $_SESSION['admin_name'] = $admin_name;
        $_SESSION['success'] = "logged in as admin";
        header('location:update.php');//redirect to update page


        }else{
            array_push($errors,"wrong admin_name/password combination");
            
        }
    }



//logout for admin
if(isset($_GER['logout'])) {
    session_destroy();
    unset($_SESSION['admin_name']);
    header('location:admin_login.php');

     }

   ?>