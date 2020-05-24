<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sales";
$errors = array(); 
$productId ='';
if (isset($_POST['del_user'])) {
$productId =$_POST['productId'];
}
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$sql = "DELETE FROM data WHERE productId='$productId'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>