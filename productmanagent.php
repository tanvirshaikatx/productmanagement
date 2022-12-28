<html>
<head>


<style>
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

</style>
</head>

<body>
<div class="container">
<div class="content">
<ul class="nav">
        <li><a href="viweproduct.php">Home</a></li>
        <li><a href="productmanagent.php">Insert New Data</a></li>
        
		<li><a href="userlogin.php">logout</a></li>
    </ul>
	</div>	<br>
    <div class="form" >
    <fieldset style="border:none;">
    <center><legend > <h3>Insert New Data</h3></legend>
<form action="insert.php" method="post" enctype="multipart/form-data">
Product Name:<input type ="text" name="pname"><br><br>
product ID:<input type ="text" name="pid"><br><br>
price:<input type ="text" name="price"><br><br>
Quantity:<input type ="text" name="quantity"><br><br>
Picture:<input type="file"  name="picture"><br><br>

<input class="btn" type ="submit" value="SUBMIT"><br>	  

</form></center></fieldset>
    </div>
   
<br>
<div style = "background-color:#b5dcb3; clear:both;position:fixed;bottom:0px;width:100%">
<center>
Copyright © 2022 TonyStark
</center>

<footer>
  <p>Author: Tanvir Shaikat<br>
  tanvirshaikatx@gmail.com</p>
</footer>
</div>
</body>
</html>