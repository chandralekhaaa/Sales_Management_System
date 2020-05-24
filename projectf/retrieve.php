<?php
include_once 'retrieve_connection.php';
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrieve data</title>
<link rel="stylesheet" type="text/css" href="style.css">
 </head>
<body style="background-image: url('sr.jpg'); background-size: cover; ">
<div class="header">
  	<h2>Retrieve</h2>
</div>
<form method="post" action="retrieve.php">
<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Product ID</label>
  	  <input type="number" name="productId" value="<?php echo $productId; ?>">
  	</div>
  	
	<div class="input-group">
  	  <button type="submit" class="btn" name="ret_user">Retrieve</button>
  	</div>
<?php 
$productId="";
if (isset($_POST['ret_user'])) {
$productId =$_POST['productId'];
}?>
<?php
$result = mysqli_query($conn,"SELECT * FROM data WHERE productId='$productId'");
?>
<?php
if (mysqli_num_rows($result) > 0) {
?>
 
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>

    <p>Product Id: <?php echo $row["productId"]; ?></p>
    <p>Product Type: <?php echo $row["productType"]; ?></p>
    <p>Product Brand: <?php echo $row["productBrand"]; ?></p>
    <p>Product Colour: <?php echo $row["productColour"]; ?></p>
    <p>Quarter 1 Sales: <?php echo $row["q1sales"]; ?></p>
    <p>Quarter 2 Sales: <?php echo $row["q2sales"]; ?></p>
    <p>Quarter 3 Sales: <?php echo $row["q3sales"]; ?></p>
    <p>Quarter 4 Sales: <?php echo $row["q4sales"]; ?></p>


<?php
$i++;
}
?>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>