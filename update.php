<?php
session_start();
$servername="localhost";
$user="root";
$password="";
$database="dbproduct";

$con=mysqli_connect($servername,$user,$password,$database);

$id=$_POST['pid'];
echo gettype($id);
$query="UPDATE `tblproduct` SET `pname` = '$_POST[pname]', `price` = '$_POST[price]', `quantity` = '$_POST[quantity]' WHERE `tblproduct`.`pid` = '$_POST[pid]';";
echo gettype($_POST['pid']);
mysqli_query($con,$query);
echo($query);
session_destroy();
header("Location:http://localhost/productmanagement/viweproduct.php");
?>


