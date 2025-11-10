@extends('layout/admin') 
@section('body')
<div class="container-fluid">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Tổng Quan</li>
  </ol>
  <div class="row">
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-warning o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa-solid fa-hourglass-half"></i>
          </div>
          <div class="mr-5">26 Bài Review Chờ Duyệt!</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href=""> 
          <span class="float-left">Duyệt Ngay</span>
          <span class="float-right">
            <i class="fa fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-primary o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa fa-fw fa-user-plus"></i>
          </div>
          <div class="mr-5">11 Thành Viên Mới Hôm Nay!</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="">
          <span class="float-left">Xem Chi Tiết</span>
          <span class="float-right">
            <i class="fa fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-info o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa-solid fa-video"></i>
          </div>
          <div class="mr-5">123 Phim Cần Cập Nhật!</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="">
          <span class="float-left">Quản Lý Phim</span>
          <span class="float-right">
            <i class="fa fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-danger o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa-solid fa-comment-slash"></i>
          </div>
          <div class="mr-5">13 Bình Luận Vi Phạm!</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="">
          <span class="float-left">Xử Lý Ngay</span>
          <span class="float-right">
            <i class="fa fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
  </div>
  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-area-chart"></i> Lưu Lượng Truy Cập Theo Ngày</div>
    <div class="card-body">
      <canvas id="myAreaChart" width="100%" height="30"></canvas>
    </div>
    <div class="card-footer small text-muted">Cập nhật lúc 11:59 PM hôm qua</div>
  </div>
  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-table"></i> Danh Sách Review Chờ Duyệt Gần Đây</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Tiêu Đề Review</th>
              <th>Phim Liên Quan</th>
              <th>Tác Giả</th>
              <th>Ngày Đăng</th>
              <th>Trạng Thái</th>
              <th>Thao Tác</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Review "Tên Phim 1"</td>
              <td>Tên Phim Bom Tấn</td>
              <td>Trần Văn A</td>
              <td>2024/01/15</td>
              <td><span class="badge bg-warning text-dark">Chờ Duyệt</span></td>
              <td><a href="#" class="btn btn-sm btn-success">Duyệt</a> <a href="#" class="btn btn-sm btn-danger">Xóa</a></td>
            </tr>
            <tr>
              <td>Phân tích "Tên Phim 2"</td>
              <td>Kẻ Cắp Giấc Mơ 2</td>
              <td>Lê Thị B</td>
              <td>2024/01/14</td>
              <td><span class="badge bg-warning text-dark">Chờ Duyệt</span></td>
              <td><a href="#" class="btn btn-sm btn-success">Duyệt</a> <a href="#" class="btn btn-sm btn-danger">Xóa</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer small text-muted">Cập nhật lúc 11:59 PM hôm qua</div>
  </div>
</div>
@endsection