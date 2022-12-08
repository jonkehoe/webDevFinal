<?php
session_start();


$db = mysqli_connect('localhost', 'root', '', 'db2');

// initializing variables
$user = "";
$errors = array(); 
$first_name = "";
$surname= "";
$mnum= "";
$tnum= "";
$add1= "";
$add2= "";
$pass= "";
$cpass= "";
$city= "";

// connect to the database
// $db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $user = mysqli_real_escape_string($db, $_POST['user']);
  $first_name = mysqli_real_escape_string($db, $_POST['first_name']);
  $surname = mysqli_real_escape_string($db, $_POST['surname']);
  $mnum = mysqli_real_escape_string($db, $_POST['mnum']);
  $tnum = mysqli_real_escape_string($db, $_POST['tnum']);
  $add1 = mysqli_real_escape_string($db, $_POST['add1']);
  $add2 = mysqli_real_escape_string($db, $_POST['add2']);
  $pass = mysqli_real_escape_string($db, $_POST['pass']);
  $cpass = mysqli_real_escape_string($db, $_POST['cpass']);
  $city = mysqli_real_escape_string($db, $_POST['city']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($user)) { array_push($errors, "Username is required"); }
  if (empty($first_name)) { array_push($errors, "First Name is required"); }
  if (empty($surname)) { array_push($errors, "Surname is required"); }
  if (empty($mnum)) { array_push($errors, "Mobile is required"); }
  if (empty($tnum)) { array_push($errors, "Telephone is required"); }
  if (empty($add1)) { array_push($errors, "Add1 is required"); }
//   if (empty($add2)) { array_push($errors, "First Name is required"); }
  if (empty($city)) { array_push($errors, "City is required"); }


  if (empty($pass)) { array_push($errors, "Password is required"); }
  if ($pass != $cpass) {
	  array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user WHERE UserName='$user' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user1 = mysqli_fetch_assoc($result);
  
  if ($user1) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	// $pass = md5($pass);//encrypt the password before saving in the database


    
    $query = "INSERT INTO user(UserName, FirstName, Surname, AddrerssLine1, AddressLine2, City, Telephone, Mobile, Password) VALUES ('$user','$first_name', '$surname', '$add1', '$add2', '$city', '$tnum', '$mnum', '$pass')";

    echo "New record created successfully";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $user;
  	$_SESSION['success'] = "You are now logged in";

  	header('location: index.php');
  }
  else {
     echo "Error: " . $sql . "<br>" . $conn -> error;
  }

$conn->close();
}


  
?>

