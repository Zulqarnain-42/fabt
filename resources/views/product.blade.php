@extends('layout.main')
@section('content')

    <main class="product-page style-5">
        @if (count($singleproduct) > 0)
            @foreach ($singleproduct as $product)
                <section class="product pt-50">
                    <div class="container">
                        <div class="section-head text-center mb-80 style-5">
                            <div class="page-links color-999">
                                <a href="/" class="me-2">
                                    Home
                                </a>
                                <span class="me-2">/</span>
                                <a href="/" class="me-2">
                                    Store
                                </a>
                                <span class="me-2">/</span>
                                <a href="/" class="color-000">
                                    {{ $product->title }}
                                </a>
                            </div>
                        </div>

                        <div class="content">
                            <div class="row gx-5">
                                <div class="col-lg-6">
                                    <div class="product-slider">
                                        <div class="swiper-container gallery-thumbs">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="img">
                                                        <img src="{{ 'https://test.fa-bt.com/' }}{{ $product->thumbnail }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-container gallery-top">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="img">
                                                        <img src="{{ 'https://test.fa-bt.com/' }}{{ $product->thumbnail }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="product-info">
                                        <h6 class="category">Samsung</h6>
                                        <h5 class="title">{{ $product->title }}</h5>
                                        <div class="rate">
                                            <div class="stars">
                                                <i class="fas fa-star active"></i>
                                                <i class="fas fa-star active"></i>
                                                <i class="fas fa-star active"></i>
                                                <i class="fas fa-star active"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="rev">3 Reviews</span>
                                        </div>
                                        <div class="price">
                                            ${{ $product->price }}
                                        </div>
                                        <div class="more-info pt-20 mt-1 border-1 border-top brd-gray">
                                            <p class="text-uppercase fs-14px color-666 mb-1">
                                                <strong class="color-000">SKU:</strong>
                                                {{ strtoupper($product->productcode) }}
                                            </p>
                                            <p class="text-uppercase fs-14px color-666 mb-1">
                                                <strong class="color-000">MFR:</strong> {{ $product->mfr }}
                                            </p>
                                            <p class="fs-14px color-666 mb-1">
                                                <strong class="color-000">Category:</strong> Technology
                                            </p>
                                        </div>
                                        <div class="color-quantity">
                                            <div class="qyt-addCart">
                                                <a href="https://store.fa-bt.com/product/{{ $product->slug }}"
                                                    class="btn rounded-pill">
                                                    <span>Go to Store</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="socail-icons">
                                            <a href="/"
                                                class="icon-35 rounded-circle bg-gray overflow-hidden d-inline-flex align-items-center justify-content-center text-gray me-2">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                            <a href="/"
                                                class="icon-35 rounded-circle bg-gray overflow-hidden d-inline-flex align-items-center justify-content-center text-gray me-2">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                            <a href="/"
                                                class="icon-35 rounded-circle bg-gray overflow-hidden d-inline-flex align-items-center justify-content-center text-gray me-2">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                            <a href="/"
                                                class="icon-35 rounded-circle bg-gray overflow-hidden d-inline-flex align-items-center justify-content-center text-gray me-2">
                                                <i class="fab fa-pinterest"></i>
                                            </a>
                                            <a href="/"
                                                class="icon-35 rounded-circle bg-gray overflow-hidden d-inline-flex align-items-center justify-content-center text-gray">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="product-details pt-100">
                    <div class="container">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-description-tab" data-bs-toggle="pill"
                                    data-bs-target="/pills-description" type="button" role="tab"
                                    aria-controls="pills-description" aria-selected="true">Description</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-information-tab" data-bs-toggle="pill"
                                    data-bs-target="/pills-information" type="button" role="tab"
                                    aria-controls="pills-information" aria-selected="false">Additional Information</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-description" role="tabpanel"
                                aria-labelledby="pills-description-tab">
                                <div class="content-info text-center pb-0">
                                    <div class="text mb-30">
                                        {!! $product->longdescription !!}
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-reviews" role="tabpanel"
                                aria-labelledby="pills-reviews-tab">
                                <div class="product-reviews pt-30">
                                    <div class="row gx-5">
                                        <div class="col-lg-7">
                                            <div class="reviews-content pt-30">
                                                <h5 class="color-000 mb-40 text-capitalize"> 02 reviews </h5>
                                                <div class="comment-replay-cont bg-light py-5 px-4 mb-20">
                                                    <div class="d-flex comment-cont">
                                                        <div
                                                            class="icon-60 rounded-circle img-cover overflow-hidden me-3 flex-shrink-0">
                                                            <img src="assets/img/team/2.jpg" alt="">
                                                        </div>
                                                        <div class="inf">
                                                            <div class="title d-flex justify-content-between">
                                                                <h6 class="fw-bold fs-14px">Robert Downey Jr</h6>
                                                                <div class="time fs-12px text-uppercase d-inline-block">
                                                                    <div class="rate">
                                                                        <div class="stars">
                                                                            <i class="fas fa-star active"></i>
                                                                            <i class="fas fa-star active"></i>
                                                                            <i class="fas fa-star active"></i>
                                                                            <i class="fas fa-star active"></i>
                                                                            <i class="fas fa-star"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="text color-000 fs-12px mt-10">
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                sed do eiusmod tempor incididunt ut labore et dolore magna
                                                                aliqua.Atume
                                                                nusaate staman utra phone limo sumeria
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="comment-replay-cont bg-light py-5 px-4 mb-20">
                                                    <div class="d-flex comment-cont">
                                                        <div
                                                            class="icon-60 rounded-circle img-cover overflow-hidden me-3 flex-shrink-0">
                                                            <img src="assets/img/team/4.jpg" alt="">
                                                        </div>
                                                        <div class="inf">
                                                            <div class="title d-flex justify-content-between">
                                                                <h6 class="fw-bold fs-14px">Ben Chiwell</h6>
                                                                <div class="time fs-12px text-uppercase">
                                                                    <div class="rate">
                                                                        <div class="stars">
                                                                            <i class="fas fa-star active"></i>
                                                                            <i class="fas fa-star active"></i>
                                                                            <i class="fas fa-star active"></i>
                                                                            <i class="fas fa-star active"></i>
                                                                            <i class="fas fa-star"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="text color-000 fs-12px mt-10">
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                sed do
                                                                eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                                Atume
                                                                nusaate staman utra phone limo sumeria
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <form class="comment-form d-block pt-30">
                                                <h5 class="color-000 mb-40 text-capitalize"> Add a review </h5>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label class="text-uppercase mb-1">
                                                            your rating
                                                        </label>
                                                        <div class="rate-stars">
                                                            <input type="radio" name="star" value="5">
                                                            <input type="radio" name="star" value="4">
                                                            <input type="radio" name="star" value="3">
                                                            <input type="radio" name="star" value="2">
                                                            <input type="radio" name="star" value="1">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-30">
                                                            <textarea class="form-control radius-4 fs-12px p-3" rows="6" placeholder="Write your comment here"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-4 mb-lg-0">
                                                            <input type="text"
                                                                class="form-control fs-12px radius-4 p-3"
                                                                placeholder="Your Name *">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <input type="text"
                                                                class="form-control fs-12px radius-4 p-3"
                                                                placeholder="Your Email *">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-check mt-20">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckDefault">
                                                            <label class="form-check-label fs-12px"
                                                                for="flexCheckDefault">
                                                                Save my name &amp; email in this browser for next time I
                                                                comment
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <a href="/"
                                                            class="btn rounded-pill blue5-3Dbutn hover-blue5 sm-butn fw-bold mt-40">
                                                            <span>Submit Comment </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-information" role="tabpanel"
                                aria-labelledby="pills-information-tab">
                                <div class="content-info pb-0">
                                    <div class="additional-info">
                                        <ul>
                                            <li>
                                                <strong>Weight</strong>
                                                <span> 0.6 kg </span>
                                            </li>
                                            <li>
                                                <strong>Dimensions</strong>
                                                <span> 40 × 30 × 30 cm </span>
                                            </li>
                                            <li>
                                                <strong>Color</strong>
                                                <span> White, Black, Red </span>
                                            </li>
                                            <li>
                                                <strong>Year</strong>
                                                <span> 2021 </span>
                                            </li>
                                            <li>
                                                <strong>Style</strong>
                                                <span> Classic, Modern </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            @endforeach
        @endif

        @if (count($mightalsolike) > 0)
            <section class="related-products section-padding">
                <div class="container">
                    <div class="text-center title">
                        <h3>Might Also Like</h3>
                    </div>
                    <div class="related-products-slider position-relative">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                @foreach ($mightalsolike as $alsolike)
                                    <div class="swiper-slide">
                                        <div class="product-card">
                                            <a href="{{ URL('product') }}{{ '/' . $alsolike->slug }}">
                                                <div class="img">
                                                    <img src="{{ 'https://test.fa-bt.com/' }}{{ $alsolike->thumbnail }}"
                                                        alt="">
                                                </div>
                                            </a>
                                            <div class="info">
                                                <h6 class="category">asus</h6>
                                                <a href="{{ URL('product') }}{{ '/' . $alsolike->slug }}">
                                                    <h5 class="title">{{ $alsolike->title }}</h5>
                                                </a>
                                                <div class="rate">
                                                    <div class="stars">
                                                        <i class="fas fa-star active"></i>
                                                        <i class="fas fa-star active"></i>
                                                        <i class="fas fa-star active"></i>
                                                        <i class="fas fa-star active"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rev">3 Reviews</span>
                                                </div>
                                            </div>
                                            <div class="price">
                                                ${{ $alsolike->price }}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </section>
        @endif
    </main>

@endsection
