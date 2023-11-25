@extends('layout._adminLayout')


@section('adminMain')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">Thêm lich chieu</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a> quan ly lich chieu</a></li>
                <li class="breadcrumb-item active" aria-current="page">Thêm lich chieu</li>
            </ol>
        </nav>
    </div>
    <form class="forms-sample" action="{{ route('showtime.store') }}"  method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Thông tin lich chieu</h4>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Phim</label>
                            <select name="PhimId" id="" class="form-control input-hover" required>
                                <option value="">------chon phim--------</option>
                                @foreach($movies as $item)
                                <option value="{{ $item->Id }}">{{ $item->Ten }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Phong chieu</label>
                            <select name="PhongId" id="" class="form-control input-hover" required>
                                <option value="">------chon phong--------</option>
                                @foreach($rooms as $item)
                                <option value="{{ $item->Id }}">{{ $item->Ten .' chinh nhanh ' .$item->tenChinhanh}}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">gio bat dau</label>
                            <input name="GioBatDau" type="time" class="form-control input-hover " id="exampleInputUsername" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Ngay chieu</label>
                            <input name="Ngay" type="date" class="form-control input-hover" id="exampleInputUsername" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">gia</label>
                            <input name="Gia" type="text" class="form-control input-hover" id="exampleInputUsername" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputUsername1">mo ta</label>
                            <input name="Mota" type="text" class="form-control input-hover" id="exampleInputUsername" required>
                        </div>
                        <div class="form-group">
                            <input hidden name="TrangThai" type="text" class="form-control input-hover" id="exampleInputUsername" value="1" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success btn-rounded" title="Chỉnh sửa nội dung phim">Thêm</button>
        <a type="button" class="btn btn-danger btn-rounded" title="Quay lai">Quay lai</a>
    </form>
</div>
@endsection
