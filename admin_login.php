
<?php
session_start();
$em = $_POST['email'];
$pw = $_POST['pswd'];

echo $em."======".$pw."<br/>";

$server="localhost";
$user="root";
$password="";
$db="ac_db";
$con=mysqli_connect($server,$user,$password,$db) or die("connection failed");

$sql = "select * from admin_reg where email = '$em' and pswd = '$pw'";
echo $sql."<br/>";
$res = mysqli_query($con,$sql);
while ($row=mysqli_fetch_assoc($res)) {
	$u=$row['name'];
	echo $u;
	$ud=$row['a_id'];
	

}

	$cnt = mysqli_num_rows($res);
	echo $cnt;

if($cnt == 1)
{	$_SESSION['uid']=$ud;
 $_SESSION['uname']=$u;
 $_SESSION['who']="a";
   header('Location:apage.php');
}
else{
    echo " false". mysqli_error($con);
}


?>
