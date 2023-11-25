@extends('layout._adminLayout')


@section('adminMain')

<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Phim đang chiếu </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Quản lý phim</a></li>
                <li class="breadcrumb-item active" aria-current="page">Phim đang chiếu</li>
            </ol>
        </nav>
    </div>
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}

    </div>
    @endif
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <a style="float: right; " href="{{ route('movie.create') }}" type="button" class="btn btn-success btn-rounded">Thêm phim mới</a>
                <h4 class="card-title">Danh sách</h4>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tên phim</th>
                                <th>Ngày khởi chiếu</th>
                                <th>Thời lượng chiếu</th>
                                <th>Thể loại</th>
                                <th>Quốc gia</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($movies as $item)
                                <tr>
                                    <td> {{ $item->Id }}</td>
                                    <td> {{ $item->Ten }} </td>
                                    <td> {{ $item->NgayKhoiChieu }} </td>
                                    <td> {{ $item->ThoiLuongChieu }} </td>
                                    <td> {{ $item->TheLoai }} </td>
                                    <td> {{ $item->QuocGia }} </td>
                                    <td>
                                        <a type="button" href="{{ route('movie.show', $item->Id) }}" class="btn btn-outline-secondary btn-rounded " title="Chi tiết"><i style="margin-top: 30px" class="mdi mdi-alert-octagon text-success"></i></a>
                                        <a href="{{ route('movie.edit', $item->Id) }}" type="button" class="btn btn-danger btn-rounded">Chỉnh Sửa</a>
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
