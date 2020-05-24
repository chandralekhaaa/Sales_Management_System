<?php
include_once 'bestseller_connection.php';
?>
<!DOCTYPE html>
<html>
 <head>
 <title>Bestseller</title>
<link rel="stylesheet" type="text/css" href="style.css">
 </head>
<body style="background-image: url('bgbuf.jpg'); background-size: cover; ">
<div class="header">
  	<h2>Bestsellers</h2>
</div>
<form method="post" action="retrieve.php">
<?php include('errors.php'); ?>
<?php
$result = mysqli_query($conn,"SELECT * FROM data ORDER BY q4sales desc limit 3");
?>
<?php
if (mysqli_num_rows($result) > 0) {
?> 
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>    
    <p>Product Brand: <?php echo $row["productBrand"]; ?></p>
    <p>Product Type: <?php echo $row["productType"]; ?></p>
    <p>Quarter 4 sales: <?php echo $row["q4sales"]; ?></p><br>   
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