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
  if($w<>"a"){
      header("Location: index.php"); } ?>
<h2 style="text-align:center" >Organizer's Details</h2><br>
<div class="table-responsive">
    <table class="table table-sm table-striped">
      <thead>
      <tr>
        <th>Sr no.</th>
        <th>organizer's name</th>
        <th>organizer's id</th>
        <th>event name</th>
       
        <th>Action</th>
      </tr>
      </thead>

      <?php

      $server="localhost";
$user="root";
$password="";
$db="ac_db";
$con=mysqli_connect($server,$user,$password,$db) or die("connection failed");

$result = mysqli_query($con,"SELECT * from org_reg;");
$num_rows = mysqli_num_rows($result); 
$i=0;

while ($row =mysqli_fetch_assoc($result)) {
  $oid=$row['o_id'];
  $oname=$row['name'];
  $r = mysqli_query($con,"SELECT * from events where o_id=$oid ;");
  while ($row=mysqli_fetch_assoc($r)) {
    
  
  ?>

<tr>
  <td><?php $i=$i+1; echo $i;?></td>
  <td><?php echo $oname?></td>
  <td><?php echo $oid?></td>
  <td><?php echo $row['e_name'] ?></td>
  <td><a href="adorg_del.php?id=<?php echo $oid ?>">delete</a></td>
</tr>
      
        
      <?php } }?>  

    </table>
</div>
<?php include ('.\includes\f.php'); ?>
    </body>
    </html>