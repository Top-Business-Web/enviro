<!-- Header Top Area -->

<div class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-xs-12">
                <div class="contact-info">
                    <i class="fas fa-location-dot me-1 ms-2"></i> egypt
                    <i class="fas fa-envelope me-1 ms-2"></i> info@enviro.com
                    <i class="fas fa-phone me-1 ms-2"></i> 01087269541
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-xs-12 text-end">
                <div class="header_top_right">
                    <div class="social-area">
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                    </div>
                    <div class="quick_link">
                        <ul>
                            <li><a href="{{ route('faqs') }}">FAQs</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Header Area -->

<div class="header-area">
    <div class="sticky-area">
        <div class="navigation">
            <div class="container-fluid">
                <div class="header-inner-box">
                    <div class="logo">
                        <a class="navbar-brand" href="index.html"><img src="{{ asset('assets/front/') }}/assets/img/logo.png" alt=""/></a>
                    </div>

                    <div class="main-menu">
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                                <span class="navbar-toggler-icon"></span>
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse justify-content-center"
                                 id="navbarSupportedContent">
                                <ul class="navbar-nav m-auto">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="{{ route('home') }}">Home
                                            <span class="sub-nav-toggler"> </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('about') }}">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('service') }}">Services
                                            <span class="sub-nav-toggler"> </span>
                                        </a>
                                        <!-- <ul class="sub-menu">
                                            <li>
                                                <a href="single_services.blade.php">Plastic Recycling</a>
                                            </li>
                                            <li>
                                                <a href="single_services.blade.php">Waste Mangment</a>
                                            </li>
                                        </ul> -->
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('product') }}">products
                                            <!-- <span class="sub-nav-toggler"> </span> -->
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('career') }}">career</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('blog') }}">news</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>

                    <div class="header-btn">
                        <a href="{{ route('quote') }}" class="main-btn primary">Get a Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
