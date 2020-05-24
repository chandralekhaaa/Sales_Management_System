<?php
$url='localhost';
$username='root';
$password='';
$errors = array(); 
$conn=mysqli_connect($url,$username,$password,"sales");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
?>