@extends('main')
@section('content')

	<!-- breadcrumbs -->
	<div class="w3layouts-breadcrumbs text-center">
		<div class="container">
			<span class="agile-breadcrumbs">
			<a href="index.blade.php"><i class="fa fa-home home_1"></i></a> /
			<a href="categories.html">Categories</a> / 
			<span>Jobs</span></span>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<!-- Jobs -->
	<div class="total-ads main-grid-border">
		<div class="container">
			<div class="select-box">
				<div class="select-city-for-local-ads ads-list">
					<label>Select your city to see local ads</label>
						<select>
												<optgroup label="Popular Cities">
													<option selected style="display:none;color:#eee;">Entire USA</option>
													<option>Birmingham</option>
													<option>Anchorage</option>
													<option>Phoenix</option>
													<option>Little Rock</option>
													<option>Los Angeles</option>
													<option>Denver</option>
													<option>Bridgeport</option>
													<option>Wilmington</option>
													<option>Jacksonville</option>
													<option>Atlanta</option>
													<option>Honolulu</option>
													<option>Boise</option>
													<option>Chicago</option>
													<option>Indianapolis</option>
												</optgroup>
												<optgroup label="More Cities">
													<optgroup label="Alabama">
														<option>Birmingham</option>
														<option>Montgomery</option>
														<option>Mobile</option>
														<option>Huntsville</option>
														<option>Tuscaloosa</option>
													</optgroup>
													<optgroup label="Alaska">
														<option>Anchorage</option>
														<option>Fairbanks</option>
														<option>Juneau</option>
														<option>Sitka</option>
														<option>Ketchikan</option>
													</optgroup>
													<optgroup label="Arizona">
														<option>Phoenix</option>
														<option>Tucson</option>
														<option>Mesa</option>
														<option>Chandler</option>
														<option>Glendale</option>
													</optgroup>
													<optgroup label="Arkansas">
														<option>Little Rock</option>
														<option>Fort Smith</option>
														<option>Fayetteville</option>
														<option>Springdale</option>
														<option>Jonesboro</option>
													</optgroup>
													<optgroup label="California">
														<option>Los Angeles</option>
														<option>San Diego</option>
														<option>San Jose</option>
														<option>San Francisco</option>
														<option>Fresno</option>
													</optgroup>
													<optgroup label="Colorado">
														<option>Denver</option>
														<option>Colorado</option>
														<option>Aurora</option>
														<option>Fort Collins</option>
														<option>Lakewood</option>
													</optgroup>
													<optgroup label="Connecticut">
														<option>Bridgeport</option>
														<option>New Haven</option>
														<option>Hartford</option>
														<option>Stamford</option>
														<option>Waterbury</option>
													</optgroup>
													<optgroup label="Delaware">
														<option>Wilmington</option>
														<option>Dover</option>
														<option>Newark</option>
														<option>Bear</option>
														<option>Middletown</option>
													</optgroup>
													<optgroup label="Florida">
														<option>Jacksonville</option>
														<option>Miami</option>
														<option>Tampa</option>
														<option>St. Petersburg</option>
														<option>Orlando</option>
													</optgroup>
													<optgroup label="Georgia">
														<option>Atlanta</option>
														<option>Augusta</option>
														<option>Columbus</option>
														<option>Savannah</option>
														<option>Athens</option>
													</optgroup>
													<optgroup label="Hawaii">
														<option>Honolulu</option>
														<option>Pearl City</option>
														<option>Hilo</option>
														<option>Kailua</option>
														<option>Waipahu</option>
													</optgroup>
													<optgroup label="Idaho">
														<option>Boise</option>
														<option>Nampa</option>
														<option>Meridian</option>
														<option>Idaho Falls</option>
														<option>Pocatello</option>
													</optgroup>
													<optgroup label="Illinois">
														<option>Chicago</option>
														<option>Aurora</option>
														<option>Rockford</option>
														<option>Joliet</option>
														<option>Naperville</option>
													</optgroup>
													<optgroup label="Indiana">
														<option>Indianapolis</option>
														<option>Fort Wayne</option>
														<option>Evansville</option>
														<option>South Bend</option>
														<option>Hammond</option>														       
													</optgroup>
													<optgroup label="Iowa">
														<option>Des Moines</option>
														<option>Cedar Rapids</option>
														<option>Davenport</option>
														<option>Sioux City</option>
														<option>Waterloo</option>       													
													</optgroup>
													<optgroup label="Kansas">
														<option>Wichita</option>
														<option>Overland Park</option>
														<option>Kansas City</option>
														<option>Topeka</option>
														<option>Olathe  </option>            													
													</optgroup>
													<optgroup label="Kentucky">
														<option>Louisville</option>
														<option>Lexington</option>
														<option>Bowling Green</option>
														<option>Owensboro</option>
														<option>Covington</option>        														
													</optgroup>
													<optgroup label="Louisiana">
														<option>New Orleans</option>
														<option>Baton Rouge</option>
														<option>Shreveport</option>
														<option>Metairie</option>
														<option>Lafayette</option>          														
													</optgroup>
													<optgroup label="Maine">
														<option>Portland</option>
														<option>Lewiston</option>
														<option>Bangor</option>
														<option>South Portland</option>
														<option>Auburn</option>         														
													</optgroup>
													<optgroup label="Maryland">
														<option>Baltimore</option>
														<option>Frederick</option>
														<option>Rockville</option>
														<option>Gaithersburg</option>
														<option>Bowie</option>         														
													</optgroup>
													<optgroup label="Massachusetts">
														<option>Boston</option>
														<option>Worcester</option>
														<option>Springfield</option>
														<option>Lowell</option>
														<option>Cambridge</option>  
													</optgroup>
													<optgroup label="Michigan">
														<option>Detroit</option>
														<option>Grand Rapids</option>
														<option>Warren</option>
														<option>Sterling Heights</option>
														<option>Lansing</option> 
													</optgroup>
													<optgroup label="Minnesota">
														<option>Minneapolis</option>
														<option>St. Paul</option>
														<option>Rochester</option>
														<option>Duluth</option>
														<option>Bloomington</option>      														
													</optgroup>
													<optgroup label="Mississippi">
														<option>Jackson</option>
														<option>Gulfport</option>
														<option>Southaven</option>
														<option>Hattiesburg</option>
														<option>Biloxi</option>         														
													</optgroup>
													<optgroup label="Missouri">
														<option>Kansas City</option>
														<option>St. Louis</option>
														<option>Springfield</option>
														<option>Independence</option>
														<option>Columbia</option>            														
													</optgroup>
													<optgroup label="Montana">
														<option>Billings</option>
														<option>Missoula</option>
														<option>Great Falls</option>
														<option>Bozeman</option>
														<option>Butte-Silver Bow</option>         														
													</optgroup>
													<optgroup label="Nebraska">
														<option>Omaha</option>
														<option>Lincoln</option>
														<option>Bellevue</option>
														<option>Grand Island</option>
														<option>Kearney</option>        													
													</optgroup>
													<optgroup label="Nevada">
														<option>Las Vegas</option>
														<option>Henderson</option>
														<option>North Las Vegas</option>
														<option>Reno</option>
														<option>Sunrise Manor</option>            													
													</optgroup>
													<optgroup label="New Hampshire">
														<option>Manchesters</option>
														<option>Nashua</option>
														<option>Concord</option>
														<option>Dover</option>
														<option>Rochester</option>              													
													</optgroup>
													<optgroup label="New Jersey">
														<option>Newark</option>
														<option>Jersey City</option>
														<option>Paterson</option>
														<option>Elizabeth</option>
														<option>Edison</option> 
													</optgroup>
													<optgroup label="New Mexico">
														<option>Albuquerque</option>
														<option>Las Cruces</option>
														<option>Rio Rancho</option>
														<option>Santa Fe</option>
														<option>Roswell</option>       
													</optgroup>
													<optgroup label="New York">
														<option>New York</option>
														<option>Buffalo</option>
														<option>Rochester</option>
														<option>Yonkers</option>
														<option>Syracuse</option>        														
													</optgroup>
													<optgroup label="North Carolina">
														<option>Charlotte</option>
														<option>Raleigh</option>
														<option>Greensboro</option>
														<option>Winston-Salem</option>
														<option>Durham</option>          														
													</optgroup>
													<optgroup label="North Dakota">
														<option>Fargo</option>
														<option>Bismarck</option>
														<option>Grand Forks</option>
														<option>Minot</option>
														<option>West Fargo</option>
													</optgroup>
													<optgroup label="Ohio">
														<option>Columbus</option>
														<option>Cleveland</option>
														<option>Cincinnati</option>
														<option>Toledo</option>
														<option>Akron</option>      
													</optgroup>
													<optgroup label="Oklahoma">
														<option>Oklahoma City</option>
														<option>Tulsa</option>
														<option>Norman</option>
														<option>Broken Arrow</option>
														<option>Lawton</option>        														
													</optgroup>
													<optgroup label="Oregon">
														<option>Portland</option>
														<option>Eugene</option>
														<option>Salem</option>
														<option>Gresham</option>
														<option>Hillsboro</option>          														
													</optgroup>
													<optgroup label="Pennsylvania">
														<option>Philadelphia</option>
														<option>Pittsburgh</option>
														<option>Allentown</option>
														<option>Erie</option>
														<option>Reading</option>         														
													</optgroup>
													<optgroup label="Rhode Island">
														<option>Providence</option>
														<option>Warwick</option>
														<option>Cranston</option>
														<option>Pawtucket</option>
														<option>East Providence</option>   
													</optgroup>
													<optgroup label="South Carolina">
														<option>Columbia</option>
														<option>Charleston</option>
														<option>North Charleston</option>
														<option>Mount Pleasant</option>
														<option>Rock Hill</option> 
													</optgroup>
													<optgroup label="South Dakota">
														<option>Sioux Falls</option>
														<option>Rapid City</option>
														<option>Aberdeen</option>
														<option>Brookings</option>
														<option>Watertown</option> 
													</optgroup>
													<optgroup label="Tennessee">
														<option>Memphis</option>
														<option>Nashville</option>
														<option>Knoxville</option>
														<option>Chattanooga</option>
														<option>Clarksville</option>       
													</optgroup>
													<optgroup label="Texas">
														<option>Houston</option>
														<option>San Antonio</option>
														<option>Dallas</option>
														<option>Austin</option>
														<option>Fort Worth</option>   
													</optgroup>
													<optgroup label="Utah">
														<option>Salt Lake City</option>
														<option>West Valley City</option>
														<option>Provo</option>
														<option>West Jordan</option>
														<option>Orem</option>   
													</optgroup>	
													<optgroup label="Vermont">
														<option>Burlington</option>
														<option>Essex</option>
														<option>South Burlington</option>
														<option>Colchester</option>
														<option>Rutland</option>   
													</optgroup>
													<optgroup label="Virginia">
														<option>Virginia Beach</option>
														<option>Norfolk</option>
														<option>Chesapeake</option>
														<option>Arlington</option>
														<option>Richmond</option> 
													</optgroup>	
													<optgroup label="Washington">
														<option>Seattle</option>
														<option>Spokane</option>
														<option>Tacoma</option>
														<option>Vancouver</option>
														<option>Bellevue</option> 
													</optgroup>	
													<optgroup label="West Virginia">
														<option>Charleston</option>
														<option>Huntington</option>
														<option>Parkersburg</option>
														<option>Morgantown</option>
														<option>Wheeling</option> 
													</optgroup>	
													<optgroup label="Wisconsin">
														<option>Milwaukee</option>
														<option>Madison</option>
														<option>Green Bay</option>
														<option>Kenosha</option>
														<option>Racine</option>
													</optgroup>
													<optgroup label="Wyoming">
														<option>Cheyenne</option>
														<option>Casper</option>
														<option>Laramie</option>
														<option>Gillette</option>
														<option>Rock Springs</option>
													</optgroup>			
												</optgroup>
			            </select>
				</div>
				<div class="browse-category ads-list">
					<label>Browse Categories</label>
					<select class="selectpicker show-tick" data-live-search="true">
					  <option data-tokens="Jobs">Jobs</option>
					  <option data-tokens="Mobiles">Mobiles</option>
					  <option data-tokens="Electronics & Appliances">Electronics & Appliances</option>
					  <option data-tokens="Cars">Cars</option>
					  <option data-tokens="Bikes">Bikes</option>
					  <option data-tokens="Furniture">Furniture</option>
					  <option data-tokens="Pets">Pets</option>
					  <option data-tokens="Books, Sports & Hobbies">Books, Sports & Hobbies</option>
					  <option data-tokens="Fashion">Fashion</option>
					  <option data-tokens="Kids">Kids</option>
					  <option data-tokens="Services">Services</option>
					  <option data-tokens="Real Estate">Real Estate</option>
					</select>
				</div>
				<div class="search-product ads-list">
					<label>Search for a specific product</label>
					<div class="search">
						<div id="custom-search-input">
						<div class="input-group">
							<input type="text" class="form-control input-lg" placeholder="Buscar" />
							<span class="input-group-btn">
								<button class="btn btn-info btn-lg" type="button">
									<i class="glyphicon glyphicon-search"></i>
								</button>
							</span>
						</div>
					</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="ads-grid">
				<div class="side-bar col-md-3">
					<div class="search-hotel">
					<h3 class="agileits-sear-head">Name contains</h3>
					<form>
						<input type="text" value="Product name..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Product name...';}" required="">
						<input type="submit" value=" ">
					</form>
				</div>
				
				<div class="range">
					<h3 class="agileits-sear-head">Price range</h3>
							<ul class="dropdown-menu6">
								<li>
									                
									<div id="slider-range"></div>							
										<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
									</li>			
							</ul>
							<!---->
							<script type="text/javascript" src="js/jquery-ui.js"></script>
							<script type='text/javascript'>//<![CDATA[ 
							$(window).load(function(){
							 $( "#slider-range" ).slider({
										range: true,
										min: 0,
										max: 9000,
										values: [ 50, 6000 ],
										slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
										}
							 });
							$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

							});//]]>  

							</script>
							
				</div>				
					<div class="w3-brand-select">
					<h3 class="agileits-sear-head">Position type</h3>
						<select class="selectpicker" data-live-search="">
						  <option data-tokens="All">All</option>
						  <option data-tokens="Full-Time">Full-Time</option>
						  <option data-tokens="Part-Time">Part-Time</option>
						  <option data-tokens="Contract">Contract</option>
						  <option data-tokens="Temporary">Temporary</option>
						</select>
					</div>
				<div class="w3ls-featured-ads">
					<h2 class="sear-head fer">Featured Ads</h2>
					<div class="w3l-featured-ad">
						<a href="single.html">
							<div class="w3-featured-ad-left">
								<img src="images/f1.jpg" title="ad image" alt="" />
							</div>
							<div class="w3-featured-ad-right">
								<h4>Lorem Ipsum is simply dummy text of the printing industry</h4>
								<p>$ 450</p>
							</div>
							<div class="clearfix"></div>
						</a>
					</div>
					<div class="w3l-featured-ad">
						<a href="single.html">
							<div class="w3-featured-ad-left">
								<img src="images/f2.jpg" title="ad image" alt="" />
							</div>
							<div class="w3-featured-ad-right">
								<h4>Lorem Ipsum is simply dummy text of the printing industry</h4>
								<p>$ 380</p>
							</div>
							<div class="clearfix"></div>
						</a>
					</div>
					<div class="w3l-featured-ad">
						<a href="single.html">
							<div class="w3-featured-ad-left">
								<img src="images/f2.jpg" title="ad image" alt="" />
							</div>
							<div class="w3-featured-ad-right">
								<h4>Lorem Ipsum is simply dummy text of the printing industry</h4>
								<p>$ 560</p>
							</div>
							<div class="clearfix"></div>
						</a>
					</div>
					<div class="clearfix"></div>
				</div>
				</div>
				<div class="agileinfo-ads-display col-md-9">
					<div class="wrapper">					
					<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					  <ul id="myTab" class="nav nav-tabs nav-tabs-responsive" role="tablist">
						<li role="presentation" class="active">
						  <a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
							<span class="text">Offering Jobs</span>
						  </a>
						</li>
						<li role="presentation" class="next">
						  <a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
							<span class="text">Seeking Jobs</span>
						  </a>
						</li>
					  </ul>
					  <div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
						   <div>
												<div id="container">
								<div class="view-controls-list" id="viewcontrols">
									<label>view :</label>
									<a class="gridview"><i class="glyphicon glyphicon-th"></i></a>
									<a class="listview active"><i class="glyphicon glyphicon-th-list"></i></a>
								</div>
								<div class="clearfix"></div>
							<ul class="list">
								<a href="single.html">
									<li>
									<section class="list-left">
									<h5 class="title">There are many variations of passages of Lorem Ipsum</h5>
									<p class="catpath">Jobs » Customer Service</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:55</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<section class="list-left">
									<h5 class="title">It is a long established fact that a reader</h5>
									<p class="catpath">Jobs » Customer Service</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:45</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<section class="list-left">
									<h5 class="title">Contrary to popular belief, Lorem Ipsum is not</h5>
									<p class="catpath">Jobs » Customer Service</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:30</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<section class="list-left">
									<h5 class="title">The standard chunk of Lorem Ipsum used since the</h5>
									<p class="catpath">Jobs » Customer Service</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:25</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<section class="list-left">
									<h5 class="title">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</h5>
									<p class="catpath">Jobs » Customer Service</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:24</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<section class="list-left">
									<h5 class="title">But I must explain to you how all this mistaken idea of denouncing</h5>
									<p class="catpath">Jobs » Customer Service</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:22</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<section class="list-left">
									<h5 class="title">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</h5>
									<p class="catpath">Jobs » Customer Service</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:21</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<section class="list-left">
									<h5 class="title">On the other hand, we denounce with righteous dislike men</h5>
									<p class="catpath">Jobs » Customer Service</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:20</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<section class="list-left">
									<h5 class="title">There are many variations of passages of Lorem Ipsum</h5>
									<p class="catpath">Jobs » Customer Service</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:05</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<section class="list-left">
									<h5 class="title">ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et qua</h5>
									<p class="catpath">Jobs » Customer Service</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:04</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<section class="list-left">
									<h5 class="title">There are many variations of passages of Lorem Ipsum</h5>
									<p class="catpath">Jobs » Customer Service</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:03</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<section class="list-left">
									<h5 class="title">who are so beguiled and demoralized by the charms of pleasure of the moment</h5>
									<p class="catpath">Jobs » Customer Service</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:03</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<section class="list-left">
									<h5 class="title">you need to be sure there isn't anything embarrassing hidden</h5>
									<p class="catpath">Jobs » Customer Service</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:03</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<section class="list-left">
									<h5 class="title">looked up one of the more obscure Latin words</h5>
									<p class="catpath">Jobs » Customer Service</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:02</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								<div class="clearfix"></div>
								</a>
							</ul>
						</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
						 <div>
												<div id="container">
								<div class="view-controls-list" id="viewcontrols">
									<label>view :</label>
									<a class="gridview"><i class="glyphicon glyphicon-th"></i></a>
									<a class="listview active"><i class="glyphicon glyphicon-th-list"></i></a>
								</div>
								<div class="clearfix"></div>
							<ul class="list">
								<a href="single.html">
									<li>
									<section class="list-left">
									<h5 class="title">There are many variations of passages of Lorem Ipsum</h5>
									<p class="catpath">Jobs » Customer Service</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:55</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<section class="list-left">
									<h5 class="title">It is a long established fact that a reader</h5>
									<p class="catpath">Jobs » Customer Service</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:45</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<section class="list-left">
									<h5 class="title">Contrary to popular belief, Lorem Ipsum is not</h5>
									<p class="catpath">Jobs » Customer Service</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:30</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<section class="list-left">
									<h5 class="title">The standard chunk of Lorem Ipsum used since the</h5>
									<p class="catpath">Jobs » Customer Service</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:25</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<section class="list-left">
									<h5 class="title">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</h5>
									<p class="catpath">Jobs » Customer Service</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:24</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<section class="list-left">
									<h5 class="title">But I must explain to you how all this mistaken idea of denouncing</h5>
									<p class="catpath">Jobs » Customer Service</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:22</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<section class="list-left">
									<h5 class="title">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</h5>
									<p class="catpath">Jobs » Customer Service</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:21</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<section class="list-left">
									<h5 class="title">On the other hand, we denounce with righteous dislike men</h5>
									<p class="catpath">Jobs » Customer Service</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:20</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<section class="list-left">
									<h5 class="title">There are many variations of passages of Lorem Ipsum</h5>
									<p class="catpath">Jobs » Customer Service</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:05</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<section class="list-left">
									<h5 class="title">ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et qua</h5>
									<p class="catpath">Jobs » Customer Service</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:04</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<section class="list-left">
									<h5 class="title">There are many variations of passages of Lorem Ipsum</h5>
									<p class="catpath">Jobs » Customer Service</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:03</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<section class="list-left">
									<h5 class="title">who are so beguiled and demoralized by the charms of pleasure of the moment</h5>
									<p class="catpath">Jobs » Customer Service</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:03</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<section class="list-left">
									<h5 class="title">you need to be sure there isn't anything embarrassing hidden</h5>
									<p class="catpath">Jobs » Customer Service</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:03</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<section class="list-left">
									<h5 class="title">looked up one of the more obscure Latin words</h5>
									<p class="catpath">Jobs » Customer Service</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:02</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								<div class="clearfix"></div>
								</a>
							</ul>
						</div>
							</div>
						</div>
						<ul class="pagination pagination-sm">
							<li><a href="#">Prev</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">6</a></li>
							<li><a href="#">7</a></li>
							<li><a href="#">8</a></li>
							<li><a href="#">Next</a></li>
						</ul>
					  </div>
					</div>
				</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>	
	</div>
	<!-- // Jobs -->
@endsection