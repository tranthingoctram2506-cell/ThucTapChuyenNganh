@extends('layout/admin') 
@section('body')
<div class="mb-3 d-flex justify-content-end">
    <a href="{{route('admin.category.create')}}" class="btn btn-primary">
        <i class="fa fa-plus"></i> Thêm Thể loại Mới
    </a>
</div>
<div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-table"></i> Danh Sách Các Thể loại</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Tên Thể loại</th>
              <th>Hình Ảnh</th>
              <th>status</th>
              <th>view</th>
              <th>edit</th>
              <th>delete</th>
            </tr>
          </thead>
          <tbody>
            @forelse($categories as $category) 
            <tr>
                <th>{{ $category->id }}</th>
                <td>{{ $category->name }}</td>
                <td><img src="{{ $category->image }}" style="max-width: 100px;"></td>
                <td>
                    @if($category->status==1)
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg>
                    @else
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.646-3.646a.5.5 0 0 0-.708 0L8 7.293 5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0 0-.708z"/>
</svg>
                    @endif
                <td><a href=""><i class="fa-solid fa-eye text-info"></i></a></td>
                <td>
                    <a href="{{route('admin.category.edit', ['category'=>$category->id])}}" class="btn btn-sm btn-warning text-dark">
                      <i class="fa-solid fa-pen-to-square"></i> Sửa
                    </a>
                </td>
                <td>
                    <form action="{{route('admin.category.destroy', ['category'=>$category->id])}}" method="post" style="display:inline;">
                    @csrf()
                    @method('delete') 
                    <button type="submit" class="btn btn-sm btn-danger" 
                        onclick="return confirm('Bạn có chắc chắn muốn xóa thể loại {{ $category->name }} không?');">
                        <i class="fa-solid fa-trash"></i> Xóa
                    </button>
                  </form>
                </td>
            </tr>
            @empty
                <tr><td colspan="3"><h3>Chưa có dữ liệu thể loại</h3></td></tr>
            @endforelse
        </table>
      </div>
    </div>
</div>
@endsection