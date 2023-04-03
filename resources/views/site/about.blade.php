@extends('site.layouts.master')

@section('content')
    <!-- Pre-Loader -->
    <div class="preloader"></div>


    <!-- Breadcroumb Area -->

    <div class="breadcroumb-area bread-bg">
        <div class="overlay-2"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcroumb-title text-center">
                        <h1>About</h1>
                        <h6><a href="index.blade.php">Home</a> / About</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- About Section  -->

    <div class="about-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="about-content-wrap">
                        <div class="section-title">
                            <!-- <p>Complete Commercial And Residential Recycling Services!</p> -->
                            <h2>The Pioneers In The Recycling Service!</h2>
                        </div>
                        <div class="about-content">
                            <div class="row">
                                <div class="col-12 col-lg-12">
                                    <div class="about-content-left">
                                        <p class="highlight">Enviro group is an Egyptian company specialized in in
                                            plastic recycling for production of different types of recycled pellets to
                                            satisfy the needs of Egyptian market.
                                        </p>

                                        <p>Enviro group aims to expand its activities through backward integration,
                                            forward integration strategies.
                                        </p>

                                        <button class="main-btn bg-brown mb-3">Profile Company</button>
                                        <div class="row mt-20">
                                            <div class="col-lg-4 col-md-4 col-12">
                                                <div class="featured-area">
                                                    <div class="featured-icon">
                                                        <i class="fas fa-business-time"></i>
                                                    </div>
                                                    <div class="featured-content">
                                                        <div class="featured-title">
                                                            <h5>Ontime at <br>Services</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-12">
                                                <div class="featured-area">
                                                    <div class="featured-icon">
                                                        <i class="fas fa-stopwatch"></i>
                                                    </div>
                                                    <div class="featured-content">
                                                        <div class="featured-title">
                                                            <h5>24/7 <br>Services</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-12">
                                                <div class="featured-area">
                                                    <div class="featured-icon">
                                                        <i class="fas fa-money-check-alt"></i>
                                                    </div>
                                                    <div class="featured-content">
                                                        <div class="featured-title">
                                                            <h5>Affordable <br>Cost</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="about-img">
                        <img src="assets/img/about/about.jpg" alt="">
                        <div class="about-counter">
                            <div class="counter-icon">
                                <img src="assets/img/icon/customer-service.png" alt="" style="width: 60px;">
                            </div>
                            <div class="counter-number">
                                <span class="counting" data-counterup-nums="154">4754</span>
                            </div>
                            <h6>Happy Customers</h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Choose Us Area  -->

    <div class="why-choose-two section-padding pb-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="why-choose-two_left">
                        <div class="why-choose-two_img">
                            <img src="assets/img/choose_us.jpg" alt="">
                            <div class="why-choose-two_video-link">
                                <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                    <div class="why-choose-one_video-icon">
                                        <span class="las la-play"></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="why-choose-two_right">
                        <div class="section-title text-left">
                            <h6>Our Pontential benefits</h6>
                            <h2>Why you Should Choose Our Services</h2>
                        </div>
                        <p class="highlight">
                            Enviro group for environmental solutions started its activity in plastic recycling in 2021
                            by producing high quality recycled LDPE and HDPE for Egyptian market.
                        </p>
                        <p class="why-choose-two_right-text">In 2022, enviro group starts procedures to expand its
                            activities by backward integration through waste management procedures. The company aims to
                            be fully licensed company from Egyptian government to be compatible with waste management
                            procedures.
                        </p>
                        <ul class="list-unstyled why-choose-two_points">
                            <li>
                                <div class="icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="text">
                                    <p>Convenient Pickup</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="text">
                                    <p>Reducing Waste</p>
                                </div>
                            </li>
                        </ul>

                        <!-- <div class="progress-bar-area">
                            <div class="single-bar-item">
                                <h4>Recycling Service</h4>
                                <div id="bar1" class="barfiller">
                                    <span class="tip">90%</span>
                                    <span class="fill" data-percentage="90"></span>
                                </div>
                            </div>

                            <div class="single-bar-item">
                                <h4>Waste Management</h4>
                                <div id="bar2" class="barfiller">
                                    <span class="tip">70%</span>
                                    <span class="fill" data-percentage="70"></span>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA -->
    <div class="cta-area-2 mt-100 dark-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-12">
                    <h2>Let's Get Your Project <b>Started</b> Today!</h2>
                </div>
                <div class="col-lg-6 offset-lg-1 col-12">
                    <div class="cta-btn-2 mt-20">
                        <a href="quotation.blade.php" class="main-btn">Request a Pickup</a>
                        <a href="contact.blade.php" class="main-btn white">Contact with Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

