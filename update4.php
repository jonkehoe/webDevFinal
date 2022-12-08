<?php
include_once 'database.php';
$sql = "DELETE FROM reservations WHERE isbn='" . $_GET["isbn"] . "'";
mysqli_query($conn,"UPDATE books set Reserved='N' WHERE isbn='" . $_GET["isbn"] . "'");
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>