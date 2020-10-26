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
	<title>DISPLAY ORDERS</title>
	<?php include 'links.php'; ?>
	<link rel="stylesheet" type="text/css" href="css/blog.css">
</head>
<body>
	<header>
		<?php include 'header.php'; ?>
		<div class="main-div">
			<h1>List of orders</h1>
			<div class="center-div">
				<div class="table-responsive">
					<table>
						<thead>
							<tr>
								<th>id</th>
								<th>Name</th>
								<th>Mobile Number</th>
								<th>Address</th>
								<th>Sport</th>
								<th>Item</th>
								<th>Quantity</th>
								<th colspan="2">operation</th>
							</tr>
						</thead>
						<tbody>
							<?php
								include "connect.php";
								$joinquery = "SELECT * FROM buy LEFT JOIN item ON item.product = buy.item";
								$query = mysqli_query($con, $joinquery);
								$nums = mysqli_num_rows($query);
								//echo $nums;
								if($nums > 0){
									while($res = $query->fetch_assoc()){
									?>
									<tr>
										<td><?php echo $res['id']; ?></td>
										<td><?php echo $res['name']; ?></td>
										<td><?php echo $res['mobile']; ?></td>
										<td><?php echo $res['address']; ?></td>
										<td><?php echo $res['sport']; ?></td>
										<td><?php echo $res['item']; ?></td>
										<td><?php echo $res['quantity']; ?></td>
										<td><a href="#" data-toggle="tooltip" data-placement="bottom" title="UPDATE"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
										<td><a href="#" data-toggle="tooltip" data-placement="bottom" title="DELETE"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
									</tr>
								<?php
								}
								}
								?>
						</tbody>
					</table>
				</div>
			</div>
			<button onclick="location.href='shop.php'">Back</button>
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