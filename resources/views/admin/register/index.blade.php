<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themewagon.github.io/corona-free-dark-bootstrap-admin-template/pages/samples/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Mar 2023 12:13:43 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Quản trị đặt vé xem phim</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.png') }}" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Đăng kí</h3>
                <form id="register" action="{{ route('admin.register') }}" method="POST">
                    @csrf
                  <div class="form-group">
                    <label>Tên đăng nhập</label>
                    <input type="text" class="form-control p_input" name="tendangnhap" required>
                    @if(Session::has('ErrorNameRg'))
                    <h5 style="color: firebrick" >{{ Session::get('ErrorNameRg') }}
                    @endif
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control p_input" name="email" required>
                    @if(Session::has('ErrorEmailRg'))
                    <h5 style="color: firebrick" >{{ Session::get('ErrorEmailRg') }}
                    @endif
                  </div>
                  <div class="form-group">
                    <label>Mật khẩu</label>
                    <input type="password" id="password" name="matkhau" class="form-control p_input" required>
                  </div>
                  <div class="form-group">
                    <label>Nhập lại mật khẩu</label>
                    <input type="password" id="confirmPassword"  required class="form-control p_input">
                    <h5 style="color: firebrick" id="message"></h5>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">Đăng kí</button>
                  </div>
                  <div class="d-flex">
                    <button class="btn btn-facebook col mr-2">
                      <i class="mdi mdi-facebook"></i> Facebook </button>
                    <button class="btn btn-google col">
                      <i class="mdi mdi-google-plus"></i> Google plus </button>
                  </div>
                  <p class="sign-up text-center">Bạn đã có tài khoản?<a href="{{ route('admin.login.index') }}"> Đăng nhập</a></p>
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->

    <script src="{{ asset('admin/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('admin/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('admin/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('admin/assets/js/misc.js') }}"></script>
    <script src="{{ asset('admin/assets/js/settings.js') }}"></script>
    <script src="{{ asset('admin/assets/js/todolist.js') }}"></script>
	<script src="{{ asset('js/register.js')}}"></script>
    <!-- endinject -->
  </body>

<!-- Mirrored from themewagon.github.io/corona-free-dark-bootstrap-admin-template/pages/samples/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Mar 2023 12:13:43 GMT -->
</html>
