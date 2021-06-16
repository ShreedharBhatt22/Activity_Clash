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
if($w=="u"||$w=="o"){
      header("Location: index.php"); 
    } ?>
<h2 style="text-align:center" ><?php echo $uname ?>'s history </h2><br>
<div class="table-responsive">
    <table class="table table-sm table-striped">
      <thead>
      <tr>
        <th>Sr no.</th>
        <th>Booking id</th>
        <th>Event name</th>
        <th>Venue</th>
        <th>Date</th>
        <th>Fee</th>
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

$result = mysqli_query($con,"SELECT * from booked_parti where p_id=$uid;");
$num_rows = mysqli_num_rows($result); 
$i=0;

while ($row =mysqli_fetch_assoc($result)) {  ?>

      <tr>
        <td><?php $i=$i+1; echo $i;?></td>
        <td><?php echo $row['booking_id']; ?></td>
        <?php  $e=$row['e_id'];
               $bid=$row['booking_id'];
         $r = mysqli_query($con,"SELECT * from events where e_id=$e;"); 
    
         while ($row =mysqli_fetch_assoc($r)) {  ?>
         
        <td><?php echo $row['e_name']; ?></td>
        <td><?php echo $row['venue']; ?></td>
        <td><?php echo $row['date']; ?></td>
        <td><?php echo $row['parti_fee']; ?></td>
        <td><a href="<?php echo $row['e_img'];?>">image</a></td>
      <?php } ?>
        

        <td><a href="parti_del.php?id=<?php echo $bid ?>">Delete</a></td>
      </tr>
<?php } ?>


    </table>
    <p align="center" >*NOTE:YOU MAY NOT GET REFUND </p>
</div>
<?php include ('.\includes\f.php'); ?>
    </body>
    </html>