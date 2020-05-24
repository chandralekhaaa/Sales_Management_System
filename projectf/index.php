<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>La Élégante</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-image: url('bag1.jpg'); background-size: cover">

<p> <a href="home.php?logout='1'" style="color: white;"><h4 style="text-align: right; margin-right: 10px">Logout</h4></a> </p>
<br>
<h2 style="text-align:center; font-family: 'Goudy Old Style', cursive;  color: black; font-size: 40px;"><span style="background-color: white;">La Élégante</span></h2>

<br><br><br>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
<br>
<a href="insert.php">
<h5 style="font-family: 'Goudy Old Style', cursive; font-size: 30px; color: black; text-align: center">Insert</h4>
</a>
<br>
<a href="delete.php">
<h5 style="font-family: 'Goudy Old Style', cursive; font-size: 30px; color: black; text-align: center">Delete</h5>
</a>
<br>
<a href="update.php">
<h5 style="font-family: 'Goudy Old Style', cursive; font-size: 30px; color: black; text-align: center">Update</h5>
</a>
<br>
<a href="retrieve.php">
<h5 style="font-family: 'Goudy Old Style', cursive; font-size: 30px; color: black; text-align: center">Retrieve</h5>
</a>
<br>
<a href="bestseller.php">
<h5 style="font-family: 'Goudy Old Style', cursive; font-size: 30px; color: black; text-align: center">Bestsellers</h5>
</a>
    <?php endif ?>
</div>
		
</body>
</html>