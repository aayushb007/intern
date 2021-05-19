<!doctype html>
<html lang="en">
	
<!-- Mirrored from progression-studios.com/vayvo/tv-series.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Mar 2021 06:24:42 GMT -->
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:wght@300;400;500;700&amp;family=Lato:wght@300;400;700&amp;display=swap">
		
		<link rel="stylesheet" href="icons/fontawesome/css/all.min.css"><!-- FontAwesome Icons -->
		<link rel="stylesheet" href="icons/dashicons/css/dashicons-min.css"><!-- DashIcons For Star Ratings -->
		
		<title>Moviebazaar</title>
	</head>
	<body>
			<!-- close .progression-studios-slider - See /js/script.js file for options -->
		
		<div id="content-pro">
			
  	 		<div class="container custom-gutters-pro">
				
				<div style="height:20px;"></div>
				
				
				<ul class="progression-filter-button-group tabs-menu">
					<li  ><a href="tv-series-test.php">All</a></li>
					<li  class="pro-selected"><a href="action.php">Action</a></li>
					<li ><a href="drama.php">Drama</a></li>
					<li ><a href="scifi.php">Sci-fi</a></li>
				</ul>

				<div class="row tab-content" >
                <?php
	        
				//echo $d;
					$cn=mysqli_connect("localhost","root","","data");
					$s="select * from mov where category='Action'";
					$result=mysqli_query($cn,$s);
					$r=mysqli_num_rows($result);
	//echo $r;
					$n=0;
					while($data=mysqli_fetch_array($result))
						{ ?>
                     
					<div class="col col-12 col-md-6 col-lg-6">
						<div class="progression-studios-video-index-container">
							<a href="video-seasons-post.html">
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
						</div><!-- close .progression-studios-video-index-container -->
					</div><!-- close .col -->
               <?php }
															?>	
				
					
				</div>
			
			</div><!-- close .container -->
			
			
			
		</div><!-- close #content-pro -->
		
		<footer id="footer-pro">
			<div class="container">
				<div class="row">
					<div class="col-md">
						<div class="copyright-text-pro">&copy; All rights reserved. Developed by <a href="#!">YourCompanyName</a>.</div>
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

<!-- Mirrored from progression-studios.com/vayvo/tv-series.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Mar 2021 06:24:44 GMT -->
</html>