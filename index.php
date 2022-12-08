<?php
    session_start();
?>

<!DOCTYPE html>

<html>
    <!--this is the login page this is the first page of the site it allows the user to login to the site and create a session from login in-->
    <head>
		<include src="header.html"></include>
		<include src="footer.html"></include>
        <title> </title>
        <link rel="stylesheet" type="text/css" href="Assets/CSS/site.css">
    </head>
    <body>
        <header>
            <h1>login
            </h1>
 
        </header>
        
        <main>
            <div id="login-imfo">
                <form action="login2.php" method="post" enctype="multipart/form-data">
                <p>UserName:
                <input type="text" name="Username" required="required"></p>
                <p>Password:
                <input type="password" class="form-control" name="pass" required="required"></p>
                <button type="submit" name="save" >Login</button>
                <!-- <a href="Create-accout.php">create an account</a> -->
                </form>
            </div>
        </main>

        <footer>
            
        </footer>

    </body>

    
</html>