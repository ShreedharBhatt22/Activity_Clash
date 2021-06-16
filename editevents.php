<?php  

include ('.\includes\h.php');
$e_img = "";
$en=$_GET['id'];

//echo $en;


      $server="localhost";
$user="root";
$password="";
$db="ac_db";
$con=mysqli_connect($server,$user,$password,$db) or die("connection failed");

$result = mysqli_query($con,"SELECT * from events where e_id='$en';");
$num_rows = mysqli_num_rows($result); 
$i=0;

while ($row =mysqli_fetch_assoc($result)) {  
$ename= $row['e_name'];
$venue= $row['venue'];
$date= $row['date'];
$fee= $row['parti_fee'];
$e_desc= $row['e_desc'];
$e_img=$row['e_img'];


	?>

           
<?php } ?>
    
<form action="update.php?id=<?php echo $en?>" method="POST" style="margin-right: 10%; margin-left: 10%" enctype="multipart/form-data">
	<h2 align="center">Edit information</h2><br><br>

    <div class="form-group">
      <label for="usr">Event name:</label>
      <input type="text" class="form-control" id="e_name" name="e_name" value="<?php echo $ename ?>">
	</div>

<label for="usr">Event Categories:</label>
<div class="checkbox">
  <label><input type="radio" name="cat" value="Performing Arts">Performing Arts</label>
</div>
<div class="checkbox">
  <label><input type="radio" name="cat" value="Sports">Sports Events</label>
</div>
<div class="checkbox">
  <label><input type="radio" name="cat"  value="College">College Events</label>
 </div> 
  <div class="checkbox">
  <label><input type="radio" name="cat" value="Educational" >Educational Events</label>
</div>
	

		<div class="form-group ">
		<label for="usr">Venue:</label>
		<input type="text" class="form-control" id="venue" name="venue" value="<?php echo $venue; ?>" >
	  </div>
	 	<div class="form-group ">
		<label for="usr">Date of the event:</label>
		<input type="date" class="form-control" id="date" name="date" value="<?php echo $date; ?>">
	  </div> 
	  	<div class="form-group ">
		<label for="usr">Participation Fees (per participant):</label>
		<input type="number" class="form-control" id="fees" name="fees" value="<?php echo $fee; ?>">
	  </div>

	  <div class = "form-group">
	  	<img src="<?php echo $e_img;?>" height="100px" width="100px"/>
	  <label for="image">Attach an image of the event:</label>
    <input type="file" name="img" ><br>
    </div>
<div class="form-group">
  <label for="Description">Description (Of individual event):</label>
  <textarea class="form-control" rows="10" id="desc" name="desc" value="" maxlength="50"><?php echo $e_desc; ?></textarea>
</div>


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>



</form>

<?php  
include ('.\includes\f.php');
    
?>