
<?php  

    
  
include ('.\includes\h.php');
if($w=="u"||$w=="p"){
      header("Location: index.php"); 
    }
?>
<head>
    <script>
      
        function preventBack() { window.history.forward(1); }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null };

      preventBack() 

</script>
</head>

<script type="text/javascript">
$(document).ready(function() {
     var input = $("#date");
                                var today = new Date();

                                var days = new String(today.getDate());
                                var mon = new String(today.getMonth()+1);
                                var yr =new String( today.getFullYear());


                              if(days.length < 2) {days = "0" + days; }
                                if(mon.length < 2) {mon = "0" + mon; }

                              var da= yr + "-" + mon + "-" + days ;
$("#date").attr('min', da);
});

                            function valid1(){
                              debugger
                               var x= document.forms["fr"]["nam"].value;
                               var y= document.forms["fr"]["cat"].value;
                               var z= document.forms["fr"]["venue"].value;
                               var w= document.forms["fr"]["date"].value;
                               var p= document.forms["fr"]["fees"].value;
                               var g= document.forms["fr"]["imge"].value;
                               var o= document.forms["fr"]["max"].value;
                               var l= document.forms["fr"]["description"].value;
                             

                              if (x == ""||y == ""||z == ""||w == ""||p ==""||g ==""||o ==""||l =="") {
                                   window.alert("Fill all the details");
                                   return false;
                               }  

                      
                

}
</script>

<form action="event_insert.php" method="POST" style="margin-right: 10%; margin-left: 10%" enctype="multipart/form-data">
  <h1 align="center">Create event below. It's free!</h1><br><br>
                     
    <div class="form-group">
      <label for="usr">Event name:</label>
      <input type="text" class="form-control" id="e_name" name="e_name">
  </div>

<label for="usr">Event Categories:</label>
<div class="checkbox">
  <label><input type="radio" value="p_arts" name="cat" value="performng arts">Performing Arts</label>
</div>
<div class="checkbox">
  <label><input type="radio" value="sports" name="cat" value="sports event">Sports Events</label>
</div>
<div class="checkbox">
  <label><input type="radio" value="college" name="cat" value="Collage event" >College Events</label>
 </div> 
  <div class="checkbox">
  <label><input type="radio" value="edu" name="cat" value="educational" >Educational Events</label>
</div>
  

    <div class="form-group ">
    <label for="usr">Venue:</label>
    <input type="text" class="form-control" id="venue" name="venue" maxlength="20">
    </div>
    <div class="form-group ">
    <label for="usr">Date of the event:</label>
    
    <input type="date" class="form-control" id="date" name="date" >
    </div> 
      <div class="form-group ">
    <label for="usr">Participation Fees (per participant):</label>
    <input type="number" class="form-control" id="fees" name="parti_fee">
    </div>

    <div class = "form-group">
    <label for="image">Attach an image of the event:</label>
    <input type="file" name="img"><br>
    </div>
    <div class = "form-group">
    <label for="max">Max No. of participants</label>
    <input type="number" class="form-control" name="max" id="max"><br>
    </div>
<div class="form-group">
  <label for="Description">Description (Of individual event):</label>
  <textarea class="form-control" rows="10" id="description" name="e_desc" maxlength="50"></textarea>
</div>


    <button type="submit">Submit</button>
  </form>

<?php  
include ('.\includes\f.php');
    
?>
