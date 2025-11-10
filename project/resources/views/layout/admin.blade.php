<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin | Quản Lý Review Phim</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <link href="css/sb-admin.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="">Movie Review Admin</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href=""> 
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard Tổng Quan</span>
          </a>
        </li>
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Quản Lý Phim">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMovies" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-film"></i>
            <span class="nav-link-text">Quản Lý Phim</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMovies">
            <li>
              <a href="">Danh Sách Phim</a>
            </li>
            <li>
              <a href="">Quản Lý Thể Loại</a>
            </li>
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Quản Lý Review">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseReviews" data-parent="#exampleAccordion">
            <i class="fa-solid fa-pen-to-square"></i>
            <span class="nav-link-text">Quản Lý Review</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseReviews">
            <li>
              <a href="">Bài Viết Chờ Duyệt</a>
            </li>
            <li>
              <a href="">Bài Viết Đã Đăng</a>
            </li>
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Quản Lý Thành Viên">
          <a class="nav-link" href="">
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">Thành Viên</span>
          </a>
        </li>
        
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Quản Lý Bình Luận">
          <a class="nav-link" href="">
            <i class="fa fa-fw fa-comments"></i>
            <span class="nav-link-text">Bình Luận</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Cài Đặt">
          <a class="nav-link" href="">
            <i class="fa fa-fw fa-cogs"></i>
            <span class="nav-link-text">Cài Đặt</span>
          </a>
        </li>

      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Tìm kiếm phim, review...">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    
    @yield('body')
    
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small> Movie Review Admin 2025</small>
        </div>
      </div>
    </footer>
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Sẵn sàng thoát?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Chọn "Đăng Xuất" nếu bạn muốn kết thúc phiên làm việc hiện tại.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy</button>
            <a class="btn btn-primary" href="">Đăng Xuất</a>
          </div>
        </div>
      </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="js/sb-admin.min.js"></script>
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>