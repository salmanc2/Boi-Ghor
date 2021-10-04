<?php
	include('common/db_connect.php');

$id=$_GET['id'];
$nm=$_POST['name'];
$three=$_POST['code'];

$sql="UPDATE airlines SET ALName='$nm', TDigitCode='$three' WHERE AirlineId=$id";

mysqli_query($connect,$sql);

header("Location:view_airlines.php?result=updated");
?>
