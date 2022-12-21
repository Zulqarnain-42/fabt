@extends('layout.main')
@section('content')

    @if (count($collectionslider) > 0)
        <div class="block block-slideshow">
            <div class="block-slideshow__carousel">
                <div class="owl-carousel">
                    @forelse ($collectionslider as $slider)
                        <a class="block-slideshow__item" href="#">
                            <span class="block-slideshow__item-image block-slideshow__item-image--desktop"
                                style="background-image: url('{{ 'https://test.fa-bt.com/' }}{{ $slider->image }}')"></span>
                            <span class="block-slideshow__item-image block-slideshow__item-image--mobile"
                                style="background-image: url('');"></span>
                            <span class="block-slideshow__item-offer">{{ $slider->text }} </span>
                            <span class="block-slideshow__item-title">{{ $slider->heading }} </span>
                            <span class="block-slideshow__item-details">{{ $slider->text2 }} </span>
                            <span class="block-slideshow__item-button">Shop Now</span>
                        </a>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    @endif


    <!--Contents-->
    <main>

        @if ($collecionourserivce)
            <!-- ====== start projects  ====== -->
            <section class="projects section-padding style-3">
                <div class="container">
                    <div class="section-head style-3 text-center">
                        <h3>Our <span>Services</span></h3>
                    </div>
                    <div class="content">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="project-card d-block mb-30 style-3">
                                    <a href="#" class="img img-cover d-block">
                                        <img src="assets/img/projects/3.png" alt="">
                                    </a>
                                    <div class="info">
                                        <h5 class="h5"><a href="#">Catty Boxes NFT
                                                Blockchain</a>
                                        </h5>
                                        <small class="small"><a href="#">Game Development</a></small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="project-card d-block mb-30 style-3">
                                    <a href="#" class="img img-cover d-block">
                                        <img src="assets/img/projects/4.png" alt="">
                                    </a>
                                    <div class="info">
                                        <h5 class="h5"><a href="#">Catty Boxes NFT
                                                Blockchain</a>
                                        </h5>
                                        <small class="small"><a href="#">Game Development</a></small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="project-card d-block style-3 mb-30 mb-lg-0">
                                    <a href="#" class="img img-cover d-block">
                                        <img src="assets/img/projects/5.png" alt="">
                                    </a>
                                    <div class="info">
                                        <h5 class="h5"><a href="#">Catty Boxes NFT
                                                Blockchain</a>
                                        </h5>
                                        <small class="small"><a href="#">Game Development</a></small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="project-card d-block style-3">
                                    <a href="#" class="img img-cover d-block">
                                        <img src="assets/img/projects/6.png" alt="">
                                    </a>
                                    <div class="info">
                                        <h5 class="h5"><a href="#">Catty Boxes NFT
                                                Blockchain</a>
                                        </h5>
                                        <small class="small"><a href="#">Game Development</a></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="{{ route('services') }}" class="btn rounded-pill bg-blue2 sm-butn mt-60 text-white">
                                <span>See All Services</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ====== end projects  ====== -->
        @endif

        @if (count($latestProducts) > 0)
            <div class="product-page style-5">

                <!-- ====== start Related products ====== -->
                <section class="related-products">
                    <div class="container">
                        <div class="text-center title">
                            <h3>New Products</h3>
                        </div>
                        <div class="related-products-slider position-relative">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    @foreach ($latestProducts as $product)
                                        <div class="swiper-slide">
                                            <div class="product-card">
                                                <a href="product/{{ $product->slug }}">
                                                    <div class="img">

                                                        <img src="{{ 'https://test.fa-bt.com/' }}{{ $product->thumbnail }}"
                                                            alt="{{ $product->title }}">


                                                        {{-- <span class="label new">new</span>
                                                    <span class="fav-btn active"> <i class="fas fa-heart"></i> </span> --}}
                                                    </div>
                                                </a>
                                                <div class="info">
                                                    <h6 class="category">asus</h6>
                                                    <a href="product/{{ $product->slug }}">
                                                        <h5 class="title">{{ $product->title }}</h5>
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
                                                    ${{ $product->price }}
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
                <!-- ====== end Related products ====== -->

            </div>
        @endif

        @if (count($latestprojects) > 0)
            <!-- ====== start portfolio ====== -->
            <section class="portfolio section-padding bg-gray style-1">
                <div class="container">
                    <div class="row">
                        <div class="col offset-lg-1">
                            <div class="section-head mb-60">
                                <h6 class="color-main text-uppercase wow fadeInUp">Portfolio</h6>
                                <h2 class="wow fadeInUp">
                                    Latest Projects <span class="fw-normal">From Our Team</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="content wow fadeIn slow">
                        <div class="portfolio-slider">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    @foreach ($latestprojects as $project)
                                        <div class="swiper-slide">
                                            <div class="portfolio-card">
                                                <div class="img">
                                                    <img src="{{ URL::asset($project->thumbnail) }}" alt="">
                                                </div>
                                                <div class="info">
                                                    <h5>
                                                        <a href="#"> {{ $project->title }}
                                                        </a>
                                                    </h5>
                                                    <small class="d-block color-main text-uppercase"><a href="/">IT
                                                            Consultation</a></small>
                                                    <div class="text">
                                                        Trust our top minds to eliminate workflow pain points, implement
                                                        new
                                                        tech & app.
                                                    </div>
                                                    <div class="tags">
                                                        <a href="/">Consultation</a>
                                                        <a href="/">Management</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>

                            <!-- ====== slider pagination ====== -->
                            <div class="swiper-pagination"></div>

                            <!-- ====== slider navigation ====== -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
                <img src="assets/img/projects/prog/shap_r.png" alt="" class="shap_r">
                <img src="assets/img/projects/prog/shap_l.png" alt="" class="shap_l">
            </section>
            <!-- ====== end portfolio ====== -->
        @endif



        @if (count($customerReviews) > 0)
            <!-- ====== start testimonials ====== -->
            <section class="testimonials section-padding style-1">
                <div class="container">
                    <div class="section-head mb-60 text-center">
                        <h6 class="color-main text-uppercase wow fadeInUp">testimonials</h6>
                        <h2 class="wow fadeInUp">
                            The Trust <span class="fw-normal">From Clients</span>
                        </h2>
                    </div>
                    <div class="content">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="vid_img mb-2 mb-md-0 wow zoomIn slow">
                                    <img src="assets/img/testimonials/testi.jpg" alt="">
                                    <a href="https://youtu.be/pGbIOC83-So?t=21" data-lity class="play_icon">
                                        <i class="bi bi-play"></i>
                                    </a>
                                    <div class="img_info wow fadeInUp">
                                        <h4><a href="/">Casper Defloy</a></h4>
                                        <small><a href="/">Tech Leader at Esty Inc</a></small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="info wow fadeInUp">
                                    @foreach ($customerReviews as $review)
                                        <div class="client_card mb-2" data-wow-delay="0">
                                            <div class="user_img">
                                                <img src="assets/img/testimonials/user1.jpg" alt="">
                                            </div>
                                            <div class="inf_content">
                                                <div class="rate_stars">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                </div>
                                                <h6>
                                                    “{{ $review->description }}”
                                                </h6>
                                                <p>{{ $review->clientname }} <span class="text-muted">/
                                                        {{ $review->designation }}</span>
                                                </p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ====== end testimonials ====== -->
        @endif


        @if (count($teammembers) > 0)
            <!-- ====== start team ====== -->
            <section class="team section-padding pt-0 style-1">
                <div class="container">
                    <div class="section-head mb-60 text-center">
                        <h6 class="color-main text-uppercase wow fadeInUp">meet our expert</h6>
                        <h2 class="wow fadeInUp">
                            Clients Satisfaction, <span class="fw-normal">Our Reputation</span>
                        </h2>
                    </div>
                    <div class="content">
                        @foreach ($teammembers as $member)
                            <div class="team_box wow fadeInUp" data-wow-delay="0">
                                <div class="avatar">
                                    <img src="{{ URL::asset($member->picture) }}" alt="">
                                </div>
                                <div class="info">
                                    <h6><a href="/">{{ $member->name }}</a></h6>
                                    <small>{{ $member->designation }}</small>
                                    <div class="social_icons">
                                        @if ($member->twitterlink)
                                            <a href="{{ $member->twitterlink }}">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        @endif
                                        @if ($member->facebooklink)
                                            <a href="{{ $member->facebooklink }}">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        @endif
                                        @if ($member->linkedinlink)
                                            <a href="{{ $member->linkedinlink }}">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        @endif
                                        @if ($member->instagramlink)
                                            <a href="{{ $member->instagramlink }}">
                                                <i class="fab fa-github"></i>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                <img src="assets/img/team/team_shap.png" alt="" class="team_shap">
            </section>
            <!-- ====== end team ====== -->
        @endif


        @if (count($instagram_feed) > 0)
            <!-- ====== start blog ====== -->
            <section class="blog section-padding bg-gray style-1">
                <div class="container">
                    <div class="row">
                        <div class="col offset-lg-1">
                            <div class="section-head mb-60">
                                <h6 class="color-main text-uppercase wow fadeInUp">our press</h6>
                                <h2 class="wow fadeInUp">
                                    Latest Posts <span class="fw-normal">From Our Press</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="blog_slider">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    @foreach ($instagram_feed as $feed)
                                        <div class="swiper-slide">
                                            <div class="blog_box">
                                                <div class="tags">
                                                    {{-- <a href="{{ $feed->permalink }}"></a> --}}
                                                </div>
                                                <div class="img">
                                                    <img src="{{ $feed->url }}" alt="">
                                                </div>
                                                <div class="info">
                                                    <h6><a href="{{ $feed->permalink }}">{{ $socialposts->title }}</a>
                                                    </h6>
                                                    <div class="auther">
                                                        <span>
                                                            <img class="auther-img"
                                                                src="assets/img/testimonials/user1.jpg" alt="">
                                                            <small><a href="/">By Admin</a></small>
                                                        </span>
                                                        <span>
                                                            <i class="bi bi-calendar2"></i>
                                                            <small><a href="/">May 15, 2022</a></small>
                                                        </span>
                                                    </div>
                                                    <div class="text">
                                                        {{ $feed->caption }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- ====== slider navigation ====== -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ====== end blog ====== -->
        @endif



        <!-- ====== start contact ====== -->
        <section class="contact section-padding bg-gradient style-1">
            <div class="container">
                <div class="section-head mb-60 text-center">
                    <h6 class="text-white text-uppercase wow fadeInUp">contact us</h6>
                    <h2 class="wow fadeInUp text-white">
                        Request Free <span class="fw-normal">Consultancy</span>
                    </h2>
                </div>
                <div class="content">
                    <div class="row justify-content-center">
                        @if ($companyinfo)
                            @foreach ($companyinfo as $company)
                                <div class="col-lg-5">
                                    <div class="contact_info text-white">
                                        <p class="wow fadeInUp">Hotline 24/7</p>
                                        <h4 class="wow fadeInUp">{{ $company->phonenumber }}</h4>
                                        <ul>
                                            <li class="wow fadeInUp">
                                                <strong>Address : </strong> {{ $company->address }}
                                            </li>
                                            <li class="wow fadeInUp">
                                                <strong>Email : </strong> {{ $company->email }}
                                            </li>
                                            <li class="wow fadeInUp">
                                                <strong>Work Hour : </strong> {{ $company->workinghour }}
                                            </li>
                                        </ul>
                                        <a href="{{ $company->google_location }}" class="wow fadeInUp">get
                                            direction</a>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                        <div class="col-lg-6 offset-lg-1">
                            <form class="contact_form" action="https://smartinnovates.com/items/iteck/html/contact.php"
                                method="post">
                                <div class="row gx-3">
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3 wow fadeInUp">
                                            <input type="text" name="name" class="form-control"
                                                placeholder="name *">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3 wow fadeInUp">
                                            <input type="text" name="email" class="form-control"
                                                placeholder="Email Address *">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3 wow fadeInUp">
                                            <select name="option" class="form-select"
                                                aria-label="Default select example">
                                                <option selected>Your inquiry about</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3 wow fadeInUp">
                                            <textarea class="form-control" rows="4" placeholder="Write your inquiry here"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-check mb-4 wow fadeInUp">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label text-light small" for="flexCheckDefault">
                                                By submitting, i’m agreed to the <a href="/"
                                                    class="text-decoration-underline">Terms & Conditons</a>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="submit" value="Request Now"
                                            class="btn btn-dark wow fadeInUp text-light fs-14px">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <img src="assets/img/contact_globe.svg" alt="" class="contact_globe">
        </section>
        <!-- ====== end contact ====== -->
    </main>
    <!--End-Contents-->
@endsection
