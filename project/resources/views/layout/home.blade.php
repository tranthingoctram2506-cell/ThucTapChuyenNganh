<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Trang Chủ | MovieReview </title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body class="bg-dark text-white">
    <div id="spinner"
        class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-success" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    
    <div class="container-fluid px-5 py-4 d-none d-lg-block bg-black border-bottom border-secondary">
        <div class="row gx-0 align-items-center text-center">
            <div class="col-md-3 text-center text-lg-start">
                <div class="d-inline-flex align-items-center">
                    <a href="{{ route('home') }}" class="navbar-brand p-0">
                        <h1 class="display-5 text-success m-0"><i
                                class="fas fa-film text-white me-2"></i>Movie</h1>
                    </a>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <div class="position-relative ps-4">
                    <div class="d-flex border border-success rounded-pill">
                        <input class="form-control border-0 rounded-pill w-100 py-3 bg-dark text-white" type="text"
                            placeholder="Tìm kiếm phim, diễn viên, đạo diễn...">
                        <button type="button" class="btn btn-success rounded-pill py-3 px-5" style="border: 0;"><i
                                class="fas fa-search text-dark"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center text-lg-end">
                <div class="d-inline-flex align-items-center">
                    <a href="#" class="text-success d-flex align-items-center justify-content-center me-3"
                        title="Phim Yêu Thích"><span class="rounded-circle btn-md-square border"><i
                                class="fas fa-heart"></i></a>
                    <a href="#" class="text-success d-flex align-items-center justify-content-center"
                        title="Tài Khoản"><span class="rounded-circle btn-md-square border"><i
                                class="fa fa-user"></i></span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid nav-bar p-0">
        <div class="row gx-0 bg-success px-5 align-items-center">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-dark bg-success ">
                    <a href="{{ route('home') }}" class="navbar-brand d-block d-lg-none">
                        <h1 class="display-5 text-white m-0"><i
                                class="fas fa-film text-dark me-2"></i>Movie</h1>
                    </a>
                    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars fa-1x text-dark"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav ms-auto py-0">
                            <a href="{{ route('home') }}" class="nav-item nav-link active text-white">Trang Chủ</a>
                            <div class="nav-item dropdown">
                                <a href="review.html" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">Thể loại</a>
                                <ul class="dropdown-menu bg-success border-0 rounded-0 m-0">
                                    @forelse($categories as $object)
                                    <li>
                                        <a href="{{route('category_product',['category'=>$object->id])}}" class="dropdown-item">{{ $object->name }}</a>
                                    </li>
                                    @empty
                                    <h1>loi</h1>
                                    @endforelse
                                    <!-- <a href="{{ route('hanhdong') }}"class="dropdown-item">Hành động</a>
                                    <a href="{{ route('kinhdi') }}" class="dropdown-item">Kinh dị</a>
                                    <a href="#" class="dropdown-item">Hài hước</a>
                                    <a href="#" class="dropdown-item">Hoạt hình</a>
                                    <a href="#" class="dropdown-item">Lãng mạn</a> -->
                                </ul>
                            </div>
                            <a href="{{ route('tintuc') }}" class="nav-item nav-link text-white">Tin Tức Điện Ảnh</a>
                            <a href="contact.html" class="nav-item nav-link me-2 text-white">Liên Hệ</a>
                        </div>
                        <a href="https://www.youtube.com/results?search_query=movie+trailer" target="_blank"
                            class="btn btn-dark rounded-pill py-2 px-4 px-lg-3 mb-3 mb-md-3 mb-lg-0 text-success border border-white"><i
                                class="fa fa-video me-2"></i> Xem Trailer</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
        @yield('body')
    

    
    <div class="container-fluid product py-5 bg-dark">
        <div class="container py-5">
            <div class="tab-class">
                <div class="row g-4 mb-5">
                    <div class="col-12 text-center wow fadeIn" data-wow-delay="0.1s">
                        <h1 class="text-success">Phim Mới & Nổi Bật</h1>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="product-item rounded wow fadeInUp bg-dark border border-success" data-wow-delay="0.1s">
                                    <div class="product-item-inner border-0 rounded">
                                        <div class="product-item-inner-item">
                                            <img src="{{ asset('img/lamgiauma.png') }}" class="img-fluid w-100 rounded-top"
                                                alt="Poster Phim">
                                            <div class="product-new bg-success text-dark">NEW</div>
                                            <div class="product-details">
                                                <a href="#"><i class="fa fa-eye fa-1x text-success"></i></a>
                                            </div>
                                        </div>
                                        <div class="text-center rounded-bottom p-4 bg-black">
                                            <a href="#" class="d-block mb-2 text-success">Kinh Dị</a>
                                            <a href="#" class="d-block h4 text-white">Phim Làm Giàu Với Ma <br> (Phim Chiếu Rạp)</a>
                                            <span class="me-2 fs-5 text-light">2024</span>
                                            <span class="text-success fs-5">⭐ 9.5/10</span>
                                        </div>
                                    </div>
                                    <div
                                        class="product-item-add border border-top-0 border-success rounded-bottom text-center p-4 pt-0">
                                        <a href="#"
                                            class="btn btn-success border-white rounded-pill py-2 px-4 mb-4"><i
                                                class="fas fa-book-open me-2"></i> Xem Review</a>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <div class="d-flex">
                                                <i class="fas fa-star text-success"></i>
                                                <i class="fas fa-star text-success"></i>
                                                <i class="fas fa-star text-success"></i>
                                                <i class="fas fa-star text-success"></i>
                                                <i class="fas fa-star text-secondary"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="product-item rounded wow fadeInUp bg-dark border border-success" data-wow-delay="0.3s">
                                    <div class="product-item-inner border-0 rounded">
                                        <div class="product-item-inner-item">
                                            <img src="{{ asset('img/mai.png') }}" class="img-fluid w-100 rounded-top"
                                                alt="Poster Phim">
                                            <div class="product-sale bg-success text-dark">HOT</div>
                                            <div class="product-details">
                                                <a href="#"><i class="fa fa-eye fa-1x text-success"></i></a>
                                            </div>
                                        </div>
                                        <div class="text-center rounded-bottom p-4 bg-black">
                                            <a href="#" class="d-block mb-2 text-success">Kịch tính </a>
                                            <a href="#" class="d-block h4 text-white">Phim Mai <br> (Phim Chiếu Rạp)</a>
                                            <span class="me-2 fs-5 text-light">2023</span>
                                            <span class="text-success fs-5">⭐ 8.9/10</span>
                                        </div>
                                    </div>
                                    <div
                                        class="product-item-add border border-top-0 border-success rounded-bottom  text-center p-4 pt-0">
                                        <a href="#"
                                            class="btn btn-success border-white rounded-pill py-2 px-4 mb-4"><i
                                                class="fas fa-book-open me-2"></i> Xem Review</a>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <div class="d-flex">
                                                <i class="fas fa-star text-success"></i>
                                                <i class="fas fa-star text-success"></i>
                                                <i class="fas fa-star text-success"></i>
                                                <i class="fas fa-star text-success"></i>
                                                <i class="fas fa-star text-secondary"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="product-item rounded wow fadeInUp bg-dark border border-success" data-wow-delay="0.5s">
                                    <div class="product-item-inner border-0 rounded">
                                        <div class="product-item-inner-item">
                                            <img src="{{ asset('img/lieuchuky.png') }}" class="img-fluid w-100 rounded-top"
                                                alt="Poster Phim">
                                            <div class="product-details">
                                                <a href="#"><i class="fa fa-eye fa-1x text-success"></i></a>
                                            </div>
                                        </div>
                                        <div class="text-center rounded-bottom p-4 bg-black">
                                            <a href="#" class="d-block mb-2 text-success">Hành động</a>
                                            <a href="#" class="d-block h4 text-white">Phim Liễu Chu Ký <br> (Phim Điện Ảnh)</a>
                                            <span class="me-2 fs-5 text-light">2022</span>
                                            <span class="text-success fs-5">⭐ 8.5/10</span>
                                        </div>
                                    </div>
                                    <div
                                        class="product-item-add border border-top-0 border-success rounded-bottom  text-center p-4 pt-0">
                                        <a href="#"
                                            class="btn btn-success border-white rounded-pill py-2 px-4 mb-4"><i
                                                class="fas fa-book-open me-2"></i> Xem Review</a>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <div class="d-flex">
                                                <i class="fas fa-star text-success"></i>
                                                <i class="fas fa-star text-success"></i>
                                                <i class="fas fa-star text-success"></i>
                                                <i class="fas fa-star text-success"></i>
                                                <i class="fas fa-star text-secondary"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="product-item rounded wow fadeInUp bg-dark border border-success" data-wow-delay="0.7s">
                                    <div class="product-item-inner border-0 rounded">
                                        <div class="product-item-inner-item">
                                            <img src="{{ asset('img/lactroi.png') }}" class="img-fluid w-100 rounded-top"
                                                alt="Poster Phim">
                                            <div class="product-new bg-success text-dark">TOP</div>
                                            <div class="product-details">
                                                <a href="#"><i class="fa fa-eye fa-1x text-success"></i></a>
                                            </div>
                                        </div>
                                        <div class="text-center rounded-bottom p-4 bg-black">
                                            <a href="#" class="d-block mb-2 text-success">Hài hước</a>
                                            <a href="#" class="d-block h4 text-white">Phim Lạc Trôi <br> (Phim Ngắn)</a>
                                            <span class="me-2 fs-5 text-light">2024</span>
                                            <span class="text-success fs-5">⭐ 9.8/10</span>
                                        </div>
                                    </div>
                                    <div
                                        class="product-item-add border border-top-0 border-success rounded-bottom  text-center p-4 pt-0">
                                        <a href="#"
                                            class="btn btn-success border-white rounded-pill py-2 px-4 mb-4"><i
                                                class="fas fa-book-open me-2"></i> Xem Review</a>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <div class="d-flex">
                                                <i class="fas fa-star text-success"></i>
                                                <i class="fas fa-star text-success"></i>
                                                <i class="fas fa-star text-success"></i>
                                                <i class="fas fa-star text-success"></i>
                                                <i class="fas fa-star text-success"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 text-center mt-5">
                                <a href="#" class="btn btn-success rounded-pill py-3 px-5 text-dark">Tải thêm Phim / Xem tất cả</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    
    <div class="container-fluid py-5 bg-dark">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                    <a href="#" class="d-flex align-items-center justify-content-between bg-success rounded p-5">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-magic fa-4x text-dark me-5"></i>
                            <div>
                                <h4 class="text-dark">Tổng hợp các bài Review nổi bật nhất</h4>
                                <h1 class="text-white display-3 mb-0">TUYỂN CHỌN ĐẶC BIỆT</h1>
                            </div>
                        </div>
                        <div class="text-end">
                            <p class="text-dark mb-2">Đừng bỏ lỡ!</p>
                            <span class="btn btn-dark rounded-pill align-self-center py-2 px-4 text-success">Xem Ngay</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid footer py-2 wow fadeIn bg-black" data-wow-delay="0.1s">
        <div class="container py-2">
            <div class="row g-2">
                <div class="col-md-6 col-lg-6 col-xl-6">
                    <div class="footer-item">
                        <h4 class="mb-4 text-success"><i class="fas fa-film me-2"></i>MovieReview</h4>
                        <p class="text-light">Nền tảng cung cấp các bài đánh giá phim chuyên sâu và khách quan nhất.</p>
                        <p class="text-white"><i class="fa fa-map-marker-alt me-2"></i> 123 Phố Điện Ảnh, TP. Phim</p>
                        <p class="text-white"><i class="fa fa-envelope me-2"></i> info@moviereview.com</p>
                        <p class="text-white"><i class="fa fa-phone-alt me-2"></i> +012 345 67890</p>
                        <div class="d-flex align-items-center">
                            <i class="fab fa-twitter btn-md-square text-success me-3"></i>
                            <i class="fab fa-facebook-f btn-md-square text-success me-3"></i>
                            <i class="fab fa-youtube btn-md-square text-success me-3"></i>
                            <i class="fab fa-linkedin-in btn-md-square text-success"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6">
                    <div class="footer-item">
                        <h4 class="mb-4 text-success">Đăng Ký Nhận Tin</h4>
                        <p class="text-light">Nhận các bài review phim mới nhất qua email.</p>
                        <div class="position-relative mx-auto">
                            <input class="form-control border-success rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Email của bạn">
                            <button type="button" class="btn btn-success rounded-pill position-absolute top-0 end-0 py-2 mt-2 me-2">Đăng Ký</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>