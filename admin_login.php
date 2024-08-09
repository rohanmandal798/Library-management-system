<!DOCTYPE html>
<html>
<head>
	<title>Admin login</title>
	
	
	<link rel="stylesheet" type="text/css" href="screen.css" media="screen" />
	<style>
        .footer {
            background-color: #f1f1f1;
            padding: 20px;
            text-align: left;
            display: flex;
            justify-content: space-between;
        }
        .footer-column {
            flex: 1;
            margin: 0 10px;
        }
        .footer-column h3 {
            margin-bottom: 10px;
        }
        .footer-column ul {
            list-style-type: none;
            padding: 0;
        }
        .footer-column ul li {
            margin-bottom: 5px;
        }
        .footer-column ul li a {
            text-decoration: none;
            color: #000;
        }
        .footer-column ul li a:hover {
            text-decoration: underline;
        }
        .social-icons a {
            margin-right: 10px;
            text-decoration: none;
            color: #000;
        }
    </style>
</head>
<body>

<div id="header">
	<img src="logo.png" name="logo" />
	
	<p id="layoutdims"><marquee>Welcome to Online Library Management System</marquee></p>
</div>
<div class="colmask threecol">
	<div class="colmid">
		<div class="colleft">
			<div class="col1">
				<!-- Column 1 start -->
				
				<h1 align="center" > <font color="#369">ADMIN LOGIN</font></h1><br><br>
	<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form1" method="post" action="">
<td>
<table width="100%" border="0" cellpadding="8" cellspacing="3" bgcolor="#FFFFFF" >

<tr>
<td width="78"><B>Email</B></td>
<td width="6">:</td>
<td width="294"><input name="adusername" type="text" id="adusername"></td>
</tr>
<tr>
<td><b>Password</b></td>
<td>:</td>
<td><input name="adpassword" type="password" id="adpassword"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="submit" value="Login"></td>

</tr>
</table>
</td>
</form>
<?php
if(isset($_POST["submit"])){

if(!empty($_POST['adusername']) && !empty($_POST['adpassword'])) {
	$user=$_POST['adusername'];
	$pass=$_POST['adpassword'];

	include 'conn.php';
	$sql = sprintf("SELECT * FROM admin WHERE Email='%s' AND Password='%s'",
		$mysqli->real_escape_string($user),
		$mysqli->real_escape_string($pass));
	
	$result=$mysqli->query($sql);
	
	
	/* if there are some errors with the sql */
	if(!$result){
		$message = 'Invalid query:'.$mysqli->error."<br>";
		$message .= 'Whole query:'.$sql;
		die($message);
	}

	//$numrows=mysql_num_rows($query);
	$numrows = $result->num_rows;
	
		
	if($numrows!=0)
	{
		while($row=$result->fetch_assoc())
		{

			$dbusername=$row['Email'];
			$dbpassword=$row['Password'];
			$Name=$row['Name'];
		}


		if($user == $dbusername && $pass == $dbpassword)
		{

			session_start();
			$_SESSION['sess_user']=$Name;

			/* Redirect browser */
			header("Location: admin.php");
		}
	}
	else{
		echo "Invalid username or password!";
	}
	$result->free();
	$mysqli->close();

} 
else {
	echo "All fields are required!";
}

}
?>





</tr>
</table><br><br><br><br><br><br><br>
				
				
				<!-- Column 1 end -->
			</div>

		</div>
	</div>
</div>
<div id="footer">

<footer class="footer">
        <div class="footer-column">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3>Extra Links</h3>
            <ul>
                <li><a href="#">Blogs & Articles</a></li>
                <li><a href="#">Notices</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">News & Events</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3>Contact Us</h3>
            <p>Tel: 01-4541577 , 01-4525661</p>
            <p>Email: hello@softwarica.com.np</p>
            <p>Address: Maitri Marg, Dillibazar, Kathmandu</p>
        </div>
        <div class="footer-column">
            <h3>Follow Us</h3>
            <div class="social-icons">
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">LinkedIn</a></li>
            </div>
			
        </div>
    </footer>
	
	
	
</div>

<center>© Copyright @ 2024 by ROHAN KUMAR MANDAL | all right reserved !!</center>

</body>
</html>
