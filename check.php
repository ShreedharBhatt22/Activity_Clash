<?php
//echo "I am in check page";
session_start();


$em = $_POST['email'];
$pw = $_POST['pwd'];

echo $em."======".$pw."<br/>";

$server="localhost";
$user="root";
$password="";
$db="ac_db";
$con=mysqli_connect($server,$user,$password,$db) or die("connection failed");

$sql = "select * from org_reg where email = '$em' and pswd = '$pw'";
echo $sql."<br/>";
$res = mysqli_query($con,$sql);
$cnt = mysqli_num_rows($res);


if($cnt == 1)
{
		while ($row=mysqli_fetch_assoc($res))
		{
		$uname= $row['name'];
		$uid= $row['o_id'];
		$email=$row['email'];
		
			}
		$_SESSION['who']="o";	
}else{
	
    $sql = "select * from parti_reg where email = '$em' and pswd = '$pw'";
    echo $sql."<br/>";
	$res = mysqli_query($con,$sql);

	$cnt = mysqli_num_rows($res);
	echo $cnt;
	if($cnt==0){
		
		$_SESSION['who']="u";
		
   
			echo ("<SCRIPT LANGUAGE='Javascript'>
		window.location.href='../ac/index.php';
		window.alert('Invalid username or password')
		
		</SCRIPT>");
		//echo "user not found";
	}else
	{$_SESSION['who']="p";	

		while ($row=mysqli_fetch_assoc($res))
		{
		$uname= $row['name'];
		$uid= $row['p_id'];
		$email=$row['email'];

		}
	}
}
echo $cnt;


$_SESSION['uid']=$uid;
   	$_SESSION['uname']=$uname;
   	$_SESSION['email']=$email;
   

//header('location:home.php');
 	echo ("<SCRIPT LANGUAGE='Javascript'>
		window.location.href='../ac/index.php';
		window.alert('welcome user')
		
		</SCRIPT>");  	


?>