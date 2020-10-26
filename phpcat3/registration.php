<?php
session_start();
if(isset($_REQUEST['msg']) && $_REQUEST['msg'] == 'logout')
{
  session_unset();
  session_destroy();
}

?>

<!DOCTYPE html>
<html>
<head>
<?php include 'links.php'; ?>
<link href="css/registration.css" rel="stylesheet" type="text/css">
<script src="js/script.js"></script>
<title>REGISTRATION</title>
</head>
<body>
<header>
	<?php include 'header.php'; ?>
	<div class="title" style="margin-top: 150px; text-align: center;">
    		<h1 style="font-family: 600; color: white; font-size: 50px;">Sports World</h1>
    	</div>
	<div id="mainform">
<div class="innerdiv">
<!-- Required Div Starts Here -->
<form action='#' id="myForm" method='post' name="myForm">
<h3 style="margin-top:0;color:#fff;background-color:#9b59b6;text-align:center;width:100%;height:70px;padding-top:30px">Fill Your Information!</h3>
<table>
<tr>
<td>Username</td>
<td><input id='username1' name='username' onblur="validate('username', this.value)" type='text'></td>
<td>
<div id='username'></div>
</td>
</tr>
<tr>
<td>Email</td>
<td><input id='email1' name='email' onblur="validate('email', this.value)" type='text'></td>
<td>
<div id='email'></div>
</td>
</tr>
<tr>
<td>Password</td>
<td><input id='password1' name='password' onblur="validate('password', this.value)" type='password'></td>
<td>
<div id='password'></div>
</td>
</tr>
<tr>
<td> Confirm Password</td>
<td><input id='password2' name='password1' onblur="validate_password()" type='password'></td>
<td>
<div id='confirm'></div>
</td>
</tr>
</table>
<input onclick="checkForm()" type='button' value='Submit'>
</form>
</div>
</header>
<footer>
	<div class="main-content">
			<div class="left box">
				<h2>About Us</h2>
				<div class="content">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
					</p>
					<div class="social">
						<a href="#"><span class="fa fa-facebook"></span></a>
						<a href="#"><span class="fa fa-twitter"></span></a>
						<a href="#"><span class="fa fa-instagram"></span></a>
						<a href="#"><span class="fa fa-youtube"></span></a>
					</div>
				</div>
			</div>
			<div class="center box">
				<h2>Address</h2>
				<div class="content">
					<div class="place">
						<span class="fa fa-map-marker-alt"></span>
						<span class="text">Kolkata, WB, IN</span>
					</div>
					<div class="phone">
						<span class="fa fa-phone-alt"></span>
						<span class="text">+91 0000 000 000</span>
					</div>
					<div class="email">
						<span class="fa fa-map-marker-alt"></span>
						<span class="text">testing@test.com</span>
					</div>

				</div>
			</div>
			<div class="right box">
				<h2>Contact Us</h2>
				<div class="content">
					<form action="#">
						<div class="email">
							<div class="text">Email *</div>
							<input type="email" required>
						</div>
						<div class="msg">
							<div class="text">Message *</div>
							<textarea name="name" rows="2" cols="25" required></textarea>
						</div>
						<div class="butn">
							<button type="submit">Send</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="bottom">
			<center>
				<span class="credit">Created by Kajal Chatterjee | Sports World</span>
				<span class="fa fa-copyright"></span>
				<span> 2020 All rights reserved.</span>
			</center>
		</div>
</footer>
<script type="text/javascript">
  function logout(){
      alert("Logging out")
      window.location.href = "index.php?msg=logout"
    }
</script>
</body>
</html>