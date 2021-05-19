<?php session_start();  ?>
<!doctype html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:wght@300;400;500;700&amp;family=Lato:wght@300;400;700&amp;display=swap">
		
		<link rel="stylesheet" href="icons/fontawesome/css/all.min.css"><!-- FontAwesome Icons -->
		<link rel="stylesheet" href="icons/dashicons/css/dashicons-min.css"><!-- DashIcons For Star Ratings -->
		
		<title>Moviebazaar </title>
	</head>
	<body>
	<?php include_once('header.php');
	include_once('./forms/db_connect.php');
	 ?>
	
    <?php
	            $d=$_GET['mid'];
				//echo $d;
					
					$s="select * from mov where mid=$d";
					$result=mysqli_query($con,$s);
					$r=mysqli_num_rows($result);
	//echo $r;
					$n=0;
					while($data=mysqli_fetch_array($result))
						{ ?>
		
		<div id="video-page-title-pro" style="background-image:url('forms/uploads/<?php echo $data['img'];?>');">
			<a class="video-page-title-play-button afterglow" href="#Video-Vayvo-Single"><i class="fas fa-play"></i></a>
			
			<div style="display:none;">
				<video id="Video-Vayvo-Single" poster="images/video/poster.jpg" width="960" height="540" class="afterglow-lightboxplayer" data-autoresize="fit">
					<source src="images/video/sample.mp4" type="video/mp4">
				</video>
			</div>
			
			<div id="video-page-title-gradient-base"></div>
		</div><!-- close #video-page-title-pro -->
		
		
		
		<div id="content-pro">
			
  	 		<div class="container custom-gutters-pro">
				
				
				<div id="video-post-container">
					<h1 class="video-post-heading-title"><?php echo $data[1]; ?></h1>
					<div class="clearfix"></div>
					
					<ul id="video-post-meta-list">
						<li><a href="#!"><?php echo $data[2]; ?></a></li>
						<li id="video-post-meta-reviews">
							<div class="average-rating-count-progression-studios">2 Reviews</div>
								<div class="average-rating-video-post">
									<div class="average-rating-video-empty">
										<span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span>
									</div>
									<div class="average-rating-overflow-width" style="width:80%;">
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
								</div>
							<div class="clearfix"></div>					
						</li>
						<li id="video-post-meta-year">2019</li>
						<li id="video-post-meta-rating"><span>PG-13</span></li>
						<!-- <li id="video-post-meta-rating"><i class="fas fa-thumbs-up"></i> &nbsp;14</li> -->
					</ul>
					<div class="clearfix"></div>

					<div id="video-post-buttons-container">
						<a href="#Video-Single"class="afterglow" id="video-post-play-text-btn"><i class="fas fa-play-circle"></i>Trailor</a>
						<div style="display:none;">
							<video id="Video-Single" poster="images/video/poster.jpg" width="960" height="540" class="afterglow-lightboxplayer" data-autoresize="fit">
								<source src="images/video/sample.mp4" type="video/mp4">
							</video>
						</div>
						
						<a href="#!" class="wishlist-button-pro"><i class="fas fa-play-circle"></i>Short Film</a>
						<div id="video-social-sharing-button" class="btn"><i class="fas fa-credit-card"></i>Invest</div>
						
					<div class="clearfix"></div>
					</div><!-- close #video-post-buttons-container -->
	
					<div id="vayvo-video-post-content">
						<p><?php echo $data[4]; ?></p>
					</div><!-- #vayvo-video-post-content -->
					
					
					<div id="video-more-like-this-details-section">
						<h3 id="more-videos-heading">More Like This</h3>
						
						<div class="row">
						
							<div class="col col-12 col-md-6 col-lg-6">
								<div class="progression-studios-video-index-container">
									<a href="#!">
								
										<div class="progression-studios-video-feaured-image"><img src="images/demo/annie-spratt-1187424-unsplash-700x480.jpg" alt="Featured Image"></div>
							
										<div class="progression-video-index-content">
											<div class="progression-video-index-table">
												<div class="progression-video-index-vertical-align">
										
													<h2 class="progression-video-title">Polar Express</h2>
										
													<div class="average-rating-video-post">
														<div class="average-rating-video-empty">
															<span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span>
														</div>
														<div class="average-rating-overflow-width" style="width:90%;">
															<div class="average-rating-video-filled">
																<span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span>
															<div class="clearfix"></div>
															</div><!-- close .average-rating-video-filled -->
														</div><!-- close .average-rating-overflow-width -->
													</div><!-- close .average-rating-video-post -->
													<div class="clearfix"></div>
											
													<ul class="video-index-meta-taxonomy"><li>Sci-fi</li></ul>												
													<div class="clearfix"></div>
										
												</div><!-- close .progression-video-index-vertical-align -->
											</div><!-- close .progression-video-index-table -->
										</div><!-- close .progression-video-index-content -->
										<div class="video-index-border-hover"></div>
								
									</a>
								</div><!-- close .progression-studios-video-index-container -->
							</div><!-- close .col -->
							
						</div><!-- close .row -->
						
						<div style="height:10px;"></div>

					</div><!-- close #video-more-like-this-details-section -->

				</div><!-- close #video-post-container -->
				
				
				
				<div id="video-post-sidebar">
					<div class="content-sidebar-section video-sidebar-section-release-date">
						<h4 class="content-sidebar-sub-header">Investment Date</h4>
						<div class="content-sidebar-short-description">
                       <?php 
					   $timestamp = strtotime($data[5]); 
					   $new_date = date('d M,Y', $timestamp);  
					   print_r($new_date); ?> </div>
					</div><!-- close .content-sidebar-section -->
					
					<div class="content-sidebar-section video-sidebar-section-length">
						<h4 class="content-sidebar-sub-header">Written By</h4>
						<div class="content-sidebar-short-description"><?php echo $data[8]; ?></div>
					</div><!-- close .content-sidebar-section -->
					
					<div id="video-post-recent-reviews-sidebar">
						<h3 class="content-sidebar-reviews-header">Recent Reviews</h3>
						
						<ul class="sidebar-reviews-pro">
						 	<li>
								<div class="progression-studios-sidebar-review-container">
					
									<!--div id="sidebar-review-number">5</div-->
									<div id="sidebar-review-rating-container">
										<div class="average-rating-video-post">
											<div class="average-rating-video-empty">
												<span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span>
											</div>
											<div class="average-rating-overflow-width" style="width:100%;">
												<div class="average-rating-video-filled">
													<span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span>
												<div class="clearfix"></div>
												</div><!-- close .average-rating-video-filled -->
											</div><!-- close .average-rating-overflow-width -->
										</div>
									</div>
			
			
							 		<h5 id="sidebar-review-author">Jane Doe</h5>
							 		<h6 id="sidebar-review-date">September 17, 2019</h6>
		
							 		<div class="sidebar-comment-exerpt">
										<div class="sidebar-comment-exerpt-text">Fantastic!</div>
								 	</div>
		
	 		
								</div><!-- close .progression-studios-sidebar-review-container -->
						 	</li>
                             <?php } ?>
						 	<li>
								<div class="progression-studios-sidebar-review-container">
									<div id="sidebar-review-rating-container">
										<div class="average-rating-video-post">
											<div class="average-rating-video-empty">
												<span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span><span class="dashicons dashicons-star-empty"></span>
											</div>
											<div class="average-rating-overflow-width" style="width:80%;">
												<div class="average-rating-video-filled">
													<span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span>
												<div class="clearfix"></div>
												</div><!-- close .average-rating-video-filled -->
											</div><!-- close .average-rating-overflow-width -->
										</div>
									</div>
							 		<h5 id="sidebar-review-author">Laura Mills</h5>
							 		<h6 id="sidebar-review-date">February 16, 2019</h6>
									<div class="spoiler-review">Contains Spoiler</div>
									
							 		<div class="sidebar-comment-exerpt sidebar-excerpt-more-click">
										<div class="sidebar-comment-exerpt-text">I have been a cinema lover for years, read a lot of reviews on Vayvo . Lorem ipsum dolor sit...</div>
								 			<div class="read-more-comment-sidebar">Read more</div>
										</div>
									</div><!-- close .progression-studios-sidebar-review-container -->
						 		</li>
							</ul>
						
						
					</div><!-- close #video-post-recent-reviews-sidebar -->
			
					<div class="clearfix"></div>
				</div>
				<!-- close #video-post-sidebar -->
				
				
				<div class="clearfix"></div>
				<div class="clearfix"></div>
				<?php                       if (!isset($_SESSION['id']))
{
               echo' <div id="all-reviews-button-progression" data-toggle="modal" data-target="#LoginModal" >Show more</div>';
}?>	
<?php                       if (isset($_SESSION['id']))
{   ?>
                <div   ><a  id="all-reviews-button-progression" href="./more.php?mid=<?php echo $_GET['mid'] ?>">Show more</a></div>
				<?php }?>	<div class="clearfix"></div>
			</div><!-- close .container -->
			
			
			
		</div><!-- close #content-pro -->
        
		<footer id="footer-pro">
			<div class="container">
				<div class="row">
					<div class="col-md">
						<div class="copyright-text-pro">&copy; All rights reserved. Developed by <a href="#!">TheMoviebazaar</a>.</div>
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
						 <form action="./log.php?id=1&mid=<?php echo $_GET['mid'] ?>" method="POST">
							 <div class="form-group">
								 <input type="text" class="form-control" id="username" name="email" placeholder="Username">
							 </div>
							 <div class="form-group">
								 <input type="password" class="form-control" id="password" name="pass" placeholder="Password">
							 </div>
							 <div class="container-fluid">
								 <div class="row no-gutters">
							 		<div class="col checkbox-remember-pro"><input type="checkbox" id="checkbox-remember"><label for="checkbox-remember" class="col-form-label">Remember me</label></div>
									<div class="col forgot-your-password"><a href="#!">Forgot your password?</a></div>
								</div>
							</div><!-- close .container-fluid -->
						 	<div class="form-group aligncenter">
								 <input type="submit" class="btn" name="gg" value="Login">
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

</html>