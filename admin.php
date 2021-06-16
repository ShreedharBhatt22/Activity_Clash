<html>
<body>
<html>

<body>

<?php  
include ('.\includes\h.php');
?>
<h2 style="text-align:center">ADMIN'S LOGIN</h2>
<br>
<form action="admin_login.php" method="POST" style="margin-bottom: 60px">
<div class="form-group">
      <label for="email" style="padding-left:20%" >Username:</label>
      <div class="con" style=" padding-left :20%;  width:80%">
      <input type="text" class="form-control" id="email" placeholder="Enter username" name="email" >
      </div>
    </div>
    <div class="form-group">
      <label for="pwd" style="padding-left:20%" >Password:</label>
      <div class="con"   style=" padding-left :20%;  width:80%">
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" ">
      </div>
    </div>
    <div style="padding-left:20%">
    <button type="submit" class="btn btn-primary" >Submit</button>
    </div> 
  </form>

<?php  
include ('.\includes\f.php');
?>
</body>
</html>