@extends('layout.main')
@section('content')

    <main class="services-page style-5">
        @if (count($collectionourservices) > 0)
            <section class="features section-padding pt-50 style-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-head text-center mb-60 style-5">
                                <h2 class="mb-20"> Our <span> Services </span> </h2>
                                <p>
                                    We provide perfect Solutions for your business
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="row">
                            @foreach ($collectionourservices as $service)
                                @if ($service->id == 1)
                                    <div class="col-lg-7">
                                        <div class="project-card d-block mb-30 style-3">
                                            <a href="#" class="img img-cover d-block">
                                                <img src="assets/img/projects/3.png" alt="">
                                            </a>
                                            <div class="info">
                                                <h5 class="h5">
                                                    <a href="#">{{ $service->title }}</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                @if ($service->id == 2)
                                    <div class="col-lg-5">
                                        <div class="project-card d-block mb-30 style-3">
                                            <a href="#" class="img img-cover d-block">
                                                <img src="assets/img/projects/4.png" alt="">
                                            </a>
                                            <div class="info">
                                                <h5 class="h5">
                                                    <a href="#">{{ $service->title }}</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                @if ($service->id == 3)
                                    <div class="col-lg-6">
                                        <div class="project-card d-block style-3 mb-30 mb-lg-0">
                                            <a href="#" class="img img-cover d-block">
                                                <img src="assets/img/projects/5.png" alt="">
                                            </a>
                                            <div class="info">
                                                <h5 class="h5">
                                                    <a href="#">{{ $service->title }}</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                @if ($service->id == 4)
                                    <div class="col-lg-6">
                                        <div class="project-card d-block style-3">
                                            <a href="#" class="img img-cover d-block">
                                                <img src="assets/img/projects/6.png" alt="">
                                            </a>
                                            <div class="info">
                                                <h5 class="h5"><a href="#">{{ $service->title }}</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                @if ($service->id == 5)
                                    <div class="col-lg-5">
                                        <div class="project-card d-block mb-30 style-3">
                                            <a href="#" class="img img-cover d-block">
                                                <img src="assets/img/projects/4.png" alt="">
                                            </a>
                                            <div class="info">
                                                <h5 class="h5"><a href="#">{{ $service->title }}</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                @if ($service->id == 6)
                                    <div class="col-lg-7">
                                        <div class="project-card d-block mb-30 style-3">
                                            <a href="#" class="img img-cover d-block">
                                                <img src="assets/img/projects/3.png" alt="">
                                            </a>
                                            <div class="info">
                                                <h5 class="h5"><a href="">{{ $service->title }}</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                @if ($service->id == 7)
                                    <div class="col-lg-6">
                                        <div class="project-card d-block style-3 mb-30 mb-lg-0">
                                            <a href="#" class="img img-cover d-block">
                                                <img src="assets/img/projects/5.png" alt="">
                                            </a>
                                            <div class="info">
                                                <h5 class="h5"><a href="#">{{ $service->title }}</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                @if ($service->id == 8)
                                    <div class="col-lg-6">
                                        <div class="project-card d-block style-3">
                                            <a href="#" class="img img-cover d-block">
                                                <img src="assets/img/projects/6.png" alt="">
                                            </a>
                                            <div class="info">
                                                <h5 class="h5"><a href="#">{{ $service->title }}</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        @endif


        @if (count($collectionbrand) > 0)
            <section class="services section-padding bg-white pb-50 style-6">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-head text-center mb-60 style-5">
                                <h2 class="mb-20"> Our Top <span> Brands </span> </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <div class="services-slider position-relative style-6">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                @foreach ($collectionbrand as $brand)
                                    <div class="swiper-slide">
                                        <a href="/shop/{{ $brand->slug }}" class="service-card style-6">
                                            <div class="icon">
                                                <img src="{{ 'https://test.fa-bt.com/' }}{{ $brand->image }}"
                                                    alt="">
                                            </div>
                                            <div class="info">
                                                <h5>{{ $brand->title }}</h5>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif


        @if (count($collectionreviews) > 0)
            <section class="testimonials section-padding bg-gray5 style-5">
                <div class="container">
                    <div class="section-head text-center mb-60 style-5">
                        <h2 class="mb-20"> Clients <span> Reviews </span> </h2>
                        <p> Future Art Broadcast Trading loved from thoudsands customer worldwide and get trusted from big
                            companies. </p>
                    </div>
                </div>
                <div class="content">
                    <div class="testimonial-slider position-relative style-5">
                        <div class="swiper-container pb-70">
                            <div class="swiper-wrapper">
                                @foreach ($collectionreviews as $review)
                                    <div class="swiper-slide">
                                        <a href="/" class="testi-card style-5">
                                            <div class="stars">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="text">
                                                “{{ $review->description }}”
                                            </div>
                                            <div class="user mt-40 text-center">
                                                <div class="icon-80 rounded-circle img-cover overflow-hidden m-auto">
                                                    <img src="assets/img/team/1.jpg" alt="">
                                                </div>
                                                <h6>{{ $review->clientname }}</h6>
                                                <small>{{ $review->designation }}</small>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </section>
        @endif
    </main>

@endsection
