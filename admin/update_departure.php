<?php
	include('common/db_connect.php');

$id=$_GET['id'];
$air=$_POST['air'];
$time=$_POST['time'];
$source=$_POST['src'];
$status=$_POST['status'];

$sql="UPDATE departures SET Airlines='$air', Departure='$time', Destination='$source', Status='$status' WHERE FlightCode=$id";

mysqli_query($connect,$sql);

header("Location:view_departures.php?result=updated");
?>
