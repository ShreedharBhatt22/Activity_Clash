<!DOCTYPE html>
    <html>
    <head>
    <style>
    table {
       
    }

    th, td {
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even){background-color: #f2f2f2}

    thead {
        background-color: #18bc9c;
       color: white;
    }
    </style>
    </head>
    <body>

    
<?php include ('.\includes\h.php'); 
$uid=$_SESSION['uid'];
if($w=="u"||$w=="p"){
      header("Location: index.php"); 
    }
?>
<h2 style="text-align:center" >Event Details</h2><br>
<div class="table-responsive">
    <table class="table table-sm table-striped">
      <thead>
      <tr>
        <th>Sr no.</th>
        <th>Event name</th>
        <th>Venue</th>
        <th>Date</th>
        <th>Fee</th>
        <th>No of parti</th>
        <th>image</th>
        <th>Action</th>
      </tr>
      </thead>

      <?php

      $server="localhost";
$user="root";
$password="";
$db="ac_db";
$con=mysqli_connect($server,$user,$password,$db) or die("connection failed");

$result = mysqli_query($con,"SELECT * from events where o_id= $uid;");
$num_rows = mysqli_num_rows($result); 
$i=0;

while ($row =mysqli_fetch_assoc($result)) {  
   $e=$row['e_id'];
      $r=mysqli_query($con,"select * from booked_parti where e_id ='$e'");
      $c=mysqli_num_rows($r);
?>

      <tr>
        <td><?php $i=$i+1; echo $i;?></td>
        <td><?php echo $row['e_name']; ?></td>
        <td><?php echo $row['venue']; ?></td>
        <td><?php echo $row['date']; ?></td>
        <td><?php echo $row['parti_fee']; ?></td>
        <td><?php echo $c; ?></td>
        <td><a href="<?php echo $row['e_img'];?>">image</a></td>
        <td><a href="editevents.php?id=<?php echo $row['e_id'] ?>">Edit</a>|<a href="delevents.php?id=<?php echo $row['e_id'] ?>">Delete</a></td>
      </tr>
<?php } ?>


    </table>
</div>
<?php include ('.\includes\f.php'); ?>
    </body>
    </html>