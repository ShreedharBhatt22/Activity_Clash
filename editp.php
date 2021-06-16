<?php 


include('.\includes\h.php');
include('.\includes\config.php');
if($w=="u"||$w=="o"){
      header("Location: index.php"); 
    }
$sq="select * from parti_reg where p_id= $uid";
$res=mysqli_query($con,$sq);
$cnt=mysqli_num_rows($res);

while ($row=mysqli_fetch_assoc($res)) {
	$pname=$row['name'];
	$pmail=$row['email'];
	$age=$row['age'];
	$pswd=$row['pswd'];

}
?>
<h2 align="center">Edit profile</h2>
<form id="f" action="parti_edit.php" method="POST" style="margin-right: 10%; margin-left: 10%" >
    <div class="form-group">
      <label for="parn">Name:</label>
      <input type="text" class="form-control" id="nam1" name="name" value="<?php echo $pname ?>">
	</div>
	<div class="form-group ">
		<label for="pare">Email:</label>
		<input type="email" class="form-control" id="email_p" name="email" value="<?php echo $pmail ?>">
	  </div>
	  <div class="form-group">
		
    <div class="form-group">
      <label for="ppwd">Password:</label>
      <input type="text" class="form-control" id="pswdp" name="pswd" value="<?php echo $pswd ?>
      minlength="8" maxlength="16" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>">
    </div>
    
    
  <label for="pic">Interested Categories:</label>
		 <div class="custom-control custom-checkbox mb-3" id="chkb">
      <input type="radio" class="custom-control-input" id="customCheck" name="cat[]" value="Sports">
      <label class="custom-control-label" for="customCheck">Sports</label>
    </div>
     <div class="custom-control custom-checkbox mb-3">
      <input type="radio" class="custom-control-input" id="customCheck" name="cat[]" value="Performing Arts">
      <label class="custom-control-label" for="customCheck">Performing Arts</label>
    </div>
     <div class="custom-control custom-checkbox mb-3">
      <input type="radio" class="custom-control-input" id="customCheck" name="cat[]" value="Educational">
      <label class="custom-control-label" for="customCheck">Educational</label>
    </div>
     <div class="custom-control custom-checkbox mb-3">
      <input type="radio" class="custom-control-input" id="customCheck" name="cat[]" value="College">
      <label class="custom-control-label" for="customCheck">Collage</label>
    </div><br>
    
    <div class="form-group">
	  <label for="page">Age</label>
		<input type="text" class="form-control" id="agep" name="age" value="<?php echo $age ?>">
	  </div><br>
	 
	  
    <button type="submit" class="btn btn-primary">Submit</button>
      
      
    </div>
  </form>

<?php include('.\includes\f.php'); ?>