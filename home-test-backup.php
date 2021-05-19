
<!doctype html>
<html lang="en">
	
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:wght@300;400;500;700&amp;family=Lato:wght@300;400;700&amp;display=swap">
		
		<link rel="stylesheet" href="icons/fontawesome/css/all.min.css">
		<link rel="stylesheet" href="icons/dashicons/css/dashicons-min.css">
		
		<title>Movie bazaar</title>
	</head>
	<body>
   
		
		<div class="flexslider progression-studios-slider">
	      <ul class="slides">
          <?php
$cn=mysqli_connect("localhost","root","","data");
$s="select * from mov where mid=00";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	$n=0;
	while($data=mysqli_fetch_array($result))
	{
?>
			  
				
				<li class="progression_studios_animate_in">
					<div class="progression-studios-slider-image-background" style="background-image:url(forms/uploads/<?php echo $data['img'];?>);">
						<div class="progression-studios-slider-display-table">
							<div class="progression-studios-slider-vertical-align">
								
								<div class="container">
									
									<div class="progression-studios-slider-caption-width">
										<div class="progression-studios-slider-caption-align">
											<h2><a href=""><?php echo $data[1]; ?></a></h2>
											<ul class="slider-video-post-meta-list">
												<li class="slider-video-post-meta-cat"><ul><li><a href="#!"><?php echo $data[2]; ?></a></li></ul></li>																				
												<li class="slider-video-post-meta-reviews">
													<div class="average-rating-video-post">
														<div class="average-rating-video-empty">
															<span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span>
														</div>
														<div class="average-rating-overflow-width" style="width:90%;">
															<div class="average-rating-video-filled">
                                                            <?php
                                                            for ($x = 0; $x <= $data[3]; $x++) {
                                                                                         print '<span class="dashicons dashicons-star-filled"></span>';
                                                                                            }
                                                                ?>
															
																<div class="clearfix"></div>
															</div><!-- close .average-rating-video-filled -->
														</div><!-- close .average-rating-overflow-width -->
													</div><!-- close .average-rating-video-post -->
													<div class="clearfix"></div>
												</li>
												<li class="slider-video-post-meta-year">2019</li>
												<li class="slider-video-post-meta-rating"><span>TV-MA</span></li>
											</ul>
											<div class="clearfix"></div>
											<div class="progression-studios-slider-excerpt"><?php echo $data[4]; ?> </div>
											<a class="btn btn-slider-pro afterglow" href="#VideoLightbox-2"><i class="fas fa-play-circle"></i>Watch Trailer</a>
											
							   	         <video id="VideoLightbox-2"  poster="" width="960" height="540">
							   	             <source src="https://www.youtube.com/watch?v=t433PEQGErc" type="video/mp4">
							   	         </video>
											
										</div><!-- close .progression-studios-slider-caption-align -->
									</div><!-- close .progression-studios-slider-caption-width -->
									
								</div><!-- close .container -->
								
							</div><!-- close .progression-studios-slider-vertical-align -->
						</div><!-- close .progression-studios-slider-display-table -->
						
						<div class="progression-studios-slider-overlay-gradient"></div>
						
						<div class="progression-studios-skrn-slider-upside-down" style="background-image:url(forms/uploads/<?php echo $data['img'];?>);"></div>
						
						
					</div><!-- close .progression-studios-slider-image-background -->
				</li>
                <?php }
   ?>
		          <?php
$cn=mysqli_connect("localhost","root","","data");
$s="select * from mov where mid=01";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	$n=0;
	while($data=mysqli_fetch_array($result))
	{
?>
			  
				
              <li class="progression_studios_animate_in">
					<div class="progression-studios-slider-image-background" style="background-image:url(forms/uploads/<?php echo $data['img'];?>);">
						<div class="progression-studios-slider-display-table">
							<div class="progression-studios-slider-vertical-align">
								
								<div class="container">
									
									<div class="progression-studios-slider-caption-width">
										<div class="progression-studios-slider-caption-align">
											<h2><a href=""><?php echo $data[1]; ?></a></h2>
											<ul class="slider-video-post-meta-list">
												<li class="slider-video-post-meta-cat"><ul><li><a href="#!"><?php echo $data[2]; ?></a></li></ul></li>																				
												<li class="slider-video-post-meta-reviews">
													<div class="average-rating-video-post">
														<div class="average-rating-video-empty">
															<span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span>
														</div>
														<div class="average-rating-overflow-width" style="width:90%;">
															<div class="average-rating-video-filled">
															<?php
																$x = 1;

																while($x <= $data[3] ) {
  																echo '<span class="dashicons dashicons-star-filled"></span>';
  																$x++;
																	}
															?>
																<div class="clearfix"></div>
															</div><!-- close .average-rating-video-filled -->
														</div><!-- close .average-rating-overflow-width -->
													</div><!-- close .average-rating-video-post -->
													<div class="clearfix"></div>
												</li>
												<li class="slider-video-post-meta-year">2020</li>
												<li class="slider-video-post-meta-rating"><span>TV-MA</span></li>
											</ul>
											<div class="clearfix"></div>
											<div class="progression-studios-slider-excerpt"><?php echo $data[4]; ?></div>
											<a class="btn btn-slider-pro afterglow" href="#VideoLightbox-2"><i class="fas fa-play-circle"></i>Watch Trailer</a>
											
							   	         
											
										</div><!-- close .progression-studios-slider-caption-align -->
									</div><!-- close .progression-studios-slider-caption-width -->
									
								</div><!-- close .container -->
								
							</div><!-- close .progression-studios-slider-vertical-align -->
						</div><!-- close .progression-studios-slider-display-table -->
						
						<div class="progression-studios-slider-overlay-gradient"></div>
						
						<div class="progression-studios-skrn-slider-upside-down" style="background-image:url(forms/uploads/<?php echo $data['img'];?>);"></div>
						
						
					</div><!-- close .progression-studios-slider-image-background -->
				</li>
                <?php }
   ?>
			
            <?php
$cn=mysqli_connect("localhost","root","","data");
$s="select * from mov where mid=02";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	$n=0;
	while($data=mysqli_fetch_array($result))
	{

?>
			  
				
              <li class="progression_studios_animate_in">
					<div class="progression-studios-slider-image-background" style="background-image:url(forms/uploads/<?php echo $data['img'];?>);">
						<div class="progression-studios-slider-display-table">
							<div class="progression-studios-slider-vertical-align">
								
								<div class="container">
									
									<div class="progression-studios-slider-caption-width">
										<div class="progression-studios-slider-caption-align">
											<h2><a href=""><?php echo $data[1]; ?></a></h2>
											<ul class="slider-video-post-meta-list">
												<li class="slider-video-post-meta-cat"><ul><li><a href="#!"><a href=""><?php echo $data[2]; ?></a></li></ul></li>																				
												<li class="slider-video-post-meta-reviews">
													<div class="average-rating-video-post">
														<div class="average-rating-video-empty">
															<span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span>
														</div>
														<div class="average-rating-overflow-width" style="width:90%;">
															<div class="average-rating-video-filled">
															<?php
																$x = 1;

																while($x <= $data[3] ) {
  																echo '<span class="dashicons dashicons-star-filled"></span>';
  																$x++;
																	}
															?>	
															<div class="clearfix"></div>
															</div><!-- close .average-rating-video-filled -->
														</div><!-- close .average-rating-overflow-width -->
													</div><!-- close .average-rating-video-post -->
													<div class="clearfix"></div>
												</li>
												<li class="slider-video-post-meta-year">2020</li>
												<li class="slider-video-post-meta-rating"><span>TV-MA</span></li>
											</ul>
											<div class="clearfix"></div>
											<div class="progression-studios-slider-excerpt"><?php echo $data[4]; ?></div>
											<a class="btn btn-slider-pro afterglow" href="#VideoLightbox-2"><i class="fas fa-play-circle"></i>Watch Trailer</a>
											
							   	         
											
										</div><!-- close .progression-studios-slider-caption-align -->
									</div><!-- close .progression-studios-slider-caption-width -->
									
								</div><!-- close .container -->
								
							</div><!-- close .progression-studios-slider-vertical-align -->
						</div><!-- close .progression-studios-slider-display-table -->
						
						<div class="progression-studios-slider-overlay-gradient"></div>
						
						<div class="progression-studios-skrn-slider-upside-down" style="background-image:url(forms/uploads/<?php echo $data['img'];?>);"></div>
						
						
					</div><!-- close .progression-studios-slider-image-background -->
				</li>
                <?php }
   ?>
			
				
			</ul>
		</div>
		<!-- close .progression-studios-slider - See /js/script.js file for options -->
		<div id="content-pro">
			
			<div class="container custom-gutters-pro">
			 
			 <div style="height:15px;"></div>
			 
			 <h2 class="post-list-heading">Featured<span></span></h2>
			 

			 <div class="progression-studios-elementor-carousel-container progression-studios-always-arrows-on">
				 <div id="progression-video-carousel" class="owl-carousel progression-carousel-theme">
					 
					
					 
					 <div class="item">

						 <div class="progression-studios-video-index-container">
						 <?php
					$cn=mysqli_connect("localhost","root","","data");
					$s="select * from mov where mid=04";
					$result=mysqli_query($cn,$s);
					$r=mysqli_num_rows($result);
	//echo $r;
					$n=0;
					while($data=mysqli_fetch_array($result))
						{?>
							 <a href="./video-post.php?mid=<?php echo $data[0]; ?>">
							 
								 <div class="progression-studios-video-feaured-image"><img src="forms/uploads/<?php echo $data['img'];?>" alt="Featured Image"></div>
						 
								 <div class="progression-video-index-content">
									 <div class="progression-video-index-table">
										 <div class="progression-video-index-vertical-align">
									 
											 <h2 class="progression-video-title"><?php echo $data[1]; ?></h2>
									 
											 <div class="average-rating-video-post">
												 <div class="average-rating-video-empty">
													 <span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span>
												 </div>
												 <div class="average-rating-overflow-width" style="width:70%;">
													 <div class="average-rating-video-filled">
													 <?php
																$x = 1;

																while($x <= $data[3] ) {
  																echo '<span class="dashicons dashicons-star-filled"></span>';
  																$x++;
																	}
															?>	 
													 <div class="clearfix"></div>
													 </div><!-- close .average-rating-video-filled -->
												 </div><!-- close .average-rating-overflow-width -->
											 </div><!-- close .average-rating-video-post -->
											 <div class="clearfix"></div>
										 
											 <ul class="video-index-meta-taxonomy"><li><?php echo $data[2]; ?></li></ul>												
											 <div class="clearfix"></div>
									 
										 </div><!-- close .progression-video-index-vertical-align -->
									 </div><!-- close .progression-video-index-table -->
								 </div><!-- close .progression-video-index-content -->
								 <div class="video-index-border-hover"></div>
							 
							 </a>
							 <?php } ?>
						 </div><!-- close .progression-studios-video-index-container -->
					 </div><!-- close .item -->
					 
					 
					 <div class="item">
						 <div class="progression-studios-video-index-container">
						 <div class="progression-studios-video-index-container">
						 <?php
					$cn=mysqli_connect("localhost","root","","data");
					$s="select * from mov where mid=05";
					$result=mysqli_query($cn,$s);
					$r=mysqli_num_rows($result);
	//echo $r;
					$n=0;
					while($data=mysqli_fetch_array($result))
						{ ?>
							 <a href="./video-post.php?mid=<?php echo $data[0]; ?>">
							 
								 <div class="progression-studios-video-feaured-image"><img src="forms/uploads/<?php echo $data['img'];?>" alt="Featured Image"></div>
						 
								 <div class="progression-video-index-content">
									 <div class="progression-video-index-table">
										 <div class="progression-video-index-vertical-align">
									 
											 <h2 class="progression-video-title"><?php echo $data[1]; ?></h2>
									 
											 <div class="average-rating-video-post">
												 <div class="average-rating-video-empty">
													 <span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span>
												 </div>
												 <div class="average-rating-overflow-width" style="width:70%;">
													 <div class="average-rating-video-filled">
													 <?php
																$x = 1;

																while($x <= $data[3] ) {
  																echo '<span class="dashicons dashicons-star-filled"></span>';
  																$x++;
																	}
															?>	 
													 <div class="clearfix"></div>
													 </div><!-- close .average-rating-video-filled -->
												 </div><!-- close .average-rating-overflow-width -->
											 </div><!-- close .average-rating-video-post -->
											 <div class="clearfix"></div>
										 
											 <ul class="video-index-meta-taxonomy"><li><?php echo $data[2]; ?></li></ul>												
											 <div class="clearfix"></div>
									 
										 </div><!-- close .progression-video-index-vertical-align -->
									 </div><!-- close .progression-video-index-table -->
								 </div><!-- close .progression-video-index-content -->
								 <div class="video-index-border-hover"></div>
							 
							 </a>
							 <?php } ?>
						 </div>
						 </div><!-- close .progression-studios-video-index-container -->
					 </div><!-- close .item -->
					 
					 <div class="item">
						 <div class="progression-studios-video-index-container">
						 <div class="progression-studios-video-index-container">
						 <?php
					$cn=mysqli_connect("localhost","root","","data");
					$s="select * from mov where mid=06";
					$result=mysqli_query($cn,$s);
					$r=mysqli_num_rows($result);
	//echo $r;
					$n=0;
					while($data=mysqli_fetch_array($result))
						{ ?>
							 <a href="./video-post.php?mid=<?php echo $data[0]; ?>">
							 
								 <div class="progression-studios-video-feaured-image"><img src="forms/uploads/<?php echo $data['img'];?>" alt="Featured Image"></div>
						 
								 <div class="progression-video-index-content">
									 <div class="progression-video-index-table">
										 <div class="progression-video-index-vertical-align">
									 
											 <h2 class="progression-video-title"><?php echo $data[1]; ?></h2>
									 
											 <div class="average-rating-video-post">
												 <div class="average-rating-video-empty">
													 <span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span>
												 </div>
												 <div class="average-rating-overflow-width" style="width:70%;">
													 <div class="average-rating-video-filled">
													 <?php
																$x = 1;

																while($x <= $data[3] ) {
  																echo '<span class="dashicons dashicons-star-filled"></span>';
  																$x++;
																	}
															?>	
													 <div class="clearfix"></div>
													 </div><!-- close .average-rating-video-filled -->
												 </div><!-- close .average-rating-overflow-width -->
											 </div><!-- close .average-rating-video-post -->
											 <div class="clearfix"></div>
										 
											 <ul class="video-index-meta-taxonomy"><li><?php echo $data[2]; ?></li></ul>												
											 <div class="clearfix"></div>
									 
										 </div><!-- close .progression-video-index-vertical-align -->
									 </div><!-- close .progression-video-index-table -->
								 </div><!-- close .progression-video-index-content -->
								 <div class="video-index-border-hover"></div>
							 
							 </a>
							 <?php } ?>
						 </div>
						 </div><!-- close .progression-studios-video-index-container -->
					 </div><!-- close .item -->
					 
					 
					 <div class="item">
						 <div class="progression-studios-video-index-container">
						 <div class="progression-studios-video-index-container">
						 <?php
					$cn=mysqli_connect("localhost","root","","data");
					$s="select * from mov where mid=03";
					$result=mysqli_query($cn,$s);
					$r=mysqli_num_rows($result);
	//echo $r;
					$n=0;
					while($data=mysqli_fetch_array($result))
						{ ?>
							 <a href="./video-post.php?mid=<?php echo $data[0]; ?>">
							 
								 <div class="progression-studios-video-feaured-image"><img src="forms/uploads/<?php echo $data['img'];?>" alt="Featured Image"></div>
						 
								 <div class="progression-video-index-content">
									 <div class="progression-video-index-table">
										 <div class="progression-video-index-vertical-align">
									 
											 <h2 class="progression-video-title"><?php echo $data[1]; ?></h2>
									 
											 <div class="average-rating-video-post">
												 <div class="average-rating-video-empty">
													 <span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span>
												 </div>
												 <div class="average-rating-overflow-width" style="width:70%;">
													 <div class="average-rating-video-filled">
													 <?php
																$x = 1;

																while($x <= $data[3] ) {
  																echo '<span class="dashicons dashicons-star-filled"></span>';
  																$x++;
																	}
															?>	 
													 <div class="clearfix"></div>
													 </div><!-- close .average-rating-video-filled -->
												 </div><!-- close .average-rating-overflow-width -->
											 </div><!-- close .average-rating-video-post -->
											 <div class="clearfix"></div>
										 
											 <ul class="video-index-meta-taxonomy"><li><?php echo $data[2]; ?></li></ul>												
											 <div class="clearfix"></div>
									 
										 </div><!-- close .progression-video-index-vertical-align -->
									 </div><!-- close .progression-video-index-table -->
								 </div><!-- close .progression-video-index-content -->
								 <div class="video-index-border-hover"></div>
							 
							 </a>
							 <?php } ?>
						 </div>
						 </div><!-- close .progression-studios-video-index-container -->
					 </div><!-- close .item -->
					 
				 </div><!-- close #progression-video-carousel - See /js/script.js file for options -->
			 </div><!-- close .progression-studios-elementor-carousel-container  -->
 
			 <div class="clearfix"></div>
			 <div class="clearfix"></div>
			 <div class="clearfix"></div>
			 <div class="clearfix"></div>
			 <br><br>
			 <h2 class="post-list-heading">New Arrivals<span>Find Something New to Watch</span></h2>
				
				<div class="row">

					<div class="col col-12 col-md-6 col-lg-4">
						<div class="progression-studios-video-index-container">
						<?php
					$cn=mysqli_connect("localhost","root","","data");
					$s="select * from mov where mid=08";
					$result=mysqli_query($cn,$s);
					$r=mysqli_num_rows($result);
	//echo $r;
					$n=0;
					while($data=mysqli_fetch_array($result))
						{ ?>
							<a href="./video-post.php?mid=<?php echo $data[0]; ?>">
								<div class="progression-studios-video-feaured-image"><img src="forms/uploads/<?php echo $data['img'];?>" alt="Featured Image"></div>
							
								<div class="progression-video-index-content">
									<div class="progression-video-index-table">
										<div class="progression-video-index-vertical-align">
										
											<h2 class="progression-video-title"><?php echo $data[1]; ?></h2>
										
											<div class="average-rating-video-post">
												<div class="average-rating-video-empty">
													<span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span>
												</div>
												<div class="average-rating-overflow-width" style="width:70%;">
													<div class="average-rating-video-filled">
														<span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span>
													<div class="clearfix"></div>
													</div><!-- close .average-rating-video-filled -->
												</div><!-- close .average-rating-overflow-width -->
											</div><!-- close .average-rating-video-post -->
											<div class="clearfix"></div>
											
											<ul class="video-index-meta-taxonomy"><li><?php echo $data[2]; ?></li></ul>												
											<div class="clearfix"></div>
										
										</div><!-- close .progression-video-index-vertical-align -->
									</div><!-- close .progression-video-index-table -->
								</div><!-- close .progression-video-index-content -->
								<div class="video-index-border-hover"></div>
								
							</a>
							<?php } ?>
						</div><!-- close .progression-studios-video-index-container -->
					</div><!-- close .col -->
					
					<div class="col col-12 col-md-6 col-lg-4">
						<div class="progression-studios-video-index-container">
						<?php
					$cn=mysqli_connect("localhost","root","","data");
					$s="select * from mov where mid=09";
					$result=mysqli_query($cn,$s);
					$r=mysqli_num_rows($result);
	//echo $r;
					$n=0;
					while($data=mysqli_fetch_array($result))
						{ ?>
							<a href="./video-post.php?mid=<?php echo $data[0]; ?>">
								<div class="progression-studios-video-feaured-image"><img src="forms/uploads/<?php echo $data['img'];?>" alt="Featured Image"></div>
							
								<div class="progression-video-index-content">
									<div class="progression-video-index-table">
										<div class="progression-video-index-vertical-align">
										
											<h2 class="progression-video-title"><?php echo $data[1]; ?></h2>
										
											<div class="average-rating-video-post">
												<div class="average-rating-video-empty">
													<span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span>
												</div>
												<div class="average-rating-overflow-width" style="width:70%;">
													<div class="average-rating-video-filled">
														<span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span>
													<div class="clearfix"></div>
													</div><!-- close .average-rating-video-filled -->
												</div><!-- close .average-rating-overflow-width -->
											</div><!-- close .average-rating-video-post -->
											<div class="clearfix"></div>
											
											<ul class="video-index-meta-taxonomy"><li><?php echo $data[2]; ?></li></ul>												
											<div class="clearfix"></div>
										
										</div><!-- close .progression-video-index-vertical-align -->
									</div><!-- close .progression-video-index-table -->
								</div><!-- close .progression-video-index-content -->
								<div class="video-index-border-hover"></div>
								
							</a>
							<?php } ?>
						</div><!-- close .progression-studios-video-index-container -->
					</div><!-- close .col -->
					
					<div class="col col-12 col-md-6 col-lg-4">
						<div class="progression-studios-video-index-container">
						<?php
					$cn=mysqli_connect("localhost","root","","data");
					$s="select * from mov where mid=10";
					$result=mysqli_query($cn,$s);
					$r=mysqli_num_rows($result);
	//echo $r;
					$n=0;
					while($data=mysqli_fetch_array($result))
						{ ?>
							<a href="./video-post.php?mid=<?php echo $data[0]; ?>">
								<div class="progression-studios-video-feaured-image"><img src="forms/uploads/<?php echo $data['img'];?>" alt="Featured Image"></div>
							
								<div class="progression-video-index-content">
									<div class="progression-video-index-table">
										<div class="progression-video-index-vertical-align">
										
											<h2 class="progression-video-title"><?php echo $data[1]; ?></h2>
										
											<div class="average-rating-video-post">
												<div class="average-rating-video-empty">
													<span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span>
												</div>
												<div class="average-rating-overflow-width" style="width:70%;">
													<div class="average-rating-video-filled">
														<span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span>
													<div class="clearfix"></div>
													</div><!-- close .average-rating-video-filled -->
												</div><!-- close .average-rating-overflow-width -->
											</div><!-- close .average-rating-video-post -->
											<div class="clearfix"></div>
											
											<ul class="video-index-meta-taxonomy"><li><?php echo $data[2]; ?></li></ul>												
											<div class="clearfix"></div>
										
										</div><!-- close .progression-video-index-vertical-align -->
									</div><!-- close .progression-video-index-table -->
								</div><!-- close .progression-video-index-content -->
								<div class="video-index-border-hover"></div>
								
							</a>
							<?php } ?>
						</div><!-- close .progression-studios-video-index-container -->
					</div><!-- close .col -->
					<div class="col col-12 col-md-6 col-lg-4">
						<div class="progression-studios-video-index-container">
						<?php
					$cn=mysqli_connect("localhost","root","","data");
					$s="select * from mov where mid=05";
					$result=mysqli_query($cn,$s);
					$r=mysqli_num_rows($result);
	//echo $r;
					$n=0;
					while($data=mysqli_fetch_array($result))
						{ ?>
							<a href="./video-post.php?mid=<?php echo $data[0]; ?>">
								<div class="progression-studios-video-feaured-image"><img src="forms/uploads/<?php echo $data['img'];?>" alt="Featured Image"></div>
							
								<div class="progression-video-index-content">
									<div class="progression-video-index-table">
										<div class="progression-video-index-vertical-align">
										
											<h2 class="progression-video-title"><?php echo $data[1]; ?></h2>
										
											<div class="average-rating-video-post">
												<div class="average-rating-video-empty">
													<span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span>
												</div>
												<div class="average-rating-overflow-width" style="width:70%;">
													<div class="average-rating-video-filled">
														<span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span>
													<div class="clearfix"></div>
													</div><!-- close .average-rating-video-filled -->
												</div><!-- close .average-rating-overflow-width -->
											</div><!-- close .average-rating-video-post -->
											<div class="clearfix"></div>
											
											<ul class="video-index-meta-taxonomy"><li><?php echo $data[2]; ?></li></ul>												
											<div class="clearfix"></div>
										
										</div><!-- close .progression-video-index-vertical-align -->
									</div><!-- close .progression-video-index-table -->
								</div><!-- close .progression-video-index-content -->
								<div class="video-index-border-hover"></div>
								
							</a>
							<?php } ?>
						</div><!-- close .progression-studios-video-index-container -->
					</div>
					<div class="col col-12 col-md-6 col-lg-4">
						<div class="progression-studios-video-index-container">
						<?php
					$cn=mysqli_connect("localhost","root","","data");
					$s="select * from mov where mid=04";
					$result=mysqli_query($cn,$s);
					$r=mysqli_num_rows($result);
	//echo $r;
					$n=0;
					while($data=mysqli_fetch_array($result))
						{ ?>
							<a href="./video-post.php?mid=<?php echo $data[0]; ?>">
								<div class="progression-studios-video-feaured-image"><img src="forms/uploads/<?php echo $data['img'];?>" alt="Featured Image"></div>
							
								<div class="progression-video-index-content">
									<div class="progression-video-index-table">
										<div class="progression-video-index-vertical-align">
										
											<h2 class="progression-video-title"><?php echo $data[1]; ?></h2>
										
											<div class="average-rating-video-post">
												<div class="average-rating-video-empty">
													<span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span>
												</div>
												<div class="average-rating-overflow-width" style="width:70%;">
													<div class="average-rating-video-filled">
														<span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span>
													<div class="clearfix"></div>
													</div><!-- close .average-rating-video-filled -->
												</div><!-- close .average-rating-overflow-width -->
											</div><!-- close .average-rating-video-post -->
											<div class="clearfix"></div>
											
											<ul class="video-index-meta-taxonomy"><li><?php echo $data[2]; ?></li></ul>												
											<div class="clearfix"></div>
										
										</div><!-- close .progression-video-index-vertical-align -->
									</div><!-- close .progression-video-index-table -->
								</div><!-- close .progression-video-index-content -->
								<div class="video-index-border-hover"></div>
								
							</a>
							<?php } ?>
						</div><!-- close .progression-studios-video-index-container -->
					</div>
					<div class="col col-12 col-md-6 col-lg-4">
						<div class="progression-studios-video-index-container">
						<?php
					$cn=mysqli_connect("localhost","root","","data");
					$s="select * from mov where mid=03";
					$result=mysqli_query($cn,$s);
					$r=mysqli_num_rows($result);
	//echo $r;
					$n=0;
					while($data=mysqli_fetch_array($result))
						{ ?>
							<a href="./video-post.php?mid=<?php echo $data[0]; ?>">
								<div class="progression-studios-video-feaured-image"><img src="forms/uploads/<?php echo $data['img'];?>" alt="Featured Image"></div>
							
								<div class="progression-video-index-content">
									<div class="progression-video-index-table">
										<div class="progression-video-index-vertical-align">
										
											<h2 class="progression-video-title"><?php echo $data[1]; ?></h2>
										
											<div class="average-rating-video-post">
												<div class="average-rating-video-empty">
													<span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span>
												</div>
												<div class="average-rating-overflow-width" style="width:70%;">
													<div class="average-rating-video-filled">
														<span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span>
													<div class="clearfix"></div>
													</div><!-- close .average-rating-video-filled -->
												</div><!-- close .average-rating-overflow-width -->
											</div><!-- close .average-rating-video-post -->
											<div class="clearfix"></div>
											
											<ul class="video-index-meta-taxonomy"><li><?php echo $data[2]; ?></li></ul>												
											<div class="clearfix"></div>
										
										</div><!-- close .progression-video-index-vertical-align -->
									</div><!-- close .progression-video-index-table -->
								</div><!-- close .progression-video-index-content -->
								<div class="video-index-border-hover"></div>
								
							</a>
							<?php } ?>
						</div><!-- close .progression-studios-video-index-container -->
					</div>
					
				
					
				</div><!-- close .row -->
				
				
				
				
				
				<div class="clearfix"></div>
			</div><!-- close .container -->
			
			
			
		</div><!-- close #content-pro -->
		
				
				
 
				
       		
				

		
		<footer id="footer-pro">
			<div class="container">
				<div class="row">
					<div class="col-md">
						<div class="copyright-text-pro">&copy; All rights reserved. Developed by <a href="#!">Movie Bazaar</a>.</div>
					</div><!-- close .col -->
					<div class="col-md">
						<ul class="social-icons-pro">
							<li class="facebook-color"><a href="http://facebook.com/progressionstudios" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li class="twitter-color"><a href="http://twitter.com/Progression_S" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li class="instagram-color"><a href="http://instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li class="youtube-color"><a href="http://youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a></li>
							<li class="vimeo-color"><a href="http://vimeo.com/" target="_blank"><i class="fab fa-vimeo-v"></i></a></li>
						</ul>
					</div><!-- close .col -->
				</div><!-- close .row -->
			</div><!-- close .container -->
		</footer>
		
		<a href="#0" id="pro-scroll-top"><i class="fas fa-chevron-up"></i></a>
		
		
		<!-- Modal -->
		<div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="LoginModal" aria-hidden="true">
			 <button type="button" class="close float-close-pro noselect" data-dismiss="modal" aria-label="Close">
			           <span aria-hidden="true">&times;</span>
			</button>
		  <div class="modal-dialog modal-dialog-centered modal-md" role="document">
		    <div class="modal-content">
				 <div class="modal-header-pro">
					 <h2>Please login</h2>
				 </div>
				 <div class="modal-body-pro social-login-modal-body-pro">
			 
					 <div class="registration-login-container">
						 <form>
							 <div class="form-group">
								 <input type="text" class="form-control" id="username" placeholder="Username">
							 </div>
							 <div class="form-group">
								 <input type="password" class="form-control" id="password" placeholder="Password">
							 </div>
							 <div class="container-fluid">
								 <div class="row no-gutters">
							 		<div class="col checkbox-remember-pro"><input type="checkbox" id="checkbox-remember"><label for="checkbox-remember" class="col-form-label">Remember me</label></div>
									<div class="col forgot-your-password"><a href="#!">Forgot your password?</a></div>
								</div>
							</div><!-- close .container-fluid -->
						 	<div class="form-group aligncenter">
								 <button type="button" class="btn">Login</button>
							 </div>
							
							<div class="aligncenter"><a class="not-a-member-pro" href="landing-pricing-plans.html">Don't have account? <span>Signup</span></a></div>
			   			 
							
							
						 </form>

					 </div><!-- close .registration-login-container -->

 		      </div><!-- close .modal-body -->
		
		    </div><!-- close .modal-content -->
		  </div><!-- close .modal-dialog -->
		</div><!-- close .modal -->
		

		<!-- Required Framework JavaScript -->
		<script src="js/libs/jquery-3.5.1.min.js"></script><!-- jQuery -->
		<script src="js/libs/popper.min.js" defer></script><!-- Bootstrap Popper/Extras JS -->
		<script src="js/libs/bootstrap.min.js" defer></script><!-- Bootstrap Main JS -->
		<!-- All JavaScript in Footer -->
		
		<!-- Additional Plugins and JavaScript -->
		<script src="js/navigation.js" defer></script><!-- Header Navigation JS Plugin -->
		<script src="js/jquery.flexslider-min.js" defer></script><!-- FlexSlider JS Plugin -->	
		<script src="js/jquery-asRange.min.js" defer></script><!-- Range Slider JS Plugin -->
		<script src="js/afterglow.min.js" defer></script><!-- Video Player JS Plugin -->
		<script src="js/owl.carousel.min.js" defer></script><!-- Carousel JS Plugin -->
		<script src="js/scripts.js" defer></script><!-- Custom Document Ready JS -->
		
		
	</body>

<!-- Mirrored from progression-studios.com/vayvo/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Mar 2021 06:24:24 GMT -->
</html>