<html>
<body>
<?php
$fn=$_POST['o_id'];
echo $fn ."<br>";
$ln=$_POST['email'];
echo $ln  ."<br>";
$ad=$_POST['pswd'];
echo $ad ."<br>";
$tn=$_POST['p_no'];
echo $tn ."<br>";
$server="localhost";
$user="root";
$password="";
$db="ac_db";
$con=mysqli_connect($server,$user,$password,$db) or die("connection failed");
echo "connection sucess";

$sq="INSERT INTO `org_reg`(`name`, `email`, `p_no`, `pswd`) VALUES ('$fn','$ln','$tn','$ad')";
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