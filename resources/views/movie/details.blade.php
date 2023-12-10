@extends('layout._Layout')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('js/plugin/rs_slider/layers.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('js/plugin/rs_slider/navigation.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('js/plugin/rs_slider/settings.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}" />
@endsection


@section('main')

	<!-- prs video top Start -->
	<div class="prs_top_video_section_wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="st_video_slider_inner_wrapper float_left">
						<div class="st_video_slider_overlay"></div>
						<div class="st_video_slide_sec float_left">
							<a rel='external' href='https://www.youtube.com/watch?v=lwIRMsPRqbM' title='title' class="test-popup-link">
								<img src="{{ asset('images/index_III/icon.png') }}" alt="img">
							</a>
							<h3>{{ $movie->Ten }}</h3>
							<p>{{ $movie->QuocGia }}</p>
							<h4>{{ $movie->TheLoai }}</h4>
							<h5><span>2d</span> <span>3d</span> <span>D 4DX</span> <span>Imax 3D</span></h5>
						</div>
						<div class="st_video_slide_social float_left">
						<div class="st_slider_rating_btn_heart st_slider_rating_btn_heart_5th">
								<h5><i class="fa fa-heart"></i> 85%</h5>
								<h4>52,291 bình chọn</h4>
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
									<li data-animation="animated fadeInUp" class=""><i class="far fa-calendar-alt"></i> {{ $movie->NgayKhoiChieu }}</li>
									<li data-animation="animated fadeInUp" class=""><i class="far fa-clock"></i> {{ $movie->ThoiLuongChieu }}</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- prs video top End -->
	<!-- st slider rating wrapper Start -->
	<div class="st_slider_rating_main_wrapper float_left">
		<div class="container">
			<div class="st_slider_rating_left">
				<div class="st_rating_box">
					<fieldset class="rating">
					<h3>3</h3>
						<input type="radio" name="rating" value="5" />
						<label class="full" title="5 stars"></label>
						<input type="radio" name="rating" value="4 and a half" />
						<label class="half" title="4.5 stars"></label>
						<input type="radio" name="rating" value="4" />
						<label class="full" title="4 stars"></label>
						<input type="radio" name="rating" value="3 and a half" />
						<label class="half" title="3.5 stars"></label>
						<input type="radio" name="rating" value="3" />
						<label class="full" title="3 stars"></label>
						<input type="radio" name="rating" value="2 and a half" />
						<label class="half" title="2.5 stars"></label>
						<input type="radio" name="rating" value="2" />
						<label class="full" title="2 stars"></label>
						<input type="radio" name="rating" value="1 and a half" />
						<label class="half" title="1.5 stars"></label>
						<input type="radio" name="rating" value="1" />
						<label class="full" title="1 star"></label>
						<input type="radio" name="rating" value="half" />
						<label class="half" title="0.5 stars"></label>
												</fieldset>
					<h4>Đánh giá</h4>
				</div>
				<div class="st_rating_box st_rating_box2">
					<fieldset class="rating">
					<h3>4.5&nbsp;&nbsp;</h3>
						<input type="radio" name="rating" value="5" />
						<label class="full" title="5 stars"></label>
						<input type="radio" name="rating" value="4 and a half" />
						<label class="half" title="4.5 stars"></label>
						<input type="radio" name="rating" value="4" />
						<label class="full" title="4 stars"></label>
						<input type="radio" name="rating" value="3 and a half" />
						<label class="half" title="3.5 stars"></label>
						<input type="radio" name="rating" value="3" />
						<label class="full" title="3 stars"></label>
						<input type="radio" name="rating" value="2 and a half" />
						<label class="half" title="2.5 stars"></label>
						<input type="radio" name="rating" value="2" />
						<label class="full" title="2 stars"></label>
						<input type="radio" name="rating" value="1 and a half" />
						<label class="half" title="1.5 stars"></label>
						<input type="radio" name="rating" value="1" />
						<label class="full" title="1 star"></label>
						<input type="radio" name="rating" value="half" />
						<label class="half" title="0.5 stars"></label>
												</fieldset>
					<h4>Đánh giá</h4>
				</div>
				<div class="st_rating_box st_rating_box2">
					<fieldset class="rating">
					<h3>0&nbsp;&nbsp;</h3>
						<input type="radio" name="rating" value="5" />
						<label class="full" title="5 stars"></label>
						<input type="radio" name="rating" value="4 and a half" />
						<label class="half" title="4.5 stars"></label>
						<input type="radio" name="rating" value="4" />
						<label class="full" title="4 stars"></label>
						<input type="radio" name="rating" value="3 and a half" />
						<label class="half" title="3.5 stars"></label>
						<input type="radio" name="rating" value="3" />
						<label class="full" title="3 stars"></label>
						<input type="radio" name="rating" value="2 and a half" />
						<label class="half" title="2.5 stars"></label>
						<input type="radio" name="rating" value="2" />
						<label class="full" title="2 stars"></label>
						<input type="radio" name="rating" value="1 and a half" />
						<label class="half" title="1.5 stars"></label>
						<input type="radio" name="rating" value="1" />
						<label class="full" title="1 star"></label>
						<input type="radio" name="rating" value="half" />
						<label class="half" title="0.5 stars"></label>
												</fieldset>
					<h4>Đánh Giá</h4>
				</div>
			</div>
			<div class="st_slider_rating_right">
				<div class="st_slider_rating_btn prs_animate_btn1">
					<ul>
						<li data-animation="animated fadeInUp"><a href="{{ route('chonchinhanh', $movie->Id ) }}" class="button button--tamaya prs_upcom_main_btn" data-text="Đặt vé ngay"><span>Đặt vé </span></a>
										</li>
					</ul>
				</div>
				<div class="st_slider_rating_btn_heart">
					<h5><i class="fa fa-heart"></i> 85%</h5>
					<h4>52,291 Bình chọn</h4>
				</div>
			</div>
		</div>
	</div>
	<!-- st slider rating wrapper End -->
	<!-- st slider sidebar wrapper Start -->
	<div class="st_slider_index_sidebar_main_wrapper st_slider_index_sidebar_main_wrapper_md float_left">
		<div class="container">
			<div class="row">
				<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
					<div class="st_indx_slider_main_container float_left">
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-12">
										<div class="ne_busness_main_slider_wrapper float_left">
											<div class="ne_recent_heading_main_wrapper ne_recent_heading_main_wrapper_index_II float_left">
												<h2>câu chuyện xu hướng</h2>
											</div>
										</div>
									</div>
									<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
										<div class="st_md_ts_main_sec float_left">
											<img src="{{ asset('images/content/md1.png') }}" alt="img">
											<p><a href="#">Aquaman: đánh giá phim - Tạo nên một bộ phim mới mẻ..</a>
											</p>	<span>14 tháng 12</span>
										</div>
									</div>
									<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
										<div class="st_md_ts_main_sec float_left">
											<img src="{{ asset('images/content/md2.png') }}" alt="img">
											<p><a href="#">Đây là bằng chứng cho thấy sự cường điệu là thật đối với James ...</a>
											</p>	<span>25 tháng 12</span>
										</div>
									</div>
									<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
										<div class="st_md_ts_main_sec float_left">
											<img src="{{ asset('images/content/md3.png') }}" alt="img">
											<p><a href="#">Dàn diễn viên hoành tráng Aquaman chắc chắn sẽ tạo nên...</a>
											</p>	<span>28 tháng 12</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="prs_upcome_tabs_wrapper prs_upcome_tabs_wrapper_mss float_left">
									<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#home" aria-controls="best" role="tab" data-toggle="tab">Bản tóm tắt</a>
							</li>
							<li role="presentation"><a href="#menu2" aria-controls="trand" role="tab" data-toggle="tab">Đằng sau hồi trường</a>
							</li>
						</ul>
								</div>
							</div>
							<div class="col-md-12">
								<div class="tab-content">
									<div id="home" class="tab-pane active">
										<div class="row">
											<div class="col-md-12">
												<div class="st_md_summ_pera float_left">
													<h5>Nội dung</h5>
													<p>{{ $movie->NoiDung }}</p>
												</div>
											</div>
											<div class="col-md-12">
												<div class="st_md_summ_client_slider float_left">
													<p>CAST</p>
													<div class="owl-carousel owl-theme">
														<div class="item">
															<div class="st_summ_slider_cont float_left">
																<img src="{{ asset('images/content/c1.jpg') }}" alt="img">
																<h4><a href="#">Jason Momoa</a></h4>
																<h5>Actor</h5>
																<h6>As Arthur</h6>
															</div>
														</div>
														<div class="item">
															<div class="st_summ_slider_cont float_left">
																<img src="{{ asset('images/content/c2.jpg') }}" alt="img">
																<h4><a href="#">Nicole Kidman</a></h4>
																<h5>Actor</h5>
																<h6>As Arthur</h6>
															</div>
														</div>
														<div class="item">
															<div class="st_summ_slider_cont float_left">
																<img src="{{ asset('images/content/c3.jpg') }}" alt="img">
																<h4><a href="#">Willem Dafoe</a></h4>
																<h5>Actor</h5>
																<h6>As Arthur</h6>
															</div>
														</div>
														<div class="item">
															<div class="st_summ_slider_cont float_left">
																<img src="{{ asset('images/content/c4.jpg') }}" alt="img">
																<h4><a href="#">Amber Heard</a></h4>
																<h5>Actor</h5>
																<h6>As Arthur</h6>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="st_md_summ_client_slider float_left">
													<p>Crew</p>
													<div class="owl-carousel owl-theme">
														<div class="item">
															<div class="st_summ_slider_cont float_left">
																<img src="{{ asset('images/content/c5.jpg') }}" alt="img">
																<h4><a href="#">James Wan.</a></h4>
																<h5>Actor</h5>
																<h6>As Arthur</h6>
															</div>
														</div>
														<div class="item">
															<div class="st_summ_slider_cont float_left">
																<img src="{{ asset('images/content/c6.jpg') }}" alt="img">
																<h4><a href="#">Peter Safran</a></h4>
																<h5>Actor</h5>
																<h6>As Arthur</h6>
															</div>
														</div>
														<div class="item">
															<div class="st_summ_slider_cont float_left">
																<img src="{{ asset('images/content/c7.jpg') }}" alt="img">
																<h4><a href="#">Rob Cowan</a></h4>
																<h5>Actor</h5>
																<h6>As Arthur</h6>
															</div>
														</div>
														<div class="item">
															<div class="st_summ_slider_cont float_left">
																<img src="{{ asset('images/content/c8.jpg') }}" alt="img">
																<h4><a href="#">Geoff Johns</a></h4>
																<h5>Actor</h5>
																<h6>As Arthur</h6>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div id="menu2" class="tab-pane fade">
										<div class="row">
											<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
												<div class="prs_ms_scene_slider_img prs_ms_scene_slider_img22">
													<img src="{{ asset('images/content/movie_single/sc1.jpg') }}" alt="scene_img">
													<div class="prs_ms_scene_img_overlay">	<a href="{{ asset('images/content/movie_single/sc1.jpg') }}" class="venobox info" data-title="PORTFOLIO TITTLE" data-gall="gall12"><i class="flaticon-tool"></i></a>
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
												<div class="prs_ms_scene_slider_img prs_ms_scene_slider_img22">
													<img src="{{ asset('images/content/movie_single/sc2.jpg') }}" alt="scene_img">
													<div class="prs_ms_scene_img_overlay">	<a href="{{ asset('images/content/movie_single/sc2.jpg') }}" class="venobox info" data-title="PORTFOLIO TITTLE" data-gall="gall12"><i class="flaticon-tool"></i></a>
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
												<div class="prs_ms_scene_slider_img prs_ms_scene_slider_img22">
													<img src="{{ asset('images/content/movie_single/sc3.jpg') }}" alt="scene_img">
													<div class="prs_ms_scene_img_overlay">	<a href="{{ asset('images/content/movie_single/sc3.jpg') }}" class="venobox info" data-title="PORTFOLIO TITTLE" data-gall="gall12"><i class="flaticon-tool"></i></a>
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
												<div class="prs_ms_scene_slider_img prs_ms_scene_slider_img22">
													<img src="{{ asset('images/content/movie_single/sc4.jpg') }}" alt="scene_img">
													<div class="prs_ms_scene_img_overlay">	<a href="{{ asset('images/content/movie_single/sc4.jpg') }}" class="venobox info" data-title="PORTFOLIO TITTLE" data-gall="gall12"><i class="flaticon-tool"></i></a>
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
												<div class="prs_ms_scene_slider_img prs_ms_scene_slider_img22">
													<img src="{{ asset('images/content/movie_single/sc5.jpg') }}" alt="scene_img">
													<div class="prs_ms_scene_img_overlay">	<a href="{{ asset('images/content/movie_single/sc5.jpg') }}" class="venobox info" data-title="PORTFOLIO TITTLE" data-gall="gall12"><i class="flaticon-tool"></i></a>
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
												<div class="prs_ms_scene_slider_img prs_ms_scene_slider_img22">
													<img src="{{ asset('images/content/movie_single/sc6.jpg') }}" alt="scene_img">
													<div class="prs_ms_scene_img_overlay">	<a href="{{ asset('images/content/movie_single/sc6.jpg') }}" class="venobox info" data-title="PORTFOLIO TITTLE" data-gall="gall12"><i class="flaticon-tool"></i></a>
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
				<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
					<div class="st_ind_sidebar_right_wrapper float_left">
						<div class="row">
							<div class="col-md-12">
								<div class="st_ind_sidebar_md_textbox float_left">
									<p>Phim có doanh thu cao nhất ở Mumbai trong 24 giờ qua</p>	<a href="#">Biết báo cáo phòng vé</a>
								</div>
							</div>
							<div class="col-md-12">
								<div class="st_ind_sidebar_md_textbox_btn float_left">
									<ul>
										<li>	<a href="#">Đặt phòng cho công ty &nbsp; <i class="fas fa-long-arrow-alt-right"></i></a>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-md-12">
								<div class="st_ind_sidebar_advertiz st_ind_sidebar_advertiz_md float_left">
									<a href="#">
										<img src="{{ asset('images/index_III/icon.png') }}" alt="img">
									</a>
								</div>
							</div>
							<div class="col-md-12">
								<div class="st_ind_sidebar_advertiz_social st_video_slide_social_left  float_left">
									<h3>Profiles</h3>
									<ul>
										<li><a href="#"><i class="fa fa-facebook-f"></i></a>
										</li>
										<li><a href="#"><i class="fa fa-twitter"></i></a>
										</li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a>
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
	<!-- st slider sidebar wrapper End -->
     <!-- prs theater Slider Start -->
	<div class="prs_theater_main_slider_wrapper">
		<div class="prs_theater_img_overlay"></div>
		<div class="prs_theater_sec_heading_wrapper">
			<h2>Phim hang dau tai rap</h2>
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
										<li><a href=" {{ route('movie.chooseMovie', $item->Id) }}"><i class="flaticon-cart-of-ecommerce"></i></a>
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


@section( 'script')
    <script src="{{ asset('js/custom.js') }}"></script>
@endsection
