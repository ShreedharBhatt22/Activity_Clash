<?php

echo "I am alive and kicking"."<br/>";
$id = $_GET['id'];

echo $id;

$server="localhost";
$user="root";
$password="";
$db="ac_db";
$con=mysqli_connect($server,$user,$password,$db) or die("connection failed");
$sql = "delete from org_reg where o_id='$id'";

if(mysqli_query($con,$sql))
{
	echo "Deletion success";
	header('location:admin_org.php');
}
else
{
	echo mysqli_error($con);
}
?>