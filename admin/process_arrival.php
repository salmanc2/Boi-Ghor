<?php
	include('common/db_connect.php');

$id=$_POST['id'];
$air=$_POST['air'];
$time=$_POST['time'];
$origin=$_POST['origin'];
$status=$_POST['status'];

$sql="INSERT INTO arrivals(FlightC,Airlines,Arrival,Origin,Status) VALUES('$id','$air','$time','$origin', '$status')";

mysqli_query($connect,$sql);

header("Location:insert_arrivals.php?result=success");
?>
