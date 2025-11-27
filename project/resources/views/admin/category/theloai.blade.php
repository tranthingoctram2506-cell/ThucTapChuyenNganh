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