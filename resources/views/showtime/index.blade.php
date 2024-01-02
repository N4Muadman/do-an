@extends('layout._Layout')

@section('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
@endsection


@section('main')
	<!-- st slider rating wrapper Start -->
	<div class="st_slider_rating_main_wrapper float_left">
		<div class="container">
			<div class="st_calender_tabs">
				<ul class="nav nav-tabs">
                    @if(session('khuVuc') == '--- Tất cả khu vực ---')
                        @foreach($showtime->unique('Ngay') as $item)
                            <li @if($item->Ngay == session('Ngay')) class="active" @endif>
                                <a href="{{ route('ngay', $item->Id) }}"><span>{{ \Carbon\Carbon::parse($item->Ngay)->format('d') }}</span> <br>{{\Carbon\Carbon::parse($item->Ngay)->format('m')}}</a>
                            </li>
                        @endforeach
                    @else
                        @foreach($showtime->where('tenKhuvuc', session('khuVuc'))->unique('Ngay') as $item)
                        <li @if($item->Ngay == session('Ngay')) class="active" @endif>
                            <a href="{{ route('ngay', $item->Id) }}"><span>{{ \Carbon\Carbon::parse($item->Ngay)->format('d') }}</span> <br>{{\Carbon\Carbon::parse($item->Ngay)->format('m')}}</a>
                        </li>
                        @endforeach
                    @endif
				</ul>

                <div class="select_area">
					<ul class="area">
						<li >
							<a id="showSubarea" >{{ session('khuVuc') }} </a>
							<ul id="subarea" class="subarea">
                                <li>
                                    <a href="{{ route('Tatcakhuvuc') }}">Tất cả lịch chiếu</a>
                                </li>
                                @foreach($showtime->where('Ngay', session('Ngay'))->unique('tenKhuvuc') as $item)
                                <li>
                                    <a href="{{ route('khuvuc', $item->Id) }}">{{ $item->tenKhuvuc }}</a>
                                </li>
                                @endforeach
                            </ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- st slider rating wrapper End -->
	<!-- st slider sidebar wrapper Start -->
	<div class="st_slider_index_sidebar_main_wrapper st_slider_index_sidebar_main_wrapper_booking float_left">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
					<div class="st_indx_slider_main_container float_left">
						<div class="row">
							<div class="col-md-12">
								<div class="tab-content">
									<div class="tab-pane active">
										<div class="st_calender_contant_main_wrapper float_left">
                                            <h2>Chọn suất chiếu</h2>
                                            @if(session('khuVuc') == '--- Tất cả khu vực ---')
                                                @foreach($showtime->where('Ngay', session('Ngay'))->unique('tenChinhanh') as $chinhanh)
                                                <div class="st_calender_row_cont st_calender_row_cont2 float_left">
                                                    <div class="st_calender_asc">
                                                        <div class="st_calen_asc_heart"><a href="#"><i class="fa fa-heart"></i></a>
                                                        </div>
                                                        <div class="st_calen_asc_heart_cont">
                                                            <h3>{{ $chinhanh->tenChinhanh }}</h3>
                                                            <ul>
                                                                <li>
                                                                    <img src="images/content/fast-food.png">
                                                                </li>
                                                                <li>
                                                                    <img src="images/content/bill.png">
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="st_calen_asc_tecket_time_select">
                                                        <ul>
                                                            @foreach($showtime->where('Ngay', session('Ngay'))->where('chinhanhId' , $chinhanh->chinhanhId)->unique('GioBatDau') as $item)
                                                                <li>
                                                                    <span>
                                                                    <h4>{{ $item->Gia}}đ</h4>
                                                                    <p class="asc_pera1">Executive</p>
                                                                    <p class="asc_pera2">Filling Fast</p>
                                                                    </span>
                                                                    <a href="{{ route('gio', $item->Id) }}">{{ $item->GioBatDau }}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                                @endforeach
                                            @else
                                                @foreach($showtime->where('Ngay', session('Ngay'))->where('tenKhuvuc', session('khuVuc'))->unique('tenChinhanh') as $chinhanh)
                                                <div class="st_calender_row_cont st_calender_row_cont2 float_left">
                                                    <div class="st_calender_asc">
                                                        <div class="st_calen_asc_heart"><a href="#"><i class="fa fa-heart"></i></a>
                                                        </div>
                                                        <div class="st_calen_asc_heart_cont">
                                                            <h3>{{ $chinhanh->tenChinhanh }}</h3>
                                                            <ul>
                                                                <li>
                                                                    <img src="images/content/fast-food.png">
                                                                </li>
                                                                <li>
                                                                    <img src="images/content/bill.png">
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="st_calen_asc_tecket_time_select">
                                                        <ul>
                                                            @foreach($showtime->where('Ngay', session('Ngay'))->where('chinhanhId' , $chinhanh->chinhanhId)->unique('GioBatDau') as $item)
                                                                <li>
                                                                    <span>
                                                                    <h4>{{ $item->Gia}}đ</h4>
                                                                    <p class="asc_pera1">Executive</p>
                                                                    <p class="asc_pera2">Filling Fast</p>
                                                                    </span>
                                                                    <a href="{{ route('gio', $item->Id) }}">{{ $item->GioBatDau }}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                                @endforeach
                                            @endif

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
					<div class="prs_mcc_left_side_wrapper">
						<div class="prs_mcc_bro_title_wrapper">
							<h2>Chọn phim</h2>
							<ul>
								@foreach ($showtime->where('GioBatDau', session('Gio'))->where('Ngay', session('Ngay'))->where('chinhanhId', session('chinhanhid')) as $item)
                                <li>
                                    <div class="listphim">
                                        <a href="{{ route('movie', $item->Id) }}"><img class="img-Movie-chon" src="{{ asset('images/' .$item->imgPhim) }}" alt=""></a>
                                        <div class="text_movie_chon">
                                            <a href="{{ route('movie', $item->Id) }}">{{ $item->tenPhim }}</a>
                                            <p>2D phụ đề</p>
                                        </div>
                                    </div>
                                    <p class="text_informationt"> <span>{{ $item->tenChinhanh }} </span> - {{ $item->tenPhong }}</p>
                                    <p class="text_informationt">Suất: <span>{{ session('Gio') }} - {{ session('Ngay') }}</span> </p>
								</li>
                                @endforeach
							</ul>
						</div>
						<div class="prs_mcc_event_title_wrapper">
							<h2>Top Events</h2>
							<img src="{{ asset('images/content/movie_category/event_img.jpg') }}" alt="event_img">
							<h3><a href="#">Music Event in india</a></h3>
							<p>Pune <span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></span>
							</p>
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
