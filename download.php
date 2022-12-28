<?php

$servername="localhost";
$user="root";
$password="";
$database="dbproduct";

$con=mysqli_connect($servername,$user,$password,$database);
//download file

if(isset($_GET['pid'])){
	$pid=$_GET['pid'];
	
	$query="SELECT * FROM tblproduct WHERE pid=$pid";
	$result=mysqli_query($con,$query);
	$row=mysqli_fetch_assoc($result);
	$filepath='upload/' . $row['picture'];
	if(file_exists($filepath)){
		header('Content-Disposition: attachment; filename=' . basename($filepath));
		header('Content-Length: ' . filesize('upload/' . $row['picture']));
		readfile('upload/' . $row['picture']);
		
		exit;
		
	}
}

?>

