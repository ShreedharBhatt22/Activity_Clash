<?php 
session_start();
$name=$_POST['o_name'];
$venue=$_POST['email'];
$date=$_POST['p_no'];
$fees=$_POST['pswd'];



$id=$_SESSION['uid'];

//include ('\includes\config.php');
$server="localhost";
$user="root";
$password="";
$db="ac_db";
$con=mysqli_connect($server,$user,$password,$db) or die("connection failed");

$sq = "UPDATE org_reg SET name='$name',email='$venue',p_no='$date', pswd='$fees' WHERE o_id=$id ";
echo $sq;
 if(mysqli_query($con,$sq))
{
    header('Location:success.php');
}
else{
    echo " false". mysqli_error($con);
}

mysqli_close($con);

?>