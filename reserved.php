<?php
session_start();
?>

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


<!DOCTYPE html>
<html>
    <body class="reservedbody">
        <div class="innerBody">

            <?php
            include 'database.php';
            include "./header.html";

            // $result = mysqli_query($conn,"SELECT * FROM reservations where username='" . $_SESSION["username"] . "'");
            // $result = mysqli_query($conn,"SELECT * FROM books where isbn='" . $_POST["isbn"] . "'");
            $result = mysqli_query($conn,"SELECT * FROM books INNER JOIN reservations ON books.isbn = reservations.isbn");

            // $row = mysqli_fetch_array($result);

            echo $_SESSION["username"];
            ?>


            <?php
            if (mysqli_num_rows($result) > 0) {
            ?>

            <table id="resultsTableRes">
            
            <tr>
                <th name='isbn'>ISBN</th>
                <th></th>
                <th>Book Title</th>
                <th></th>
                <th>Author</th>
                <th></th>
                <th>Edition</th>
                <th></th>
                <th>Year</th>
                <th></th>
                <th>Reserved</th>
                <th></th>
            </tr>
            <?php
            $i=0;
            while($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $row["ISBN"]; ?></td>
                <td></td>
                <td><?php echo $row["BookTitle"]; ?></td>
                <td></td>
                <td><?php echo $row["Author"]; ?></td>
                <td></td>
                <td><?php echo $row["Edition"]; ?></td>
                <td></td>
                <td><?php echo $row["Year"]; ?></td>
                <td></td>
                <td><a href="update4.php?isbn=<?php echo $row["ISBN"]; ?>">Un-Reserve</a></td>
                <td></td>

                
                

            </tr>
            <?php
            $i++;
            }
            ?>
            </table>
            <?php
            }
            else{
                echo "No result found";
            }
            ?>
        </div>
            <?php include "./footer.html" ?>
    </body>
</html>