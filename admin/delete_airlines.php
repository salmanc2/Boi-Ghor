<?php
include('common/db_connect.php');
$airline_id =$_GET['id'];
	$sql="UPDATE airlines SET is_delete='1' WHERE AirlineId=$airline_id";
	mysqli_query($connect,$sql);
	header('Location: view_airlines.php?result=deleted');
?>