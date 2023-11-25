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
    <form class="forms-sample" action="{{ route('movie.update', $movie->Id) }}"  method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Thông tin chính</h4>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Tên Phim</label>
                            <input type="text" name="Ten" value="{{ $movie->Ten }}" class="form-control" id="exampleInputUsername">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Ngày khởi chiếu</label>
                            <input type="date" name="NgayKhoiChieu" value="{{ $movie->NgayKhoiChieu }}" class="form-control" id="exampleInputUsername">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Thời lượng chiếu</label>
                            <input type="text" name="ThoiLuongChieu" value="{{ $movie->ThoiLuongChieu }}" class="form-control" id="exampleInputUsername">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Thể loại</label>
                            <input type="text" name="TheLoai" value="{{ $movie->TheLoai }}" class="form-control" id="exampleInputUsername">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Quốc gia</label>
                            <input type="text" name="QuocGia" value="{{ $movie->QuocGia }}" class="form-control" id="exampleInputUsername">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Diễn viên</label>
                            <input type="text" name="DienVien" value="{{ $movie->DienVien }}" class="form-control" id="exampleInputUsername">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Đạo diễn</label>
                            <input type="text" name="DaoDien" value="{{ $movie->DaoDien }}" class="form-control" id="exampleInputUsername">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Ảnh đại diện</h4>
                        <img style="width: 100%;" src="{{ asset('images/'.$movie->img) }}" />
                        <div class="forms-sample">
                            <div class="form-group">
                                <label> </label>
                                <input type="file" name="img" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                    <input type="text" id="file_input" name="img" value="{{ $movie->img }}" class="form-control file-upload-info" required>
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" type="button">Tải ảnh lên</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Trailer</h4>
                        <video controls style="width : 400px">
                            <source src="{{ asset('trailers/'.$movie->Trailer) }}">
                        </video>
                        <div class="forms-sample">
                            <div class="form-group">
                                <label> </label>
                                <input type="file" name="Trailer" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                    <input type="text" id="file_input" name="Trailer" value="{{ $movie->Trailer }}" class="form-control file-upload-info" required>
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" type="button">Tải ảnh lên</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleTextarea1">Nội dung phim</label>
            <textarea  class="form-control" id="exampleTextarea1" name="NoiDung" rows="4">{{ $movie->NoiDung }}</textarea>
        </div>
        <button type="submit" class="btn btn-success btn-rounded" title="Chỉnh sửa nội dung phim">Chỉnh sửa</button>
        <a href="{{ route('movie.index') }}" type="button" class="btn btn-danger btn-rounded" title="Quay lai">Quay lai</a>
    </form>
</div>
@endsection
