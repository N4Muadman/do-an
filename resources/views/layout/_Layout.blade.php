<!DOCTYPE html>
<!--
Template Name: Movie Pro
Version: 1.0.0
Author: Webstrot

-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="zxx">
<!--[endif]-->


<!-- Mirrored from www.webstrot.com/html/moviepro/html/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Oct 2023 08:15:42 GMT -->
<head>
	<meta charset="utf-8" />
	<title>Movie Pro Responsive HTML Template</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta name="description" content="Movie Pro" />
	<meta name="keywords" content="Movie Pro" />
	<meta name="author" content="" />
	<meta name="MobileOptimized" content="320" />
	<!--Template style -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/fonts.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/flaticon.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/owl.theme.default.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/dl-menu.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/nice-select.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/venobox.css') }}" />
    @yield('styles')
	<!-- favicon links -->
	<link rel="shortcut icon" type="image/png" href="{{ asset('images/header/favicon.ico') }}" />
</head>

<body>
	<!-- preloader Start -->
	<div id="preloader">
		<div id="status">
			<img src="{{ asset('images/header/horoscope.gif') }}" id="preloader_image" alt="loader">
		</div>
	</div>
	<!-- prs navigation Start -->
	<div class="prs_navigation_main_wrapper">
		<div class="container-fluid">
			<div id="search_open" class="gc_search_box">
				<input type="text" placeholder="Search here">
				<button><i class="fa fa-search" aria-hidden="true"></i>
				</button>
			</div>
			<div class="prs_navi_left_main_wrapper">
				<div class="prs_logo_main_wrapper">
					<a href="index.html">
						<img src="{{ asset('images/header/logo.png') }}" alt="logo" />
					</a>
				</div>
				<div class="prs_menu_main_wrapper">
					<nav class="navbar navbar-default">
						<div id="dl-menu" class="xv-menuwrapper responsive-menu">
							<button class="dl-trigger">
								<img src="{{ asset('images/header/bars.png') }}" alt="bar_png">
							</button>
							<div class="prs_mobail_searchbar_wrapper" id="search_button">	<i class="fa fa-search"></i>
							</div>
							<div class="clearfix"></div>
							<ul class="dl-menu">
								<li class="parent"><a href="/">Trang chủ</a>

								</li>
								<li class="parent"><a href="#">Phim</a>
                                    <ul class="lg-submenu">
										<li><a href="{{ route('phimdangchieu') }}">Phim đang chiếu</a></li>
										<li><a href="{{ route('phimsapchieu') }}">Phim sắp chiếu</a></li>
									</ul>
								</li>
								<li class="parent"><a href="{{ route('lichchieu') }}">Lịch chiếu</a></li>
								<li class="parent megamenu"><a href="#">video</a>
									<ul class="lg-submenu prs_navi_video_wrapper">
										<li>
											<div class="prs_video_navi_img_main_wrapper">
												<img src="{{ asset('images/content/vp1.jpg') }}" alt="video_img">
												<div class="prs_video_navi_overlay_wrapper">	<a class="test-popup-link button" rel='external' href='https://www.youtube.com/embed/ryzOXAO0Ss0' title='title'><i class="flaticon-play-button"></i></a>
												</div>
											</div>
										</li>
										<li>
											<div class="prs_video_navi_img_main_wrapper">
												<img src="{{ asset('images/content/vp2.jpg') }}" alt="video_img">
												<div class="prs_video_navi_overlay_wrapper">	<a class="test-popup-link button" rel='external' href='https://www.youtube.com/embed/ryzOXAO0Ss0' title='title'><i class="flaticon-play-button"></i></a>
												</div>
											</div>
										</li>
										<li>
											<div class="prs_video_navi_img_main_wrapper">
												<img src="{{ asset('images/content/vp3.jpg') }}" alt="video_img">
												<div class="prs_video_navi_overlay_wrapper">	<a class="test-popup-link button" rel='external' href='https://www.youtube.com/embed/ryzOXAO0Ss0' title='title'><i class="flaticon-play-button"></i></a>
												</div>
											</div>
										</li>
										<li>
											<div class="prs_video_navi_img_main_wrapper">
												<img src="{{ asset('images/content/vp4.jpg') }}" alt="video_img">
												<div class="prs_video_navi_overlay_wrapper">	<a class="test-popup-link button" rel='external' href='https://www.youtube.com/embed/ryzOXAO0Ss0' title='title'><i class="flaticon-play-button"></i></a>
												</div>
											</div>
										</li>
										<li>
											<div class="prs_video_navi_img_main_wrapper">
												<img src="{{ asset('images/content/vp5.jpg') }}" alt="video_img">
												<div class="prs_video_navi_overlay_wrapper">	<a class="test-popup-link button" rel='external' href='https://www.youtube.com/embed/ryzOXAO0Ss0' title='title'><i class="flaticon-play-button"></i></a>
												</div>
											</div>
										</li>
										<li class="hidden-sm">
											<div class="prs_video_navi_img_main_wrapper">
												<img src="{{ asset('images/content/vp6.jpg') }}" alt="video_img">
												<div class="prs_video_navi_overlay_wrapper">	<a class="test-popup-link button" rel='external' href='https://www.youtube.com/embed/ryzOXAO0Ss0' title='title'><i class="flaticon-play-button"></i></a>
												</div>
											</div>
										</li>
									</ul>
								</li>
								<li class="parent"><a href="contact.html">Liên hệ</a>
								</li>
							</ul>
						</div>
						<!-- /dl-menuwrapper -->
					</nav>
				</div>
			</div>
			<div class="prs_navi_right_main_wrapper">

				<div class="prs_top_login_btn_wrapper">
					<div class="prs_animate_btn1">
						<ul>
							<li><a href="#" class="button button--tamaya" data-text="Đăng nhập" data-toggle="modal" data-target="#myModal"><span>Đăng nhập</span></a>
							</li>
						</ul>
					</div>
				</div>
				<div class="product-heading">
					<div class="con">
						<select>
							<option>All Categories</option>
							<option>Movie</option>
							<option>Video</option>
							<option>Music</option>
							<option>TV-Show</option>
						</select>
						<input type="text" placeholder="Search Movie , Video , Music">
						<button type="submit"><i class="flaticon-tool"></i>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- prs navigation End -->
    @yield('main')

	<!-- prs patner slider Start -->
	<div class="prs_patner_main_section_wrapper prs_patner_main_section_wrapper_ind3">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="prs_heading_section_wrapper">
						<h2>Our Patner’s</h2>
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="prs_pn_slider_wraper">
						<div class="owl-carousel owl-theme">
							<div class="item">
								<div class="prs_pn_img_wrapper">
									<img src="{{ asset('images/content/p1.jpg') }}" alt="patner_img">
								</div>
							</div>
							<div class="item">
								<div class="prs_pn_img_wrapper">
									<img src="{{ asset('images/content/p2.jpg') }}" alt="patner_img">
								</div>
							</div>
							<div class="item">
								<div class="prs_pn_img_wrapper">
									<img src="{{ asset('images/content/p3.jpg') }}" alt="patner_img">
								</div>
							</div>
							<div class="item">
								<div class="prs_pn_img_wrapper">
									<img src="{{ asset('images/content/p4.jpg') }}" alt="patner_img">
								</div>
							</div>
							<div class="item">
								<div class="prs_pn_img_wrapper">
									<img src="{{ asset('images/content/p5.jpg') }}" alt="patner_img">
								</div>
							</div>
							<div class="item">
								<div class="prs_pn_img_wrapper">
									<img src="{{ asset('images/content/p6.jpg') }}" alt="patner_img">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- prs patner slider End -->
	<!-- prs Newsletter Wrapper Start -->
	<div class="prs_newsletter_wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
					<div class="prs_newsletter_text">
						<h3>Get update sign up now !</h3>
					</div>
				</div>
				<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
					<div class="prs_newsletter_field">
						<input type="text" placeholder="Enter Your Email">
						<button type="submit">Submit</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- prs Newsletter Wrapper End -->

	<!-- prs footer Wrapper Start -->
	<div class="prs_footer_main_section_wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="prs_footer_cont1_wrapper prs_footer_cont1_wrapper_1">
						<h2>LANGUAGE MOVIES</h2>
						<ul>
							<li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="#">English movie</a>
							</li>
							<li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="#">Tamil movie</a>
							</li>
							<li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="#">Punjabi Movie</a>
							</li>
							<li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="#">Hindi movie</a>
							</li>
							<li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="#">Malyalam movie</a>
							</li>
							<li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="#">English Action movie</a>
							</li>
							<li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="#">Hindi Action movie</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="prs_footer_cont1_wrapper prs_footer_cont1_wrapper_2">
						<h2>MOVIES by presenter</h2>
						<ul>
							<li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="#">Action movie</a>
							</li>
							<li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="#">Romantic movie</a>
							</li>
							<li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="#">Adult movie</a>
							</li>
							<li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="#">Comedy movie</a>
							</li>
							<li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="#">Drama movie</a>
							</li>
							<li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="#">Musical movie</a>
							</li>
							<li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="#">Classical movie</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="prs_footer_cont1_wrapper prs_footer_cont1_wrapper_3">
						<h2>BOOKING ONLINE</h2>
						<ul>
							<li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="#">www.example.com</a>
							</li>
							<li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="#">www.hello.com</a>
							</li>
							<li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="#">www.example.com</a>
							</li>
							<li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="#">www.hello.com</a>
							</li>
							<li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="#">www.example.com</a>
							</li>
							<li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="#">www.hello.com</a>
							</li>
							<li><i class="fa fa-circle"></i> &nbsp;&nbsp;<a href="#">www.example.com</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="prs_footer_cont1_wrapper prs_footer_cont1_wrapper_4">
						<h2>App available on</h2>
						<p>Download App and Get Free Movie Ticket !</p>
						<ul>
							<li>
								<a href="#">
									<img src="{{ asset('images/content/f1.jpg') }}" alt="footer_img">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="{{ asset('images/content/f2.jpg') }}" alt="footer_img">
								</a>
							</li>
						</ul>
						<h5><span>$50</span> Payback on App Download</h5>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="prs_bottom_footer_wrapper">	<a href="javascript:" id="return-to-top"><i class="flaticon-play-button"></i></a>
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
					<div class="prs_bottom_footer_cont_wrapper">
						<p>Copyright 2022-23 <a href="#">Movie Pro</a> . All rights reserved - Design by <a href="#">Webstrot</a>
						</p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
					<div class="prs_footer_social_wrapper">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a>
							</li>
							<li><a href="#"><i class="fa fa-twitter"></i></a>
							</li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a>
							</li>
							<li><a href="#"><i class="fa fa-youtube-play"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- prs footer Wrapper End -->
	<!-- st login wrapper Start -->
	<div class="modal fade st_pop_form_wrapper" id="myModal" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<div class="st_pop_form_heading_wrapper float_left">
					<h3>Log in</h3>
				</div>
				<div class="st_profile_input float_left">
					<label>Email / Mobile Number</label>
					<input type="text">
				</div>
				<div class="st_profile__pass_input st_profile__pass_input_pop float_left">
					<input type="password" placeholder="Password">
				</div>
				<div class="st_form_pop_fp float_left">
					<h3><a href="#" data-toggle="modal" data-target="#myModa2" target="_blank">Forgot Password?</a></h3>
				</div>
				<div class="st_form_pop_login_btn float_left">	<a href="https://webstrot.com/html/moviepro/html/page-1-7_profile_settings.html">LOGIN</a>
				</div>
				<div class="st_form_pop_or_btn float_left">
					<h4>or</h4>
				</div>
				<div class="st_form_pop_facebook_btn float_left">	<a href="#"> Connect with Facebook</a>
				</div>
				<div class="st_form_pop_gmail_btn float_left">	<a href="#"> Connect with Google</a>
				</div>
				<div class="st_form_pop_signin_btn float_left">
					<h4>Don’t have an account? <a href="#" data-toggle="modal" data-target="#myModa3" target="_blank">Sign Up</a></h4>
					<h5>I agree to the <a href="#">Terms & Conditions</a> & <a href="#">Privacy Policy</a></h5>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade st_pop_form_wrapper" id="myModa2" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<div class="st_pop_form_heading_wrapper st_pop_form_heading_wrapper_fpass float_left">
					<h3>Forgot Password</h3>
					<p>We can help! All you need to do is enter your email ID and follow the instructions!</p>
				</div>
				<div class="st_profile_input float_left">
					<label>Email Address</label>
					<input type="text">
				</div>
				<div class="st_form_pop_fpass_btn float_left">	<a href="#">Verify</a>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade st_pop_form_wrapper" id="myModa3" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<div class="st_pop_form_heading_wrapper float_left">
					<h3>Sign Up</h3>
				</div>
				<div class="st_profile_input float_left">
					<label>Email / Mobile Number</label>
					<input type="text">
				</div>
				<div class="st_profile__pass_input st_profile__pass_input_pop float_left">
					<input type="password" placeholder="Password">
				</div>
				<div class="st_form_pop_fp float_left">
					<h3><a href="#" data-toggle="modal" data-target="#myModa2" target="_blank">Forgot Password?</a></h3>
				</div>
				<div class="st_form_pop_login_btn float_left">	<a href="https://webstrot.com/html/moviepro/html/page-1-7_profile_settings.html">LOGIN</a>
				</div>
				<div class="st_form_pop_or_btn float_left">
					<h4>or</h4>
				</div>
				<div class="st_form_pop_facebook_btn float_left">	<a href="#"><i class="fab fa-facebook-f"></i> Connect with Facebook</a>
				</div>
				<div class="st_form_pop_gmail_btn float_left">	<a href="#"><i class="fab fa-google-plus-g"></i> Connect with Google</a>
				</div>
				<div class="st_form_pop_signin_btn st_form_pop_signin_btn_signup float_left">
					<h5>I agree to the <a href="#">Terms & Conditions</a> & <a href="#">Privacy Policy</a></h5>
				</div>
			</div>
		</div>
	</div>
	<!-- st login wrapper End -->
	<!--main js file start-->
	<script src="{{ asset('js/jquery_min.js')}}"></script>
	<script src="{{ asset('js/modernizr.js')}}"></script>
	<script src="{{ asset('js/bootstrap.js')}}"></script>
	<script src="{{ asset('js/owl.carousel.js')}}"></script>
	<script src="{{ asset('js/jquery.dlmenu.js')}}"></script>
	<script src="{{ asset('js/jquery.sticky.js')}}"></script>
	<script src="{{ asset('js/jquery.nice-select.min.js')}}"></script>
	<script src="{{ asset('js/jquery.magnific-popup.js')}}"></script>
	<script src="{{ asset('js/jquery.bxslider.min.js')}}"></script>
	<script src="{{ asset('js/venobox.min.js')}}"></script>
	<script src="{{ asset('js/smothscroll_part1.js')}}"></script>
	<script src="{{ asset('js/smothscroll_part2.js')}}"></script>
    @yield('script')
	<!--main js file end-->
</body>

<!-- Mirrored from www.webstrot.com/html/moviepro/html/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Oct 2023 08:15:52 GMT -->
</html>
