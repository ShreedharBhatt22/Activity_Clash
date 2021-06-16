
<?php

session_start();
if(isset($_SESSION['uname'])){
$uid=$_SESSION['uid'];
$uname= $_SESSION['uname'];

$w= $_SESSION['who'];
}else{
$_SESSION['who']="u";
}
?>
<!DOCTYPE html>
<html>
<head>

	<style type="text/css">


.containertext {
  position: relative;
  width: 100%;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlaytext {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0.2;
  
  transition: .5s ease;
}

.containertext:hover .overlaytext {
  opacity: 1;
}

.text {
  color: black;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}

.text1 {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}


		.navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus {
    color: #fff!important;
    background-color: #18bc9c!important;
}
.navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus {
    color: #eee!important;
    background-color: #18bc9c!important;
}
	</style>
	
<title> Activity clash</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="My Show Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
<link rel="stylesheet" href="css/font-awesome.min.css" />
<link rel="stylesheet" href="css/menu.css" />
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });

</script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
<!---- start-smoth-scrolling---->
</head>
<body>
	<!-- header-section-starts -->
		
		<div class="header-top-strip" id="home">
			<div class="container" style="width: 97%">
				
					
				
				
				<div class="header-top-right">

				<div class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<!-- Button trigger modal  -->
	
	<!---pop-up-box---->  
					<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
					

                     <script>
						$(document).ready(function() {
					$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>
				<!-- Large modal  or login-->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;</button>
                <h4 class="modal-title" id="myModalLabel">
                    Don't Wait, Login now!</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div >
                        <!-- Nav tabs -->

                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#Login" data-toggle="tab" style="border-right:none ">Login</a></li>
                          
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                        <SCRIPT>
                        function valid(){
                        			 var x= document.forms["f1"]["email1"].value;
									 var y= document.forms["f1"]["pass1"].value;
											 			 
    if (x == ""||y =="") {
        
        
        window.alert("Fill some necessary details");
        return false;
		

        }
    }
		
                        </SCRIPT>
                            <div class="tab-pane active" id="Login">
                                <form role="form" class="form-horizontal" action="check.php" method="POST" id="f1" onsubmit=" return valid()">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" name="email" id="email1" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" name="pwd" id="pass1" placeholder="password" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        
                                        <a href="reg_ac.php">Don't have account? Sign up</a><br><br>
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            Submit</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                                                           
                            </div>
                        </div>
                                         
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$('#myModal').modal('no');
</script>
</div>
<!--login out-->
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="container"  style="width:100%; ">
		  <div class="main-content" style="width: 100%; height: 100%;">
			<div class="header">
				<div class="logo">

					<a href="index.php">
						
						<img src="images/logo.png" style="width: 11%; height: 10%">
					</a>
				</div>
        <div class="d-flex flex-row-reverse">
				<div class="p-2" align="right">Welcome, <?php if(isset($_SESSION['uname'])){echo $uname;}else{echo "Guest";}?></div>
        </div>
				
				<div class="clearfix"></div>
			</div>
	<div class="bootstrap_container">
            <nav class="navbar navbar-default w3_megamenu" role="navigation" >
                <div class="navbar-header">
          			<button type="button" data-toggle="collapse" data-target="#defaultmenu" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="index.php" class="navbar-brand"><i class="fa fa-home"></i></a>
				</div><!-- end navbar-header -->
        
            <div id="defaultmenu" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>	
                    
					<?php if($_SESSION['who']=="o")
					{?><li><a href="org_event.php">Create Event</a></li>
				<li><a href="htmlevent.php">Events</a></li><?php }else if($_SESSION['who']=="p"){?> <li><a href="htmlevent.php">Events</a></li> <?php  }else{ ?>
						<li><a href="" data-target="#myModal" data-toggle="modal">Create Events</a></li>
					<li><a href="htmlevent.php">Events</a></li>
					<?php }?>
					<li><a href="contact.php">Contact us</a></li>
					<li><a href="aboutus.php">About Us</a></li>
				
                </ul><!-- end nav navbar-nav -->
                
                <ul class="nav navbar-nav navbar-right">
                  <?php if(isset($_SESSION['uname']) && $w=="a") {?>
                  <li><a href="apage.php">Manage</a></li>
                <?php } ?>
					<li><?php if(isset($_SESSION['uname'])) {?>
					<a href="logout.php" >Logout</a>
					<?php if ($w<>"a") {?>
						
				
					<li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">My Account<b class="caret"></b></a>
							 <ul class="dropdown-menu" role="menu">

						<li><a href="edit<?php if(isset($_SESSION['uname'])){echo $w;}?>.php">Edit profile</a></li>

					<?php if ($w=="o") {?>
						<li><a href="org_reports.php">Reports</a></li>		
						<?php }else{ ?>
								<li><a href="parti_reports.php">History</a></li>
								<?php } }?> 
                
                        </ul>
                       <!-- end dropdown-menu -->
					</li>
					<?php }
					else{?> 
						<a href="" data-target="#myModal" data-toggle="modal">Login</a>

					<?php } ?>	</li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<?php if(isset($_SESSION['uname'])){?>
						

						<?php }else{ ?>
						<li><a href="reg_ac.php" style="margin-right: 12px;">Registration</a></li>
						

					<?php } ?>
				</ul><!-- end nav navbar-nav navbar-right -->
			</div><!-- end #navbar-collapse-1 -->
            
			</nav>
		</div><!-- end container -->
    
