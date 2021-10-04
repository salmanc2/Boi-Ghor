<?php
	include('common/db_connect.php');

$id=$_POST['id'];
$air=$_POST['air'];
$time=$_POST['time'];
$source=$_POST['src'];
$status=$_POST['status'];

$sql="INSERT INTO departures(FlightCode,Airlines,Departure,Destination,Status) VALUES('$id','$air','$time','$source', '$status')";

mysqli_query($connect,$sql);

header("Location:insert_departures.php?result=success");
?>
