<?php
session_start();
// if(isset($_SESSION['uid']))
// {
	
$servername="localhost";
$user="root";
$password="";
$database="dbproduct";

$con=mysqli_connect($servername,$user,$password,$database);

$query="SELECT * FROM `tblproduct`";

$data=mysqli_query($con,$query);

?>
<head>
  <meta charset="UTF-8">
  <title>Dashboard </title>
  <link rel="stylesheet" href="./style.css">
<style>
  
    .container {
    
    /* height: auto; */
    width: 100%;
    height:100%;
    background-color: #e0d8c3;
    align-content: flex-start;
    overflow-y:scroll;
    /* color:green; */
    
}


    .styled-table{
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 20px;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}
    .btn {
  /* background-color: #82f586; */
  border: 2px solid black;
  color: white;
  padding: 5px 10px;
  cursor: pointer;
  font-size: 20px;
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
</style>
</head>
<body>

<div class="container" >
<div class="navBar">
<ul class="nav">
        <li><a href="viweproduct.php">Home</a></li>
        <li><a href="productmanagent.php">Insert New Data</a></li>
        
		<li><a href="userlogin.php">logout</a></li>
    </ul>
	</div>	
<center>
    <h1>Inventory Management System</h1>
<div class="content" >
    <br>
<table class="styled-table" border='1'>
<thead> 
<tr><th>Product ID</th>
    <th>Product Name</th>
	<th>Price</th>
	<th>Quantity</th>
	<th>Picture</th>
	<th>Action</th>
	</tr>
    </thead>
	
	
<?php
while($row=mysqli_fetch_array($data)){	
 
	
 echo "<tbody><tr><td>$row[pid]</td>
    <td>$row[pname]</td>
	<td>$row[price]</td>
	<td>$row[quantity]</td>
	<td><img src=upload/$row[picture] width=100 height=80>
    <button class=btn> <a href='download.php?pid=$row[pid]'>download</a></button>
	</td>
	<td>
   
    <button class=btn> <a href='delete.php?pid=$row[pid]'>Delete</a></button>
    <button class=btn>   <a href='updateform.php?pid=$row[pid]'>update</a></td>	</button>
		 
</tr>";
}

	?>
</tbody></table><br></div>
</center>

<?php  ?>
<footer style = " clear:both;position:sticky;bottom:0px;width:100%">
  <p>Author: Tanvir Shaikat<br>
  tanvirshaikatx@gmail.com</p>
</footer>
</div>




</body>
