<?php
$servername="localhost";
$user="root";
$password="";
$database="dbproduct";

$con=mysqli_connect($servername,$user,$password,$database);

$picture=$_FILES['picture']['name'];
$file_loc=$_FILES['picture']['tmp_name'];
$folder="upload/";
move_uploaded_file($file_loc,$folder.$picture);

$query="INSERT INTO `tblproduct` (`pid`, `pname`, `price`, `quantity`, `picture`) VALUES ('$_POST[pid]','$_POST[pname]','$_POST[price]','$_POST[quantity]','$picture');";

mysqli_query($con,$query);

header("Location:http://localhost/productmanagement/viweproduct.php");
?>