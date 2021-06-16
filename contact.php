<?php  
include ('.\includes\h.php');
    
?>
<style type="text/css">
	
.hideaway {
    visibility: hidden;
    overflow: hidden;
    width: 0px;
    height: 0px;
}


.btnf :hover{
background-color:#fff200;
color:#003b64;
} 
.btnf {
font-size:1em;
background:#003B64;
padding:0.7em 2em;
text-align:center;
color:#fff;
border:none;
outline:none;
text-transform:uppercase;
-webkit-appearance:none;
transition:0.5s all;
-webkit-transition:0.5s all;
letter-spacing:1px;
font-family:"Open Sans",sans-serif;
} 
</style>




    <script>
    


    	$(document).ready(function(){
  $(".close").click(function(){
    $("#myAlert").alert("close");
  });
});
function myalert() {
  $("#myAlert").removeClass("hideaway");
}
</script>

<!-- AddThis Smart Layers END -->

	<ol class="breadcrumb" >
			  <li><a href="index.php">Home</a></li>
			  <li class="active">Contact</li>
			</ol>
	
	<div class="contact">
	<h3>Contact Us</h3>
	<p class="love"> We love your feedback to help us improve!</p>
	<div class="contact-form">
					<div class="col-md-6 contact-grid">
					<form  onsubmit="return valid1()" id="fr">
						<p class="your-para">Your Name:</p>
						<input type="text" id="nam">
						<p class="your-para">Your Mail:</p>
						<input type="email" id="email_o">
						<p class="your-para">Your Message:</p>
						<textarea cols="77" rows="6" maxlength="50" id="o_ph"></textarea>
						<div class="send">
							<input type="Submit" value="Send" class="btnf">

						</div>
					</form><br>

   <SCRIPT>
                            function valid1(){
                               var x= document.forms["fr"]["nam"].value;
                               var y= document.forms["fr"]["email_o"].value;
                               var z= document.forms["fr"]["o_ph"].value;


                              if (x == ""||y == ""||z == "") {
                                   window.alert("Fill all the details");
                                   return false;
                               }  
                               else{
                              myalert(); 
                                   }
                           }
</SCRIPT>

					

                    <div class="alert alert-success alert-dismissible hideaway" id="myAlert">
                     <button type="button" class="close">&times;</button>
                     <strong>Success!</strong> Thank you for your feedback ;)
                   </div>
                     
				</div>
				<div class="col-md-6 contact-in">
					<p class="sed-para"> We here at Activity Clash would love for you to give us some feedback! Contact us here!</p>
					
					<div class="more-address"> 
						<div class="address-more">							
						</div>
						<div class="address-left">
							<p>Tel:1115550001</p>
							<p>Fax:190-4509-494</p>
							<p><a href="mailto:info@example.com">acemail@gmail.com</a></p>
						</div>
						<div class="clearfix"> </div>
				      </div>
				</div>
				<div class="clearfix"> </div>
			   </div>
		<h4>our location</h4>
		<div class="c-map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d204255.13749772237!2d-100.04030506193968!3d36.87870769529681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1435833871011" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
	</div>
		<?php
include('./includes\f.php');
		?>