@extends('layout/admin') 
@section('body')
  <div class="mb-3 d-flex justify-content-end">
    <a href="" class="btn btn-primary">
        <i class="fa fa-plus"></i> Thêm Phim Mới
    </a>
  </div>

  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-table"></i> Danh Sách Chi Tiết Các Bộ Phim</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Tiêu Đề Phim</th>
            </tr>
          </thead>
          <tbody>
            @forelse($phims as $object)
            <tr>
                <th>{{ $object->id }}</th>
                <td>{{ $object->name }}</td>
                <td><a href=""><i class="fa-solid fa-eye text-info"></i></a></td>
                <td><a href=""><i class="fa-solid fa-pen-to-square text-warning"></i></a></td>
                <td><a href=""><i class="fa-solid fa-trash text-danger"></i></a></td>
            </tr>
            @empty
                <h3>Chưa có dữ liệu</h3>
            @endforelse


        </table>
      </div>
    </div>

</div>
@endsection