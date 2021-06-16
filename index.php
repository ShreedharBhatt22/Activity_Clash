<?php  
include ('.\includes\h.php');
?>

<!-- AddThis Smart Layers END -->


	<div class="main-banner">
		 <div class="banner col-md-8" style = "width: 100%;">
			<section class="slider">
				<div class="flexslider">
						<ul class="slides">
						<li>

						<div class="containertext">
 						 <img src="sliderimage3.jpg" alt="Avatar" class="image" style = "width:100%">
  					<div class="overlaytext">
   				 <div class="text1"><h2>Best Sports Events in town! Register/Market on our website to find out more!</div>
  				</div>
						</div>
				
						
						
						</li>
						<li>
						<div class="containertext">
 						 <img src="sliderimage2.jpg" alt="Avatar" class="image" style = "width:100%">
  					<div class="overlaytext">
   				 <div class="text"><h2>Best Performing Arts Events in town! Register/Market on our website to find out more!</div>
  				</div>
						</div>
						</li>
						<li>
						<div class="containertext">
 						 <img src="sliderimage1.jpg" alt="Avatar" class="image" style = "width:100%">
  					<div class="overlaytext">
   				 <div class="text"><h2>Best College Events in town! Register/Market on our website to find out more!</div>
  				</div>
						</div>
						</li>
						<li>
						<div class="containertext">
 						 <img src="sliderimage4.jpg" alt="Avatar" class="image" style = "width:100%; height: 20%">
  					<div class="overlaytext">
   				 <div class="text1"><h2>Best Educational Events in town! Register/Market on our website to find out more!</div>
  				</div>
						</div>
						</li>
				  </ul>
				</div>
					</section>
				 <!-- FlexSlider -->
				 <script defer src="js/jquery.flexslider.js"></script>
				 <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
					<script type="text/javascript">
				$(function(){
				 SyntaxHighlighter.all();
				});
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				 });
				});
			 </script>
         </div>
		 
		 <div class="clearfix"></div>
	</div>
				<?php 


include('includes\config.php');
$result = mysqli_query($con,"SELECT * from events where validate='1'");

?>
				<h2 align="center" style="margin-top: 10px">Featured Events</h2>
				<div class="review-slider" >
			 <ul id="flexiselDemo1">
			 	<?php while ($row =mysqli_fetch_assoc($result)){
			 		$v=$row['venue'];
			 		$d=$row['date'];
			 		$e_id=$row['e_id'];
			 		?>
			<li>
				<img style="height: 100px" src="<?php echo $row['e_img']?>" alt=""/>
				<div class="slide-title"><h4><?php echo $row['e_name'] ?> </div>
				<div class="date-city">
					<h5><?php echo $d; ?></h5>
					<h6><?php echo $v; ?></h6>
					<div class="buy-tickets">
						<?php if (isset($_SESSION['uname'])&& $w =="p" ) {?>	<a href="pay_info.php?id=<?php echo $e_id; ?>">Buy Tickets</a>
												<?php }else{ ?> <a href="" data-target="#myModal" data-toggle="modal">Buy Tickets</a>

					 <?php } ?>
					</div>
				</div>
			</li>
			<?php } ?>
		</ul>
			<script type="text/javascript">
		$(window).load(function() {
			
		  $("#flexiselDemo1").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: false,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 2
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 3
					},
					tablet: { 
						changePoint:800,
						visibleItems: 4
					}
				}
			});
			});
		</script>
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>	
		</div>
		<div class="footer-top-grid">
		<div class style = "height:480px">
			<div class="tabs">
				<div class="sap_tabs">	
						 <div id="horizontalTab" style="display: block; width: 100%; height: 20% ">
						  <ul class="resp-tabs-list">
						  	  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Sports Events</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>College Events</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Performing Arts Events</span></li>
								<li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span>Educational Events</span></li>
							  <div class="clearfix"></div>
						  </ul>				  	 
							<div class="resp-tabs-container">

							   <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
									<ul class="tab_img">
										
										<?php $s="SELECT * from events where validate='1' AND cat LIKE '%sports%'"; 
												$r= mysqli_query($con,$s);
 												$c=mysqli_num_rows($r);
 												$i=0;
 												if($c <> 0){while($row =mysqli_fetch_assoc($r)){
 													$i++;
 													if($i>=4){break;};
							$e_id=$row['e_id'];
							$e_img=$row['e_img'];
							$max=$row['max_parti'];
							$name=$row['e_name'];
							$fee=$row['parti_fee'];
							$res=mysqli_query($con,"SELECT * from booked_parti where e_id='$e_id'");
							$c=mysqli_num_rows($res);
							$p=100-(($c *100)/$max);
							
							
											?>
											
									  <li>
										<div class="view view-first">
					   		  			   <img style="height: 250px" src="<?php echo $e_img?>" class="img-responsive" alt=""/>
										   <div class="info1"> </div>
											 <div class="mask">
						                     </div>
								              <div class="tab_desc">

								              	<?php if (isset($_SESSION['uname'])&& $w =="p" ) {?>
								              		<a href="pay_info.php?id=<?php echo $e_id?> " data-toggle="tooltip" title="Book now"><?php echo $name ?></a>
								              	<?php }else{ ?>


													<a href="" data-target="#myModal" data-toggle="modal"><?php echo $name ?></a><?php }?>

					
													<div class="percentage-w-t-s">
														<h5><?php echo $p; ?></h5>
														<p>% <br> Seats are available</p>
														<p align="right">Price:<?php echo $fee ?></p>
														<div class="clearfix"></div>
													</div>
											  </div>
										  </div>
										</li>
									
									  <?php }
									}?>
									 
										<div class="clearfix"></div>
									</ul></div>
							     </div>	
									 
							     <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
									<ul class="tab_img">
									 <?php $s="SELECT * from events where validate='1' AND cat LIKE '%college%'"; 
												$r= mysqli_query($con,$s);
 												$c=mysqli_num_rows($r);
 												$i=0;
 												if($c <> 0){while($row =mysqli_fetch_assoc($r)){
 													$i++;
 													if($i>=4){break;};
							$e_id=$row['e_id'];
							$e_img=$row['e_img'];
							$max=$row['max_parti'];
							$name=$row['e_name'];
							$fee=$row['parti_fee'];
							$res=mysqli_query($con,"SELECT * from booked_parti where e_id='$e_id'");
							$c=mysqli_num_rows($res);
							$p=100-(($c *100)/$max);
							
							
											?>
											
									  <li>
										<div class="view view-first">
					   		  			 <img src="<?php echo $e_img?>" style="height: 250px" class="img-responsive" alt=""/>
										   <div class="info1"> </div>
											 <div class="mask">
						                     </div>
								              <div class="tab_desc">
													<?php if (isset($_SESSION['uname'])&& $w =="p" ) {?>
								              		<a href="pay_info.php?id=<?php echo $e_id?> " data-toggle="tooltip" title="Book now"><?php echo $name ?></a>
								              	<?php }else{ ?>


													<a href="" data-target="#myModal" data-toggle="modal"><?php echo $name ?></a><?php }?>

													<div class="percentage-w-t-s">
														<h5><?php echo $p; ?></h5>
														<p>% <br> Seats are available</p>
														<p align="right">Price:<?php echo $fee ?></p>
														<div class="clearfix"></div>
													</div>
											  </div>
										  </div>
										</li>
									
									  <?php }
									}?>
										<div class="clearfix"></div>
									</ul>
							     </div>	
							     <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
									<ul class="tab_img">
										<?php $s="SELECT * from events where validate='1' AND cat LIKE '%arts%'"; 
												$r= mysqli_query($con,$s);
 												$c=mysqli_num_rows($r);
 												$i=0;
 												if($c <> 0){while($row =mysqli_fetch_assoc($r)){
 													$i++;
 													if($i>=4){break;};
							$e_id=$row['e_id'];
							$e_img=$row['e_img'];
							$max=$row['max_parti'];
							$name=$row['e_name'];
							$fee=$row['parti_fee'];
							$res=mysqli_query($con,"SELECT * from booked_parti where e_id='$e_id'");
							$c=mysqli_num_rows($res);
							$p=100-(($c *100)/$max);
							
							
											?>
											
									  <li>
										<div class="view view-first">
					   		  			   <img src="<?php echo $e_img?>" style="height: 250px" class="img-responsive" alt=""/>
										   <div class="info1"> </div>
											 <div class="mask">
						                     </div>
								              <div class="tab_desc">
													<?php if (isset($_SESSION['uname'])&& $w =="p" ) {?>
								              		<a href="pay_info.php?id=<?php echo $e_id?> " data-toggle="tooltip" title="Book now"><?php echo $name ?></a>
								              	<?php }else{ ?>


													<a href="" data-target="#myModal" data-toggle="modal"><?php echo $name ?></a><?php }?>

													<div class="percentage-w-t-s">
														<h5><?php echo $p; ?></h5>
														<p>% <br> Seats are available</p>
														<p align="right">Price:<?php echo $fee ?></p>
														<div class="clearfix"></div>
													</div>
											  </div>
										  </div>
										</li>
									
									  <?php }
									}?>
										<div class="clearfix"></div>
									</ul>
							     </div>	
							     <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">
									<ul class="tab_img">
									  <?php $s="SELECT * from events where validate='1' AND cat LIKE '%edu%'"; 
												$r= mysqli_query($con,$s);
 												$c=mysqli_num_rows($r);
 												$i=0;
 												if($c <> 0){while($row =mysqli_fetch_assoc($r)){
 													$i++;
 													if($i>=4){break;};
							$e_id=$row['e_id'];
							$e_img=$row['e_img'];
							$max=$row['max_parti'];
							$name=$row['e_name'];
							$fee=$row['parti_fee'];
							$res=mysqli_query($con,"SELECT * from booked_parti where e_id='$e_id'");
							$c=mysqli_num_rows($res);
							$p=100-(($c *100)/$max);
							
							
											?>
											
									  <li>
										<div class="view view-first">
					   		  			   <img src="<?php echo $e_img?>"  style="height: 250px"class="img-responsive" alt=""/>
										   <div class="info1"> </div>
											 <div class="mask">
						                     </div>
								              <div class="tab_desc">
													<?php if (isset($_SESSION['uname'])&& $w =="p" ) {?>
								              		<a href="pay_info.php?id=<?php echo $e_id?> " data-toggle="tooltip" title="Book now"><?php echo $name ?></a>
								              	<?php }else{ ?>


													<a href="" data-target="#myModal" data-toggle="modal"><?php echo $name ?></a><?php }?>

													<div class="percentage-w-t-s">
														<h5><?php echo $p; ?></h5>
														<p>% <br> Seats are available</p>
														<p align="right">Price:<?php echo $fee ?></p>
														<div class="clearfix"></div>
													</div>
											  </div>
										  </div>
										</li>
									
									  <?php }
									}?>
										<div class="clearfix"></div>
									</ul>
						    	</div>		        					 	        					 
			     		    </div>	
                        </div>
					</div>
				</div>	
		</div>
		<br>



	<?php  
include ('.\includes\f.php');
    
?>