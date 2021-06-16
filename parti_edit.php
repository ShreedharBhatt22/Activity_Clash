<?php 
session_start();
$name=$_POST['name'];
$venue=$_POST['email'];
$date=$_POST['age'];
$fees=$_POST['pswd'];
$ct=$_POST['cat'];


$id=$_SESSION['uid'];

//include ('\includes\config.php');
$server="localhost";
$user="root";
$password="";
$db="ac_db";
$con=mysqli_connect($server,$user,$password,$db) or die("connection failed");

$sq = "UPDATE parti_reg SET name='$name',email='$venue',age='$date', pswd='$fees',int_cat='$ct' WHERE p_id=$id ";
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