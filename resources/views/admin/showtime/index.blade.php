@extends('layout._adminLayout')


@section('adminMain')

<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Lich chieu phim </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Quản lý lich chieu</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tat ca lich chieu</li>
            </ol>
        </nav>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <a style="float: right; " href="{{ route('showtime.create') }}" type="button" class="btn btn-success btn-rounded">Thêm phim mới</a>
                <h4 class="card-title">Danh sách</h4>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tên phim</th>
                                <th>Tên chi nhánh</th>
                                <th>Tên phòng</th>
                                <th>Ngày chiếu</th>
                                <th>Giờ bắt đầu</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($showtimes as $item)
                                <tr>
                                    <td> {{ $item->Id }} </td>
                                    <td> {{ $item->tenPhim }}</td>
                                    <td> {{ $item->tenChinhanh }} </td>
                                    <td> {{ $item->tenPhong }} {{ $item->tenChinhanh }} </td>
                                    <td> {{ $item->Ngay }} </td>
                                    <td> {{ $item->GioBatDau }} </td>
                                    <td>
                                        <a type="button" href="{{ route('showtime.show', $item->Id) }}" class="btn btn-outline-secondary btn-rounded " title="Chi tiết"><i style="margin-top: 30px" class="mdi mdi-alert-octagon text-success"></i></a>
                                        <a href="{{ route('showtime.edit', $item->Id) }}" type="button" class="btn btn-danger btn-rounded">Chỉnh Sửa</a>
                                        <button type="button" onclick="if (confirm('Bạn có muốn đổi danh mục Phim đang chiếu sang Phim dừng chiếu không?') == true) { location.href = '{{ route('movie.changeStatus', $item->Id) }}' }" class="btn btn-warning  btn-rounded">Đổi danh mục</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
