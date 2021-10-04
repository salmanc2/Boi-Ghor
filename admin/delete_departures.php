<?php
include('common/db_connect.php');
$flight_id =$_GET['id'];
	$sql="UPDATE departures SET is_delete='1' WHERE FlightCode=$flight_id";
	mysqli_query($connect,$sql);
	header('Location: view_departures.php?result=deleted');
?>