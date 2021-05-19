<?php
session_start();
if (!isset($_SESSION['email']))
{
 ?>
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
	<?php include_once('header.php') ?>
	
        
		<!-- Modal -->
		
            
         <div class="modal-dialog modal-dialog-centered modal-md" role="document">
           <div class="modal-content">
                <div class="modal-header-pro">
                    <h2><i class="fas fa-user fa-3x"></i></h2><br>
                    <h2>Writer Sign Up</h2>
                </div>
                <div class="modal-body-pro social-login-modal-body-pro">
            
                    <div class="registration-login-container">
                        <form action="./forms/reg-writer.php" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control"  name="name" placeholder="Full Name"  required>
                            </div>
                   
                            <div class="form-group">
                                <input type="email" class="form-control" id="username" name="email" placeholder=" Email Id" required>
                                
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" id="username" name="phone" placeholder="Phone Number" required>
                                
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="username" name="pass" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                                
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="username" name="cpass" placeholder="Conform Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                            </div>

							<div class="aligncenter"><a class="not-a-member-pro" href="landing-pricing-plans.html"  data-toggle="modal" data-target="#LoginModal">Already have account? <span>Login</span></a></div>
			   			 
                           <!-- close .container-fluid -->
                            <div class="form-group aligncenter">
                                <input type="submit" class="btn" name="gg" value="Sign Up">
                            </div>
                           
				<div class="clearfix"></div>
                           
                           
                        </form>

                    </div><!-- close .registration-login-container -->

              </div><!-- close .modal-body -->
       
           </div><!-- close .modal-content -->
         </div><!-- close .modal-dialog -->
       

		
	
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
						 <form action="./log-writer.php" method="POST">
							 <div class="form-group">
								 <input type="text" class="form-control" id="username" name="email" placeholder="Username">
							 </div>
							 <div class="form-group">
								 <input type="password" class="form-control" id="password" name="pass" placeholder="Password">
							 </div>
							 <div class="container-fluid">
								 <div class="row no-gutters">
							 		<div class="col checkbox-remember-pro"><input type="checkbox" id="checkbox-remember"><label for="checkbox-remember" class="col-form-label">Remember me</label></div>
									<div class="col forgot-your-password"><a href="./forget1.html">Forgot your password?</a></div>
								</div>
							</div><!-- close .container-fluid -->
						 	<div class="form-group aligncenter">
								 <input type="submit" class="btn" name="gg" value="login">
							 </div>
							
							<div class="aligncenter"><a class="not-a-member-pro" href="./register-writer.html">Don't have account? <span>Signup</span></a></div>
			   			 
							
							
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
<?php	}
								else{	header('location:http://localhost/moviebazaar/dashboard/write.php');
								}?>