<?php

$username = "root";
$password = "mysql";
$server = "localhost";
$db = "sports";

$con = mysqli_connect($server, $username, $password, $db);

if($con){
	//echo "Connection Successful";
	?>

	<script type="text/javascript">
		alert("Welcome to the website!");
	</script>

	<?php
}else{
	//echo "No connection";
	die("No connection" .mysqli_connect_error());
}

?>