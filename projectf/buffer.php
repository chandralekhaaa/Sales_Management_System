<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'sales');
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
if (isset($_POST['reg_user'])) {
$productId = mysqli_real_escape_string($db, $_POST['productId']);
$productType = mysqli_real_escape_string($db, $_POST['productType']);
$productBrand = mysqli_real_escape_string($db, $_POST['productBrand']);
$productColour = mysqli_real_escape_string($db, $_POST['productColour']); 
$q1sales = mysqli_real_escape_string($db, $_POST['q1sales']);
$q2sales = mysqli_real_escape_string($db, $_POST['q2sales']);
$q3sales = mysqli_real_escape_string($db, $_POST['q3sales']);
$q4sales = mysqli_real_escape_string($db, $_POST['q4sales']);
}
$user_check_query = "SELECT * FROM data WHERE productId='$productId' LIMIT 1";
$result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['productId'] === $productId) {
      echo "Product ID already exists";
    }}

$sql = "INSERT INTO data (productId, productType, productBrand, productColour, q1sales, q2sales ,q3sales , q4sales) VALUES ('$productId', '$productType', '$productBrand', '$productColour', '$q1sales', '$q2sales' ,'$q3sales' , '$q4sales')";
if (mysqli_query($db, $sql)) {
               echo "Record inserted successfully";}
 else {
               echo "Error: " . $sql . "" . mysqli_error($db);
            }
?>
$user_check_query = "SELECT * FROM data WHERE productId='$productId' LIMIT 1";
$result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['productId'] === $productId) {
      echo "Product ID already exists";
    }}

$sql = "INSERT INTO data (productId, productType, productBrand, productColour, q1sales, q2sales ,q3sales , q4sales) VALUES ('$productId', '$productType', '$productBrand', '$productColour', $q1sales, $q2sales ,$q3sales , $q4sales)";
if (mysqli_query($db, $sql)) {
               echo "Record inserted successfully";}
 else {
               echo "Error: " . $sql . "" . mysqli_error($db);
            }
?>