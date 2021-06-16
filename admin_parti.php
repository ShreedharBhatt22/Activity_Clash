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
<h2 style="text-align:center" >Participants Details</h2><br>
<div class="table-responsive">
    <table class="table table-sm table-striped">
      <thead>
      <tr>
        <th>Sr no.</th>
        <th>Name</th>
        <th>Email</th>
        <th>Interested Categories</th>
        <th>Age</th>
        
        <th>Action</th>
      </tr>
      </thead>

      <?php

      $server="localhost";
$user="root";
$password="";
$db="ac_db";
$con=mysqli_connect($server,$user,$password,$db) or die("connection failed");

$result = mysqli_query($con,"SELECT * from parti_reg;");
$num_rows = mysqli_num_rows($result); 
$i=0;

while ($row =mysqli_fetch_assoc($result)) {
 
                 ?>

      <tr>
        <td><?php $i=$i+1; echo $i;?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['int_cat']; ?></td>
        <td><?php echo $row['age']; ?></td>
        

        

        <td><a href="adparti_del.php?id=<?php echo $row['p_id'] ?>">Delete</a></td>
      </tr>
<?php } ?>


    </table>
</div>
<?php include ('.\includes\f.php'); ?>
    </body>
    </html>