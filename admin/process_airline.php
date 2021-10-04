<?php
	include('common/db_connect.php');

$id=$_POST['id'];
$nm=$_POST['name'];
$three=$_POST['code'];

$sql="INSERT INTO airlines(AirlineId,ALName,TDigitCode) VALUES('$id','$nm','$three')";

mysqli_query($connect,$sql);

header("Location:insert_airlines.php?result=success");
?>
