<?php
session_start();
if(isset($_REQUEST['msg']) && $_REQUEST['msg'] == 'logout')
{
  session_unset();
  session_destroy();
}

?>

<!DOCTYPE html>
<?php

if( isset($_POST['name']) && isset($_POST['password']) )
{
  if(  $_POST['name'] == "kajal"  && $_POST['password'] == "1234")
  {
     $_SESSION["name"] = $_POST['name'];
     if( isset($_POST['checkbox']) )
      {
        setcookie('remember_username', $_POST['name'] , time() + (86400 * 30), "/");
  
      }
    ?>

    <script type="text/javascript">
      alert("Logged in Successfully..!");
    </script>

    <?php
   header("Location: index.php");
  }
  else
  {
    ?>
    <script type="text/javascript">
      alert("Something Went Wrong..!");
    </script>
    <?php
  }
}

?>
<html lang="en">
<head>
  <title>LOGIN PAGE</title>
  <?php include 'links.php'; ?>
  <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<header>
		<?php
    	require "header.php";
    	?>
    	<div class="title" style="margin-top: 150px; text-align: center;">
    		<h1 style="font-family: 600; color: white; font-size: 50px;">Sports World</h1>
    	</div>
		<div class="apply">
			<form id="form" action="login.php" method="POST">
				<?php
				$username = "";
				if(isset($_COOKIE['remember_username']))
				{
					$username = $_COOKIE['remember_username'];
				}
				?>
				<div class="one">
					<label class="name">Name</label>
					<input type="text" id="name" name="name" autofocus placeholder="Enter Name" required value="<?php echo $username?>">
					<br><br>
					<label class="name">Password</label>
					<input type="text" id="password" name="password" autofocus placeholder="Enter Password" required>
					<br><br>
					<div class = two>
						<label class="name">Remember Me</label>
						<input type="checkbox" id="checkbox" name="checkbox" required>
						<br><br>
					</div>
					
					
				</div>
				<div class="nine">
					<button type="submit" name="in">Log IN</button> 
					<button type="reset">Reset</button>
				</div>
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

	<script>
		function logout(){
			alert("Logging out")
			window.location.href = "index.php?msg=logout"
		}
	</script>
</body>
</html>

