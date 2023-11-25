@extends('layout._adminLayout')

@section('adminMain')
<div class="content-wrapper">
    <div class="row">
        <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-9">
                            <div class="d-flex align-items-center align-self-start">
                                <h3 class="mb-0">@Model.Where(m => m.CreateDate.Day == dt.Day).Count()</h3>
                            <p class="text-success ml-2 mb-0 font-weight-medium">Doanh thu: @Model.Where(m => m.CreateDate.Day == dt.Day).Sum(m=>m.GiaTien)đ</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="icon icon-box-success ">
                                <span class="mdi mdi-arrow-top-right icon-item"></span>
                            </div>
                        </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Số lượng vé bán trong ngày</h6>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-9">
                            <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">@Model.Where(m => m.CreateDate.Month == dt.Month).Count()</h3>
                            <p class="text-success ml-2 mb-0 font-weight-medium">Doanh thu: @Model.Where(m => m.CreateDate.Month == dt.Month).Sum(m=>m.GiaTien)đ</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="icon icon-box-success">
                                <span class="mdi mdi-arrow-top-right icon-item"></span>
                            </div>
                        </div>
                    </div>
                <h6 class="text-muted font-weight-normal">Số lượng vé bán trong tháng</h6>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-9">
                            <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">@Model.Where(m => m.CreateDate.Year == dt.Year).Count()</h3>
                            <p class="text-success ml-2 mb-0 font-weight-medium">Doanh thu: @Model.Where(m => m.CreateDate.Year == dt.Year).Sum(m=>m.GiaTien)đ</p>
                            </div>
                        </div>
                        <div class="col-3">
                             <div class="icon icon-box-success">
                                <span class="mdi mdi-arrow-top-right icon-item"></span>
                            </div>
                        </div>
                    </div>
                <h6 class="text-muted font-weight-normal">Số lượng vé bán trong năm</h6>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
