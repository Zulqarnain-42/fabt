@extends('layout.main')
@section('content')
    <main class="about-page style-5">
        <header class="about-page-sec style-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="info">
                            <h1>We provide perfect <br> Solutions & Technology for any
                                <span>
                                    Business
                                    <img src="assets/img/header/head5_line.png" alt="" class="head-line">
                                    <img src="assets/img/header/head5_pen.png" alt="" class="head-pen">
                                </span>
                            </h1>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="main-vid">
                            <img src="assets/img/vid_banner5.png" alt="">
                            <a href="https://www.youtube.com/watch?v=GOul6NyQeDI" data-lity class="play-icon">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <img src="assets/img/header/hand_megaphone.png" alt="" class="hand-mega slide_up_down">
            <img src="assets/img/header/head6_rating.png" alt="" class="head6-rating scale_up_down">
            <img src="assets/img/header/header5_linechart.png" alt="" class="head6-charts scale_up_down">
            <img src="assets/img/header/rocket.png" alt="" class="head6-rocket">
        </header>

        <section class="about section-padding style-5 style-6">
            <div class="content border-0 p-0">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-lg-4 order-2 order-lg-0">
                            <div class="section-head mb-30 style-5">
                                <h2> Future Art <span> Philosophy </span> </h2>
                            </div>
                            <p>
                                Like any great agency, we would like to deliver our best services and products to our
                                customers.in Future Art Broadcast we value our customer.
                            </p>
                            <div class="line-links">
                                <a href="/">Become 1st in the Multimedia Industry</a>
                                <a href="/">Competitive Price</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="img">
                                <img src="assets/img/about/superman_3d.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="assets/img/about/about_s6_bubbles.png" alt="" class="bubbles rotate-center">
        </section>

        <section class="choose-us style-6">
            <div class="container">
                <div class="row justify-content-between gx-0">
                    <div class="col-lg-6">
                        <div class="img">
                            <img src="assets/img/choose_us/man_arrow.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="info">
                            <div class="section-head mb-30 style-5">
                                <h2> Our <span> Services </span> </h2>
                            </div>
                            <div class="text mb-50 fs-12px color-666">
                                We provide different multimeida services
                            </div>
                            <ul>
                                <li class="d-flex mb-40">
                                    <small class="icon-50 me-4 flex-shrink-0">
                                        <img src="assets/img/icons/serv_icons/1.png" alt="">
                                    </small>
                                    <div class="inf">
                                        <h5>Build Your Broadcast Facility</h5>
                                        <p class="fs-12px color-666 mt-2">
                                            Nanotechnology immersion along the information high will close the loop on
                                            focusing solely
                                        </p>
                                    </div>
                                </li>
                                <li class="d-flex mb-40">
                                    <small class="icon-50 me-4 flex-shrink-0">
                                        <img src="assets/img/icons/serv_icons/3.png" alt="">
                                    </small>
                                    <div class="inf">
                                        <h5>Immersive Display</h5>
                                        <p class="fs-12px color-666 mt-2">
                                            Our top-notch Experts with much years of experience certail will give best
                                            solutions for your business
                                        </p>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <small class="icon-50 me-4 flex-shrink-0">
                                        <img src="assets/img/icons/serv_icons/5.png" alt="">
                                    </small>
                                    <div class="inf">
                                        <h5>RF Transmission</h5>
                                        <p class="fs-12px color-666 mt-2">
                                            Customer support is always our number one priority.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                            <a href="{{ route('services') }}"
                                class="btn rounded-pill blue5-3Dbutn hover-blue2 sm-butn fw-bold mt-60 px-5">
                                <span>See More </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <img src="assets/img/about/about_s6_bubbles.png" alt="" class="bubbles rotate-center">
        </section>

        <section class="numbers style-6">
            <div class="container">
                <div class="content pb-100 border-1 border-bottom brd-gray">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="number-card style-6">
                                <h2 class="me-4 color-blue5">
                                    <span class="counter">12</span> +
                                </h2>
                                <div class="text">
                                    Years <br> of Experience
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="number-card style-6">
                                <h2 class="me-4 color-blue5">
                                    <span class="counter">1565</span>
                                </h2>
                                <div class="text">
                                    Projects <br> completed
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="number-card style-6 border-0">
                                <h2 class="me-4 color-blue5">
                                    <span class="counter">265</span>
                                </h2>
                                <div class="text">
                                    Satisfied clients on <br> 24 countries
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="team section-padding style-6">
            <div class="content">
                <div class="container">
                    <div class="section-head text-center mb-70 style-5">
                        <h2 class="mb-20"> Our <span> Leaders </span> </h2>
                        <p>Profressional & Friendly is our slogan. Meet our leaders</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="team-card mb-30 mb-lg-0 style-6">
                                <div class="img img-cover">
                                    <img src="assets/img/team/1.jpg" alt="">
                                    <div class="social-icons">
                                        <a href="/">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="/">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="/">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                        <a href="/">
                                            <i class="fab fa-github"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="info">
                                    <a class="d-block" href="/">
                                        <h6>Michael Edwards</h6>
                                    </a>
                                    <small>CEO Founder</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="team-card mb-30 mb-lg-0 style-6">
                                <div class="img img-cover">
                                    <img src="assets/img/team/5.jpg" alt="">
                                    <div class="social-icons">
                                        <a href="/">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="/">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="/">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                        <a href="/">
                                            <i class="fab fa-github"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="info">
                                    <a class="d-block" href="/">
                                        <h6>Bobby Kane</h6>
                                    </a>
                                    <small>CTO</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="team-card mb-30 mb-lg-0 style-6">
                                <div class="img img-cover">
                                    <img src="assets/img/team/3.jpg" alt="">
                                    <div class="social-icons">
                                        <a href="/">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="/">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="/">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                        <a href="/">
                                            <i class="fab fa-github"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="info">
                                    <a class="d-block" href="/">
                                        <h6>Robert Downey Jr</h6>
                                    </a>
                                    <small>Project Manager</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="team-card style-6">
                                <div class="img img-cover">
                                    <img src="assets/img/team/4.jpg" alt="">
                                    <div class="social-icons">
                                        <a href="/">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="/">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="/">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                        <a href="/">
                                            <i class="fab fa-github"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="info">
                                    <a class="d-block" href="/">
                                        <h6>Andrew Robertson</h6>
                                    </a>
                                    <small>Marketing Leader</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact section-padding border-bottom border-1 brd-gray style-6">
            <div class="container">
                <div class="section-head text-center mb-70 style-5">
                    <h2 class="mb-20"> Ready To Start A <span> Projects </span> </h2>
                    <p>We will contact again after receive your request in 24h</p>
                </div>
                <div class="content">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <form action="https://smartinnovates.com/items/iteck/html/contact.php" class="form"
                                method="post">
                                <p class="text-center text-danger fs-12px mb-30">The field is required mark as *</p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group mb-20">
                                            <input type="text" name="name" class="form-control"
                                                placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-20">
                                            <input type="text" name="email" class="form-control"
                                                placeholder="Email Address *">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-20">
                                            <input type="text" name="phone" class="form-control"
                                                placeholder="Phone Number (option)">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-20">
                                            <input type="text" name="website" class="form-control"
                                                placeholder="Your Website (option)">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-20">
                                            <select class="form-select" name="option">
                                                <option value="How can we help you?" selected>How can we help you?</option>
                                                <option value="option 1">option 1</option>
                                                <option value="option 2">option 2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea name="message" rows="10" class="form-control" placeholder="How can we help you?"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <div class="form-check d-inline-flex mt-30 mb-30">
                                            <input class="form-check-input me-2 mt-0" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label small" for="flexCheckDefault">
                                                By submitting, i’m agreed to the
                                                <a href="/" class="text-decoration-underline">Terms & Conditons</a>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <input type="submit" value="Send Your Request"
                                            class="btn rounded-pill blue5-3Dbutn hover-blue2 sm-butn fw-bold text-light">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <img src="assets/img/icons/contact_a.png" alt="" class="contact_a">
                    <img src="assets/img/icons/contact_message.png" alt="" class="contact_message">
                </div>
            </div>
        </section>
    </main>
@endsection
