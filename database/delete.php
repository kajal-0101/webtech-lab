<?php


include 'connection.php';

$id = $_GET['id'];

$deletequery = "delete from buy where id=$id";

$query = mysqli_query($con, $deletequery);

if($query){
	?>
	<script>
		alert("Deleted Sucessfully");
		window.location.href = 'display.php';
	</script>
	<?php
}else{
	?>
	<script>
		alert("Not deleted");
		window.location.href= "display.php";
	</script>
	<?php

}


?>