<?php 
session_start();
if(!isset($_SESSION["sess_user"])){
	header("location:admin_login.php");
} else {
?>



<!DOCTYPE html>
<html>
<head>
	<title>Admin main page</title>
	
	
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
	
	<p id="layoutdims"><marquee><h2>Welcome, <?=$_SESSION['sess_user'];?>! </h2></marquee></p>
</div>
<div class="colmask threecol">
	<div class="colmid">
		<div class="colleft">
			<div class="col1">
			
			
			
				<!-- Column 1 start -->
				
				<img src="library.jpg" width="100%" />
				
				
				
				<!-- Column 1 end -->
			</div>
			<div class="col2">
				<!-- Column 2 start -->
					<br>
					<h2><a href="logout.php" style="font-size:20px; background-color:transparent;text-decoration:none; color:#369; ">Logout</a></h2><br>
					<a href="add_member.php" style="font-size:20px; background-color:transparent;text-decoration:none; color:#369; "><b>Add Member</b></a><br><br>
					<a href="ADview_member.php" style="font-size:20px; background-color:transparent;text-decoration:none; color:#369; "><b>View Member</b></a><br><br>
					<a href="add_books.php" style="font-size:20px; background-color:transparent;text-decoration:none; color:#369; "><b>Add Book</b></a><br><br>
					<a href="ADview_book.php" style="font-size:20px; background-color:transparent;text-decoration:none; color:#369; "><b>View Book</b></a><br><br>
					<a href="ADissueview_book.php" style="font-size:20px; background-color:transparent;text-decoration:none; color:#369; "><b>Issue book</b></a><br><br>
					<a href="ADreturn_view.php" style="font-size:20px; background-color:transparent;text-decoration:none; color:#369; "><b>return book</b></a><br><br>
					<a href="ADfine.php" style="font-size:20px; background-color:transparent;text-decoration:none; color:#369; "><b>Fine</b></a>
				<!-- Column 2 end -->
			</div>
			<div class="col3">
				<!-- Column 3 start -->
					<div id="ads">
					
						
					
					</div>
				<!-- Column 3 end -->
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
<?php
}
?>
