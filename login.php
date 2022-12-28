<?php
session_start();


$servername="localhost";
$user="root";
$password="";
$database="dbproduct";

$con=mysqli_connect($servername,$user,$password,$database);
$uid=$_POST['uid'];
$password=$_POST['password'];
	$query="SELECT * FROM tbluser WHERE uid='$uid' AND password='$password'";
	$result=mysqli_query($con,$query);
	
	if(mysqli_fetch_array($result))
	{
		$_SESSION['uid']=$_POST['uid'];
		header("Location:http://localhost/productmanagement/viweproduct.php");
	}	
	else
		header("Location:http://localhost/productmanagement/userlogin.php");
	



?>