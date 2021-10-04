<?php
include('common/db_connect.php');
$id=$_GET['id'];
$air=$_POST['air'];
$time=$_POST['time'];
$origin=$_POST['origin'];
$status=$_POST['status'];

$sql="UPDATE arrivals SET Airlines='$air', Arrival='$time', Origin='$origin', Status='$status' WHERE FlightC=$id";

mysqli_query($connect,$sql);

header("Location:view_arrivals.php?result=updated");
?>
