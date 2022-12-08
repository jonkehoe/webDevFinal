<?php
session_start();
include 'database.php';
include "./header.html";
// include "./footer.html";

if($_SESSION["username"]) {



}
else 
{   
    
    echo "<h1>Please login first ....</h1>";

    exit;
    
}

$limit = 0;
$searchErr = '';
$result_details='';
$clause = " WHERE ";//Initial clause
$sql="SELECT * FROM books  ";//Query stub
// $b = $_POST['roll_no'];
// $b= $_POST['roll_no'];
if(isset($_POST['submit'])){
    if(isset($_POST['keyword'])){
        foreach($_POST['keyword'] as $c){
            if(!empty($c)){
                $sql .= $clause."`".$c."` LIKE '%{$_POST['roll_no']}%'";
                $clause = " OR ";//Change  to OR after 1st WHERE
                $statement = $conn->prepare($sql);

                $statement->execute();
                $result_details = $statement->get_result()->fetch_all();

                // $total_rows = mysqli_num_rows($result_details); 
                // $totalpages = ceil($total_rows/$limit);
                // print_r($result_details);
            }
                // print_r($result_details);

                $searchErr = "Please enter the information";
                // $sql .= $clause."`".$c."` LIKE '%{$_POST['roll_no']}%'";
                // $sql = "SELECT * FROM books WHERE `author` LIKE '%{$_POST['roll_no']}%' OR `booktitle` LIKE '%{$_POST['roll_no']}%' OR '%{$_POST['roll_no']}%' LIKE '%{$_POST['roll_no']}%' OR '%{$_POST['roll_no']}%' LIKE '%{$_POST['roll_no']}%'";
                // $clause = " OR ";//Change  to OR after 1st WHERE
                // $statement = $conn->prepare($sql);

                // $statement->execute();
                // $result_details = $statement->get_result()->fetch_all();
        }   
    }
    else{
        echo "this is a test";
        echo $_POST['roll_no'];
        $qresult = $_POST['roll_no'];
        $stmt = "SELECT * FROM books WHERE author like '%$qresult%' or BookTitle like '%$qresult%'";
        $statement2 = $conn->prepare($stmt);
    
        $statement2->execute();
        $result_details = $statement2->get_result()->fetch_all();
    }

echo $sql;//Remove after testing
}

    // else
    // {
    //     if(isset($_POST['submit']))
    //     {

    //         if(!empty($_POST['roll_no'])){
    //         $sql = "select * from books where author like '%{$_POST['roll_no']}%' or BookTitle like '%{$_POST['roll_no']}%' or BookTitle like '%{$_POST['roll_no']}%'";
    //         $statement = $conn->prepare($sql);

    //         $statement->execute();
    //         $result_details = $statement->get_result()->fetch_all();

    //         }

    //     }
    // }
//     if(isset($_POST['search_two']))
//     {

//         if(!empty($_POST['roll_no'])){
//         $sql = "select * from books where author like '%{$_POST['roll_no']}%' or BookTitle like '%{$_POST['roll_no']}%' or BookTitle like '%{$_POST['roll_no']}%'";
//         $statement = $conn->prepare($sql);

//         $statement->execute();
//         $result_details = $statement->get_result()->fetch_all();

//     }

// }



// if(isset($_POST['search_two']))
// {

//     if(!empty($_POST['roll_no'])){
//     $sql = "select * from books where author like '%{$_POST['roll_no']}%' or BookTitle like '%{$_POST['roll_no']}%' or BookTitle like '%{$_POST['roll_no']}%'";
//     $statement = $conn->prepare($sql);

//     $statement->execute();
//     $result_details = $statement->get_result()->fetch_all();

//     echo $sql;//Remove after testing

// }
    

// echo $sql;//Remove after testing

// }
?>

<form method="POST" action="#">
<form action="search2.php" method="post">
 Author:   <input name="keyword[]" type="checkbox" value="author"  />
 Book Ttile:   <input name="keyword[]" type="checkbox" value="booktitle" />
 ISBN :  <input name="keyword[]" type="checkbox" value="isbn"  />
 Year:   <input name="keyword[]" type="checkbox" value="year"  />
<br>
<br>
<input type="text" name="roll_no"  class="form-control" placeholder="Search roll no..">
<input type="submit" name="submit"  value="Submit">
</form>




<br/><br/>
	<h3>Search Result</h3><br/>
	<div class="searchdiv">          
	  <table id="seachTable">
	    <thead>
	      <tr>
	        <th>#</th>
	        <th>ISBN</th>
			<th></th>
	        <th>BookTitle</th>
			<th></th>
	        <th>Author</th>
			<th></th>
	        <th>Reserved</th>
			<th></th>
			<th>Edition</th>
			<th></th>
			<th>Year</th>
			<th></th>
			<th>CategoryID</th>
			<th></th>
	      </tr>
	    </thead>
	    <tbody>
	    		<?php
		    	 if(!$result_details)
		    	 {
		    		echo '<tr>No data found</tr>';
		    	 }
		    	 else{
		    	 	foreach($result_details as $key=>$value)
		    	 	{
		    	 		?>
		    	 	<tr>
					 	
		    	 		<td><?php echo $key+1;?></td>
		    	 		<td><?php echo $value['0'];?></td>
						<td></td>
		    	 		<td><?php echo $value['1'];?></td>
						<td></td>
		    	 		<td><?php echo $value['2'];?></td>
						<td></td>
		    	 		<!-- <td><?php echo $value['5'];?></td> -->
                        <td><a href="update2.php?isbn=<?php echo $value['0']; ?>">Reserve</a></td>
						<td></td>
						<td><?php echo $value['3'];?></td>
						<td></td>
						<td><?php echo $value['4'];?></td>
						<td></td>
						<td><?php echo $value['6'];?></td>
						<td></td>
						<!-- <td><a href="update.php?id=<?php echo $row["id"]; ?>">Reserved</a></td> -->
		    	 	</tr>
		    	 		
		    	 		<?php
		    	 	}
		    	 	
		    	 }
		    	?>
	    	
	     </tbody>
	  </table>

	</div>
    <?php include "./footer.html" ?>