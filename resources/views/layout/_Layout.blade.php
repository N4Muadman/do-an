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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style4.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/notification.css') }}" />
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
					<a href="/">
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
							</ul>
						</div>
						<!-- /dl-menuwrapper -->
					</nav>
				</div>
			</div>
			<div class="prs_navi_right_main_wrapper">

				<div class="prs_top_login_btn_wrapper">

                    @if(session()->exists('user_id'))
					<div class="prs_animate_btn1">
                        <div class="logo_user" id="logo_user">
                            <img class="logo_user_img" src="{{ asset('images/' .session('user_img')) }}" alt="">
                        </div>
						<ul id="individual" class="individual">
							<li><a href="{{ route('bookinghistory') }}">Lịch sử đặt vé</a></li>
							<li><a href="#">Cập nhật thông tin</a></li>
							<li><a href="{{ route('logout') }}">Đăng xuất</a></li>
						</ul>
					</div>
                    @else
                    <div class="prs_animate_btn1">
						<ul>
							<li><a href="#" class="button button--tamaya" data-text="Đăng nhập" data-toggle="modal" data-target="#myModal"><span>Đăng nhập</span></a>
							</li>
						</ul>
					</div>
                    @endif
				</div>
				<div class="product-heading">
					<div class="con">
						<form action="{{ route('moviesearch') }}" method="get">
                            <select name="category">
                                <option value="0">tất cả các phim</option>
                                <option value="1" >phim đang chiếu</option>
                                <option value="2" >phim sắp chiếu</option>
                            </select>
                            <input type="text" placeholder="tìm kiếm phim" name="movie_name">
                            <button type="submit"><i class="flaticon-tool"></i>
                            </button>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</div>

    @if(Session::has('Registeredsuccess'))
    <div id="toast">
        <div class="toast toast--success">
            <div class="toast__icon">
                <i class="fas fa-solid fa-check"></i>
            </div>
            <div class="toast__body">
                <h3 class="toast__title">Thông báo</h3>
                <p class="toast__msg">{{ session('Registeredsuccess') }}</p>
            </div>
            <div class="toast__close">
                <i class="fa-regular fa-circle-xmark"></i>
            </div>
        </div>
    </div>
    @endif
    @if(Session::has('notification'))
    <div id="toast">
        <div class="toast toast--error">
            <div class="toast__icon">
                <i class="fas fa-exclamation-circle"></i>
            </div>
            <div class="toast__body">
                <h3 class="toast__title">Thông báo</h3>
                <p class="toast__msg">{{ session('notification') }}</p>
            </div>
            <div class="toast__close">
                <i class="fa-regular fa-circle-xmark"></i>
            </div>
        </div>
    </div>
    @endif
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
	<div  @if(Session::has('ErrorNameLogin')) class="modal fade st_pop_form_wrapper in " style="display: block;" @else class="modal fade st_pop_form_wrapper" @endif  id="myModal" role="dialog" >
		<div class="modal-dialog">
			<form action="{{ route('login') }}" method="post">
                @csrf <!-- CSRF protection -->
                <div class="modal-content">
                    @if(Session::has('ErrorNameLogin')) <a class="close" href="{{ URL::previous() }}">&times;</a>
                    @else
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                     @endif
                    <div class="st_pop_form_heading_wrapper float_left">
                        <h3>Đăng nhập</h3>
                    </div>
                    <div class="st_profile_input float_left">
                        @if(Session::has('ErrorNameLogin'))
                        <h5 style="color: firebrick">
                            {{ Session::get('ErrorNameLogin') }}
                        </h5>
                        @endif
                        <label>Tên đăng nhập</label>
                        <input type="text" placeholder="Nhập tên đăng nhập" name="tendangnhap" required>
                    </div>
                    <div class="st_profile__pass_input st_profile__pass_input_pop float_left">
                        <input type="password" placeholder="Nhập mật khẩu" name="matkhau" required>
                    </div>
                    <div class="st_form_pop_fp float_left">
                        <h3><a href="#" data-toggle="modal" data-target="#myModa2" target="_blank">Quên mật khẩu?</a></h3>
                    </div>
                    <div class="st_form_pop_login_btn float_left">	<button type="submit">Đăng nhập</button>
                    </div>
                    <div class="st_form_pop_or_btn float_left">
                        <h4>hoac</h4>
                    </div>
                    <div class="st_form_pop_facebook_btn float_left">	<a href="#"> Đăng nhập bằng Facebook</a>
                    </div>
                    <div class="st_form_pop_gmail_btn float_left">	<a href="#"> Đăng nhập bằng Google</a>
                    </div>
                    <div class="st_form_pop_signin_btn float_left">
                        <h4>Bạn chưa có tài khoản? <a href="#" data-toggle="modal" data-target="#myModa3" target="_blank">Đăng kí</a></h4>
                        <h5>Tôi đồng ý với <a href="#">Điều khoản & điều kiện</a> & <a href="#">Chính sách riêng tư</a></h5>
                    </div>
                </div>
            </form>
		</div>
	</div>
	<div class="modal fade st_pop_form_wrapper" id="myModa2" role="dialog">
		<form action="" method="post">
            @csrf <!-- CSRF protection -->
            <div class="modal-dialog">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="st_pop_form_heading_wrapper st_pop_form_heading_wrapper_fpass float_left">
                        <h3>Quên mật khẩu</h3>
                        <p>Chúng tôi có thể giúp! Tất cả những gì bạn cần làm là nhập ID email của bạn và làm theo hướng dẫn!</p>
                    </div>
                    <div class="st_profile_input float_left">
                        <label>Email của bạn</label>
                        <input type="text" required>
                    </div>
                    <div class="st_form_pop_fpass_btn float_left">	<a href="#">Xác minh</a>
                    </div>
                </div>
            </div>
        </form>
	</div>
	<div @if(Session::has('ErrorNameRg') || Session::has('ErrorEmailRg')) class="modal fade st_pop_form_wrapper in " style="display: block;" @else class="modal fade st_pop_form_wrapper" @endif class="modal fade st_pop_form_wrapper" id="myModa3" role="dialog">
		<form action="{{ route('register') }}" method="post" id="register">
            @csrf <!-- CSRF protection -->
            <div class="modal-dialog">
                <div class="modal-content">
                    @if(Session::has('ErrorNameRg') || Session::has('ErrorEmailRg')) <a class="close" href="{{ URL::previous() }}">&times;</a>
                    @else
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                     @endif
                    <div class="st_pop_form_heading_wrapper float_left">
                        <h3>Đăng kí</h3>
                    </div>
                    <div class="st_profile_input float_left">
                        <label>Tên đăng nhập</label>
                        <input type="text" name="tendangnhap" placeholder="Nhập tên đăng nhập" required>
                        @if(Session::has('ErrorNameRg'))
                        <h5 style="color: firebrick">
                            {{ Session::get('ErrorNameRg') }}
                        </h5>
                        @endif
                    </div>
                    <div class="st_profile_input float_left">
                        <label>Email</label>
                        <input type="text" name="email" placeholder="Nhập email" required>
                        @if(Session::has('ErrorEmailRg'))
                        <h5 style="color: firebrick">
                            {{ Session::get('ErrorEmailRg') }}
                        </h5>
                        @endif
                    </div>
                    <div class="st_profile__pass_input st_profile__pass_input_pop float_left">
                        <input type="password" placeholder="Mật khẩu" name="matkhau" id="password" required>
                    </div>
                    <div class="st_profile__pass_input st_profile__pass_input_pop float_left">
                        <input type="password" placeholder="Nhập lại mật khẩu" id="confirmPassword"  required>
                        <h5 style="color: firebrick" id="message"></h5>
                    </div>
                    <div class="st_form_pop_login_btn float_left">	<button class="btn_login" type="submit">Đăng kí</button>
                    </div>
                    <div class="st_form_pop_or_btn float_left">
                        <h4>hoac</h4>
                    </div>
                    <div class="st_form_pop_facebook_btn float_left">	<a href="#"><i class="fab fa-facebook-f"></i> Đăng nhập bằng Facebook</a>
                    </div>
                    <div class="st_form_pop_gmail_btn float_left">	<a href="#"><i class="fab fa-google-plus-g"></i> Đăng nhập bằng Google</a>
                    </div>
                    <div class="st_form_pop_signin_btn st_form_pop_signin_btn_signup float_left">
                        <h5>Tôi đồng ý với <a href="#">Điều khoản & điều kiện</a> & <a href="#">Chính sách riêng tư</a></h5>
                    </div>
                </div>
            </div>
        </form>
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
	<script src="{{ asset('js/register.js')}}"></script>
    @yield('script')
	<!--main js file end-->
</body>

<!-- Mirrored from www.webstrot.com/html/moviepro/html/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Oct 2023 08:15:52 GMT -->
</html>
