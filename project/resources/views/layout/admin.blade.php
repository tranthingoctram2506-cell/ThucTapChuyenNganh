<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JamJam Admin - Trang quản trị | </title>

    <base href="{{asset('public/')}}">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container-fluid">

        <a class="navbar-brand text-warning fw-bold" href="{{ route('admin') }}">
            Trang quản trị
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <form class="d-flex mx-auto" role="search">
                <input class="form-control me-2" type="search" placeholder="Tìm kiếm..." aria-label="Search">
                <button class="btn btn-warning" type="submit"><i class="fa fa-search"></i></button>
            </form>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class=" btn btn-outline-light ms-2" data-toggle="modal" data-target="#exampleModal" href="#" ><i class="fa fa-sign-out-alt"></i> Đăng xuất</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar (sử dụng min-vh-100 để đảm bảo chiều cao) -->
        <aside class="col-md-2 p-0 bg-dark min-vh-100">
            <div class="d-flex flex-column pt-3">
                <a class="text-decoration-none text-white py-2 px-3 hover-bg-secondary" href="{{ route('admin') }}"><i class="fa fa-dashboard me-2"></i> Tổng quan</a>
                <a class="text-decoration-none text-white py-2 px-3 hover-bg-secondary" href="{{ route('danhsachphim') }}"><i class="fa fa-film me-2"></i> Quản lý phim</a>
                <a class="text-decoration-none text-white py-2 px-3 hover-bg-secondary" href="{{ route('phimchoduyet') }}"><i class="fa fa-film me-2"></i> Phim chờ duyệt</a>
                <a class="text-decoration-none text-white py-2 px-3 bg-secondary" href="{{ route('theloai') }}"><i class="fa fa-tags me-2"></i> Thể loại</a>
                <a class="text-decoration-none text-white py-2 px-3 hover-bg-secondary" href="#"><i class="fa fa-pen me-2"></i> Review</a>
                <a class="text-decoration-none text-white py-2 px-3 hover-bg-secondary" href="#"><i class="fa fa-users me-2"></i> Người dùng</a>
                <a class="text-decoration-none text-white py-2 px-3 hover-bg-secondary" href="#"><i class="fa fa-comments me-2"></i> Bình luận</a>
                <a class="text-decoration-none text-white py-2 px-3 hover-bg-secondary" href="#"><i class="fa fa-cog me-2"></i> Cài đặt</a>
            </div>
        </aside>

        <!-- Content -->
        <main class="col-md-10 content-area">
            @yield('body')
        </main>
    </div>
</div>
<!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
          </div>
        </div>
      </div>
    </div>
<footer class="bg-dark text-white p-3 mt-auto">
    <div class="container-fluid">
        ©Movie Review — Trang quản trị
    </div>
</footer>

<!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>


</body>
</html>