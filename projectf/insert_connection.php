<?php
$productId = "";
$productType ="";
$productBrand = "";
$productId = "";
$productType ="";
$productBrand = "";
$productColour = "";
$q1sales = '';
$q2sales = '';
$q3sales ='';
$q4sales ='';
$errors = array();
$servername = "localhost";
$username = "root";
$password = "";
$db = "sales";  
 // Create connection
            $conn = new mysqli($servername, $username, $password, $db);

            // Check connection
            if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            } 

if (isset($_POST['ins_user'])) {
$productId =   $_POST['productId'];
$productType = $_POST['productType'];
$q1sales =  $_POST['q1sales'];
$q2sales = $_POST['q2sales'];
$q3sales =  $_POST['q3sales'];
$q4sales =  $_POST['q4sales']; 
$productBrand = $_POST['productBrand'];
$productColour = $_POST['productColour']; 
}

                       $sql = "INSERT INTO sales.data (productId, productType, productBrand, productColour, q1sales, q2sales ,q3sales , q4sales) VALUES ('$productId', '$productType', '$productBrand', '$productColour', '$q1sales', '$q2sales' ,'$q3sales' , '$q4sales')";

            if (mysqli_query($conn, $sql)) {
               echo "New record created successfully";
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            $conn->close();
         
      ?>