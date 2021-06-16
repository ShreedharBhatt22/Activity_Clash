<?php


$to = "activityclashuser@gmail.com";
$subject = "My subject";
$message= "Hello world!";
$headers = "From: activityclash@gmail.com";     

/*$server="localhost";
$user="root";
$password="";
$db="ac_db";
$con=mysqli_connect($server,$user,$password,$db) or die("connection failed");

$sql = "select email from parti_reg where int_cat LIKE 'Performing Arts%'";
echo $sql."<br/>";
$res = mysqli_query($con,$sql);
$cnt = mysqli_num_rows($res);*/

$t = mail($to,$subject,$message,$headers);

if($t==true)
{
    echo"Mail sent successfully";
}
else{
    echo"error";
}
?>
