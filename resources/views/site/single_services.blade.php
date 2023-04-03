@extends('site.layouts.master')

@section('content')

    <!-- Breadcroumb Area -->

    <div class="breadcroumb-area plastic-bg">
        <div class="overlay-2"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcroumb-title text-center">
                        <h1>Plastic Recycling</h1>
                        <h6><a href="index.blade.php">Home</a> / Plastic Recycling</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--Service Details Start-->
    <section class="service-details pb-50">
        <div class="container">
            <div class="row gx-5">
                <div class="col-xl-4 col-lg-5">
                    <div class="service-details_sidebar">
                        <div class="service-details_sidebar-service">
                            <ul class="service-details_sidebar-service-list list-unstyled">
                                <li class="d-block current"><a href="single_services.html">Waste Mangment<span> <i
                                                class="fas fa-long-arrow-alt-right"></i></span></a></li>
                                <li class="d-block"><a href="single_services.html">Plastic Recycling<span> <i
                                                class="fas fa-long-arrow-alt-right"></i></span></a></li>
                                <li class="d-block"><a href="single_services.html">Paper Recycling<span> <i
                                                class="fas fa-long-arrow-alt-right"></i></span></a></li>
                                <li class="d-block"><a href="single_services.html">Glass Recycling<span> <i
                                                class="fas fa-long-arrow-alt-right"></i></span></a></li>
                                <li class="d-block"><a href="single_services.html">Aluminium Recycling<span> <i
                                                class="fas fa-long-arrow-alt-right"></i></span></a></li>
                                <li class="d-block"><a href="single_services.html">Electrical Recycling<span> <i
                                                class="fas fa-long-arrow-alt-right"></i></span></a></li>
                                <li class="d-block"><a href="single_services.html">Metal Recycling<span> <i
                                                class="fas fa-long-arrow-alt-right"></i></span></a></li>

                            </ul>
                        </div>
                        <div class="service-details_need-help">
                            <div class="service-details_need-help-bg">
                            </div>
                            <h2 class="service-details_need-help-title">Contact with us for any advice</h2>
                            <div class="service-details_need-help-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="service-details_need-help-contact">
                                <p>Call Anytime</p>
                                <a href="tel:01087269541">01087269541</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="service-details_right">

                        <section id="main-carousel" class="splide" aria-label="My Awesome Gallery">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide">
                                        <img src="assets/img/service-details/plastic_recycle.jpg" alt="">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="assets/img/service-details/plastic_recycle.jpg" alt="">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="assets/img/service-details/plastic_recycle.jpg" alt="">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="assets/img/service-details/plastic_recycle.jpg" alt="">
                                    </li>
                                </ul>
                            </div>
                        </section>


                        <ul id="thumbnails" class="thumbnails">
                            <li class="thumbnail">
                                <img src="assets/img/service-details/plastic_recycle.jpg" alt="">
                            </li>
                            <li class="thumbnail">
                                <img src="assets/img/service-details/plastic_recycle.jpg" alt="">
                            </li>
                            <li class="thumbnail">
                                <img src="assets/img/service-details/plastic_recycle.jpg" alt="">
                            </li>
                            <li class="thumbnail">
                                <img src="assets/img/service-details/plastic_recycle.jpg" alt="">
                            </li>
                        </ul>


                        <!-- <div class="service-details_img">
                            <img src="assets/img/service-details/plastic_recycle.jpg" alt="">

                        </div> -->
                        <div class="service-details_content">
                            <h3 class="service-details_title">Plastic Recycling</h3>
                            <p class="service-details_text-1">More than 35 million tons of plastics were generated in
                                the United States in 2018 and only 8.7 percent was recycled. Some types of plastics are
                                not accepted in community recycling programs. Check with your local recycling program to
                                find out which types of plastic they accept. When possible, purchase products made from
                                recycled plastic materials. </p>
                            <p class="service-details_text-2">Check what your community or office program accepts before
                                you put it in the bin. Look for products that are made from recycled paper when you
                                shop. Better yet, consider if you really need to print in the first place.</p>
                            <p class="service-details_text-2">If the book is still in good condition, try donating it!
                                Schools, places of faith, charities, and non-profits will often accept book donations.
                                If the book is not in usable condition, it can be recycled. Paperback books can be
                                recycled as-is; remove the cover from a hardcover book before recycling it.</p>
                        </div>
                        <ul class="service-details_two-icons list-unstyled">
                            <li class="service-details_two-icon-single">
                                <div class="service-details_two-icon">
								<span class="service-icon">
									<img src="assets/img/icon/1.png" alt="">
								</span>
                                </div>
                                <p class="service-details_two-icon-content" style="margin-top: 35px;">
                                    Better Environment
                                </p>
                            </li>
                            <li class="service-details_two-icon-single">
                                <div class="service-details_two-icon">
								<span class="service-icon">
									<img src="assets/img/icon/2.png" alt="">
								</span>
                                </div>
                                <p class="service-details_two-icon-content" style="margin-top: 35px;">
                                    Better Future
                                </p>
                            </li>
                        </ul>
                        <p class="service-details_text-3">Paper gift wrap often is not recyclable when it has a shiny or
                            laminated coating. If you use gift wrap, purchase a type that can be recycled or is made
                            from recycled content. EPA encourages consumers to reuse gift bags, boxes, and tissue paper.
                            Newspaper is an excellent alternative to gift wrap. </p>
                        <div class="service-details_bottom">
                            <div class="service-details_bottom-icon">
                                <img src="assets/img/icon/recycling.png" style="width: 70px;" alt="">
                            </div>
                            <p class="service-details_bottom-text">Recycling is the process of collecting and processing
                                materials that would otherwise be thrown away as trash and turning them into new
                                products. Recycling can benefit your community, the economy and the environment.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Service Details End-->

@endsection


