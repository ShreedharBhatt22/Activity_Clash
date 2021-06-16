<?php  
include ('.\includes\h.php');
    
?>
 <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#org">Organizer</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#par">Participant</a>
    </li>
    
  </ul>



 <div class="tab-content">
 	<div id="org" class="container tab-pane active"><br>
<form action="reg_insert.php" method="POST" id="fr" onsubmit="return valid1()" style="margin-right: 10%; margin-left: 10%">
    <div class="form-group">
      <label for="usrn">Name:</label>
      <input type="text" class="form-control" id="nam" name="o_id">
	</div>
	<div class="form-group ">
		<label for="usre">Email:</label>
		<input type="email" class="form-control" id="email_o" name="email">
	  </div>
	  <div class="form-group">
		<label for="usrpn">phno:</label>
		<input type="tel" class="form-control" id="o_ph" name="p_no" maxlength="10" minlength="10">

   
    
	  </div>
     
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pswdo" name="pswd" minlength="8" maxlength="16" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
    </div>
     <div class="form-group">
      <label for="pwd">Confirm Password:</label>
      <input type="password" class="form-control" id="pswdo1" name="pswd" minlength="8" maxlength="16">
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
                               var p= document.forms["fr"]["pswdo1"].value;
                             




                              if (x == ""||y == ""||z == ""||w == ""||p =="") {
                                   window.alert("Fill all the details");
                                   return false;
                               }  

                               if (pswdo.value != pswdo1.value)
                               {
                                window.alert("both the password should match ");
                                return false;
                               }
  
 


                                }
                                
                        function frm2(){
                         
                               var a= document.forms["f"]["nam1"].value;
                               var b= document.forms["f"]["email_p"].value;
                               
                               var d= document.forms["f"]["pswdp"].value;
                             //  var e= document.forms["frp"]["chkb"].value;
                               var e= document.forms["f"]["agep"].value;
    if (a == ""||b == ""||d == ""||e =="") {
         window.alert("Fill all the details");
          return false;
    

        }

                               if (pswdp.value != pswdop.value)
                               {
                                window.alert("both the password should match ");
                                return false;
                               }
       if (agep.value < 1)
        {
          window.alert("age should be valid");
          return false;
        }
    }
    
  
                        </SCRIPT>
<div id="par" class="container tab-pane "><br>

<form id="f" onsubmit="return frm2()" action="parti_insert.php" method="POST" style="margin-right: 10%; margin-left: 10%" >
    <div class="form-group">
      <label for="parn">Name:</label>
      <input type="text" class="form-control" id="nam1" name="name">
	</div>
	<div class="form-group ">
		<label for="pare">Email:</label>
		<input type="email" class="form-control" id="email_p" name="email">
	  </div>
	  <div class="form-group">
		
    <div class="form-group">
      <label for="ppwd">Password:</label>
      <input type="password" class="form-control" id="pswdp" name="pswd" maxlength="16" minlength="8" pattern ="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
    </div>
        <label for="pwd">Confirm Password:</label>
      <input type="password" class="form-control" id="pswdop" name="pswd" minlength="8" maxlength="16">
    
    
  <label for="pic">Interested Categories:</label>
		 <div class="custom-control " id="chkb">
      <input type="radio" class="custom-control-input" id="customCheck" name="cat" value="Sports">
      <label class="custom-control-label" for="customCheck">Sports</label>
    </div>
     <div class="custom-control custom-checkbox mb-3">
      <input type="radio" class="custom-control-input" id="customCheck" name="cat" value="Performing Arts">
      <label class="custom-control-label" for="customCheck">Performing Arts</label>
    </div>
     <div class="custom-control custom-checkbox mb-3">
      <input type="radio" class="custom-control-input" id="customCheck" name="cat" value="Educational">
      <label class="custom-control-label" for="customCheck">Educational</label>
    </div>
     <div class="custom-control custom-checkbox mb-3">
      <input type="radio" class="custom-control-input" id="customCheck" name="cat" value="College">
      <label class="custom-control-label" for="customCheck">Collage</label>
    </div><br>
    
    <div class="form-group">
	  <label for="page">Age</label>
		<input type="text" class="form-control" id="agep" name="age" maxlength="3">
	  </div><br>
	 
	  
    <button type="submit" class="btn btn-primary">Submit</button>
      
      
    </div>
  </form>

	</div>
<?php
 include('.\includes\f.php');
 ?>