<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sales";
$errors = array();
$productId ='';
$q4sales = '';
if (isset($_POST['up_user'])) {
$productId =$_POST['productId'];
$q4sales = $_POST['q4sales'];
}

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE data SET q4sales='$q4sales' WHERE productId='$productId'";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>