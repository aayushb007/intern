<header id="masthead-pro" class="sticky-header"><!-- Remove sticky-header class to remove sticky header -->
			<div class="header-container">
				
				<h1><a href="./home/index.php"><img src="./home/images/logo-white.png" alt="Logo" style="width: 80px;"></a></h1>
				
				
				
				<!--div id="header-btn-right">
					<button class="btn btn-header-pro noselect" data-toggle="modal" data-target="#LoginModal" >Login</button>
				</div-->
					
				
				
					
				<div id="header-user-profile">
					<div id="header-user-profile-click" class="noselect">
						<img src="./images/img.png" alt="Suzie">
                        <?php                       if (isset($_SESSION['id']))
{
    echo'	<div id="header-username">';echo $_SESSION['id']; echo'</div><i class="fas fa-angle-down"></i>';}?>
					</div><!-- close #header-user-profile-click -->
					<div id="header-user-profile-menu">
						<ul>
 <?php                       if (isset($_SESSION['id']))
{                           	echo'<li><a href="./dashboard/invest.php" id="all-reviews-button-progression"><i class="far fa-address-book"></i>Dashboard</a></li>';
							echo'<li><a href="./logout.php" id="all-reviews-button-progression"><i class="fa fa-power-off"></i>Log Out</a></li>
';}?> <?php                       if (!isset($_SESSION['id']))
{
                           echo ' <li><a href="index-2.html" id="all-reviews-button-progression" data-toggle="modal" data-target="#LoginModal"><i class="fa fa-power-off"></i>Log In</a></li>
                            ';}?></ul>
					</div><!-- close #header-user-profile-menu -->
				</div><!-- close #header-user-profile -->
				
				

				<div id="video-search-header">
					<div class="container">
						
						<input type="text" placeholder="Search for Movies or TV Series" aria-label="Search" id="main-text-field">
						
						<div id="video-search-header-filtering">
							<form id="video-search-header-filtering-padding">
								<div class="row">
									<div class="col-sm extra-padding">
										<div class="dotted-dividers-pro">
											<h5>Type:</h5>
											<ul class="video-search-type-list">
												<li>
													<label class="checkbox-pro-container">Movies
													  <input type="checkbox" checked="checked" id="movies-type">
													  <span class="checkmark-pro"></span>
													</label>
								
													<label class="checkbox-pro-container">TV Series
													  <input type="checkbox" id="tv-type">
													  <span class="checkmark-pro"></span>
													</label>
												</li>
												<li>
													<label class="checkbox-pro-container">New Arrivals
													  <input type="checkbox" id="movie-type">
													  <span class="checkmark-pro"></span>
													</label>
								
													<label class="checkbox-pro-container">Documentary
													  <input type="checkbox" id="documentary-type">
													  <span class="checkmark-pro"></span>
													</label>
												</li>
											</ul><div class="clearfix"></div>

										</div><!-- close .dotted-dividers-pro -->
									</div><!-- close .col -->
									<div class="col-sm extra-padding">
										<div class="dotted-dividers-pro">
										<h5>Genres:</h5>
										<select class="custom-select">
										  <option selected>All Genres</option>
										  <option value="1">Action</option>
										  <option value="2">Adventure</option>
										  <option value="3">Drama</option>
										  <option value="4">Animation</option>
										  <option value="5">Documentary</option>
										  <option value="6">Drama</option>
										  <option value="7">Horror</option>
										  <option value="8">Thriller</option>
										  <option value="9">Fantasy</option>
										  <option value="10">Romance</option>
										  <option value="11">Sci-Fi</option>
										  <option value="12">Western</option>
										</select>
										</div><!-- close .dotted-dividers-pro -->
									</div><!-- close .col -->
									<div class="col-sm extra-padding">
										<div class="dotted-dividers-pro">
										<h5>Country:</h5>
										<select class="custom-select">
										  <option selected>All Countries</option>
										  <option value="1">Argentina</option>
										  <option value="2">Australia</option>
										  <option value="3">Bahamas</option>
										  <option value="4">Belgium</option>
										  <option value="5">Brazil</option>
										  <option value="6">Canada</option>
										  <option value="7">Chile</option>
										  <option value="8">China</option>
										  <option value="9">Denmark</option>
										  <option value="10">Ecuador</option>
										  <option value="11">France</option>
										  <option value="12">Germany</option>
										  <option value="13">Greece</option>
										  <option value="14">Guatemala</option>
										  <option value="15">Italy</option>
										  <option value="16">Japan</option>
										  <option value="17">asdfasdf</option>
										  <option value="18">Korea</option>
										  <option value="19">Malaysia</option>
										  <option value="20">Monaco</option>
										  <option value="21">Morocco</option>
										  <option value="22">New Zealand</option>
										  <option value="23">Panama</option>
										  <option value="24">Portugal</option>
										  <option value="25">Russia</option>
										  <option value="26">United Kingdom</option>
										  <option value="27">United States</option>
										</select>
										</div><!-- close .dotted-dividers-pro -->
									</div><!-- close .col -->
									<div class="col-sm extra-padding extra-range-padding">
										<h5>Average Rating:</h5>
						            	<div class="range-padding-top"><input class="range-example-rating-input" type="text" min="0" max="10" value="4,10" step="1" /></div>
										<!-- JS is under /js/script.js -->
									</div><!-- close .col -->
								</div><!-- close .row -->
								<div id="video-search-header-buttons">
									<a href="#!" class="btn">Search Videos</a>
									<a href="#!" class="btn reset-btn">Reset</a>
								</div><!-- close #video-search-header-buttons -->
							</form><!-- #video-search-header-filtering-padding -->
						</div><!-- close #video-search-header-filtering -->
						
					</div><!-- close .container -->
				</div><!-- close .video-search-header -->
				
				
				
				<div class="clearfix"></div>
			</div><!-- close .header-container -->
			
			<nav id="mobile-navigation-pro">
			
				
				<!--button class="btn btn-mobile-pro btn-header-pro noselect" data-toggle="modal" data-target="#LoginModal" >Login</button-->
				
				<div id="search-mobile-nav-pro">
					<input type="text" placeholder="Search for Movies or TV Series" aria-label="Search">
				</div>
				
			</nav>
			<div id="progression-studios-header-shadow"></div>
		</header>