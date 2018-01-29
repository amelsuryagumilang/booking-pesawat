	<!--//header-->
	<!-- banner -->
	<div class="banner holidays-banner">
		<!-- container -->
		<div class="container">
			<div class="col-md-4 banner-left">
				<section class="slider2">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="slider-info">
									<img src="<?php echo URL_ASSETS;?>frontend/images/5.jpg" alt="">
								</div>
							</li>
							<li>
								<div class="slider-info">
									<img src="<?php echo URL_ASSETS;?>frontend/images/6.jpg" alt="">
								</div>
							</li>
							<li>	
								<div class="slider-info">
									<img src="<?php echo URL_ASSETS;?>frontend/images/7.jpg" alt="">
								</div>
							</li>
							<li>	
								<div class="slider-info">
									<img src="<?php echo URL_ASSETS;?>frontend/images/8.jpg" alt="">
								</div>
							</li>
							<li>	
								<div class="slider-info">
									<img src="<?php echo URL_ASSETS;?>frontend/images/6.jpg" alt="">
								</div>
							</li>
						</ul>
					</div>
				</section>
				<!--FlexSlider-->
			</div>
			<div class="col-md-8 banner-right">
				<div class="sap_tabs">	
					<div class="booking-info about-booking-info">
						<h2>Planning a weekend holiday</h2>
					</div>
					<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">	
						  <!---->		  	 
									<div class="facts weekend-facts">
										<div class="booking-form train-form">
										<link rel="stylesheet" href="<?php echo URL_ASSETS;?>frontend/css/jquery-ui.css" />
											<!---strat-date-piker---->
											<script>
												$(function() {
													$( "#datepicker,#datepicker1" ).datepicker();
												});
											</script>
											<!---/End-date-piker---->
											<!-- Set here the key for your domain in order to hide the watermark on the web server -->
											
											<div class="online_reservation">
													<div class="b_room">
														<div class="booking_room">
															<div class="reservation">
																<ul>		
																	<li  class="span1_of_1 desti about-desti">
																		 <h5>Destination</h5>
																		 <div class="book_date">
																			 <form>
																				<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
																				<input type="text" placeholder="City, Area or Hotel Name" class="typeahead1 input-md form-control tt-input" required="">
																			 </form>
																		 </div>					
																	 </li>
																</ul>
															</div>
															<div class="reservation">
																<ul>	
																	 <li  class="span1_of_1">
																		 <h5>Check in</h5>
																		 <div class="book_date">
																		 <form>
																			<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
																			<input type="date" value="Select date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Select date';}">
																		</form>
																		 </div>		
																	 </li>
																	 <li  class="span1_of_1 left">
																		 <h5>Check out</h5>
																		 <div class="book_date">
																			 <form>
																				<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
																				<input type="date" value="Select date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Select date';}">
																			</form>
																		 </div>					
																	 </li>
																	 <li class="span1_of_1 left w-adult">
																		 <h5>Adults (18+)</h5>
																		 <!----------start section_room----------->
																		 <div class="section_room">
																			  <select id="country" onchange="change_country(this.value)" class="frm-field required">
																					<option value="null">1</option>
																					<option value="null">2</option>         
																					<option value="AX">3</option>
																					<option value="AX">4</option>
																					<option value="AX">5</option>
																					<option value="AX">6</option>
																			  </select>
																		 </div>	
																	</li>
																	<li class="span1_of_1 left w-child">
																		 <h5>Children (0-17)</h5>
																		 <!----------start section_room----------->
																		 <div class="section_room">
																			  <select id="country" onchange="change_country(this.value)" class="frm-field required">
																					<option value="null">1</option>
																					<option value="null">2</option>         
																					<option value="AX">3</option>
																					<option value="AX">4</option>
																					<option value="AX">5</option>
																					<option value="AX">6</option>
																			  </select>
																		 </div>	
																	</li>
																	<li class="span1_of_1 w-rooms">
																		 <h5>Rooms</h5>
																		 <!----------start section_room----------->
																		 <div class="section_room">
																			  <select id="country" onchange="change_country(this.value)" class="frm-field required">
																					<option value="null">1</option>
																					<option value="null">2</option>         
																					<option value="AX">3</option>
																					<option value="AX">4</option>
																					<option value="AX">5</option>
																					<option value="AX">6</option>
																			  </select>
																		 </div>	
																	</li>
																	 <div class="clearfix"></div>
																</ul>
															</div>
															<div class="reservation">
																<ul>	
																	 <li class="span1_of_3">
																			<div class="date_btn">
																				<form>
																					<input type="submit" value="Search" />
																				</form>
																			</div>
																	 </li>
																	 <div class="clearfix"></div>
																</ul>
															</div>
														</div>
														<div class="clearfix"></div>
													</div>
											</div>
											<!---->
										</div>	
									</div>
					</div>	
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- //container -->
	</div>
	<!-- //banner -->
	<div class="move-text">
		<div class="marquee">Register your hotel with us free of cost.<a href="<?php echo base_url(); ?>user_con/signup_user">Here</a></div>
		<script type="text/javascript" src="<?php echo URL_ASSETS;?>frontend/js/jquery.marquee.min.js"></script>
        <script>
		  $('.marquee').marquee({ pauseOnHover: true });
		  //@ sourceURL=pen.js
		</script>
	</div>
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<!-- container -->
		<div class="container">
			<div class="banner-bottom-info">
				<h3>Check out our various weekend getaway deals here!</h3>
			</div>
			<div class="banner-bottom-grids">
				<div class="col-md-4 weekend-grids">
					<div class="weekend-grid">
						<a href="products.html">
							<img src="<?php echo URL_ASSETS;?>frontend/images/w1.jpg" alt="" />
							<div class="weekend-grid-info">
								<h5>Dubai</h5>
								<div class="rating">
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</div>
								<h6>Guest Rating 4.1 out of 5</h6>
								<h4>Prices From</h4>
								<p>$ 500</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 weekend-grids">
					<div class="weekend-grid">
						<a href="products.html">
							<img src="<?php echo URL_ASSETS;?>frontend/images/w2.jpg" alt="" />
							<div class="weekend-grid-info">
								<h5>Thailand</h5>
								<div class="rating">
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</div>
								<h6>Guest Rating 2.9 out of 5</h6>
								<h4>Prices From</h4>
								<p>$ 190</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 weekend-grids">
					<div class="weekend-grid">
						<a href="products.html">
							<img src="<?php echo URL_ASSETS;?>frontend/images/w3.jpg" alt="" />
							<div class="weekend-grid-info">
								<h5>Lanzarote</h5>
								<div class="rating">
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</div>
								<h6>Guest Rating 3.5 out of 5</h6>
								<h4>Prices From</h4>
								<p>$ 420</p>
							</div>
						</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="banner-bottom-grids">
				<div class="col-md-4 weekend-grids">
					<div class="weekend-grid">
						<a href="products.html">
							<img src="<?php echo URL_ASSETS;?>frontend/images/w4.jpg" alt="" />
							<div class="weekend-grid-info">
								<h5>France</h5>
								<div class="rating">
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</div>
								<h6>Guest Rating 3 out of 5</h6>
								<h4>Prices From</h4>
								<p>$ 370</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 weekend-grids">
					<div class="weekend-grid">
						<a href="products.html">
							<img src="<?php echo URL_ASSETS;?>frontend/images/w1.jpg" alt="" />
							<div class="weekend-grid-info">
								<h5>Dubai</h5>
								<div class="rating">
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</div>
								<h6>Guest Rating 4.1 out of 5</h6>
								<h4>Prices From</h4>
								<p>$ 500</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 weekend-grids">
					<div class="weekend-grid">
						<a href="products.html">
							<img src="<?php echo URL_ASSETS;?>frontend/images/w2.jpg" alt="" />
							<div class="weekend-grid-info">
								<h5>Thailand</h5>
								<div class="rating">
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</div>
								<h6>Guest Rating 2.9 out of 5</h6>
								<h4>Prices From</h4>
								<p>$ 190</p>
							</div>
						</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="banner-bottom-grids">
				<div class="col-md-4 weekend-grids">
					<div class="weekend-grid">
						<a href="products.html">
							<img src="<?php echo URL_ASSETS;?>frontend/images/w3.jpg" alt="" />
							<div class="weekend-grid-info">
								<h5>Lanzarote</h5>
								<div class="rating">
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</div>
								<h6>Guest Rating 3.5 out of 5</h6>
								<h4>Prices From</h4>
								<p>$ 420</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 weekend-grids">
					<div class="weekend-grid">
						<a href="products.html">
							<img src="<?php echo URL_ASSETS;?>frontend/images/w4.jpg" alt="" />
							<div class="weekend-grid-info">
								<h5>France</h5>
								<div class="rating">
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</div>
								<h6>Guest Rating 3 out of 5</h6>
								<h4>Prices From</h4>
								<p>$ 370</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 weekend-grids">
					<div class="weekend-grid">
						<a href="products.html">
							<img src="<?php echo URL_ASSETS;?>frontend/images/w1.jpg" alt="" />
							<div class="weekend-grid-info">
								<h5>Dubai</h5>
								<div class="rating">
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
								</div>
								<h6>Guest Rating 4.1 out of 5</h6>
								<h4>Prices From</h4>
								<p>$ 500</p>
							</div>
						</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //container -->
	</div>