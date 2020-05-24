<?php include('insert_connection.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Insert</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-image: url('insf.jpg'); background-size: cover">
  <div class="header">
  	<h2>Insert</h2>
  </div>
	
  <form method="post" action="insert.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Product ID</label>
  	  <input type="text" name="productId" value="<?php echo $productId; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Product Type</label>
  	  <input type="text" name="productType" value="<?php echo $productType; ?>">
  	</div>
          <div class="input-group">
  	  <label>Quarter-1 Sales</label>
  	  <input type="number" name="q1sales" value="<?php echo $q1sales; ?>">
  	</div>
           <div class="input-group">
  	  <label>Quarter-2 Sales</label>
  	  <input type="number" name="q2sales" value="<?php echo $q2sales; ?>">
  	</div>
	<div class="input-group">
  	  <label>Quarter-3 Sales</label>
  	  <input type="number" name="q3sales" value="<?php echo $q3sales; ?>">
  	</div>
	<div class="input-group">
  	  <label>Quarter-4 Sales</label>
  	  <input type="number" name="q4sales" value="<?php echo $q4sales; ?>">
  	</div>
	<div class="input-group">
  	  <label>Product Brand</label>
  	  <input type="text" name="productBrand" value="<?php echo $productBrand; ?>">
  	</div>
	<div class="input-group">
  	  <label>Product Colour</label>
  	  <input type="text" name="productColour" value="<?php echo $productColour; ?>">
  	</div>
	<div class="input-group">
  	  <button type="submit" class="btn" name="ins_user">Insert</button>
  	</div>
  </form>
</body>
</html>