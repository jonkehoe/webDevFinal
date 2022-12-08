<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/html1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
    <title>Lab 5 Q5</title>
</head>

<body>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db2";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    

    // Check connection
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }

    // echo "Connected successfully<br><br>";


    

?>

</body>

</html>