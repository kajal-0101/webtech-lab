<!DOCTYPE html>
<html lang="en">
<head>
  <title>ORDER PAGE</title>
  <?php include 'links.php'; ?>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<div class="first">
			<div class="logo">
				<img src="pic/sports.jfif">
			</div>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#" target="_blank">Blog</a></li>
				<li><a href="#" target="_blank">Shop</a></li>
				<li><a href="#" target="_blank">About</a></li>
				<li><a href="#">Contact</a></li>
				<li><a href="#" target="_blank">Log In/Sign Up</a></li>
			</ul>
		</div>
		<div class="title">
			<h1>Sports World</h1>
		</div>

		<?php

			include "connection.php";

			$ids = $_GET['id'];

			$showquery = "select * from buy where id={$ids}";

			$showdata = mysqli_query($con, $showquery);

			$arrdata = mysqli_fetch_array($showdata);

			if(isset($_POST['order'])){

				$idupdate = $_GET['id'];

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

				//$insertquery = "insert into buy(name, mobile, address, sport, item, quantity) values('$name', '$mobile', '$address', '$sport', '$item', '$quantity')";

				$query = "update buy set id=$ids, name='$name', mobile='$mobile', address='$address', sport='$sport', item='$item', quantity='$quantity' where id=$idupdate";

				$res = mysqli_query($con, $query);

				if($res){
					?>
					<script>
						alert("Data updated properly!");
						window.location.href = 'display.php';
					</script>
					<?php
			}else{
				?>
				<script>
					alert("Data not updated properly!");
					window.location.href = 'index.php';
				</script>
				<?php
			}
			}

		?>
		<div class="apply">
			<form id="form" action="#" method="POST">
				<div class="one">
					<label class="name">Name</label>
					<input type="text" id="name" name="name" value="<?php echo $arrdata['name']; ?>" autofocus placeholder="Enter Name" required>
					<br><br>
					<label class="name">Mobile</label>
					<input type="tel" id="mobile" name="mobile" value="<?php echo $arrdata['mobile']; ?>" autofocus placeholder="Enter Mobile Number" required>
					<br><br>
					<label class="name">Address</label>
					<input type="text" id="address" name="address" value="<?php echo $arrdata['address']; ?>" autofocus placeholder="Enter Address" required>
					<br><br>
					<label class="name">Sport</label>
					<select name="sport">
						"<?php 
						$value = $arrdata['sport'];
						echo '<option value=" '.$value.' " selected>'.$value.'</option>' ?>"
						<option value="" disabled>Update Option</option>
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
						"<?php 
						$value = $arrdata['item'];
						echo '<option value=" '.$value.' " selected>'.$value.'</option>' ?>"
						<option value="" disabled>Update Option</option>
						<option value="Rucksack">Rucksack</option>
						<option value="Sipper">Sipper</option>
						<option value="Jersey">Jersey</option>
						<option value="Head Band">Head Band</option>
						<option value="Wrist Band">Wrist Band</option>
						<option value="Jacket">Jacket</option>
						<option value="Shoes">Shoes</option>
					</select>
					<br><br>
					<label class="name">Quantity</label>
					<input type="number" id="quantity" name="quantity" value="<?php echo $arrdata['quantity']; ?>" autofocus placeholder="Enter Quantity" required>
				</div>
				<div class="nine">
					<button type="submit" name="order">Update</button> 
					<button type="reset">Reset</button>
					<button onclick="location.href='display.php'">View</button>
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
				<span class="far fa-copyright"></span>
				<span> 2020 All rights reserved.</span>
			</center>
		</div>
	</footer>
</body>
</html>

