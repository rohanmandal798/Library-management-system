<!DOCTYPE html>
<html>
<head>
	<title>Admin register</title>
	
	
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
	<img src="logo.png" name="logo" align="middle" />
	
	<p id="layoutdims"><marquee>Welcome to Online Library Management System</marquee></p>
</div>
<div class="colmask threecol">
	<div class="colmid">
		<div class="colleft">
			<div class="col1">
				<!-- Column 1 start -->
				
				<h1 align="center" > <font color="#369">ADMIN REGISTRATI0N</font></h1><br><br>
	<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form1" method="post" action="">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF" >


<tr>
<td width="78"><B>Name</B></td>
<td width="6">:</td>
<td width="294"><input name="name" type="text" id="name"></td>
</tr>

<tr>
<td width="78"><B>Email</B></td>
<td width="6">:</td>
<td width="294"><input name="email" type="email" id="email"></td>
</tr>
<tr>
<td><B>Password</B></td>
<td>:</td>
<td><input name="pass" type="password" id="mypassword"></td>
</tr>
<tr>
<td width="78"><B>Contact no</B></td>
<td width="6">:</td>
<td width="294"><input name="contactno" type="tel" id="contactno"></td>
</tr>
<tr>
<td width="78"><B>Address</B></td>
<td width="6">:</td>
<td width="294"><textarea rows="4" cols="22" name="add" ></textarea></td>
</tr>
<tr>
<td>&nbsp;</td>

<td><input type="submit" name="submit" value="Create"><a href=""></td>
<td><font color="#6CB5FF"></font>
<input type="submit" name="reset" value="Reset"><a href=""></td>
<td></td>


</table>
</td>
</form>
<?php
if(isset($_POST["submit"])){

if(!empty($_POST['name']) && !empty($_POST['pass']) ) {
	$name=$_POST['name'];
	
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$contact=$_POST['contactno'];
	$address=$_POST['add'];
	

	include 'conn.php';
	$query=$mysqli->query("SELECT * FROM admin WHERE Email='".$email."'");
	$numrows=$mysqli->num_rows;
	if($numrows==0)
	{
	$sql="INSERT INTO admin(Name,Email,Password,contactno,Address) VALUES('$name','$email','$pass','$contact','$address')";

	$result=$mysqli->query($sql);


	if($result){
	echo "Account Successfully Created";
	header("Location: admin.php");
	} else {
	echo "Failure!";
	}

	} else {
	echo "That username already exists! Please try again with another.";
	}

} else {
	echo "All fields are required!";
}
}
?>






</tr>
</table>
<br><br><br><br><br><br><br>	
				
				
				<!-- Column 1 end -->
			</div>
			<div class="col2">
				<!-- Column 2 start -->
					<br><a href="admin_login.php" style="font-size:25px; background-color:transparent;text-decoration:none; color:#369; "><b>Admin Login</b><br>
				<!-- Column 2 end -->
			</div>
			<div class="col3">
				<!-- Column 3 start -->
					
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
