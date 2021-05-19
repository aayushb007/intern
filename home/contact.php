<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');
		
		ga('create', 'code_here', 'auto');
		ga('send', 'pageview');
	</script>
   <?php include_once('meta.php') ?> 
</head>
    

<body class="hidden hidden-ball smooth-scroll" data-primary-color="#CC66FF">

	
	<main>		
        <!-- Preloader -->
        <div class="preloader-wrap" data-firstline="Stay" data-secondline="Relaxed">
            <div class="outer">
                <div class="inner">                    
                    <div class="trackbar">
                    	<div class="preloader-intro">Contact us</div>
                        <div class="loadbar"></div>
                    </div>
                    <div class="percentage-intro">Loaded</div>
                    <div class="percentage-wrapper"><div class="percentage" id="precent"></div></div>                     
                </div>
            </div>
        </div>
        <!--/Preloader -->    
        
        <div class="cd-index cd-main-content">
    
        <!-- Page Content -->
        <div id="page-content" class="light-content" data-bgcolor="#141414">
            
            <!-- Header -->
            <?php include_once('header1.php') ?>
            <!--/Header -->      
            
            
            <!-- Content Scroll -->
            <div id="content-scroll">
            
            
                <!-- Main -->
                <div id="main">
                
                    <!-- Hero Section -->
                    <div id="hero">
                        <div id="hero-styles">
                            <div id="hero-caption" class="parallax-onscroll text-align-center">
                                <div class="inner">
                                	<h1 class="hero-title"><span>Contact Us</span></h1>
                                    <h5 class="hero-subtitle"><span>Let's work together</span></h5>                                                                  
                                </div>
                            </div>                                     
                        </div>
                    </div>                      
                    <!--/Hero Section -->    
                         
                    
                    <!-- Main Content -->
                    <div id="main-content">
                        <!-- Main Page Content -->
                        <div id="main-page-content">
                            
                            
                            <!-- Row --> 
                            <div class="vc_row">
                                
                                <div class="row-half-color first half-dark-section" data-bgcolor="#141414"></div>
                                <div class="row-half-color second half-white-section change-header-color" data-bgcolor="#fff"></div>
                                                        
                               
                            
                            </div>
                            <!--/Row -->
                            
                            
                            <!-- Row --> 
                            <?php
	        
            //echo $d;
                $cn=mysqli_connect("localhost","root","","data");
                $s="select * from system_settings where id='1'";
                $result=mysqli_query($cn,$s);
                $r=mysqli_num_rows($result);
//echo $r;
                $n=0;
                while($data=mysqli_fetch_array($result))
                    { ?>
                            <div class="vc_row row_padding_top row_padding_bottom white-section text-align-center small change-header-color" data-bgcolor="#fff">
                                                        
                                <h2 class="has-animation" data-delay="0">Let's work together and make <br class="destroy">something that matters.</h2>
                                
                                <hr><hr>
                                    
                                <div class="one_third has-animation"  data-delay="100">
                                    <div class="clapat-icon">
                                        <i class="fa fa-paper-plane fa-2x" aria-hidden="true"></i>
                                    </div>
                                
                                    <h5 class="secondary-font"><a href="mailto:<?php echo $data[2]; ?>" class="link"><span><?php echo $data[2]; ?></span></a></h5>
                                    <p>Email</p>                        
                                </div>
                                
                                <div class="one_third has-animation"  data-delay="200">
                                    <div class="clapat-icon">
                                        <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
                                    </div>
                                
                                    <h5 class="secondary-font"><?php echo $data[4]; ?></h5>
                                    <p>Address</p>                        
                                </div>
                                
                                <div class=" one_third last has-animation"  data-delay="300">
                                    <div class="clapat-icon">
                                        <i class="fa fa-phone fa-2x" aria-hidden="true"></i>
                                    </div>
                                
                                    <h5 class="secondary-font"><?php echo $data[3]; ?></h5>
                                    <p>Phone</p>
                                </div>
                            
                            </div>
                            <?php }
															?>	
                            <!--/Row -->
                            
                            
                            
                            <!-- Row -->
                            <div class="vc_row row_padding_top text-align-center">
                                
                                <h5 class="has-mask primary-color secondary-font">Get in Touch</h5>
                                <h2 class="has-animation" data-delay="150">Find out if I’m available and <br class="destroy">ask me anything</h2>
                                
                                <hr>
                                    
                                <!-- Contact Formular -->
                                <div id="contact-formular">
                                
                                    <div id="message"></div>
                                
                                    <form method="post" action="./action.php" >                             
                                        <div class="name-box has-animation" data-delay="100">        
                                            <input name="fname" type="text" id="name" size="30" value="" placeholder="What's Your Name"><label class="input_label"></label>
                                        </div>                                                        
                                        <div class="email-box has-animation" data-delay="150">
                                            <input name="email" type="text" id="email" size="30" value="" placeholder="Your Email"><label class="input_label"></label>
                                        </div> 
                                         <div class="message-box has-animation" data-delay="100">
                                            <input name="subject" type="text" id="email" size="30" value="" placeholder="Your Suject for Contacting us"><label class="input_label"></label>
                                        </div>                             
                                        <div class="message-box has-animation" data-delay="100">
                                            <textarea name="message" cols="40" rows="4" id="comments" placeholder="Tell Us About Your Message" ></textarea><label class="input_label slow"></label>
                                        </div>                             
                                        <div class="button-box has-animation" data-delay="100">             
                                            <div class="clapat-button-wrap circle parallax-wrap bigger">
                                                <div class="clapat-button parallax-element">
                                                	<div class="button-border  outline parallax-element-second"><input type="submit"   value="Submit"  name="gg"/></div>
                                                </div>
                                            </div> 
                                        </div>
                                    </form>                        
                                                            
                                </div>
                                <!--/Contact Formular -->
                           </div> 
                           <!--/Row -->
                            
                            
                            
                            
                        
                        </div>
                        <!--/Main Page Content -->
                        
                        
                       
                                             
                        
                        <!-- Project Navigation 
                        <div id="page-nav">
                            <div class="next-page-wrap">
                                <div class="next-page-title">
                                    <div class="inner">                                        
                                        <div class="page-title-wrapper has-animation text-align-center">
                                        	<a class="page-title next-ajax-link-page disable-drag" data-type="page-transition" data-firstline="Next" data-secondline="Page" href="./about.php">
                                            	<div class="next-hero-title"><span>About</span> <span>us</span></div>                                    
                                            	<div class="next-hero-subtitle"><span>let you know</span></div>
                                            </a>
                                        </div>
                                    </div>                   
                                </div>
                            </div>
                        </div>   -->    
                        <!--/Project Navigation -->
                                
                    </div>
                    <!--/Main Content --> 
                
                </div>
                <!--/Main -->
                
                <!-- Footer -->
                <?php include_once('footer.php') ?>
                <!--/Footer -->
            
        
        	</div>
            <!--/Content Scroll -->
            
            
            <div id="app"></div>
            
            <!-- Project Holder -->
            <div id="project-holder">
                <div id="project-data"></div>
            </div>
        	<!--/Project Holder -->
            
            
		</div>    
        <!--/Page Content -->
    
		</div>
	</main>
    
    
    
    
    <div class="cd-cover-layer"></div>
    <div id="magic-cursor">
        <div id="ball">
        	<div id="ball-drag-x"></div>
            <div id="ball-drag-y"></div>
        	<div id="ball-loader"></div>
        </div>
    </div>
    <div id="clone-image"></div>
    <div id="rotate-device"></div>
    
    
		
    <script src="js/jquery.min.js"></script>
    <script src="./cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>    
    <script src="./cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.min.js" ></script>
    <script src="./cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/utils/Draggable.min.js" ></script>
    <script src='./cdnjs.cloudflare.com/ajax/libs/three.js/r83/three.js'></script>
	<script src='./cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.4/imagesloaded.pkgd.js'></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpK1sWi3J3EbUOkF_K4-UHzi285HyFX5M&amp;sensor=false"></script>
	<script src="js/clapatwebgl.js"></script>
	<script src="js/plugins.js"></script>
    <script src="js/scripts1.js"></script>



</body>

</html>