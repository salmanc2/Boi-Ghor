<?php
include('common/db_connect.php');
$p_id =$_GET['id'];
	$sql="UPDATE passengers SET Approved='1' WHERE PassengerId=$p_id";
	mysqli_query($connect,$sql);
	header('Location:approval.php');
?>