<?php 
session_start();
?>


<html>
<head><style>
    .container {
    
    height: 100%;
    width: 100%;
    align-content: flex-start;
    font-size: 20px;
    background-color: #e0d8c3;
}

footer {
  text-align: center;
  padding: 3px;
  background-color: #0d7963;
  color: white;
  
}
	  ul.nav {
            margin: 0;
            padding: 0;
            list-style: none;
            height: 36px;
            line-height: 36px;
            background: #0d7963;
            /* you can change the backgorund color here. */
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
        }

        ul.nav li {
            border-right: 1px solid #189b80;
            /* you can change the border color matching to your background color */
            float: left;
        }

        ul.nav a {
            display: block;
            padding: 0 28px;
            color: #ccece6;
            text-decoration: none;
        }

        ul.nav a:hover,
        ul.nav li.current a {
            background: #086754;
        }
        .btn {
  background-color: #53b9fc;
  border: 2px solid black;
  color: white;
  padding: 5px 10px;
  cursor: pointer;
  font-size: 20px;
}
.form{
    /* height:900px; */
    display:flex;
    flex-direction:column;
    padding-top:100px;
    
   
}
</style></head>
<body>
<?php
$servername="localhost";
$user="root";
$password="";
$database="dbproduct";

$con=mysqli_connect($servername,$user,$password,$database);

$_SESSION['id']=$_GET['pid'];

$pid=$_GET['pid'];
$query="SELECT * FROM `tblproduct` where pid=$pid";

$data=mysqli_query($con,$query);
$row=mysqli_fetch_array($data);
?>

<div class="container">
<div class="content">
<ul class="nav">
        <li><a href="viweproduct.php">Home</a></li>
        <li><a href="productmanagent.php">Insert New Data</a></li>
      
       
		<li><a href="userlogin.php">logout</a></li>
    </ul>
	</div><br>	
    <div class="form">
    <fieldset style="border:none;">
        <center>
    <legend > <h3>Update Data</h3></legend>
<form action="update.php" method="post">
Product ID:<input type ="text" name="pid" value="<?php echo $row['pid'];?>"><br><br>

Product Name:<input type ="text" name="pname" value="<?php echo $row['pname'];?>"><br><br>



price:<input type ="text" name="price"value="<?php echo $row['price'];?>"><br><br>
Quantity:<input type ="text" name="quantity"value="<?php echo $row['quantity'];?>"><br><br>

<input class="btn"type ="submit" value="Submit">
	  
</form></center></fieldset>
    </div>
    

<div style = "background-color:#b5dcb3; clear:both;position:fixed;bottom:0px;width:100%">
<center>
Copyright © 2022 TonyStark
</center>
<footer>
  <p>Author: Tanvir Shaikat<br>
  <a href="tanvirshaikatx@gmail.com">tanvirshaikatx@gmail.com</a></p>
</footer>
</form>
</body>
</html>
<?php 
session_destroy();
?>