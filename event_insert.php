<html>
<body>
<?php
session_start();
$uid=$_SESSION['uid'];
$en=$_POST['e_name'];
echo $en ."<br>";

$ct=$_POST['cat'];
echo $ct."<br>"; 


$v=$_POST['venue'];
echo $v ."<br>";
$d=$_POST['date'];
echo $d ."<br>";

$pf=$_POST['parti_fee'];
echo $pf ."<br>";
$max=$_POST['max'];





echo "inside file process"."<br/>";

$target_dir = "uploads/";

$target_file = $target_dir . basename($_FILES["img"]["name"]);

echo $target_file;

if(move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)){
	echo "file uploaded successfully" ."<br>";
}




$dis=$_POST['e_desc'];
echo $dis ."<br>";


$server="localhost";
$user="root";
$password="";
$db="ac_db";
$con=mysqli_connect($server,$user,$password,$db) or die("connection failed");
echo "connection sucess";
echo $uid;

$sq="INSERT INTO `events`(`o_id`, `e_name`,`cat`, `venue`, `date`, `parti_fee`,`e_img`,`e_desc`,`max_parti`) VALUES ('$uid' ,'$en','$ct','$v','$d','$pf','$target_file','$dis','$max')";
echo $sq;
if(mysqli_query($con,$sq))
{
   header('Location:success.php');
}
else{
    echo " false". mysqli_error($con);
}

mysqli_close($con);


?><img src="<?php echo $target_file;?>" width="100px" height="100px" alt="image file"/>
</body>
</html>