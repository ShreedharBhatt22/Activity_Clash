
<?php 

$cvv=$_POST['cvv'];
echo $cvv ."<br/>";
$cno=$_POST['cno'];
echo $cno ."<br>";

$n=$_POST['name'];
echo $n ."<br>";

$exp=$_POST['exp'];
echo $exp ."<br>";
include('.\includes\config.php');
$sq="INSERT INTO `payment`(`card_no`, `cvv`, `expr_date`, `ca_name`) VALUES ($cno,$cvv,$exp,$n) ";
echo $sq;
if(mysqli_query($con,$sq))
{
    header('Location:success.php');
}
else{
    echo " false". mysqli_error($con);
}

?>