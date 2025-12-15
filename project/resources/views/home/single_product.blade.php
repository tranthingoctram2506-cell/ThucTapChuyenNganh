@extends('layout/home')
@section('body')

@forelse($phim as $object)

<!-- Single Page Header -->
<div class="container-fluid page-header py-5">
    <h1 class="text-center text-white display-6 wow fadeInUp" data-wow-delay="0.1s">Single Product</h1>
</div>

<!-- Single Product -->
<div class="container-fluid shop py-5">
    <div class="container py-5">

        <div class="row justify-content-center">
            <div class="col-lg-7 col-xl-9">

                <div class="single-product">
                    <div class="col-12 mb-4">
                        <div class="product-image-wrapper">
                            <img src="{{$object->image}}" class="product-image" alt="Image">
                        </div>
                    </div>

                    <!-- THÔNG TIN SẢN PHẨM -->
                    <div class="col-12">
                        <p class="mb-3">Tên phim: {{$object->name}}</p>
                        <p class="mb-3">Lượt xem: {{$object->price}}</p>
                        <p class="mb-4">
                            Nội dung:
                            {{$object->description}}
                        </p>
                        <!-- FORM COMMENT -->
                        <form action="#">
                            <p class="mb-5 fw-bold">Bình luận</p>

                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="border-bottom rounded">
                                        <input type="text" class="form-control border-0" placeholder="Your Name *">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="border-bottom rounded">
                                        <input type="email" class="form-control border-0" placeholder="Your Email *">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="border-bottom rounded my-4">
                                        <textarea class="form-control border-0" rows="8"
                                            placeholder="Your Review *"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="d-flex justify-content-between py-3 mb-5">
                                        <div class="d-flex align-items-center">
                                            <p class="mb-0 me-3">Please rate:</p>
                                            <div class="d-flex align-items-center" style="font-size: 12px;">
                                                <i class="fa fa-star text-muted"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>

                                        <a href="#" class="btn btn-primary border border-secondary text-primary rounded-pill px-4 py-3">
                                            Post Comment
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </form>

                    </div>

                </div>

            </div>
        </div>

    </div>
</div>

@empty
<p class="text-center">Không có dữ liệu</p>
@endforelse

@endsection
