<?php
session_start();
if(isset($_REQUEST['msg']) && $_REQUEST['msg'] == 'logout')
{
  session_unset();
  session_destroy();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>ORDER PAGE</title>
  <?php include 'links.php'; ?>
  <link rel="stylesheet" type="text/css" href="css/shop.css">
</head>
<body>
	<header>
		<?php include 'header.php'; ?>
		<div class="title" style="margin-top: 150px; text-align: center;">
    		<h1 style="font-family: 600; color: white; font-size: 50px;">Sports World</h1>
    	</div>
		<div class="apply">
			<!-- <h1 style="font-size: 28px;color: black;text-align: center;font-weight: bold;margin-top: -20px;margin-bottom: 20px;">Fill in the details</h1> -->
			<form id="form" action="#" method="POST">
				<div class="one">
					<label class="name">Name</label>
					<input type="text" id="name" name="name" autofocus placeholder="Enter Name" required>
					<br><br>
					<label class="name">Mobile</label>
					<input type="tel" id="mobile" name="mobile" autofocus placeholder="Enter Mobile Number" required>
					<br><br>
					<label class="name">Address</label>
					<input type="text" id="address" name="address" autofocus placeholder="Enter Address" required>
					<br><br>
					<label class="name">Sport</label>
					<select name="sport">
						<option value="" disabled selected>Choose Option</option>
						<option value="Rowing">Rowing</option>
						<option value="Golf">Golf</option>
						<option value="Tennis">Tennis</option>
						<option value="Karate">Karate</option>
						<option value="Gym">Gym</option>
						<option value="Football">Football</option>
						<option value="Cricket">Cricket</option>
					</select>
					<br><br>
					<label class="name">Item</label>
					<select name="item">
						<option value="" disabled selected>Choose Option</option>
						<option value="Rucksack">Rucksack</option>
						<option value="Sipper">Sipper</option>
						<option value="Jersey">Jersey</option>
						<option value="Head Band">Head Band</option>
						<option value="Fitness Tracker">Fitness Tracker</option>
						<option value="Towel">Towel</option>
						<option value="Ice Bag">Ice Bag</option>
					</select>
					<br><br>
					<label class="name">Quantity</label>
					<input type="number" id="quantity" name="quantity" autofocus placeholder="Enter Quantity" required>
				</div>
				<div class="nine">
					<button type="submit" name="order">Order</button> 
					<button type="reset">Reset</button>
					<button onclick="location.href='inner_join.php'">Inner Join</button>
					<br><br>
					<button button onclick="location.href='left_join.php'">Left Join</button> 
					<button button onclick="location.href='right_join.php'">Right Join</button>
					<button onclick="location.href='search.php'">Search</button>
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
<script type="text/javascript">
  function logout(){
      alert("Logging out")
      window.location.href = "index.php?msg=logout"
    }
</script>
</body>
</html>

<?php

include "connect.php";

if(isset($_POST['order'])){
	$name = $_POST['name'];
	$mobile = $_POST['mobile'];
	$address = $_POST['address'];
	if(!empty($_POST['sport'])){
	$sport = $_POST['sport'];
}else{
	?>
	<script>
		alert("Select option!");
	</script>
	<?php
}

if(!empty($_POST['item'])){
	$item = $_POST['item'];
}else{
	?>
	<script>
		alert("Select option!");
	</script>
	<?php
}
	
	$quantity = $_POST['quantity'];

	$insertquery = "insert into buy(name, mobile, address, sport, item, quantity) values('$name', '$mobile', '$address', '$sport', '$item', '$quantity')";

	$res = mysqli_query($con, $insertquery);

	if($res){
		?>
		<script>
			alert("Data inserted properly!");
			window.location.href = 'shop.php';
		</script>
		<?php

}else{
	?>
	<script>
		alert("Data not inserted properly!");
		window.location.href = 'shop.php';
	</script>
	<?php
}
}

?>