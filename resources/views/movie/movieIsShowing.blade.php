@extends('layout._Layout')
@section('styles')

<link rel="stylesheet" type="text/css" href="{{ asset('js/plugin/rs_slider/layers.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('js/plugin/rs_slider/navigation.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('js/plugin/rs_slider/settings.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}" />
@endsection

@section('main')

	<!-- prs mc slider wrapper Start -->
	<div class="prs_mc_slider_main_wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="prs_heading_section_wrapper">
						<h2>Phim đang chiếu</h2>
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="prs_mc_slider_wrapper">
						<div class="owl-carousel owl-theme">
                            @foreach($movies as $item)
                                <div class="item">
                                    <img class="imgSlidePhim" src="{{ asset('images/'.$item->img) }}" alt="about_img">
                                </div>
                            @endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- prs mc slider wrapper End -->
	<!-- prs mc category slidebar Start -->
	<div class="prs_mc_category_sidebar_main_wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 hidden-sm hidden-xs">
					<div class="prs_mcc_left_side_wrapper">
						<div class="prs_mcc_left_searchbar_wrapper">
							<input type="text" placeholder="Search Movie">
							<button><i class="flaticon-tool"></i>
							</button>
						</div>
						<div class="prs_mcc_bro_title_wrapper">
							<h2>browse title</h2>
							<ul>
								<li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="#">All <span>23,124</span></a>
								</li>
								<li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="#">Action <span>512</span></a>
								</li>
								<li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="#">Romantic <span>548</span></a>
								</li>
								<li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="#">Love <span>557</span></a>
								</li>
								<li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="#">Musical <span>554</span></a>
								</li>
								<li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="#">Drama <span>567</span></a>
								</li>
								<li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="#">Thriller <span>689</span></a>
								</li>
								<li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="#">Horror <span>478</span></a>
								</li>
							</ul>
						</div>
						<div class="prs_mcc_event_title_wrapper">
							<h2>Top Events</h2>
							<img src="images/content/movie_category/event_img.jpg" alt="event_img">
							<h3><a href="#">Music Event in india</a></h3>
							<p>Pune <span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></span>
							</p>
							<h4>June 07 <span>08:00-12:00 pm</span></h4>
						</div>
					</div>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
					<div class="prs_mcc_right_side_wrapper">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="prs_mcc_right_side_heading_wrapper">
									<h2>Our Top Movies</h2>
									<ul class="nav nav-pills">
										<li class="active"><a data-toggle="pill" href="#grid"><i class="fa fa-th-large"></i></a>
										</li>
										<li><a data-toggle="pill" href="#list"><i class="fa fa-list"></i></a>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="tab-content">
									<div id="grid" class="tab-pane fade in active">
										<div class="row">
                                            @foreach($movies as $item)
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 prs_upcom_slide_first">
                                                    <div class="prs_upcom_movie_box_wrapper prs_mcc_movie_box_wrapper">
                                                        <div class="prs_upcom_movie_img_box">
                                                            <img src="{{ asset('images/'.$item->img) }}" alt="movie_img" />
                                                            <div class="prs_upcom_movie_img_overlay"></div>
                                                            <div class="prs_upcom_movie_img_btn_wrapper">
                                                                <ul>
                                                                    <li><a href="#">Xem Trailer</a>
                                                                    </li>
                                                                    <li><a href="{{ route('movie.details', $item->Id) }}">Xem chi tiết</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="prs_upcom_movie_content_box">
                                                            <div class="prs_upcom_movie_content_box_inner">
                                                                <h2><a href="{{ route('movie.details', $item->Id) }}">{{ $item->Ten }}</a></h2>
                                                                <p>{{ $item->TheLoai }}</p>	<i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="prs_upcom_movie_content_box_inner_icon">
                                                                <ul>
                                                                    <li><a href="{{ route('chonchinhanh', $item->Id) }}"><i class="flaticon-cart-of-ecommerce"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="pager_wrapper gc_blog_pagination">
													<ul class="pagination">
														<li><a href="#"><i class="flaticon-left-arrow"></i></a>
														</li>
														<li><a href="#">1</a>
														</li>
														<li><a href="#">2</a>
														</li>
														<li class="prs_third_page"><a href="#">3</a>
														</li>
														<li class="hidden-xs"><a href="#">4</a>
														</li>
														<li><a href="#"><i class="flaticon-right-arrow"></i></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div id="list" class="tab-pane fade">
										<div class="row">
                                            @foreach($movies as $item)
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="prs_mcc_list_movie_main_wrapper">
                                                        <div class="prs_mcc_list_movie_img_wrapper">
                                                            <img src="{{ asset('images/' .$item->img) }}" alt="categoty_img">
                                                        </div>
                                                        <div class="prs_mcc_list_movie_img_cont_wrapper">
                                                            <div class="prs_mcc_list_left_cont_wrapper">
                                                                <h2>{{ $item->Ten }}</h2>
                                                                <p>{{ $item->TheLoai }} &nbsp;&nbsp;&nbsp;<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>
                                                                </p>
                                                                <h4>{{ $item->DaoDien }}</h4>
                                                            </div>
                                                            <div class="prs_mcc_list_right_cont_wrapper">	<a href="#"><i class="flaticon-cart-of-ecommerce"></i></a>
                                                            </div>
                                                            <div class="prs_mcc_list_bottom_cont_wrapper">
                                                                <p>{{ $item->NoiDung }}</p>
                                                                <ul>
                                                                    <li><a href="#">View Trailer</a>
                                                                    </li>
                                                                    <li><a href="{{ route('movie.details', $item->Id) }}">View Details</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<div class="pager_wrapper gc_blog_pagination">
													<ul class="pagination">
														<li><a href="#"><i class="flaticon-left-arrow"></i></a>
														</li>
														<li><a href="#">1</a>
														</li>
														<li><a href="#">2</a>
														</li>
														<li class="prs_third_page"><a href="#">3</a>
														</li>
														<li class="hidden-xs"><a href="#">4</a>
														</li>
														<li><a href="#"><i class="flaticon-right-arrow"></i></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 visible-sm visible-xs">
					<div class="prs_mcc_left_side_wrapper">
						<div class="prs_mcc_left_searchbar_wrapper">
							<input type="text" placeholder="Search Movie">
							<button><i class="flaticon-tool"></i>
							</button>
						</div>
						<div class="prs_mcc_bro_title_wrapper">
							<h2>browse title</h2>
							<ul>
								<li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="#">All <span>23,124</span></a>
								</li>
								<li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="#">Action <span>512</span></a>
								</li>
								<li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="#">Romantic <span>548</span></a>
								</li>
								<li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="#">Love <span>557</span></a>
								</li>
								<li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="#">Musical <span>554</span></a>
								</li>
								<li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="#">Drama <span>567</span></a>
								</li>
								<li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="#">Thriller <span>689</span></a>
								</li>
								<li><i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;<a href="#">Horror <span>478</span></a>
								</li>
							</ul>
						</div>
						<div class="prs_mcc_event_title_wrapper">
							<h2>Top Events</h2>
							<img src="images/content/movie_category/event_img.jpg" alt="event_img">
							<h3><a href="#">Music Event in india</a></h3>
							<p>Mumbai & Pune <span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></span>
							</p>
							<h4>June 07 <span>08:00-12:00 pm</span></h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- prs mc category slidebar End -->
	<!-- prs theater Slider Start -->
	<div class="prs_theater_main_slider_wrapper">
		<div class="prs_theater_img_overlay"></div>
		<div class="prs_theater_sec_heading_wrapper">
			<h2>PHIM HÀNG ĐẦU TẠI Rạp</h2>
		</div>
		<div class="wrap-album-slider">
			<ul class="album-slider">
                @foreach($movies as $item)
				<li class="album-slider__item">
					<figure class="album">
						<div class="prs_upcom_movie_box_wrapper">
							<div class="prs_upcom_movie_img_box">
								<img src="{{ asset('images/'.$item->img) }}" alt="movie_img" />
								<div class="prs_upcom_movie_img_overlay"></div>
								<div class="prs_upcom_movie_img_btn_wrapper">
									<ul>
										<li><a href="#">Xem Trailer</a>
										</li>
										<li><a href="{{ route('movie.details', $item->Id) }}">Xem Chi Tiết</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="prs_upcom_movie_content_box">
								<div class="prs_upcom_movie_content_box_inner">
									<h2><a href="{{ route('movie.details', $item->Id) }}">{{ $item->Ten }}</a></h2>
									<p>{{ $item->TheLoai }}</p>	<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
									<i class="fa fa-star-o"></i>
								</div>
								<div class="prs_upcom_movie_content_box_inner_icon">
									<ul>
										<li><a href="{{ route('chonchinhanh', $item->Id) }}"><i class="flaticon-cart-of-ecommerce"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End album body -->
					</figure>
					<!-- End album -->
				</li>
				<!-- End album slider item -->
                @endforeach
			</ul>
			<!-- End slider -->
		</div>
	</div>
	<!-- prs theater Slider End -->

@endsection

@section('script')

<script src="{{ asset('js/jquery.countTo.js') }}"></script>
<script src="{{ asset('js/jquery.inview.min.js') }}"></script>
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

@endsection
