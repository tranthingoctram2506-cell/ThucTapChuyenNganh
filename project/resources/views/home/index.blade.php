@extends('layout/home')
@section('body')
    <div class="container-fluid carousel bg-dark px-0">
        <div class="row g-0 justify-content-end">
            <div class="col-12">
                <div class="header-carousel owl-carousel bg-dark py-5">
                    <div class="row g-0 header-carousel-item align-items-center">
                        <div class="col-xl-6 carousel-img wow fadeInLeft" data-wow-delay="0.1s">
                            <img src="{{ asset('img/muado.png') }}" class="img-fluid w-100" alt="Phim Mưa Đỏ">
                        </div>
                        <div class="col-xl-6 carousel-content p-4">
                            <h4 class="text-uppercase fw-bold mb-4 wow fadeInRight text-white" data-wow-delay="0.1s"
                                style="letter-spacing: 3px;">Phim Hot Mới Ra Mắt</h4>
                            <h1 class="display-3 text-capitalize mb-4 wow fadeInRight text-success" data-wow-delay="0.3s">Review Phim
                                Hành Động <br> "Phim Mưa Đỏ"</h1>
                            <p class="text-light wow fadeInRight" data-wow-delay="0.5s">Đánh giá chi tiết, không spoil,
                                cập nhật mới nhất.</p>
                            <a class="btn btn-success rounded-pill py-3 px-5 wow fadeInRight" data-wow-delay="0.7s"
                                href="#">Xem Review Ngay</a>
                        </div>
                    </div>
                    <div class="row g-0 header-carousel-item align-items-center">
                        <div class="col-xl-6 carousel-img wow fadeInLeft" data-wow-delay="0.1s">
                            <img src="{{ asset('img/bogia.png') }}" class="img-fluid w-100" alt="Phim Bố Già">
                        </div>
                        <div class="col-xl-6 carousel-content p-4">
                            <h4 class="text-uppercase fw-bold mb-4 wow fadeInRight text-white" data-wow-delay="0.1s"
                                style="letter-spacing: 3px;">Tổng Hợp Phim Hay</h4>
                            <h1 class="display-3 text-capitalize mb-4 wow fadeInRight text-success" data-wow-delay="0.3s">Tuyển Tập
                                Phim Chiếu Rạp <br> Được Đánh Giá Cao Nhất</h1>
                            <p class="text-light wow fadeInRight" data-wow-delay="0.5s">Từ Lãng Mạn đến Kinh Dị, mọi thể
                                loại đều có.</p>
                            <a class="btn btn-success rounded-pill py-3 px-5 wow fadeInRight" data-wow-delay="0.7s"
                                href="#">Khám Phá</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  @endsection