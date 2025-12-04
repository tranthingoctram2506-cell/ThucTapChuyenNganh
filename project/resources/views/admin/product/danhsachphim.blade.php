@extends('layout/admin') 
@section('body')
<div class="mb-3 d-flex justify-content-end">
  <a href="{{route('admin.product.create')}}" class="btn btn-primary">
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
       <th>Hình Ảnh</th>
       <th>Mô Tả</th>
       <th>Nội Dung</th>
       <th>Trạng Thái</th>
       <th>Giá</th>
       <th>view</th>
       <th>edit</th>
       <th>delete</th>
      </tr>
     </thead>
     <tbody>
      @forelse($phims as $phim) 
      <tr>
        <th>{{ $phim->id }}</th>
        <td>{{ $phim->category->name}}</td>
        <td><a href=""><i class="fa-solid fa-eye text-info"></i></a></td>
        <td>
            <a href="{{route('admin.product.edit', ['product'=>$phim->id])}}" 
            class="btn btn-sm btn-warning text-dark">
            <i class="fa-solid fa-pen-to-square"></i> Sửa </a>
        </td>
        <td>
        <form action="{{route('admin.product.destroy', ['product'=>$phim->id])}}"
        method="post" style="display:inline;">
          @csrf()
          @method('delete') 
        <button type="submit" class="btn btn-sm btn-danger" 
        onclick="return confirm('Bạn có chắc chắn muốn xóa phim {{ $phim->name }} không?');">
            <i class="fa-solid fa-trash"></i> Xóa
            </button>
        </form>
        </td>
      </tr>
      @empty
        <tr><td colspan="5"><h3>Chưa có dữ liệu phim</h3></td></tr>
      @endforelse
    </table>
   </div>
  </div>
</div>
@endsection
        

        