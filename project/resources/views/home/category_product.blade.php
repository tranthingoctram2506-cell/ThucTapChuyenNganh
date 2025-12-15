@extends('layout/home')
@section('body')
<div class="container mt-5">
  <div class="row justify-content-center g-4">
    @forelse($phims as $object)
    <div class="col-md-4 col-lg-3">
      <div class="card h-100 d-flex flex-column">
        <img src="{{$object->image}}" class="card-img-top" alt="...">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">{{$object->name}}</h5>
          <p class="card-text">{{$object->description}}</p>
          <a href="#" class="btn btn-primary mb-2">{{$object->price}}</a>
          <a href="{{route('single_product',['category'=>$object->id])}}" class="btn btn-second mt-auto">Chi tiết sản phẩm</a>
        </div>
      </div>
    </div>
    @empty
    <p class="text-center">Không có dữ liệu</p>
    @endforelse
  </div>
</div>
@endsection
