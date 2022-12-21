    <!-- ====== start footer ====== -->
    <footer class="style-1">
        <div class="container">
            <div class="content">
                <div class="row justify-content-center">
                    @if ($companyinfo)
                        @foreach ($companyinfo as $company)
                            <div class="col-lg-4">
                                <div class="foot_info">
                                    <a href="/" class="logo mb-3">
                                        <img src="{{ URL::asset($company->companylogo2) }}" alt="" width="160px">
                                    </a>
                                    <ul class="mb-4">
                                        <li class="d-flex">
                                            <i class="bi bi-house me-3"></i>
                                            <a href="/">
                                                <span>{{ $company->address }}</span>
                                            </a>
                                        </li>
                                        <li class="d-flex">
                                            <i class="bi bi-envelope me-3"></i>
                                            <a href="/">
                                                <span>{{ $company->email }}</span>
                                            </a>
                                        </li>
                                        <li class="d-flex">
                                            <i class="bi bi-phone me-3"></i>
                                            <a href="/">
                                                <span>{{ $company->phonenumber }}</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="social_icons">
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
                            </div>
                        @endforeach

                    @endif

                    <div class="col-lg-2">
                        <div class="links">
                            <div class="cont">
                                <h6 class="link_title">
                                    Services
                                </h6>
                                <ul>
                                    <li>
                                        <a href="/">Build Your Broadcast Facility </a>
                                    </li>
                                    <li>
                                        <a href="/">Immersive Display Technology Solutions </a>
                                    </li>
                                    <li>
                                        <a href="/">Rf Transmission </a>
                                    </li>
                                    <li>
                                        <a href="/">Build Your OB Van </a>
                                    </li>
                                    <li>
                                        <a href="/">System Integration </a>
                                    </li>
                                    <li>
                                        <a href="/">Projection & Hologram </a>
                                    </li>
                                    <li>
                                        <a href="/">Exhibitions & Museums </a>
                                    </li>
                                    <li>
                                        <a href="/">Events & Projects </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="links">
                            <div class="cont">
                                <h6 class="link_title">
                                    Information
                                </h6>
                                <ul>
                                    <li>
                                        <a href="/">About Us </a>
                                    </li>
                                    <li>
                                        <a href="">Privacy Policy</a>
                                    </li>
                                    <li>
                                        <a href="">Terms & Conditions</a>
                                    </li>
                                    <li>
                                        <a href="/">Our Team </a>
                                    </li>
                                    <li>
                                        <a href="/">Career </a>
                                    </li>
                                    <li>
                                        <a href="/">Contact </a>
                                    </li>
                                    <li>
                                        <a href="/">How It Works </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="foot_subscribe">
                            <h6 class="link_title">
                                Newsletter
                            </h6>
                            <p>
                                Register now to get latest updates on promotions & coupons.
                            </p>
                            <div class="input-group my-4">
                                <input type="text" class="form-control" placeholder="Enter your email"
                                    aria-label="Enter your email" aria-describedby="button-addon2">
                                <button class="btn butn-gard border-0 text-white px-3" type="button"
                                    id="button-addon2">
                                    <span>Subscribe</span>
                                </button>
                            </div>
                            <p class="fst-italic">By subscribing, you accepted the our <a href="/"
                                    class="text-decoration-underline"> Policy</a></p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="foot">
                        <p>
                            © 2022 Copyrights by <a href="/" class="text-white text-decoration-underline">Iteck
                                Co.</a> All Rights Reserved by <a href="/"
                                class="text-white text-decoration-underline"> ThemesCamp </a>
                        </p>
                    </div>
                </div>
            </div> --}}
        </div>
        <img src="assets/img/footer/foot_l.png" alt="" class="foot_l">
        <img src="assets/img/footer/foot_r.png" alt="" class="foot_r">
    </footer>
    <!-- ====== end footer ====== -->
