<?php
session_start();
if(isset($_POST['save']))
{
    extract($_POST);
    include 'database.php';
    $sql = mysqli_query($conn,"SELECT * FROM user where username='$Username' and password='$pass'");
    $row = mysqli_fetch_array($sql);

    if(is_array($row))
    {
		
        $_SESSION["firstname"] = $row['FirstName'];
        $_SESSION["username"] = $row['UserName'];
        // header("Location: index2.php"); 
		echo $Username;
		
    }
    else
    {
        echo "Invalid Email ID/Password";
    }

}

if(isset($_SESSION["username"])){
	header("location:index2.php");
}
?>