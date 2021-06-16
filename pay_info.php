<?php
include('.\includes\config.php');
session_start();
$id=$_GET['id'];
$uid=$_SESSION['uid'];
echo "$id";
$result = mysqli_query($con,"SELECT email from parti_reg where p_id='$uid'");
$r=mysqli_query($con,"SELECT parti_fee from events where e_id='$id'");
echo "SELECT email from parti_reg where p_id='$uid'";
echo "$uid";
while($row=mysqli_fetch_assoc($result))
{
    $email=$row['email'];
}
while($row=mysqli_fetch_assoc($r))
{
    $f=$row['parti_fee'];
}
echo "$email";
echo "$f";

$sq="INSERT INTO `booked_parti`(`p_id`, `e_id`, `email`, `amount`) VALUES ('$uid','$id','$email','$f')";

if(mysqli_query($con,$sq))
{
   header("Location:https://test.instamojo.com/@activityclash/?amount=$f");
}
else{
    echo " false". mysqli_error($con);
}


?>

<!-- https://test.instamojo.com/@activityclash -->