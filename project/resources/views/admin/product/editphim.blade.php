@extends('layout/admin')
@section('body')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h3 class="mt-4 mb-4">Chỉnh Sửa Phim: {{ $phim->name }}</h3>
            <form action="{{ route('admin.product.update', ['product' => $phim->id]) }}" method="POST">
                @csrf 
                @method('PUT') 
                <div class="form-group mb-3">
                    <label for="name">Tên Phim:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $phim->name) }}" required>
                </div>
                <button type="submit" class="btn btn-warning mt-3">Cập Nhật Phim</button>
                <a href="{{ route('admin.product.index')}}" class="btn btn-secondary mt-3">Hủy</a>
            </form>
        </div>
    </div>
</div>
@endsection