

<!-- <?php
// session_start();
// include 'database.php';
// $ID= $_SESSION["ID"];
// $sql=mysqli_query($conn,"SELECT * FROM user where UserName='$ID' ");
// $row  = mysqli_fetch_array($sql);

// if ($_SESSION["username"] == NULL)
// {
//     header("Location: page1.php");
//     die();
// }
?> -->

<?php
session_start();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/html1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
    
        <?php include "./header.html" ?>
       
        <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
        <style>
            @import url(assets/style.css);
        </style>
        <title>Home</title>

    </head>
    <body>

        <?php
            if($_SESSION["username"]) {
            ?>

            <?php
            }
            else 
            {   
                
                echo "<h1>Please login first ....</h1>";

                exit;
                
            }
        ?>


        <div class="parallax"></div>


        <div class="outerpara">
            <h2>Our Services</h2>
            <div class="paragraphs">
                <img width="30%" src="static/libaryBooksHeader.png">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Id diam maecenas ultricies mi eget mauris pharetra et.</p>
                <p>Tellus in metus vulputate eu. Amet nulla facilisi morbi tempus iaculis urna id. Volutpat blandit aliquam etiam erat velit scelerisque.</p>
                <p>Venenatis cras sed felis eget velit aliquet sagittis id. Elit eget gravida cum sociis natoque. Nunc aliquet bibendum enim facilisis. Vehicula ipsum a arcu cursus vitae congue mauris rhoncus. Rhoncus aenean vel elit scelerisque mauris</p>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque habitant. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Leo vel orci porta non pulvinar neque. Lacus vel facilisis volutpat est. Arcu felis bibendum ut tristique et</p>
            </div>
        </div>


        <div class="parallax"></div>

        <!-- <div class="outerpara">
            <h2>Different pages</h2>
            <h1 class="opth1"><a href="index2.php">Home</a></h1>
            <h1 class="opth1"><a href="test2.php">Search</a></h1>
            <h1 class="opth1"><a href="reserved.php">Reserved</a></h1>
        </div> -->


        <p>Welcome to the index page</p>

        


    <?php include "./footer.html" ?>
    </body>

    
</html>
