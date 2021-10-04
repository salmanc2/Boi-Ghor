<?php
include('common/db_connect.php');
$flight_id =$_GET['id'];
	$sql="UPDATE arrivals SET is_delete='1' WHERE FlightC=$flight_id";
	mysqli_query($connect,$sql);
	header('Location: view_arrivals.php?result=deleted');
?>