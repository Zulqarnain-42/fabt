@extends('layout.main')
@section('content')

    <main class="single-project pt-50 style-5">
        @if ($collectionservice)
            @foreach ($collectionservice as $service)
                <section class="about-app style-5">
                    <div class="container">
                        <div class="content text-center">
                            <h1 class="color-000 mb-50">{{ $service->title }}</h1>
                            <div class="about-cards border-bottom brd-gray">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="about-card mb-30 mb-lg-0">
                                            <small class="d-block">
                                                client
                                            </small>
                                            <h6>
                                                Micosoft Holding Ltd, <br> Australia Area
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="about-card mb-30 mb-lg-0">
                                            <small class="d-block">
                                                services
                                            </small>
                                            <h6>
                                                IT Consultation, UI/UX Design, Cloud Service
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="about-card mb-30 mb-lg-0">
                                            <small class="d-block">
                                                date
                                            </small>
                                            <h6>
                                                Feburary 25th, 2022
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="about-card mb-30 mb-lg-0">
                                            <small class="d-block">
                                                team
                                            </small>
                                            <h6>
                                                Logan Cee - Designer <br> Martin Moussa - iOS Developer
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="img-content pt-70 pb-70 border-bottom brd-gray overflow-hidden">
                                <div class="row justify-content-center">
                                    <div class="col-lg-7">
                                        <div class="img text-center">
                                            <img src="assets/img/single_project/2mobs.png" alt="" class="main-img">
                                            <img src="assets/img/single_project/bubbls.png" alt="" class="bubbls">
                                            <img src="assets/img/single_project/circle.png" alt="" class="circle">
                                        </div>
                                        <div class="info mt-30">
                                            <h5 class="lh-4">
                                                {{ $service->shortdescription }}
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="challenge section-padding style-5 overflow-hidden">
                    <div class="container">
                        <div class="row gx-5">
                            <div class="col-lg-4">
                                <div class="section-head style-5">
                                    <h2 class=""> Our <br> <span> Challenge </span> </h2>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="inf">
                                    <div class="text color-666 mb-20">
                                        Create an unconventional yet user-friendly website – innovative, with a clean &
                                        simple
                                        design that communicates and showcases multi-media content. Site that spreads the
                                        message:
                                        "It’s stories your love.”
                                    </div>
                                    <ul class="color-000">
                                        <li class="d-flex mb-10">
                                            <i class="bi bi-dot fs-6 me-2"></i>
                                            Develop easy-to-find and easy-to-navigate mobile friendly website
                                        </li>
                                        <li class="d-flex mb-10">
                                            <i class="bi bi-dot fs-6 me-2"></i>
                                            Showcase each type of content: interactive books, animated stories and picture
                                            books,
                                            audio stories. <br> Create an experience people want to share with others
                                        </li>
                                        <li class="d-flex mb-10">
                                            <i class="bi bi-dot fs-6 me-2"></i>
                                            Persuade to download app and subscribe
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="imgs mt-60 mb-100">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="img img-cover rounded-3 overflow-hidden mb-30 mb-lg-0">
                                        <img src="assets/img/single_project/ch_1.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="img img-cover rounded-3 overflow-hidden">
                                        <img src="assets/img/single_project/ch_2.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row gx-5">
                            <div class="col-lg-4">
                                <div class="section-head style-5">
                                    <h2 class=""> Solution & <br> <span> Result </span> </h2>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="inf">
                                    <div class="text color-666 mb-10">
                                        Our approach was to present the site as a visual editorial platform with quarterly
                                        features based on events and occasions the brand was focused on. Each quarterly
                                        focus would
                                        be marked by the hero and custom tags that filter content.
                                    </div>
                                    <div class="text color-666 mb-20">
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour, or randomised words which
                                        don't look even slightly believable.
                                    </div>
                                    <div class="color-000 mt-50">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="d-flex mb-20 fw-bold">
                                                    <div
                                                        class="icon-20 d-inline-flex justify-content-center align-items-center rounded-circle overflow-hidden bg-blue5 text-white flex-shrink-0 me-3">
                                                        <i class="bi bi-check"></i>
                                                    </div>
                                                    Create & Save your notes with multi-media
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="d-flex mb-20 fw-bold">
                                                    <div
                                                        class="icon-20 d-inline-flex justify-content-center align-items-center rounded-circle overflow-hidden bg-blue5 text-white flex-shrink-0 me-3">
                                                        <i class="bi bi-check"></i>
                                                    </div>
                                                    Complete note editor with rich text options
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="d-flex mb-20 mb-lg-0 fw-bold">
                                                    <div
                                                        class="icon-20 d-inline-flex justify-content-center align-items-center rounded-circle overflow-hidden bg-blue5 text-white flex-shrink-0 me-3">
                                                        <i class="bi bi-check"></i>
                                                    </div>
                                                    Web Clipper Extension
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="d-flex mb-0 fw-bold">
                                                    <div
                                                        class="icon-20 d-inline-flex justify-content-center align-items-center rounded-circle overflow-hidden bg-blue5 text-white flex-shrink-0 me-3">
                                                        <i class="bi bi-check"></i>
                                                    </div>
                                                    Automatically sync in real time
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif

        @if (count($relatedprojects) > 0)
            <section class="projects style-6 p-0">
                <div class="content section-padding rounded-0">
                    <div class="container">
                        <div class="section-head text-center mb-60 style-5">
                            <h2 class="mb-20"> Related <span> Projects </span> </h2>
                            <p>We have an experienced team of production and inspection personnel to ensure quality.</p>
                        </div>
                        <div class="slider-3items slider-style-6">
                            <div class="swiper-container pb-0">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="project-card style-6">
                                            <div class="img">
                                                <img src="assets/img/projects/4.png" alt="">
                                            </div>
                                            <div class="info">
                                                <h3 class="title">
                                                    <a href="#">Okpay E-Wallet Optimized</a>
                                                </h3>
                                                <small class="color-blue6">
                                                    <a href="#">SEO analysis</a>
                                                </small>
                                                <div class="text">
                                                    Trust our top minds to eliminate workflow pain points, implement new
                                                    tech & app.
                                                </div>
                                                <div class="tags">
                                                    <span><a href="#">SEO Analysis</a></span>
                                                    <span><a href="#">Content Strategy</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="project-card style-6">
                                            <div class="img">
                                                <img src="assets/img/projects/5.png" alt="">
                                            </div>
                                            <div class="info">
                                                <h3 class="title">
                                                    <a href="#">e-Commerce Dashboard</a>
                                                </h3>
                                                <small class="color-blue6">
                                                    <a href="#">website design</a> &
                                                    <a href="#">develoment</a>
                                                </small>
                                                <div class="text">
                                                    Trust our top minds to eliminate workflow pain points, implement new
                                                    tech & app.
                                                </div>
                                                <div class="tags">
                                                    <span><a href="#">WordPress</a></span>
                                                    <span><a href="#">PHP</a></span>
                                                    <span><a href="#">HTML/CSS</a></span>
                                                    <span><a href="#">Figma</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="project-card style-6">
                                            <div class="img">
                                                <img src="assets/img/projects/7.png" alt="">
                                            </div>
                                            <div class="info">
                                                <h3 class="title">
                                                    <a href="#">MLB Store Instagram</a>
                                                </h3>
                                                <small class="color-blue6">
                                                    <a href="#">social media</a>
                                                </small>
                                                <div class="text">
                                                    Trust our top minds to eliminate workflow pain points, implement new
                                                    tech & app.
                                                </div>
                                                <div class="tags">
                                                    <span><a href="#">Social</a></span>
                                                    <span><a href="#">Instagram</a></span>
                                                    <span><a href="#">Followers</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="project-card style-6">
                                            <div class="img">
                                                <img src="assets/img/projects/5.png" alt="">
                                            </div>
                                            <div class="info">
                                                <h3 class="title"><a href="#">e-Commerce Dashboard</a></h3>
                                                <small class="color-blue6">
                                                    <a href="#">website design</a> &
                                                    <a href="#">develoment</a></small>
                                                <div class="text">
                                                    Trust our top minds to eliminate workflow pain points, implement new
                                                    tech & app.
                                                </div>
                                                <div class="tags">
                                                    <span><a href="#">WordPress</a></span>
                                                    <span><a href="#">PHP</a></span>
                                                    <span><a href="#">HTML/CSS</a></span>
                                                    <span><a href="#">Figma</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
    </main>

@endsection
