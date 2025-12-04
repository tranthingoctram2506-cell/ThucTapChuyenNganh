@extends('layout/admin') 
@section('body')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h3 class="mt-4 mb-4">Thêm Phim Mới</h3>
            <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
                @csrf 
                <div class="form-group mb-3">
                    <label for="name">Tên Phim:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>    
                <div class="form-group mb-3">
                    <label for="image">Hình Ảnh:</label>
                    <input type="text" class="form-control" id="image" name="image" value="{{ old('image') }}" required>
                    @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="description">Mô Tả:</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description') }}</textarea>
                    @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="content">Nội Dung:</label>
                    <textarea class="form-control" id="content" name="content" rows="5" required>{{ old('content') }}</textarea>
                    @error('content') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="price">Giá:</label>
                    <input type="number" class="form-control" id="price" name="price" value="{{ old('price') }}" required>
                    @error('price') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="status">Trạng Thái:</label>
                    <select class="form-control" id="status" name="status" required>
                        <option value="1" >Hiển Thị</option>
                        <option value="0" >Ẩn</option>
                    </select>
                    @error('status') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="category_id">Danh Mục:</label>
                    <input type="number" class="form-control" id="category_id" name="category_id" value="{{ old('category_id') }}" required>
                    @error('category_id') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <button type="submit" class="btn btn-success mt-3">Lưu Phim</button>
                <a href="{{ route('admin.product.index')}}" class="btn btn-secondary mt-3">Hủy</a>
            </form>
        </div>
    </div>
</div>
@endsection