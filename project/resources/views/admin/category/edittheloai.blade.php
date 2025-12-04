@extends('layout/admin')
@section('body')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h3 class="mt-4 mb-4">Chỉnh Sửa Thể loại: {{ $category->name }}</h3>
            <form action="{{ route('admin.category.update', ['category' => $category->id]) }}" method="POST">
                @csrf 
                @method('PUT') 
                <div class="form-group mb-3">
                    <label for="name">Tên Thể loại:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $category->name) }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="image">Hình Ảnh:</label>
                    <input type="text" class="form-control" id="image" name="image" value="{{ old('image', $category->image) }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="status">Trạng Thái:</label>
                    <select class="form-control" id="status" name="status" required>
                        <option value="1" >Hiển Thị</option>
                        <option value="0" >Ẩn</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-warning mt-3">Cập Nhật Thể loại</button>
                <a href="{{ route('admin.category.index')}}" class="btn btn-secondary mt-3">Hủy</a>
            </form>
        </div>
    </div>
</div>
@endsection