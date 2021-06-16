<?php 
$name=$_POST['e_name'];
$venue=$_POST['venue'];
$date=$_POST['date'];
$fees=$_POST['fees'];
$desc=$_POST['desc'];

$ct=$_POST['cat'];

$id=$_GET['id'];


$target_dir = "uploads/";

$target_file = $target_dir . basename($_FILES["img"]["name"]);

echo $target_file;


if(move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)){
	echo "file uploaded successfully" ."<br>";
}



//include ('\includes\config.php');
$server="localhost";
$user="root";
$password="";
$db="ac_db";
$con=mysqli_connect($server,$user,$password,$db) or die("connection failed");

$sq = "UPDATE events SET e_name='$name',venue='$venue',`date`='$date', parti_fee='$fees', e_desc='$desc',cat='$ct',e_img='$target_file' WHERE e_id=$id ";
echo $sq;
 if(mysqli_query($con,$sq))
{
    header('Location:table.php');
}
else{
    echo " false". mysqli_error($con);
}

mysqli_close($con);

?>