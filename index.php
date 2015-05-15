<!DOCTYPE html>
<html>
	<head>
		
		<link rel="stylesheet" href="css/jquery.mobile-1.4.5.css">

		<script src="js/jquery-1.11.2.js"></script>
		<script>
		    $(document).on("mobileinit", function(evt) {
		      // Change some settings
		    	$.mobile.defaultPageTransition = "flip";
		    	$.mobile.pageLoadErrorMessage = "Whoops!";
		    	$.mobile.pageLoadErrorMessageTheme = "b";
			});
		</script>
		<script src="js/jquery.mobile-1.4.5.js"></script>
		<link rel="stylesheet" href="css/slicknav.css" />
		<script src="js/jquery.slicknav.js"></script>
		<script type="text/javascript" src="js/responsiveslides.js"></script>
		<link rel="stylesheet" href="css/style-mobile.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script>
			
			$(function(){
			   	$( "[data-role='header'], [data-role='footer']" ).toolbar();
			});	    	
		   	$(function(){
				$('#menu').slicknav({
					prependTo:'#navigation-menu'
				});
			});
			$(function(){
				$('#menu-contact').slicknav({
					prependTo:'#navigation-menu-contact'
				});
			});
			$(function(){
				$('#menu-home').slicknav({
					prependTo:'#navigation-menu-home'
				});
			});
			$(function(){
				$('#menu-ourteam').slicknav({
					prependTo:'#navigation-menu-ourteam'
				});
			});
			$(function(){
				$('#menu-patientinfo').slicknav({
					prependTo:'#navigation-menu-patientinfo'
				});
			});
			$(function(){
				$('#menu-services').slicknav({
					prependTo:'#navigation-menu-services'
				});
			});
			$(function(){
				$('#menu-patientform').slicknav({
					prependTo:'#navigation-menu-patientform'
				});
			});
			$(function(){
				$('#menu-newbuffalo').slicknav({
					prependTo:'#navigation-menu-newbuffalo'
				});
			});
            $(function(){
                $('#menu-pricing').slicknav({
                    prependTo:'#navigation-menu-pricing'
                });
            });
            $(function(){
                $('#menu-virtual').slicknav({
                    prependTo:'#navigation-menu-virtual'
                });
            });
			$(function () {

		      // Slideshow 4
		      	$("#slider4").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });
		    $(function () {

		      // Slideshow web
		      	$("#slider-web").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: false,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });		
			
    	</script>
    	
	</head>
	<body>
		
		<?php 
			include 'settings.php';
			
			
		?>
		<div id="header-image" data-role="header" data-theme="<?php echo $theme ?>" data-position="fixed">
		    <h1><img src="img/logo.png" alt="LOGO"></h1>
		</div>
		<div data-role="footer" data-theme="<?php echo $theme ?>" data-position="fixed">
		    <h1 style="color: white;">Powered by <a href="http://mobilegrows.com/" rel="external">MobileGrows </a>|<a href="http://m.immarketing.me/Northwood-Creek" rel="external"> Desktop Site</a></h1>
		</div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<div data-role="page" id="page1" data-theme="<?php echo $theme ?>">
		  

		  <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
		  		<!-- Jssor Slider Begin -->
			  	<div class="callbacks_container">
				    <ul class="rslides" id="slider4">
				      <li>
				        <img src="img/slider-images/1slide.jpg" alt="">
				        <!-- <p class="caption">This is a caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/2slide.jpg" alt="">
				        <!-- <p class="caption">This is another caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/3slide.jpg" alt="">
				        <!-- <p class="caption">The third caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/4slide.jpg" alt="">
				        <!-- <p class="caption">The third caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/5slide.jpg" alt="">
				        <!-- <p class="caption">The third caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/6slide.jpg" alt="">
				        <!-- <p class="caption">The third caption</p> -->
				      </li>
				    </ul>
			    </div>
			    <!-- Jssor Slider End -->
				<fieldset class="ui-grid-a" data-theme="<?php echo $theme ?>">
					<!-- OVDJE SE UPISUJE BROJ TELEFONA KOJI TREBA POZVATI  -->
					<div class="ui-block-a"><a class="ui-btn ui-icon-phone ui-btn-icon-left buttons-radius" href="tel:<?php echo $telephone ?>">Call US</a></div>
					<!-- ovdje se upisuje grad i adresa iz koje  -->
					<div class="ui-block-b" id="findUS">
						<script>
							var ua = navigator.userAgent;
							if(/Android|webOS|Opera Mini/i.test(navigator.userAgent) ) {
								console.log("Android uslo");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}
							else if(/iPhone|iPad|iPod/i.test(navigator.userAgent)){
								console.log("Iphone ");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"http://maps.google.com/?daddr=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?> ");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}
							else if (ua.indexOf("BlackBerry") >= 0) {

									console.log("Blakberu je prosao ")
									var prostordugme=document.getElementById('findUS');
									var dugme= document.createElement('a');
									dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
									dugme.setAttribute('href',"javascript:blackberry.launch.newMap({'address':{'address1':'<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>'}});");
									dugme.innerHTML="Find US";
									prostordugme.appendChild(dugme);
									}		
							else {
								console.log("nije nigdje uslo default ")
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}

							

							// if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
							// // some code..
							// }

						</script>
						
						

					</div>	   
				</fieldset>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#about" data-transition="<?php echo $transitionefect ?>">About US</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#floor" data-transition="<?php echo $transitionefect ?>">Floor Plans</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#community" data-transition="<?php echo $transitionefect ?>">Community Amenities</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#pricing" data-transition="<?php echo $transitionefect ?>">Pricing & Information</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="https://www.google.com/maps?layer=c&z=17&sll=34.840365,-92.376565&cid=12711291544273176021&panoid=5_r6XwwloDUAAAGu0Zvoew&cbp=13,196.44274895620794,,0,0&q=The+Villas+at+Northwood+Creek,+8910+Northwood+Creek+Drive+North+Little+Rock,+AR+72113&sa=X&ei=5eZDU_m-GoXe2AXi9IHQBg&ved=0CKMBEKAfMAo" data-transition="<?php echo $transitionefect ?>">Virtual 360 Tour</a></div>
				</div>

              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">

                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-mail ui-btn-icon-left buttons-radius" href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact US</a></div>

              </div>
		  </div>
		  

		</div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- page home ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="home" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-home">
						<ul id="menu-home">
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
							<li><a href="#about" data-transition="<?php echo $transitionefect ?>">About US</a></li>
							<li><a href="#floor" data-transition="<?php echo $transitionefect ?>">Floor Plans</a></li>
							<li><a href="#community" data-transition="<?php echo $transitionefect ?>">Community Amenities</a></li>
							<li><a href="#pricing" data-transition="<?php echo $transitionefect ?>">Pricing & Information</a></li>
							<li><a href="https://www.google.com/maps?layer=c&z=17&sll=34.840365,-92.376565&cid=12711291544273176021&panoid=5_r6XwwloDUAAAGu0Zvoew&cbp=13,196.44274895620794,,0,0&q=The+Villas+at+Northwood+Creek,+8910+Northwood+Creek+Drive+North+Little+Rock,+AR+72113&sa=X&ei=5eZDU_m-GoXe2AXi9IHQBg&ved=0CKMBEKAfMAo" data-transition="<?php echo $transitionefect ?>">Virtual 360 Tour</a></li>
							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact US</a></li>
						</ul>
					</section>
					<p>This is only a <strong>preview</strong> version of your Mobile Website.</p>
					<p>Please contact our official Sales Represcutative for Full Functional <strong>Version.</strong></p>
					

				</div>

			</div>	
				
				
		</div>
		
	<!-- page home ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		

		<!--contact form///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="contactform" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-contact">
							<ul id="menu-contact">
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                                <li><a href="#about" data-transition="<?php echo $transitionefect ?>">About US</a></li>
                                <li><a href="#floor" data-transition="<?php echo $transitionefect ?>">Floor Plans</a></li>
                                <li><a href="#community" data-transition="<?php echo $transitionefect ?>">Community Amenities</a></li>
                                <li><a href="#pricing" data-transition="<?php echo $transitionefect ?>">Pricing & Information</a></li>
                                <li><a href="https://www.google.com/maps?layer=c&z=17&sll=34.840365,-92.376565&cid=12711291544273176021&panoid=5_r6XwwloDUAAAGu0Zvoew&cbp=13,196.44274895620794,,0,0&q=The+Villas+at+Northwood+Creek,+8910+Northwood+Creek+Drive+North+Little+Rock,+AR+72113&sa=X&ei=5eZDU_m-GoXe2AXi9IHQBg&ved=0CKMBEKAfMAo" data-transition="<?php echo $transitionefect ?>">Virtual 360 Tour</a></li>

							</ul>
					</section>	
					<div>
						<form data-parsley-validate method="post" action="mail.php" data-ajax="false">
							Name: <input type="text" id="naam" name="naam" value="" placeholder="Name" required/>
							E-mail: <input type="email" id="mail" name="mail" value="" placeholder="E-mail" required/>
							Phone Number: <input type="tel" id="telefoon" name="telefoon" value="" placeholder="Phone"/>
							Subject: <input type="text" id="onderwerp" name="onderwerp" value="" placeholder="Subject" required/>
							Message:
							<textarea style="height:100px;" id="bericht" name="bericht" placeholder="Enter your message here..." required></textarea>
							<input type="submit" value="Send" name="submit" class="btn">
						</form>
					</div>
				</div>
			</div>
		
		</div>

		<!--page contact ends///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


		<!--About US///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="about" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-ourteam">
							<ul id="menu-ourteam">
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                                <li><a href="#floor" data-transition="<?php echo $transitionefect ?>">Floor Plans</a></li>
                                <li><a href="#community" data-transition="<?php echo $transitionefect ?>">Community Amenities</a></li>
                                <li><a href="#pricing" data-transition="<?php echo $transitionefect ?>">Pricing & Information</a></li>
                                <li><a href="https://www.google.com/maps?layer=c&z=17&sll=34.840365,-92.376565&cid=12711291544273176021&panoid=5_r6XwwloDUAAAGu0Zvoew&cbp=13,196.44274895620794,,0,0&q=The+Villas+at+Northwood+Creek,+8910+Northwood+Creek+Drive+North+Little+Rock,+AR+72113&sa=X&ei=5eZDU_m-GoXe2AXi9IHQBg&ved=0CKMBEKAfMAo" data-transition="<?php echo $transitionefect ?>">Virtual 360 Tour</a></li>
                                <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact US</a></li>
							</ul>
					</section>
                    <h3>About US</h3>
                    <img src="img/about.jpg" class="img">
                    <p>Come experience the lifestyle and amenities of a premier gated community, but without the heavy price tag. The Villas at Northwood Creek is located in the heart of Maumelle Arkansas, strategically tucked away to provide you with a safe community atmosphere, perfect for relaxing after a hard day. This unique community provides the perfect combination of entertainment and privacy that one would expect from a luxury development.</p>
					
				</div>
			</div>
		
		</div>
		<!--About US ends///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<!--Froor Plans///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="floor" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-patientinfo">
							<ul id="menu-patientinfo">
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                                <li><a href="#about" data-transition="<?php echo $transitionefect ?>">About US</a></li>
                                <li><a href="#community" data-transition="<?php echo $transitionefect ?>">Community Amenities</a></li>
                                <li><a href="#pricing" data-transition="<?php echo $transitionefect ?>">Pricing & Information</a></li>
                                <li><a href="https://www.google.com/maps?layer=c&z=17&sll=34.840365,-92.376565&cid=12711291544273176021&panoid=5_r6XwwloDUAAAGu0Zvoew&cbp=13,196.44274895620794,,0,0&q=The+Villas+at+Northwood+Creek,+8910+Northwood+Creek+Drive+North+Little+Rock,+AR+72113&sa=X&ei=5eZDU_m-GoXe2AXi9IHQBg&ved=0CKMBEKAfMAo" data-transition="<?php echo $transitionefect ?>">Virtual 360 Tour</a></li>
                                <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact US</a></li>
							</ul>
					</section>
                    <h3><strong>Floor Plans</strong></h3>
                    <img src="img/floor.jpg" class="img">
                    <h3><strong>Our Four Plex Units</strong></h3>
                    <p>All rooms are lavishly appointed with hardwood flooring, carpet in the bedrooms, and tile in the the sun room, laundry room and baths. The kitchen has beautiful granite counter tops and comes equipped with stainless steel refrigerator and icemaker, full size range, microwave, double sink, dish washer and garbage disposal. A full size washer and dryer are provided for your convenience, along with&nbsp;your very own sun room, covered parking and fenced patio area.</p>
                    <h3><strong>Our&nbsp;Duplex Units</strong></h3>

                    <p>All rooms are lavishly appointed with wood flooring and tile in the laundry room and baths. The kitchen has beautiful granite counter tops and comes equipped with side by side stainless steel refrigerator and icemaker, full size range, microwave, double sink, dish washer and garbage disposal. This home features a pantry, dining area, fenced back yard, two car garage and a storage area. A full size washer and dryer are provided for your convenience.</p>
				</div>
			</div>
		
		</div>
		<!--Floor Plans ends///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<!--Community Amenities///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="community" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-services">
							<ul id="menu-services">
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                                <li><a href="#about" data-transition="<?php echo $transitionefect ?>">About US</a></li>
                                <li><a href="#floor" data-transition="<?php echo $transitionefect ?>">Floor Plans</a></li>
                                <li><a href="#pricing" data-transition="<?php echo $transitionefect ?>">Pricing & Information</a></li>
                                <li><a href="https://www.google.com/maps?layer=c&z=17&sll=34.840365,-92.376565&cid=12711291544273176021&panoid=5_r6XwwloDUAAAGu0Zvoew&cbp=13,196.44274895620794,,0,0&q=The+Villas+at+Northwood+Creek,+8910+Northwood+Creek+Drive+North+Little+Rock,+AR+72113&sa=X&ei=5eZDU_m-GoXe2AXi9IHQBg&ved=0CKMBEKAfMAo" data-transition="<?php echo $transitionefect ?>">Virtual 360 Tour</a></li>
                                <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact US</a></li>
							</ul>
					</section>
                    <h3><strong>Community Amenities</strong></h3>
                    <img src="img/community.jpg" class="img">
					<h3><strong>Community Amenities</strong></h3>
                    <ul>
                        <li>Guard Shack &amp; Security Gate</li>
                        <li>Game Room with Billiards &amp; Card Tables</li>
                        <li>Large Stone Fireplace with Big Screen TV</li>
                        <li>5,400 Sqft. Community Clubhouse Building</li>
                        <li>Karaoke Stage&nbsp;for Bands with Large Dance Floor</li>
                        <li>Beautiful Landscaping &amp; Outdoor Water Features</li>
                        <li>Fitness &amp; Exercise Facility</li>
                        <li>Tanning Facilities</li>
                        <li>Walking Trail</li>
                        <li>Coffee Bar</li>
                        <li>Full Kitchen</li>
                        <li>Swimming Pool</li>
                        <li>Internet Cafe</li>
                        <hr>
                    </ul>
                    <p>Exceptional Style &amp; Design</p>
                    <p>Welcome! You have arrived at the Villas at Northwood Creek, a place you will be proud to call home. You will experience something special right away, including meticulously maintained grounds, outdoor water features, and the peace of mind that comes with a security system and a gated entrance.</p>
                    <p>We are conveniently located on 20 beautiful, wooded acres between Maumelle and North Little Rock, Arkansas. Just minutes from Little Rock, you'll enjoy the entertainment of the city, but also have a peaceful setting you can come home to. The Villas feature luxurious 2 bed / 2 bath garden-style homes. We strive to create an atmosphere of comfortable leisure, free from the worries of home ownership.</p>

				</div>
			</div>
		
		</div>
		<!--Community Amenities ends///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<!--Pricing & Information///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <div id="pricing" data-role="page" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" >
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-pricing">
                            <ul id="menu-pricing">
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                                <li><a href="#about" data-transition="<?php echo $transitionefect ?>">About US</a></li>
                                <li><a href="#floor" data-transition="<?php echo $transitionefect ?>">Floor Plans</a></li>
                                <li><a href="#community" data-transition="<?php echo $transitionefect ?>">Community Amenities</a></li>
                                <li><a href="https://www.google.com/maps?layer=c&z=17&sll=34.840365,-92.376565&cid=12711291544273176021&panoid=5_r6XwwloDUAAAGu0Zvoew&cbp=13,196.44274895620794,,0,0&q=The+Villas+at+Northwood+Creek,+8910+Northwood+Creek+Drive+North+Little+Rock,+AR+72113&sa=X&ei=5eZDU_m-GoXe2AXi9IHQBg&ved=0CKMBEKAfMAo" data-transition="<?php echo $transitionefect ?>">Virtual 360 Tour</a></li>
                                <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact US</a></li>
                            </ul>
                        </section>

                        <h3><strong>Pricing & Information</strong> </h3>
                        <img src="img/princing.jpg" class="img">
                    <h3>Cost Comparison</h3>
                    <p>As you weigh the advantages of moving to The Villas at Northwood Creek, it may be helpful to compare the cost of living in a community to the cost of living in your own home. You might be surprised at how expensive owning a home really is, and how much money you can save, or how much more leisure your life can be, living at The Villas at Northwood Creek. Take a moment to compare your current monthly costs with those listed below that are provided to residents of The Villas at Northwood Creek.</p>
                    <h3><strong>PRICING:</strong></h3>
                    <p><strong>Four plex (1,036 sf):</strong>One Year Lease = $1,195/month or Two Year Lease = $1,095/month</p>
                    <p><strong>Duplex (1,215 sf):</strong>One Year Lease = $1,595/month or Two Year Lease = $1,495/month</p>
				</div>
			</div>

		</div>
		<!--Pricing & Information ends / ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<!--Virtual 360 Tour///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="virtual" data-role="page"  data-theme="<?php echo $theme ?>" >
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu-virtual">
                        <ul id="menu-virtual">
                            <li><a href="#home" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#ourteam" data-transition="<?php echo $transitionefect ?>">Our Team</a></li>
                            <li><a href="#patientinfo" data-transition="<?php echo $transitionefect ?>">Patient Info</a></li>
                            <li><a href="#services" data-transition="<?php echo $transitionefect ?>">Services</a></li>
                            <li><a href="#patientform" data-transition="<?php echo $transitionefect ?>">Patient Forms</a></li>
                            <li><a href="#newbuffalo" data-transition="<?php echo $transitionefect ?>">NEW Buffalo Grove Office</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact US</a></li>
                        </ul>
                    </section>

				</div>
			</div>

		</div>
		<!--Virtual 360 Tour ends///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->




		<div id="succes" data-role="page" data-theme="<?php echo $theme ?>" >		
			<div data-role="main" class="ui-content" >	
			 <p>The contact form was sent succesful!</p>
			
		</div>
		
		</div>
<!--page succes ends here///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="error" data-role="page" >
		
			<div data-role="main" class="ui-content" >	
				<p>The contact form was sent because of an error!</p>
			</div>
		
		</div>
<!--erroor ends here////////////////////////////////////////////////////////////////////////////////////////////////////-->
	
	
		<script type="text/javascript" src="js/responsiveslides.js"></script>    
	
	   
		
	</body>
</html>
