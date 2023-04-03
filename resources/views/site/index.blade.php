@extends('site.layouts.master')

@section('content')

    <!-- Hero Area -->

    <div class="homepage-slides owl-carousel">
        <div class="single-slide-item">
            <div class="image-layer" style="background-image: url('assets/img/slider/slide-1.jpg');">
                <div class="overlay"></div>
            </div>
            <div class="hero-area-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 wow fadeInUp animated" data-wow-delay=".2s">
                            <div class="section-title">
                                <h6>Welcome to Enviro Group </h6>
                                <h1>Better Environment <br> Better Future</h1>
                            </div>
                            <a href="about.blade.php" class="main-btn primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="single-slide-item hero-area-bg-2">
            <div class="image-layer" style="background-image: url('assets/img/slider/slide-2.jpg');">
                <div class="overlay"></div>
            </div>
            <div class="hero-area-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 wow fadeInUp animated" data-wow-delay=".2s">
                            <div class="section-title">
                                <h6>Reuse | Recycle | Refield</h6>
                                <h1>We Provide Recycling <br> Service</h1>
                            </div>
                            <a href="services.blade.php" class="main-btn primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Promo Secton -->

    <div class="promo-area">
        <div class="container">
            <div class="row gx-0">
                <div class="col-lg-9 col-md-9 col-12">
                    <div class="promo-inner wow fadeInUp" data-wow-delay=".3s">
                        <div class="row no-gutters">
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="promo-bg bg-cover">
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12">
                                <div class="promo-content">
                                    <h5>We are top <b>recycling</b> organization to create best <b>environment</b></h5>
                                    <button class="main-btn bg-brown mt-3">liceneses</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12 wow fadeInUp" data-wow-delay=".4s">
                    <div class="promo-founder">
                        <img src="assets/img/icon/ecology.png" style="width: 50px;" alt="">
                        <p class="highlight">25+</p>
                        <p>Years <br>Experience</p>
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
                                            plastic
                                            recycling for production of different types of recycled pellets to satisfy
                                            the
                                            needs of Egyptian market.
                                        </p>

                                        <p>Enviro group aims to expand its activities through backward integration,
                                            forward
                                            integration strategies.
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
                                <img src="assets/img/icon/customer-service.png" style="width: 50px;" alt="">
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

    <!-- Service Section  -->

    <div class="service-area gray-bg section-padding pt-200">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-9">
                    <div class="section-title">
                        <h6>Sustainable, Reliable & Affordable Recycling Service!</h6>
                        <h2>We Provide Various Recycling Services & Waste Disposal</h2>
                    </div>
                </div>
            </div>
            <div class="service-item-wrap mt-30 owl-carousel">
                <div class="service-single">
                    <div class="service-icon">
                        <img src="assets/img/service/renew.png" alt="">
                    </div>
                    <div class="service-content">
                        <h4><a href="single_services.blade.php">waste management </a></h4>
                        <hr>
                        <p>The most affordable type of recycling service available for sending.</p>
                        <ul class="list-unstyled service-list">
                            <li><i class="fas fa-check"></i>Collect & separate materials</li>
                            <li><i class="fas fa-check"></i>Reduce & recycling into raw material.</li>
                            <li><i class="fas fa-check"></i>Turn raw material into product</li>
                        </ul>
                        <a class="main-btn primary" href="single_services.blade.php">Find out more</a>
                    </div>
                </div>
                <div class="service-single">
                    <div class="service-icon">
                        <img src="assets/img/service/water-bottle.png" alt="">
                    </div>
                    <div class="service-content">
                        <h4><a href="single_services.blade.php">Plastic Recycling </a></h4>
                        <hr>
                        <p>The most affordable type of recycling service available for sending.</p>
                        <ul class="list-unstyled service-list">
                            <li><i class="fas fa-check"></i>Collect & separate materials</li>
                            <li><i class="fas fa-check"></i>Reduce & recycling into raw material.</li>
                            <li><i class="fas fa-check"></i>Turn raw material into product</li>
                        </ul>
                        <a class="main-btn primary" href="single_services.blade.php">Find out more</a>
                    </div>
                </div>
                <div class="service-single">
                    <div class="service-icon">
                        <img src="assets/img/service/can.png" alt="">
                    </div>
                    <div class="service-content">
                        <h4><a href="single_services.blade.php">Aluminium Recycling </a></h4>
                        <hr>
                        <p>The most affordable type of recycling service available for sending.</p>

                        <ul class="list-unstyled service-list">
                            <li><i class="fas fa-check"></i>Collect & separate materials</li>
                            <li><i class="fas fa-check"></i>Reduce & recycling into raw material.</li>
                            <li><i class="fas fa-check"></i>Turn raw material into product</li>
                        </ul>
                        <a class="main-btn primary" href="single_services.blade.php">Find out more</a>
                    </div>
                </div>

                <div class="service-single">
                    <div class="service-icon">
                        <img src="assets/img/service/renew.png" alt="">
                    </div>
                    <div class="service-content">
                        <h4><a href="single_services.blade.php">Electronics Recycling</a></h4>
                        <hr>
                        <p>The most affordable type of recycling service available for sending.</p>

                        <ul class="list-unstyled service-list">
                            <li><i class="fas fa-check"></i>Collect & separate materials</li>
                            <li><i class="fas fa-check"></i>Reduce & recycling into raw material.</li>
                            <li><i class="fas fa-check"></i>Turn raw material into product</li>
                        </ul>
                        <a class="main-btn primary" href="single_services.blade.php">Find out more</a>
                    </div>
                </div>

                <div class="service-single">
                    <div class="service-icon">
                        <img src="assets/img/service/recycling.png" alt="">
                    </div>
                    <div class="service-content">
                        <h4><a href="single_services.blade.php">Metal Recycling</a></h4>
                        <hr>
                        <p>The most affordable type of recycling service available for sending.</p>

                        <ul class="list-unstyled service-list">
                            <li><i class="fas fa-check"></i>Collect & separate materials</li>
                            <li><i class="fas fa-check"></i>Reduce & recycling into raw material.</li>
                            <li><i class="fas fa-check"></i>Turn raw material into product</li>
                        </ul>
                        <a class="main-btn primary" href="single_services.blade.php">Find out more</a>
                    </div>
                </div>
                <div class="service-single">
                    <div class="service-icon">
                        <img src="assets/img/service/bottle.png" alt="">
                    </div>
                    <div class="service-content">
                        <h4><a href="single_services.blade.php">Glass Recycling</a></h4>
                        <hr>
                        <p>The most affordable type of recycling service available for sending.</p>

                        <ul class="list-unstyled service-list">
                            <li><i class="fas fa-check"></i>Collect & separate materials</li>
                            <li><i class="fas fa-check"></i>Reduce & recycling into raw material.</li>
                            <li><i class="fas fa-check"></i>Turn raw material into product</li>
                        </ul>
                        <a class="main-btn primary" href="single_services.blade.php">Find out more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Process Section  -->

    <div class="process-area dark-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="section-title">
                        <h6>Recycling Wastage Save Environment!</h6>
                        <h2 class="text-white">Simple steps Wastage <br> to Recycling Item Processing</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="process-right-content">
                        <p class="text-white">Recycling is the process of converting waste materials into new materials
                            and objects. To do this, recycling often requires both machinery and employees to correctly
                            sort recyclable items based on the material they’re made of. This includes paper, plastic,
                            glass, metal, and more.</p>
                        <p class="text-white">This Waste Management video shows the step-by-step process of how
                            materials are processed once they reach a facility.</p>
                        <div class="process-btn">
                            <a href="contact.blade.php" class="main-btn">Get Started</a>
                            <a href="services.blade.php" class="main-btn white">View Our services</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="process-item-wrap">
                <div class="col-lg-4 col-12">
                    <div class="process-single">
                        <div class="process-icon">
                            <img src="assets/img/vision.svg" alt="" style="width: 60px;">
                        </div>
                        <div class="process-title">
                            <h5>our vision</h5>
                        </div>
                        <div class="process-desc">
                            <p style="text-align: justify;">
                                To lead the integrated waste industry in Egypt through cooperation with the different
                                sectors toward a clean environment and completing the recycled process.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="process-single two">
                        <div class="process-icon">
                            <img src="assets/img/mission.svg" alt="" style="width: 60px;">
                        </div>
                        <div class="process-title">
                            <h5>our mission</h5>
                        </div>
                        <div class="process-desc">
                            <p style="text-align: justify;">
                                Supporting the circular economy by applying integrated environmental solutions to
                                achieve
                                zero waste principals and making the best utilization of resources while fulfilling our
                                responsibility towards our stakeholders by achieving win-win situation at all levels
                                (customers, business partners, employees and natural environment).
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="process-single three">
                        <div class="process-icon">
                            <img src="assets/img/process/4.png" alt="" style="width: 60px;">
                        </div>
                        <div class="process-title">
                            <h5>Our values </h5>
                        </div>
                        <!-- <div class="process-desc text-start"> -->
                        <ul class="list-unstyled service-list mt-0">
                            <li><i class="fas fa-check"></i>Build relations</li>
                            <li><i class="fas fa-check"></i>Integrity</li>
                            <li><i class="fas fa-check"></i>Accountabilit</li>
                            <li><i class="fas fa-check"></i>Excellence</li>
                            <li><i class="fas fa-check"></i>Innovation</li>
                        </ul>
                        <!-- </div>                         -->
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Choose Us Area  -->

    <div class="why-choose-two section-padding">
        <div class="container">
            <div class="section-title text-center">
                <h6>Our Pontential benefits</h6>
                <h2>Why you Should Choose Our Services</h2>
            </div>
            <div class="image-all-egypt">
                <img src="assets/img/img-all-egypt.jpg">
            </div>
        </div>
    </div>

    <!-- Contact Section  -->

    <div class="contact-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="contact-wrap">
                        <div class="section-title">
                            <h2 class="text-white">Time Is The Best Way To Thin About Recycling</h2>
                        </div>
                        <div class="contact-desc">
                            <p class="text-white">
                                We offer products, solutions, and services across the entire
                                energy value chain. We support our customers on their way to a
                                more sustainable future – no matter how far along the journey
                                to energize society with affordable energy systems.
                            </p>
                        </div>
                        <div class="contact-list-wrap">
                            <div class="row">
                                <div class="col-12 col-md-6 col-sm-6 col-lg-6">
                                    <ul class="list-unstyled contact-list">
                                        <li><i class="fas fa-check"></i> Reduce Greenhouse Effect</li>
                                        <li><i class="fas fa-check"></i>Conserv Natural Resources</li>
                                        <li><i class="fas fa-check"></i>Reduces Carbon Emissions</li>
                                    </ul>
                                </div>
                                <div class="col-12 col-md-6 col-sm-6 col-lg-6">
                                    <ul class="list-unstyled contact-list">
                                        <li><i class="fas fa-check"></i>Protects Ecosystems</li>
                                        <li><i class="fas fa-check"></i>Economic Benefits.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="contact-btn">
                            <a class="main-btn" href="about.blade.php">learn more</a>
                            <a class="main-btn white" href="faq.blade.php">our core values</a>
                        </div>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 offset-xl-1">
                    <div class="quotation-wrap">
                        <div class="quotation-inner">
                            <h5 class="quotation-heading">Request A Quote</h5>
                            <p class="quotation-desc">
                                We take great pride in everything that we do, control over
                                products allows us to ensure our customers receive the best
                                quality service.
                            </p>
                            <form action="index.blade.html">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="contact-usage">Name
                                        </label>
                                        <input class="form-control" type="text" placeholder="Name" required=""/>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="contact-usage">Company Name
                                        </label>
                                        <input class="form-control" type="text" placeholder="Compnay Name"
                                               required=""/>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="contact-usage">phone Number
                                        </label>
                                        <input class="form-control" type="number" placeholder="Contact Number"
                                               required=""/>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="contact-usage">E-mail
                                        </label>
                                        <input class="form-control" type="email" placeholder="E-mail" required=""/>
                                    </div>

                                    <div class="col-12">
                                        <button class="main-btn primary">submit request</i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- product Section  -->

    <div class="project-area gray-bg section-padding">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-7">
                    <div class="section-title">
                        <h6>Innovation, Quality And Continuous Improvement</h6>
                        <h2>Latest products</h2>
                    </div>
                </div>
            </div>
            <div class="service-item-wrap mt-30 owl-carousel">
                <div class="project-single">
                    <div class="project-img">
                        <img src="assets/img/project/2.jpg" alt="">
                    </div>
                    <div class="project-content">
                        <div class="project-title text-center">
                            <a href="single-product" class="fs-5">Plastic Recycling Services</a>
                        </div>
                    </div>
                </div>
                <div class="project-single">
                    <div class="project-img">
                        <img src="assets/img/project/2.jpg" alt="">
                    </div>
                    <div class="project-content">
                        <div class="project-title text-center">
                            <a href="single-product" class="fs-5">Plastic Recycling Services</a>
                        </div>
                    </div>
                </div>
                <div class="project-single">
                    <div class="project-img">
                        <img src="assets/img/project/2.jpg" alt="">
                    </div>
                    <div class="project-content">
                        <div class="project-title text-center">
                            <a href="single-product" class="fs-5">Plastic Recycling Services</a>
                        </div>
                    </div>
                </div>

                <div class="project-single">
                    <div class="project-img">
                        <img src="assets/img/project/2.jpg" alt="">
                    </div>
                    <div class="project-content">
                        <div class="project-title text-center">
                            <a href="single-product" class="fs-5">Plastic Recycling Services</a>
                        </div>
                    </div>
                </div>
                <div class="project-single">
                    <div class="project-img">
                        <img src="assets/img/project/2.jpg" alt="">
                    </div>
                    <div class="project-content">
                        <div class="project-title text-center">
                            <a href="single-product" class="fs-5">Plastic Recycling Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Area -->

@endsection

