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
                <button type="submit" class="btn btn-success mt-3">Lưu Phim</button>
                <a href="{{ route('admin.product.index')}}" class="btn btn-secondary mt-3">Hủy</a>
            </form>
        </div>
    </div>
</div>
@endsection