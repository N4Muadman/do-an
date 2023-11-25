@extends('layout._adminLayout')


@section('adminMain')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">Thêm phim sắp chiếu</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a> Phim sắp chiếu</a></li>
                <li class="breadcrumb-item active" aria-current="page">Thêm phim mới</li>
            </ol>
        </nav>
    </div>
    <form class="forms-sample" action="{{ route('movie.store') }}"  method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Thông tin chính</h4>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Tên Phim</label>
                            <input name="Ten" type="text" class="form-control input-hover" id="exampleInputUsername" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Ngày khởi chiếu</label>
                            <input name="NgayKhoiChieu" type="date" class="form-control input-hover" id="exampleInputUsername" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Thời lượng chiếu</label>
                            <input name="ThoiLuongChieu" type="text" class="form-control input-hover " id="exampleInputUsername" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Thể loại</label>
                            <input name="TheLoai" type="text" class="form-control input-hover" id="exampleInputUsername" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Quốc gia</label>
                            <input name="QuocGia" type="text" class="form-control input-hover" id="exampleInputUsername" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Diễn viên</label>
                            <input name="DienVien" type="text" class="form-control input-hover" id="exampleInputUsername" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Đạo diễn</label>
                            <input name="DaoDien" type="text" class="form-control input-hover" id="exampleInputUsername" required>
                        </div>
                        <div class="form-group">
                            <input hidden name="status" type="text" class="form-control input-hover" id="exampleInputUsername" value="1" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Ảnh đại diện</h4>
                        <div class="forms-sample">
                            <div class="form-group">
                                <label>Tải ảnh lên</label>
                                <input type="file" name="img" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                    <input type="text" id="file_input" name="img" class="form-control file-upload-info" required>
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" type="button">Tải ảnh lên</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Trailer</h4>
                        <div class="forms-sample">
                            <div class="form-group">
                                <label>Tải trailer lên</label>
                                <input type="file" name="Trailer" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                    <input type="text" id="file_input" name="Trailer" class="form-control file-upload-info" required>
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" type="button">Tải trailer lên</button>
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
            <textarea name="NoiDung" class="form-control input-hover" id="exampleTextarea1" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-success btn-rounded" title="Chỉnh sửa nội dung phim">Thêm</button>
        <a type="button" class="btn btn-danger btn-rounded" title="Quay lai">Quay lai</a>
    </form>
</div>
@endsection
