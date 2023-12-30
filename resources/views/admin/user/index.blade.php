@extends('layout._adminLayout')


@section('adminMain')

<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Tất cả người dùng </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Quản lý người dùng</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tất cả người dùng</li>
            </ol>
        </nav>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Danh sách</h4>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tên đăng nhập</th>
                                <th>Email</th>
                                <th>Họ và tên</th>
                                <th>Số điện thoại</th>
                                <th>vai trò</th>
                                <th>Trạng thái</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($user as $item)
                                <tr>
                                    <td> {{ $item->Id }}</td>
                                    <td> {{ $item->TenDangNhap }} </td>
                                    <td> {{ $item->Email }} </td>
                                    <td> {{ $item->HoTen }} </td>
                                    <td> {{ $item->SDT }} </td>
                                    <td>  Khách hàng </td>
                                    <td> {{ $item->IsActive }} </td>
                                    <td>
                                        <button type="button" class="btn btn-warning  btn-rounded">Đổi trạng thái</button>
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
