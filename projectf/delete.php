<?php include('delete_connection.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Delete</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-image: url('delw.jpg'); background-size: cover; ">
  <div class="header">
  	<h2>Delete</h2>
  </div>
	
 <form method="post" action="delete.php">
<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Product ID</label>
  	  <input type="number" name="productId" value="<?php echo $productId; ?>">
  	</div>
  	
	<div class="input-group">
  	  <button type="submit" class="btn" name="del_user">Delete</button>
  	</div>
  </form>
</body>
</html>