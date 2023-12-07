@extends('layout._Layout')

@section('styles')

<link rel="stylesheet" type="text/css" href="{{ asset('js/plugin/rs_slider/layers.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('js/plugin/rs_slider/navigation.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('js/plugin/rs_slider/settings.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}" />
<!-- favicon links -->
@endsection

@section('main')
<!-- st bc Start -->
<div class="st_bcc_main_main_wrapper float_left">
    <div class="st_bcc_main_wrapper">
        <div class="container">
            @if($newTicket->isEmpty())
                <div class="col-md-12">
                    <div class="st_bcc_heading_wrapper float_left">	<i class="fa fa-check-circle"></i>
                        <h3>không có vé nào vừa đặt, !vui lòng chọn phim và giờ chiếu và đặt lại vé</h3>
                    </div>
                </div>
            @endif
            @foreach ($newTicket->unique('veId') as $item)
                <div class="row">
                    <div class="col-md-12">
                        <div class="st_bcc_ticket_boxes_wrapper float_left">
                            <div class="st_bcc_tecket_top_hesder float_left">
                                <p>vé của bạn mới đặt!</p>	<span>Mã vé {{ $item->veId }} </span>
                            </div>
                            <div class="st_bcc_tecket_bottom_hesder float_left">
                                <div class="st_bcc_tecket_bottom_left_wrapper">
                                    <div class="st_bcc_tecket_bottom_inner_left">
                                        <div class="st_bcc_teckt_bot_inner_img">
                                            <img src="{{ asset('images/' .$item->imgPhim) }}" alt="img">
                                        </div>
                                        <div class="st_bcc_teckt_bot_inner_img_cont">
                                            <h4>{{ $item->tenPhim }}</h4>
                                            <h5>{{ $item->quocGia }}</h5>
                                            <h3>{{ $item->ngayChieu .' - ' .$item->GioBatDau }}</h3>
                                            <h6>Chi nhánh: {{ $item->tenChinhanh }}</h6>
                                        </div>
                                        <div class="st_purchase_img">
                                            <img src="images/content/pur2.png" alt="img">
                                        </div>
                                    </div>
                                    <div class="st_bcc_tecket_bottom_inner_right">	<i class="fas fa-chair"></i>
                                        <h3>{{ count($newTicket) }} Ghế <br>
                                        <span>{{ $item->tenPhong }} -  @foreach ($newTicket->unique('gheId') as $item) {{ $item->hangGhe .$item->tenGhe }}, @endforeach</span></h3>
                                    </div>
                                </div>
                                <div class="st_bcc_tecket_bottom_right_wrapper">
                                    {!!  QrCode::size(90)->generate($item->MaQR); !!}
                                    <h4>Mã QRCODE</h4>
                                </div>
                                <div class="st_bcc_tecket_bottom_left_price_wrapper">
                                    <h4>Tổng cộng</h4>
                                    <h5>{{ $item->total .'đ' }}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="st_bcc_ticket_boxes_bottom_wrapper float_left">
                            <ul>
                                <li><a href="{{route('lichchieu') }}">Tiếp tục đặt vé</a>
                                </li>
                                <li><a href="#">Lịch sử đặt vé</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- st bc End -->

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
