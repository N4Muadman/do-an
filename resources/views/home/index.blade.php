@extends('layout._Layout')

@section('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/responsive4.css') }}" />
@endsection

@section('main')
    	{{-- <!-- prs video top Start -->
	<div class="prs_top_video_section_wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="st_video_slider_inner_wrapper float_left">
						<div class="st_video_slider_overlay"></div>
						<div class="st_video_slide_sec float_left">
							<a rel='external' href='https://www.youtube.com/embed/ryzOXAO0Ss0' title='title' class="test-popup-link">
								<img src="images/index_III/icon.png" alt="img">
							</a>
							<h3>Aquaman</h3>
							<p>ENGLISH, HINDI, TAMIL</p>
							<h4>ACTION | Adventure | Fantasy</h4>
							<h5><span>2d</span> <span>3d</span> <span>D 4DX</span> <span>Imax 3D</span></h5>
						</div>
						<div class="st_video_slide_social float_left">
						<div class="st_slider_rating_btn_heart st_slider_rating_btn_heart_5th">
								<h5><i class="fa fa-heart"></i> 85%</h5>
								<h4>52,291 votes</h4>
							</div>
							<div class="st_video_slide_social_left float_left">
								<ul>
									<li><a href="#"><i class="fa fa-facebook-f"></i></a>
									</li>
									<li><a href="#"><i class="fa fa-twitter"></i></a>
									</li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a>
									</li>
									<li><a href="#"><i class="fa fa-youtube"></i></a>
									</li>
								</ul>
							</div>
							<div class="st_video_slide_social_right float_left">
								<ul>
									<li data-animation="animated fadeInUp" class=""><i class="far fa-calendar-alt"></i> 14 Dec, 2022</li>
									<li data-animation="animated fadeInUp" class=""><i class="far fa-clock"></i> 2 hrs 23 mins</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- prs video top End --> --}}
	<!-- kv slider wrapper Start -->
	<div class="kv_main_slider_wrapper slider-area">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
			<div class="carousel-inner" role="listbox">
                @foreach($movies->where('NgayKhoiChieu', '<=', date("Y-m-d") )->take(3) as $item)
                    <div class="item ">
                        <div class="carousel-captions caption-1">
                            <div class="container">
                                <div class="st_slider_left_cont_main_wrapper">
                                    <div class="content st_slider_left_contact">
                                        <h3 data-animation="animated fadeInUp">ACTION / Adventure / Fantasy</h3>
                                        <h2 data-animation="animated fadeInUp">ENGLISH, HINDI, TAMIL	</h2>
                                        <h4 data-animation="animated fadeInUp">Aquaman <span>2d</span> <span>3d</span> <span>D 4DX</span> <span>Imax 3D</span></h4>
                                        <div class="st_slider_list float_left">
                                            <ul>
                                                <li data-animation="animated fadeInUp"><i class="fa fa-calendar"></i> 14 Dec, 2022</li>
                                                <li data-animation="animated fadeInUp"><i class="fa fa-clock-o"></i> 2 hrs 23 mins</li>
                                                <li data-animation="animated fadeInUp"><i class="fa fa-heart"></i> 50,133 votes</li>
                                            </ul>
                                        </div>
                                        <div class="prs_animate_btn1 prs_upcom_main_wrapper prs_third_slider_btn">
                                            <ul>
                                                <li data-animation="animated fadeInUp"><a href="movie_booking.html" class="button button--tamaya prs_upcom_main_btn" data-text="book now"><span>book now</span></a>
                                            </li>
                                            </ul>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="st_slider_right_cont_main_wrapper">
                                    <div class="content">
                                        <div class="st_slider_img_wrapper float_left">
                                            <img src="images/index_III/01.jpg" alt="img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"><span class="number"></span>
					</li>
					<li data-target="#carousel-example-generic" data-slide-to="1" class=""><span class="number"></span>
					</li>
					<li data-target="#carousel-example-generic" data-slide-to="2" class=""><span class="number"></span>
					</li>
				</ol>
				<div class="carousel-nevigation">
					<a class="prev" href="#carousel-example-generic" role="button" data-slide="prev">	<i class="flaticon-back"></i>
					</a>
					<a class="next" href="#carousel-example-generic" role="button" data-slide="next"> <i class="flaticon-right-arrow"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- kv slider wrapper End -->
	<!-- st slider sidebar wrapper Start -->
	<div class="st_slider_index_sidebar_main_wrapper float_left">
		<div class="container">
			<div class="row">
				<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
					<div class="st_indx_slider_main_container float_left">
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-12">
										<div class="ne_busness_main_slider_wrapper">
											<div class="ne_recent_heading_main_wrapper">
												<h2>Phim đang chiếu</h2>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="ne_businees_slider_wrapper">
											<div class="owl-carousel owl-theme">

                                                @foreach($movies->where('NgayKhoiChieu', '<=', date("Y-m-d") ) as $item)
													<div class="item">
														<div class="prs_upcom_movie_box_wrapper">
															<div class="prs_upcom_movie_img_box">
																<img src="{{ asset('images/'.$item->img) }}" alt="movie_img" />
																<div class="prs_upcom_movie_img_overlay"></div>
																<div class="prs_upcom_movie_img_btn_wrapper">
																	<ul>
																		<li><a href="#">View Trailer</a>
																		</li>
																		<li><a href="{{ route('movie.details', $item->Id)}}">View Details</a>
																		</li>
																	</ul>
																</div>
															</div>
															<div class="prs_upcom_movie_content_box">
																<div class="prs_upcom_movie_content_box_inner">
																	<h2><a href="{{ route('movie.details', $item->Id)}}">{{ $item->Ten }}</a></h2>
																	<p>{{ $item->TheLoai }}</p>	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																</div>
																<div class="prs_upcom_movie_content_box_inner_icon">
																	<ul>
																		<li><a href="{{ route('movie.chooseMovie', $item->Id) }}"><i class="flaticon-cart-of-ecommerce"></i></a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
                                                @endforeach
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 st_ind_seconf_slider">
								<div class="row">
									<div class="col-md-12">
										<div class="ne_busness_main_slider_wrapper">
											<div class="ne_recent_heading_main_wrapper">
												<h2>Phim sắp chiếu </h2>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="ne_businees_slider_wrapper">
											<div class="owl-carousel owl-theme">
												@foreach($movies->where('NgayKhoiChieu', '>', date("Y-m-d") ) as $item)
													<div class="item">
														<div class="prs_upcom_movie_box_wrapper">
															<div class="prs_upcom_movie_img_box">
																<img src="{{ asset('images/'.$item->img) }}" alt="movie_img" />
																<div class="prs_upcom_movie_img_overlay"></div>
																<div class="prs_upcom_movie_img_btn_wrapper">
																	<ul>
																		<li><a href="#">View Trailer</a>
																		</li>
																		<li><a href="{{ route('movie.details', $item->Id)}}">View Details</a>
																		</li>
																	</ul>
																</div>
															</div>
															<div class="prs_upcom_movie_content_box">
																<div class="prs_upcom_movie_content_box_inner">
																	<h2><a href="{{ route('movie.details', $item->Id)}}">{{ $item->Ten }}</a></h2>
																	<p>{{ $item->TheLoai }}</p>	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star-o"></i>
																	<i class="fa fa-star-o"></i>
																</div>
															</div>
														</div>
													</div>
                                                @endforeach
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
					<div class="st_ind_sidebar_right_wrapper float_left">
						<div class="row">
							<div class="col-md-12">
								<div class="st_ind_sidebar_advertiz float_left">
									<a href="#">
										<img src="images/index_III/add.png" alt="img">
									</a>
								</div>
							</div>
							<div class="col-md-12">
								<div class="st_ind_sidebar_search float_left">
									<div class="st_ind_sidebar_search_heading float_left">
										<p>Tìm kiếm nhiều nhất</p>
									</div>
									<div class="st_ind_sidebar_search_ul float_left">
										<div class="st_ind_sidebar_search_small_box float_left">
											<p><a href="#">KGF</a></p>	<span>Movies</span>
											<span class="st_sidebar_search_titte_count">(1050)</span>
										</div>
										<div class="st_ind_sidebar_search_small_box float_left">
											<p><a href="#">Pretham 2</a></p>	<span>Movies</span>
											<span class="st_sidebar_search_titte_count">(10)</span>
										</div>
										<div class="st_ind_sidebar_search_small_box float_left">
											<p><a href="#">Maari2</a></p>	<span>Movies</span>
											<span class="st_sidebar_search_titte_count">(120)</span>
										</div>
										<div class="st_ind_sidebar_search_small_box float_left">
											<p><a href="#">Njan Prakasan</a></p>	<span>Movies</span>
											<span class="st_sidebar_search_titte_count">(1230)</span>
										</div>
										<div class="st_ind_sidebar_search_small_box float_left">
											<p><a href="#">Odiyan</a></p>	<span>Movies</span>
											<span class="st_sidebar_search_titte_count">(480)</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- st slider sidebar wrapper End -->
@endsection

@section('script')

	<script src="{{ asset('js/custom4.js')}}"></script>
@endsection
