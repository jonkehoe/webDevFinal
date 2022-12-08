<?php
session_start();
include_once 'database.php';
$a=date("d-m-20y");
if(count($_POST)>0) {

    $isbn_ = $_POST['isbn'];



    mysqli_query($conn,"INSERT INTO reservations (ISBN,UserName,ReservedDate) 
    VALUES ('$isbn_','" . $_SESSION["username"] ."','$a')");
    // mysqli_query($conn,"INSERT INTO reservations ISBN='" . $_POST["isbn"] . "', UserName='" . $_SESSION["username"] . "', ReservedDate='" . $a . "'");
	mysqli_query($conn,"UPDATE books set Reserved='" . $_POST['reserved'] . "'");
    $message = "Record Modified Successfully";


    $message = "Record Modified Successfully";
}

$result = mysqli_query($conn,"SELECT * FROM books WHERE isbn='" . $_GET['isbn'] . "'");

$row= mysqli_fetch_array($result);

?>


<html>
    <head>
    <title>Update Employee Data</title>
    </head>


    <body>
        <form name="frmUser" method="post" action="">
            <div><?php if(isset($message)) { echo $message; } ?>
            </div>

            <div style="padding-bottom:5px;">
            <!-- <a href="retrieve.php">Employee List</a> -->
            </div>


            Username: <br>
            <input type="hidden" name="isbn" class="txtField" value="<?php echo $row['ISBN']; ?>">
            <input type="text" name="isbn"  value="<?php echo $row['ISBN']; ?>">
            <br>

            First Name: <br>
            <input type="text" name="booktitle" class="txtField" value="<?php echo $row['BookTitle']; ?>">
            <br>

            Last Name :<br>
            <input type="text" name="author" class="txtField" value="<?php echo $row['Author']; ?>">
            <br>

            City:<br>
            <input type="text" name="edition" class="txtField" value="<?php echo $row['Edition']; ?>">
            <br>

            Email:<br>
            <input type="text" name="year" class="txtField" value="<?php echo $row['Year']; ?>">
            <br>

            Email:<br>
            <input type="text" name="reserved" class="txtField" value="<?php echo $row['Reserved']; ?>">
            <br>

            Email:<br>
            <input type="text" name="categoryid" class="txtField" value="<?php echo $row['CategoryID']; ?>">
            <br>

            <input type="submit" name="submit" value="Submit" class="buttom">

        </form>
    </body>


</html>