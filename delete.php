<?php
$servername="localhost";
$user="root";
$password="";
$database="dbproduct";

$con=mysqli_connect($servername,$user,$password,$database);

$pid=$_GET['pid'];
$query= "DELETE FROM tblproduct WHERE pid = '$pid'";

$data=mysqli_query($con,$query);
header("Location:http://localhost/productmanagement/viweproduct.php");
?>