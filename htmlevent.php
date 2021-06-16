<?php 

include('.\includes\h.php');
include('.\includes\config.php');
$result = mysqli_query($con,"SELECT * from events where validate='1';");
$c=mysqli_num_rows($result);

?>
<head><style>ul.tab_img li {
    float: left;
    width: 100%;
    
    margin: 0 2% 0 0;
}</style></head>


<h2 align="center" style="margin-bottom: 20px">Events</h2>
<ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#all">All</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#pa">Performing Arts</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#co">College</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#edu">Educational</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#s">Sports</a>
    </li>
  </ul>
  <div class="tab-content">
 	<div id="all" class=" tab-pane active"><br>
<div class="container-fluid">
	<div class="clearfix"></div>
	<!-- all-->
	<ul class="tab_img" >
					<div class="row">
						<?php if($c<>0){ while($row =mysqli_fetch_assoc($result)){
							$e_id=$row['e_id'];
							$e_img=$row['e_img'];
							$max=$row['max_parti'];
							$name=$row['e_name'];
							$fee=$row['parti_fee'];
							$v=$row['venue'];
							$ed=$row['e_desc'];
							$res=mysqli_query($con,"SELECT * from booked_parti where e_id='$e_id'");
							$c=mysqli_num_rows($res);
							$p=(($c *100)/$max);
							
?>
						<div class="col-sm-4">
									  <li style="border:3px">
										<div class="view view-first" >
					   		   <img style="height: 350px" src="<?php echo $e_img?>" class="img-responsive img-fluid" alt=""/>
					   		  			 
										   <div class="info1"> </div>
											 <div class="mask">
						                     </div>
								              <div class="tab_desc">
												<?php if (isset($_SESSION['uname'])&& $w =="p" ) {?>	<a href="pay_info.php?id=<?php echo $e_id; ?>">Book Now</a>
												<?php }else{ ?> <a href="" data-target="#myModal" data-toggle="modal">Book Now</a>

					 <?php } ?>
													<div class="slide-title"><h4><p align="center"><?php echo $name ?>    </p><br>
														</h4>
														<p align="left">fee: ₹ <?php echo $fee?></p>			 
														<p align="left">venue: <?php echo $v ?></p>
														<p align="left"> <?php echo $ed ?></p></div>
													<div class="percentage-w-t-s">

														
														
														<div class="progress">
  <div class="progress-bar bg-info" style="width:<?php echo $p?>%; "></div>
</div>
														<div class="clearfix"></div>
													</div>
											  </div>
										  </div>
										</li>

									</div>
									<?php }   ?>
								</div> 
										</ul>
									
									</div>
								</div>

<!--patrs-->

<?php $res= mysqli_query($con,"SELECT * from events where validate='1' AND cat LIKE '%arts%'"); 
$c=mysqli_num_rows($res);?>
<div id="pa" class= tab-pane "><br>
<div class="container-fluid">
	<div class="clearfix"></div>
	
	<ul class="tab_img" >
					<div class="row">
						<?php if($c<>0)while($row =mysqli_fetch_assoc($res)){
							$e_id=$row['e_id'];
							$e_img=$row['e_img'];
							$max=$row['max_parti'];
							$name=$row['e_name'];
							$fee=$row['parti_fee'];
							$v=$row['venue'];
							$ed=$row['e_desc'];
							$res=mysqli_query($con,"SELECT * from booked_parti where e_id='$e_id'");
							$c=mysqli_num_rows($res);
							$p=(($c *100)/$max);
							
?>
						<div class="col-sm-4">
									  <li style="border:3px">
										<div class="view view-first" >
					   		  			  <a href="pay_info.php?id=<?php echo $e_id; ?>"> <img  style="height: 350px" src="<?php echo $e_img?>" class="img-responsive" alt=""/></a>
										   <div class="info1"> </div>
											 <div class="mask">
						                     </div>
								              <div class="tab_desc">
													<?php if (isset($_SESSION['uname'])&& $w =="p" ) {?>	<a href="pay_info.php?id=<?php echo $e_id; ?>">Book Now</a>
												<?php }else{ ?> <a href="" data-target="#myModal" data-toggle="modal">Book Now</a>

					 <?php } ?>
										
													<div class="slide-title"><h4><p align="center"><?php echo $name ?>    </p><br>
														</h4>
														<p align="left">fee: ₹ <?php echo $fee?></p>			 
														<p align="left">venue: <?php echo $v ?></p>
														<p align="left"> <?php echo $ed ?></p></div>
													<div class="percentage-w-t-s">

														
														
														<div class="progress">
  <div class="progress-bar bg-info" style="width:<?php echo $p?>%; "></div>
</div>
														<div class="clearfix"></div>
													</div>
											  </div>
										  </div>
										</li>

									</div>
									<?php	} }else{echo "nonono";}  ?>
								</div> 
										</ul>
									
									</div>
								</div>

								<!--college-->




								<!--tabcontent 3 -->

<?php $s="SELECT * from events where validate='1' AND cat LIKE '%college%'"; 
$r= mysqli_query($con,$s);
//echo $s;

 $c=mysqli_num_rows($r);
 //echo $c;

 ?>
<div id="co" class= tab-pane "><br>
<div class="container-fluid">
	<div class="clearfix"></div>
	
	<ul class="tab_img" >
					<div class="row">
						<?php if($c <> 0){while($row =mysqli_fetch_assoc($r)){
							$e_id=$row['e_id'];
							$e_img=$row['e_img'];
							$max=$row['max_parti'];
							$name=$row['e_name'];
							$fee=$row['parti_fee'];
							$v=$row['venue'];
							$ed=$row['e_desc'];
							$res=mysqli_query($con,"SELECT * from booked_parti where e_id='$e_id'");
							$c=mysqli_num_rows($res);
							$p=(($c *100)/$max);
							
?>
						<div class="col-sm-4">
									  <li style="border:3px">
										<div class="view view-first" >
					   		  			  <a href="pay_info.php?id=<?php echo $e_id; ?>"> <img   style="height: 350px" src="<?php echo $e_img?>" class="img-responsive" alt=""/></a>
										   <div class="info1"> </div>
											 <div class="mask">
						                     </div>
								              <div class="tab_desc">
													<?php if (isset($_SESSION['uname'])&& $w =="p" ) {?>	<a href="pay_info.php?id=<?php echo $e_id; ?>">Book Now</a>
												<?php }else{ ?> <a href="" data-target="#myModal" data-toggle="modal">Book Now</a>

					 <?php } ?>
										
													<div class="slide-title"><h4><p align="center"><?php echo $name ?>    </p><br>
														</h4>
														<p align="left">fee: ₹ <?php echo $fee?></p>			 
														<p align="left">venue: <?php echo $v ?></p>
														<p align="left"> <?php echo $ed ?></p></div>
													<div class="percentage-w-t-s">

														
														
														<div class="progress">
  <div class="progress-bar bg-info" style="width:<?php echo $p?>%; "></div>
</div>
														<div class="clearfix"></div>
													</div>
											  </div>
										  </div>
										</li>

									</div>
									<?php	}}else{echo "nonono";}   ?>
								</div> 
										</ul>
									
									</div>
								</div>
<!-- sports-->

<?php $sq="SELECT * from events where validate='1' AND cat LIKE '%sports%'";
 $re= mysqli_query($con,$sq);
//echo $sq;
$c=mysqli_num_rows($re);
//echo $c ?>
<div id="s" class= tab-pane "><br>
<div class="container-fluid">
	<div class="clearfix"></div>
	
	<ul class="tab_img" >
					<div class="row">
						<?php if($c<>0){while($row =mysqli_fetch_assoc($re)){
							$e_id=$row['e_id'];
							$e_img=$row['e_img'];
							$max=$row['max_parti'];
							$name=$row['e_name'];
							$fee=$row['parti_fee'];
							$v=$row['venue'];
							$ed=$row['e_desc'];
							$res=mysqli_query($con,"SELECT * from booked_parti where e_id='$e_id'");
							$c=mysqli_num_rows($res);
							$p=(($c *100)/$max);
							
?>
						<div class="col-sm-4">
									  <li style="border:3px">
										<div class="view view-first" >
					   		  			  <a href="pay_info.php?id=<?php echo $e_id; ?>"> <img src="<?php echo $e_img?>" class="img-responsive"  style="height: 350px" alt=""/></a>
										   <div class="info1"> </div>
											 <div class="mask">
						                     </div>
								              <div class="tab_desc">
													<?php if (isset($_SESSION['uname'])&& $w =="p" ) {?>	<a href="pay_info.php?id=<?php echo $e_id; ?>">Book Now</a>
												<?php }else{ ?> <a href="" data-target="#myModal" data-toggle="modal">Book Now</a>

					 <?php } ?>
										
													<div class="slide-title"><h4><p align="center"><?php echo $name ?>    </p><br>
														</h4>
														<p align="left">fee: ₹ <?php echo $fee?></p>			 
														<p align="left">venue: <?php echo $v ?></p>
														<p align="left"> <?php echo $ed ?></p></div>
													<div class="percentage-w-t-s">

														
														
														<div class="progress">
  <div class="progress-bar bg-info" style="width:<?php echo $p?>%; "></div>
</div>
														<div class="clearfix"></div>
													</div>
											  </div>
										  </div>
										</li>

									</div>
									<?php	}}else{echo "nonono";}  ?>
								</div> 
										</ul>
									
									</div>
								</div>
<!--edu--><?php $sq="SELECT * from events where validate='1' AND cat LIKE '%edu%'";
 $re= mysqli_query($con,$sq);
//echo $sq;
$c=mysqli_num_rows($re);
//echo $c ?>
<div id="edu" class= tab-pane "><br>
<div class="container-fluid">
	<div class="clearfix"></div>
	
	<ul class="tab_img" >
					<div class="row">
						<?php if($c<>0){while($row =mysqli_fetch_assoc($re)){
							$e_id=$row['e_id'];
							$e_img=$row['e_img'];
							$max=$row['max_parti'];
							$name=$row['e_name'];
							$fee=$row['parti_fee'];
							$v=$row['venue'];
							$ed=$row['e_desc'];
							$res=mysqli_query($con,"SELECT * from booked_parti where e_id='$e_id'");
							$c=mysqli_num_rows($res);
							$p=(($c *100)/$max);
							
?>
						<div class="col-sm-4">
									  <li style="border:3px">
										<div class="view view-first" >
					   		  			  <a href="pay_info.php?id=<?php echo $e_id; ?>"> <img src="<?php echo $e_img?>" class="img-responsive"  style="height: 350px" alt=""/></a>
										   <div class="info1"> </div>
											 <div class="mask">
						                     </div>
								              <div class="tab_desc">
													<?php if (isset($_SESSION['uname'])&& $w =="p" ) {?>	<a href="pay_info.php?id=<?php echo $e_id; ?>">Book Now</a>
												<?php }else{ ?> <a href="" data-target="#myModal" data-toggle="modal">Book Now</a>

					 <?php } ?>
										
													<div class="slide-title"><h4><p align="center"><?php echo $name ?>    </p><br>
														</h4>
														<p align="left">fee: ₹ <?php echo $fee?></p>			 
														<p align="left">venue: <?php echo $v ?></p>
														<p align="left"> <?php echo $ed ?></p></div>
													<div class="percentage-w-t-s">

														
														
														<div class="progress">
  <div class="progress-bar bg-info" style="width:<?php echo $p?>%; "></div>
</div>
														<div class="clearfix"></div>
													</div>
											  </div>
										  </div>
										</li>

									</div>
									<?php	}}else{echo "nonono";}  ?>
								</div> 
										</ul>
									
									</div>
								</div>





							</div>
	

<?php
include('.\includes\f.php');
?>