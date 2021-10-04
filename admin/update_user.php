<?php
include ('common/db_connect.php');
$p_id=$_GET['id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$passport=$_POST['passno'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$phone=($_POST['pno']);
$address=$_POST['addr'];
$country=$_POST['cntry'];

$sql="UPDATE passengers SET FirstName='$fname',LastName='$lname',PassportNo='$passport',Email='$email',Gender='$gender',BirthDate='$dob',Phone='$phone',Address='$address',Country='$country' WHERE PassengerId=$p_id";

mysqli_query($connect,$sql);
header("Location:view_users.php?result=updated");
?>