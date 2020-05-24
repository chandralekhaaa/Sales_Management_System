<?php include('update_connection.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Update</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-image: url('hb.jpg'); background-size: cover; ">
  <div class="header">
  	<h2>Update</h2>
  </div>
	
 <form method="post" action="update.php">
<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Product ID</label>
  	  <input type="number" name="productId" value="<?php echo $productId; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Quarter-4 Sales</label>
  	  <input type="number" name="q4sales" value="<?php echo $q4sales; ?>">
  	</div>
	<div class="input-group">
  	  <button type="submit" class="btn" name="up_user">Update</button>
  	</div>
  </form>
</body>
</html>