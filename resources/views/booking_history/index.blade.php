@extends('layout._Layout')

@section('styles')

<link rel="stylesheet" type="text/css" href="{{ asset('js/plugin/rs_slider/layers.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('js/plugin/rs_slider/navigation.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('js/plugin/rs_slider/settings.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}" />
@endsection

@section('main')

<div class="prs_mc_category_sidebar_main_wrapper">
    <div class="container">

        <div class="bookinghistory">
            <h3>Lịch sử đặt vé</h3>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Tên phim</th>
                    <th scope="col"></th>
                    <th scope="col">Tên chi nhánh</th>
                    <th scope="col">Tên phòng</th>
                    <th scope="col">Tên ghế</th>
                    <th scope="col">Ngày chiếu</th>
                    <th scope="col">Giờ bắt đầu</th>
                    <th scope="col">Mã QR</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($listTicket->unique('veId') as $item)
                        <tr>
                            <td>{{ $item->tenPhim }}</td>
                            <td><img style="width: 100px" src="{{ asset('images/' .$item->imgPhim) }}" alt=""></td>
                            <td>{{ $item->tenChinhanh }}</td>
                            <td>{{ $item->tenPhong }}</td>
                            <td>@foreach ($listTicket->where('veId', $item->veId)->unique('gheId') as $item1) {{ $item1->hangGhe .$item1->tenGhe }}, @endforeach</td>
                            <td>{{ $item->ngayChieu }}</td>
                            <td>{{ $item->GioBatDau }}</td>
                            <td>{!!  QrCode::size(90)->generate($item->MaQR); !!}</td>
                        </tr>
                    @endforeach
                </tbody>
              </table>

        </div>
    </div>
</div>

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
