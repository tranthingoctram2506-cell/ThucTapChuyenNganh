@extends('layout/admin') 
@section('body')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h3 class="mt-4 mb-4">Thêm Thể loại Mới</h3>
            <form action="{{ route('admin.category.store') }}" method="post">
                @csrf 
                <div class="form-group mb-3">
                    <label for="name">Tên Thể loại:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                </div>
                <button type="submit" class="btn btn-success mt-3">Lưu Thể loại</button>
                <a href="{{ route('admin.category.index')}}" class="btn btn-secondary mt-3">Hủy</a>
            </form>
        </div>
    </div>
</div>
@endsection