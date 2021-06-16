<html>
<body>
<?php
/*$fn=$_POST['p_id'];
echo $fn ."<br>";*/
$nm=$_POST['name'];
echo $nm ."<br>";
$ln=$_POST['email'];
echo $ln ."<br>";
$ad=$_POST['pswd'];
echo $ad ."<br>";
$ct=$_POST['cat'];
echo $ct."<br/>";


$ag=$_POST['age'];
echo $ag ."<br>";
$server="localhost";
$user="root";
$password="";
$db="ac_db";
$con=mysqli_connect($server,$user,$password,$db) or die("connection failed");
echo "connection sucess";

$sq="INSERT INTO `parti_reg`(`name`, `email`, `pswd`, `int_cat`, `age`) VALUES ('$nm','$ln','$ad','$ct','$ag')";
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
</body>
</html>