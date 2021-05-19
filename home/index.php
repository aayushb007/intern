<!DOCTYPE html>
<html lang="en">

<head>
	
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');
		
		ga('create', 'code_here', 'auto');
		ga('send', 'pageview');
	</script>
    
    <title>MovieBazaar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="The Movie making Website." />
    <meta name="author" content="Moviebazaar">
    <meta charset="UTF-8" />    
    <link rel="icon" type="image/ico" href="favicon.ico" />
    <link href="style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"> 
   
</head>


<body class="hidden hidden-ball smooth-scroll" data-primary-color="#c67aff">

	
	<main>		
        <!-- Preloader -->
        <div class="preloader-wrap" data-firstline="Stay" data-secondline="Relaxed">
            <div class="outer">
                <div class="inner">                    
                    <div class="trackbar">
                    	<div class="preloader-intro"><img src="./load.png" alt="Welcome to"></div>
                        <div class="loadbar"></div>
                    </div>
                    <div class="percentage-intro">Loading..</div>
                    <div class="percentage-wrapper"><div class="percentage" id="precent"></div></div>                     
                </div>
            </div>
        </div>
        <!--/Preloader -->    
        
        <div class="cd-index cd-main-content">
    
        <!-- Page Content -->
        <div id="page-content" class="light-content" data-bgcolor="#141414">
            
            <!-- Header -->
            <?php include_once('header.php') ?>
            <!--/Header --> 
            
           
            
            <!-- Content Scroll -->
            <div id="content-scroll">
            
            
                <!-- Main -->
                <div id="main">                
                    
                    <!-- Main Content -->
                    <div id="main-content">
                        
                                                        
                        <!-- Showcase Slider Holder -->
                        <div id="showcase-slider-holder" class="disable-drag">
                                                            
                                <div id="showcase-slider" class="swiper-container">
                                    <div class="swiper-wrapper">
                                    
                                        <div class="swiper-slide">                                            
                                            <div class="img-mask">
                                                <div class="section-image" data-swiper-parallax="0" data-swiper-parallax-scale="1.15"><img src="images/Welcome.png" class="item-image grid__item-img" alt=""></div>
                                            </div>
                                            <div class="outer">
                                                <a href="./contact.php">
                                                <div class="inner">
                                                    <div class="slide-title-wrapper">
                                                        <div class="subtitle"" data-firstline="Know" data-secondline="more" ><span style="color:beige;font-weight:normal;">WELCOME TO</span></div>
                                                      <div class="slide-title" data-firstline="Know" data-secondline="more" ><span>THE MOVIEBAZAAR</span></div>
                                                      
                                                    </div>
                                                </a>
                                                    <div class="subtitle"><span><b style="color:beige;font-weight:normal;">MOVIE MAKING.</b>REDIFINED</span></div>
                                                   
                                                </div>
                                             </div>
                                        </div>
            
                                        
                                        
                                        
                                        <div class="swiper-slide ">                                    
                                            <div class="img-mask">
                                                <div class="section-image" data-swiper-parallax="0" data-swiper-parallax-scale="1.15"><img class="item-image grid__item-img" src="./images/investors.png" alt=""></div>
                                            </div>
                                            <div class="outer">
                                                <a href="./index.php">
                                                <div class="inner">
                                                    <div class="slide-title-wrapper">
                                                        <div class="slide-title" data-firstline="View" data-secondline="Stories"><span>INVESTORS & WRITERS</span></div>
                                                    
                                                    </div></a>
                                                    <div class="subtitle"><span >BE A PRODUCER OF STORIES THAT YOU LIKE AND  EARN PROFITS FROM IT TO.</span>
                                                        <span style="color: beige;">SEND US YOUR SCRIPT AND GET A CHANCE FOR YOUR IDEA TO SEEN BY MILLIONS</span></div>
                                                    
                                                    &nbsp;&nbsp;&nbsp;    <div class="clapat-button-wrap ">
                                                    
                                                        <div class="clapat-button ">
                                                            <div class="button-border  "><form action="../home-test.php" method="POST"><input type="submit"  value="Invest"  name="gg"/></form></div>
                                                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <div class="clapat-button ">
                                                	<div class="button-border  "><form action="../register-writer.php" method="POST"><input type="submit"  value="Write"  name="gg"/></form></div>
                                                </div>
                                            </div>
                                                </div>
                                             </div> 
                                        </div>
                                       
                                        <div class="swiper-slide">                                    
                                            <div class="img-mask">
                                                <div class="section-image" data-swiper-parallax="0" data-swiper-parallax-scale="1.15"><img class="item-image grid__item-img" src="images/How does the movie bazaar work.png" alt=""></div>
                                            </div>
                                            <div class="outer">
                                                <a href="./about.php#new">
                                                <div class="inner">
                                                    <div class="slide-title-wrapper">
                                                        <div class="slide-title" data-firstline="Know" data-secondline="us"><span>HOW DOES IT  WORK?</span></div>
                                                       
                                                    </div></a>
                                                    <div class="subtitle"><span> BROWSE THROUGH A CATALOGUE OF MOVIE IDEAS ON OUR WEBSITE.</span><span style="color: beige;">PICK A MOVIE OF YOUR LIKING & INVEST ANY AMOUNT IN THE MOVIE’S BUDGET.</span><span> ONCE THE BUDGET IS FULFILLED, WE MAKE & SELL THE MOVIE, IN A WAY THAT</span><span style="color: beige;"> IT EARNS MAXIMUM PROFITS & YOU WILL GET A PROPORTIONATE SHARE FROM THE PROFITS MADE.</span></div>
                                                </div>
                                             </div> 
                                        </div>
                                       
                                        
                                        <!-- <div class="swiper-slide">                                    
                                            <div class="img-mask">
                                                <div class="section-image">
                                                    <img class="item-image grid__item-img" src="images/4k.JPG" alt="">
                                                    <div class="hero-video-wrapper">
                                                        <video loop muted class="bgvid">
                                                            <source src="./images/4k.mp4" type="video/mp4">
                                                            <source src="images/4k.JPG" >
                                                        </video>
                                                    </div>
                                                </div>                                                
                                            </div>
                                            <div class="outer">
                                                <div class="inner">
                                                    <div class="slide-title-wrapper">
                                                        <div class="slide-title" data-firstline="View" data-secondline="Project"><span>How does The Moviebazaar work</span></div>
                                                        <a class="slide-link" data-type="page-transition" href="#"></a>
                                                    </div>
                                                    <div class="subtitle"><span><h3 style="color:rgb(188, 122, 214)"> through a catalog of movie ideas on our website.  </h3> </span></div>
                                                </div>
                                             </div>  
                                        </div> -->
                                        <div class="swiper-slide">                                    
                                            <div class="img-mask">
                                                <div class="section-image" data-swiper-parallax="0" data-swiper-parallax-scale="1.15"><img class="item-image grid__item-img" src="images/About.png" alt=""></div>
                                            </div>
                                            <div class="outer">
                                                <a href="./about.php">
                                                <div class="inner">
                                                    <div class="slide-title-wrapper">
                                                        <div class="slide-title" data-firstline="About" data-secondline="us"><span >ABOUT US</span></div>
                                                
                                                    </div></a>
                                                    <div class="subtitle"><span>A FIRST OF ITS KIND DECENTRALIZED FILM MAKING MARKETPLACE, STOCK MARKET </span><span style="color:beige">THEMOVIEBAZAAR. MOVIES IS A DEMOCRATIC & TRANSPARENT METHOD OF FILM MAKING</span><span>WHERE AUDIENCE ARE THE PRODUCERS</span></div>
                                                </div>
                                             </div> 
                                        </div>
                                        
                                        
                                                                            
                                        
                                    </div>                                  
                                </div>
                                
                                
                                <div id="showcase-slider-captions" class="swiper-container">
                                    <div class="swiper-wrapper">
                                    
                                        <div class="swiper-slide ">                                            
                                            <div class="outer" data-swiper-parallax="0" data-swiper-parallax-opacity="0" data-swiper-parallax-scale="0.9">
                                                </div>
                                        </div>
                                        
                                        
                                        <div class="swiper-slide">                                    
                                        	<div class="outer" data-swiper-parallax="0" data-swiper-parallax-opacity="0" data-swiper-parallax-scale="0.9">
                                                <div class="inner">
                                                    <div class="slide-title-wrapper">
                                                       </div>
                                                    </div>
                                             </div>    
                                        </div>
                                        
                                        
                                        <div class="swiper-slide">                                    
                                        	<div class="outer" data-swiper-parallax="0" data-swiper-parallax-opacity="0" data-swiper-parallax-scale="0.9">
                                                <div class="inner">
                                                    <div class="slide-title-wrapper">
                                                       </div>
                                                    </div>
                                             </div>     
                                        </div>
                                        
                                        
                                       
                                        
                                        <div class="swiper-slide">                                    
                                        	<div class="outer" data-swiper-parallax="0" data-swiper-parallax-opacity="0" data-swiper-parallax-scale="0.9">
                                                <div class="inner">
                                                    <div class="slide-title-wrapper">
                                                       </div>
                                                    </div>
                                             </div>     
                                        </div>
                                        
                                        
                                        
                                        
                                        
                                    </div>                                  
                                </div>
                                
                                
                                
                                
                                <div id="showcase-slider-lists" class="swiper-container">
                                    <div class="swiper-wrapper">
                                    
                                        <div class="swiper-slide">                                            
                                        	<div class="slide-small-title" data-swiper-parallax="0" data-swiper-parallax-scale="0.5"><span></span></div>    
                                        </div>
                                        
                                        
                                        <div class="swiper-slide">                                    
                                        	<div class="slide-small-title" data-swiper-parallax="0" data-swiper-parallax-scale="0.5"><span></span></div>	    
                                        </div>
                                        
                                        
                                        <div class="swiper-slide">                                    
                                        	<div class="slide-small-title" data-swiper-parallax="0" data-swiper-parallax-scale="0.5"><span></span></div>	     
                                        </div>
                                        
                                        
                                        <div class="swiper-slide">                                    
                                        	<div class="slide-small-title" data-swiper-parallax="0" data-swiper-parallax-scale="0.5"><span></span></div>	     
                                        </div>
                                        
                                        
                                        
                                        
                                                                      
                                        
                                    </div>                                  
                                </div>
                                
                                <div id="fixed-borders">
                                    <div class="caption-border left"></div>
                                    <div class="caption-border right"></div>
                                </div>
                                
                                
                                                           
                        </div>    
                        <!-- Showcase Slider Holder --> 
                                         
                                
                    </div>
                    <!--/Main Content --> 
                
                </div>
                <!--/Main -->
                
                <!-- Footer -->
                <footer class="hidden">        	
                    <div id="footer-container">
                        
                        <div class="button-wrap left disable-drag swiper-prev">
                            <div class="icon-wrap parallax-wrap">
                                <div class="button-icon parallax-element">
                                    <i class="fa fa-angle-up"></i>
                                </div>
                            </div>
                            <div class="button-text sticky left"></div> 
                        </div>
                        
                        <div class="button-wrap right disable-drag swiper-next">
                            <div class="icon-wrap parallax-wrap">
                                <div class="button-icon parallax-element">
                                    <i class="fa fa-angle-down"></i>
                                </div>
                            </div>
                            <div class="button-text sticky right"></div> 
                        </div>
                        
                    </div>
                </footer>
                <!--/Footer -->
            
        
        	</div>
            <!--/Content Scroll -->
            
            
            <div id="app"></div>
            
            
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
    <script src="js/scripts.js"></script>



</body>

</html>