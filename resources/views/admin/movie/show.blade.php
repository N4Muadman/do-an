@extends('layout._adminLayout')


@section('adminMain')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">Chi tiết phim </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Phim đang chiếu</a></li>
                <li class="breadcrumb-item active" aria-current="page">Chi tiết</li>
            </ol>
        </nav>
    </div>
    <form class="forms-sample">
        <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Thông tin chính</h4>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Tên Phim</label>
                            <input type="text" value="{{ $movie->Ten }}" class="form-control disabled" id="exampleInputUsername" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Danh mục</label>
                            @if($movie->NgayKhoiChieu > date("d-m-Y") )
                            <input type="text"  value="Phim dang chieu"  class="form-control disabled" id="exampleInputUsername" disabled>
                            @else
                            <input type="text"  value="Phim sap chieu"  class="form-control disabled" id="exampleInputUsername" disabled>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Ngày khởi chiếu</label>
                            <input type="date" value="{{ $movie->NgayKhoiChieu }}" class="form-control disabled" id="exampleInputUsername" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Thời lượng chiếu</label>
                            <input type="text" value="{{ $movie->ThoiLuongChieu }}" class="form-control disabled" id="exampleInputUsername" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Thể loại</label>
                            <input type="text" value="{{ $movie->TheLoai }}" class="form-control disabled" id="exampleInputUsername" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Quốc gia</label>
                            <input type="text" value="{{ $movie->QuocGia }}" class="form-control disabled" id="exampleInputUsername" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Diễn viên</label>
                            <input type="text" value="{{ $movie->DienVien }}" class="form-control disabled" id="exampleInputUsername" disabled>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Đạo diễn</label>
                            <input type="text" value="{{ $movie->DaoDien }}" class="form-control disabled" id="exampleInputUsername" disabled>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Ảnh đại diện</h4>
                        <img style="width: 100%;" src="{{ asset('images/'.$movie->img) }}" />
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Trailer</h4>
                        <video controls style="width : 400px">
                            <source src="{{ asset('trailers/'.$movie->Trailer) }}">
                        </video>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleTextarea1">Nội dung phim</label>
            <textarea  class="form-control disabled" id="exampleTextarea1" disabled rows="4">{{ $movie->NoiDung }}</textarea>
        </div>
        <a href="{{ route('movie.edit', $movie->Id) }}" type="button" class="btn btn-success btn-rounded" title="Chỉnh sửa nội dung phim">Chỉnh sửa</a>
        <a href="{{ route('movie.index') }}" type="button" class="btn btn-danger btn-rounded" title="Quay lai">Quay lai</a>
    </form>
</div>
@endsection
