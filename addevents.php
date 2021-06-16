<?php   
include('.\includes\config.php');
$id=$_GET['id'];
$sq1="update events set validate ='1' where e_id='$id'";

$r=mysqli_query($con,$sq1);







     

$sq= "SELECT * FROM `events` WHERE e_id='$id'";

echo $sq;
$res = mysqli_query($con,$sq);
$ca="";
while($row=mysqli_fetch_assoc($res))
{
$ca= $row['cat'];

}
echo $ca;




$sql= "SELECT * FROM parti_reg WHERE int_cat LIKE '%$ca%'";
echo $sql."<br/>";
$res= mysqli_query($con,$sql);

$cnt = mysqli_num_rows($res);





$to="";
while($row=mysqli_fetch_assoc($res))
{
	$to=$row['email'];
	$subject = "My subject";
	$message= "Hello world!";
	$headers = "From: activityclash@gmail.com";

  echo $to."<br/>";

	$t = mail($to,$subject,$message,$headers);

if($t)
{
    echo"Mail sent successfully";
}
else{
    echo"error";
}



}







if(mysqli_query($con,$sql))
{
    header('Location:htmlevent.php');

}
else{
    echo " false". mysqli_error($con);
}

mysqli_close($con);


  ?>