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
                <div class="form-group mb-3">
                    <label for="image">Hình Ảnh:</label>
                    <input type="text" class="form-control" id="image" name="image" value="{{ old('image') }}" required>
                </div>
                <div class="form-group mb-3"></div>
                    <label for="status">Trạng Thái:</label>
                    <select class="form-control" id="status" name="status" required>
                        <option value="1" >Hiển Thị</option>
                        <option value="0" >Ẩn</option>
                    </select>
                <button type="submit" class="btn btn-success mt-3"> Thêm</button>
                <a href="{{ route('admin.category.index')}}" class="btn btn-secondary mt-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5"/>
</svg>    Thoát</a>
            </form>
        </div>
    </div>
</div>
@endsection