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
            <i class="fa fa-fw fa-edit"></i>
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
            <i class="fa fa-fw fa-users"></i>
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
      <div class="card text-white bg-success o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa fa-fw fa-eye"></i>
          </div>
          <div class="mr-5">1,234,567 Lượt Xem Tổng!</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="#">
          <span class="float-left">Xem Thống Kê</span>
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
            <i class="fa fa-fw fa-ban"></i>
          </div>
          <div class="mr-5">13 Bình Luận Cần Xử Lý!</div>
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
      <i class="fa fa-table"></i> Top 5 Bài Review Gần Đây</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Tiêu Đề Review</th>
              <th>Phim</th>
              <th>Tác Giả</th>
              <th>Ngày Đăng</th>
              <th>Lượt Xem</th>
              <th>Thao Tác</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Tiêu Đề Review</th>
              <th>Phim</th>
              <th>Tác Giả</th>
              <th>Ngày Đăng</th>
              <th>Lượt Xem</th>
              <th>Thao Tác</th>
            </tr>
          </tfoot>
          <tbody>
            <tr>
              <td>Review "Nghệ Thuật Của Sự Sống"</td>
              <td>Nghệ Thuật Của Sự Sống</td>
              <td>Trần Văn A</td>
              <td>2024/01/15</td>
              <td>12,500</td>
              <td><a href="#" class="btn btn-sm btn-primary">Xem</a></td>
            </tr>
            <tr>
              <td>Phân tích "Kẻ Cắp Giấc Mơ 2"</td>
              <td>Kẻ Cắp Giấc Mơ 2</td>
              <td>Lê Thị B</td>
              <td>2024/01/14</td>
              <td>8,700</td>
              <td><a href="#" class="btn btn-sm btn-primary">Xem</a></td>
            </tr>
            <tr>
              <td>Tại sao nên xem "Huyền Thoại Biển"</td>
              <td>Huyền Thoại Biển</td>
              <td>Nguyễn Văn C</td>
              <td>2024/01/13</td>
              <td>5,200</td>
              <td><a href="#" class="btn btn-sm btn-primary">Xem</a></td>
            </tr>
            <tr>
              <td>Review phim 'Tên Phim Bom Tấn'</td>
              <td>Tên Phim Bom Tấn</td>
              <td>Phạm Thu D</td>
              <td>2024/01/12</td>
              <td>15,800</td>
              <td><a href="#" class="btn btn-sm btn-primary">Xem</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer small text-muted">Cập nhật lúc 11:59 PM hôm qua</div>
  </div>
</div>
@endsection