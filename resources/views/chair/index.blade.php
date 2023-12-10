
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


<!-- Mirrored from www.webstrot.com/html/moviepro/html/seat_booking.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Oct 2023 08:17:21 GMT -->
<head>
	<meta charset="utf-8" />
	<title>Chọn ghế của bạn</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta name="description" content="Movie Pro" />
	<meta name="keywords" content="Movie Pro" />
	<meta name="author" content="" />
	<meta name="MobileOptimized" content="320" />
	<!--Template style -->
	<link rel="stylesheet" type="text/css" href="css/animate.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
	<link rel="stylesheet" type="text/css" href="css/fonts.css" />
	<link rel="stylesheet" type="text/css" href="css/flaticon.css" />
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.css" />
	<link rel="stylesheet" type="text/css" href="css/dl-menu.css" />
	<link rel="stylesheet" type="text/css" href="css/nice-select.css" />
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css" />
	<link rel="stylesheet" type="text/css" href="css/venobox.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('js/plugin/rs_slider/layers.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('js/plugin/rs_slider/navigation.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('js/plugin/rs_slider/settings.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/seat.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}" />
	<link rel="stylesheet" id="theme-color" type="text/css" href="#"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/notification.css') }}" />
	<!-- favicon links -->
	<link rel="shortcut icon" type="image/png" href="images/header/favicon.ico" />
</head>

<body>
	<!-- preloader Start -->
	<div id="preloader">
		<div id="status">
			<img src="images/header/horoscope.gif" id="preloader_image" alt="loader">
		</div>
	</div>
	<!-- color picker start -->
	<!-- st top header Start -->
	<form method="POST" action="{{ route('ChooseChair') }}">
        @csrf
        <div class="st_bt_top_header_wrapper float_left">
            <div class="container container_seat">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="st_bt_top_back_btn st_bt_top_back_btn_seatl float_left">
                            <a href="{{ route('lichchieu') }}"><i class="fas fa-long-arrow-alt-left"></i> &nbsp;Back</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="st_bt_top_center_heading st_bt_top_center_heading_seat_book_page float_left">
                            <h3>{{ session('tenPhim') .' - ' .session('quocGia') .'( ' .session('Thoilc') .' )' }}</h3>
                            <h4>{{ session('Ngay') }}</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="st_bt_top_close_btn st_bt_top_close_btn2 float_left">
                            <button type="submit" class="btn btn-danger">Thanh toán</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- st top header Start -->
        <!-- st seat Layout Start -->
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
        <div class="st_seatlayout_main_wrapper float_left">
            <div class="container container_seat">
                <div class="st_seat_lay_heading float_left">
                    <h3>Rạp chiếu phim {{ session('tenChinhanh') }}</h3>
                </div>
                <div class="st_seat_full_container">
                    <div class="st_seat_lay_economy_wrapper float_left">
                        <div class="screen">
                            <img src="images/content/screen.png">
                        </div>
                        @foreach($chairs->unique('Hang') as $item)

                            <div class="st_seat_lay_row float_left">
                                <ul>
                                    <li class="st_seat_heading_row">{{ $item->Hang }}</li>
                                    @foreach($chairs->where('Hang', $item->Hang)->unique('Ten') as $item1)
                                        <li class="{{ $item1->class .' ' .$item1->disable }} ">
                                            <input type="checkbox" id="{{ $item1->idFor  }}" name="chairs[]" value="{{$item1->Id }}">
                                            <label for="{{ $item1->idFor  }}"></label>
                                        </li>

                                    @endforeach
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </form>
	<!-- st seat Layout End -->
	<!--main js file start-->
	<script src="js/jquery_min.js"></script>
	<script src="js/modernizr.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/jquery.dlmenu.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.magnific-popup.js"></script>
	<script src="js/jquery.bxslider.min.js"></script>
	<script src="js/venobox.min.js"></script>
	<script src="js/smothscroll_part1.js"></script>
	<script src="js/smothscroll_part2.js"></script>
    <script src="{{ asset('js/plugin/rs_slider/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('js/plugin/rs_slider/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('js/plugin/rs_slider/revolution.addon.snow.min.js') }}"></script>
    <script src="{{ asset('js/plugin/rs_slider/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('js/plugin/rs_slider/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('js/plugin/rs_slider/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('js/plugin/rs_slider/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('js/plugin/rs_slider/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('js/plugin/rs_slider/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('js/plugin/rs_slider/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('js/plugin/rs_slider/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('js/plugin/rs_slider/revolution.extension.video.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
	<!--main js file end-->
	<script>
		//* Isotope js
		    function protfolioIsotope(){
		        if ( $('.st_fb_filter_left_box_wrapper').length ){
		            // Activate isotope in container
		            $(".protfoli_inner, .portfoli_inner").imagesLoaded( function() {
		                $(".protfoli_inner, .portfoli_inner").isotope({
		                    layoutMode: 'masonry',
		                });
		            });

		            // Add isotope click function
		            $(".protfoli_filter li").on('click',function(){
		                $(".protfoli_filter li").removeClass("active");
		                $(this).addClass("active");
		                var selector = $(this).attr("data-filter");
		                $(".protfoli_inner, .portfoli_inner").isotope({
		                    filter: selector,
		                    animationOptions: {
		                        duration: 450,
		                        easing: "linear",
		                        queue: false,
		                    }
		                });
		                return false;
		            });
		        };
		    };
		 protfolioIsotope ();

		  function changeQty(increase) {
				            var qty = parseInt($('.select_number').find("input").val());
				            if (!isNaN(qty)) {
				                qty = increase ? qty + 1 : (qty > 1 ? qty - 1 : 1);
				                $('.select_number').find("input").val(qty);
				            } else {
				                $('.select_number').find("input").val(1);
				            }
				        }
	</script>
</body>


<!-- Mirrored from www.webstrot.com/html/moviepro/html/seat_booking.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Oct 2023 08:17:22 GMT -->
</html>
