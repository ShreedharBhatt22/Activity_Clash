<?php 


include('.\includes\h.php');
include('.\includes\config.php');
if($w=="u"||$w=="p"){
      header("Location: index.php"); 
    }
$sq="select * from org_reg where o_id= $uid";
$res=mysqli_query($con,$sq);
$cnt=mysqli_num_rows($res);

while ($row=mysqli_fetch_assoc($res)) {
	$oname=$row['name'];
	$omail=$row['email'];
	$phno=$row['p_no'];
	$pswd=$row['pswd'];
}
?>
<h2 align="center">Edit profile:</h2>
<form action="org_edit.php" method="POST" id="fr" onsubmit="return valid1()" style="margin-right: 10%; margin-left: 10%">
    <div class="form-group">
      <label for="usrn">Name:</label>
      <input type="text" class="form-control" id="nam" name="o_name" value="<?php echo $oname ?>">
	</div>
	<div class="form-group ">
		<label for="usre">Email:</label>
		<input type="email" class="form-control" id="email_o" name="email" value="<?php echo $omail ?>">
	  </div>
	  <div class="form-group">
		<label for="usrpn">phno:</label>
		<input type="text" class="form-control" id="o_ph" name="p_no" maxlength="10" value="<?php echo $phno ?>">
	  </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="text" class="form-control" id="pswdo" name="pswd" value="<?php echo $pswd ?>"
      minlength="8" maxlength="16" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>


   <SCRIPT>
                            function valid1(){
                               var x= document.forms["fr"]["nam"].value;
                               var y= document.forms["fr"]["email_o"].value;
                               var z= document.forms["fr"]["o_ph"].value;
                               var w= document.forms["fr"]["pswdo"].value;
                               if (x == ""||y == ""||z == ""||w == "") {
                                   window.alert("Fill some necessary details");
                                   return false;
                               }
                           }
                       
    
                        </SCRIPT>


<?php 

include('.\includes\f.php');
?>
