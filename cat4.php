<?php
session_start();
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM books Where categoryId='4'");
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
  <head>
    <style>
      @import url(assets/style.css);
    </style>
    <?php include "./header.html" ?>

    <title>Category 1</title>

  </head>


  <body>
    <div class="catDisplay">
      <?php
      if (mysqli_num_rows($result) > 0) {
      ?>
        <br>
        <table id="resultsTableRes">
        
        <tr>
          <th>ISBN</th>
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
          <th>ID</th>
          <th></th>
          
        </tr>
      <?php
      $i=0;
      $is = 0;
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
          <td><a href="update2.php?isbn=<?php echo $row["ISBN"]; ?>">Reserve</a></td>
          <td></td>
          <td><?php echo $is; $is++; ?></td>
          <td>
          </td>
      </tr>


      <?php
          
        if(isset($_POST['button1'])) {
          echo "This is Button $is that is selected";
          echo  $row["ISBN"];

        }
        
      ?>
          


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
  </body>

  <?php include "./footer.html" ?>
</html>