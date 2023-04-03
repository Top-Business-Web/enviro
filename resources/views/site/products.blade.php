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
                        <h1>products</h1>
                        <h6><a href="index.blade.php">Home</a> / products</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="project-area gray-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="project-single">
                                <div class="project-img">
                                    <img src="assets/img/project/2.jpg" alt="">
                                </div>
                                <div class="project-content">
                                    <div class="project-title text-center">
                                        <a href="single-products.blade.php" class="fs-5">Plastic Recycling Services</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="project-single">
                                <div class="project-img">
                                    <img src="assets/img/project/2.jpg" alt="">
                                </div>
                                <div class="project-content">
                                    <div class="project-title text-center">
                                        <a href="single-products.blade.php" class="fs-5">Plastic Recycling Services</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="project-single">
                                <div class="project-img">
                                    <img src="assets/img/project/2.jpg" alt="">
                                </div>
                                <div class="project-content">
                                    <div class="project-title text-center">
                                        <a href="single-products.blade.php" class="fs-5">Plastic Recycling Services</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="project-single">
                                <div class="project-img">
                                    <img src="assets/img/project/2.jpg" alt="">
                                </div>
                                <div class="project-content">
                                    <div class="project-title text-center">
                                        <a href="single-products.blade.php" class="fs-5">Plastic Recycling Services</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="sidebar">
                        <div class="sidebar_single sidebar_search">
                            <form action="#" class="sidebar_search-form">
                                <input type="search" placeholder="Search here">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="widget widget-categories" style="padding: 30px;">
                        <div class="widget-title">
                            <h5>categories</h5>
                        </div>
                        <div class="widget-content">
                            <ul class="list-unstyled">
                                <li data-bs-toggle="collapse" href="#collapseExample" role="button"
                                    aria-expanded="false" aria-controls="collapseExample">
                                    <a href="projects.html">recycle raw materials</a
                                    ><span>2</span>
                                </li>
                                <ul class="list-unstyled collapse" id="collapseExample">
                                    <li>
                                        <a href="projects.html">PE (POLYETHYLENE)</a>
                                    </li>
                                    <li>
                                        <a href="projects.html">PP (POLYPROPYLENE)</a>
                                    </li>
                                </ul>
                                <li data-bs-toggle="collapse" href="#collapseExample1" role="button"
                                    aria-expanded="false" aria-controls="collapseExample">
                                    <a href="projects.html">Final Product</a
                                    ><span>2</span>
                                </li>
                                <ul class="list-unstyled collapse" id="collapseExample1">
                                    <li>
                                        <a href="projects.html">PE (POLYETHYLENE)</a>
                                    </li>
                                    <li>
                                        <a href="projects.html">solar modules</a>
                                    </li>
                                </ul>
                            </ul>
                        </div>
                    </div>

                    <hr>
                    <div class="sidebar_single sidebar_post" style="padding: 30px; margin-bottom: 30px;">
                        <h3 class="sidebar_title mb-3" style="margin-left: 0;">latest Products</h3>
                        <ul class="sidebar_post-list list-unstyled">
                            <li style="padding: 0; margin-bottom: 15px;">
                                <div class="sidebar_post-image">
                                    <img src="assets/img/blog/lp-1-1.jpg" alt="">
                                </div>
                                <div class="sidebar_post-content">
                                    <h3>
                                        <a href="single-products.blade.php">Bio-based materials used to salvage</a>
                                    </h3>
                                </div>
                            </li>
                            <li style="padding: 0; margin-bottom: 15px;">
                                <div class="sidebar_post-image">
                                    <img src="assets/img/blog/lp-1-2.jpg" alt="">
                                </div>
                                <div class="sidebar_post-content">
                                    <h3>
                                        <a href="single-products.blade.php">Smart & Reduce Recycling Solutions</a>
                                    </h3>
                                </div>
                            </li>
                            <li style="padding: 0; margin-bottom: 15px;">
                                <div class="sidebar_post-image">
                                    <img src="assets/img/blog/lp-1-3.jpg" alt="">
                                </div>
                                <div class="sidebar_post-content">
                                    <h3>
                                        <a href="single-products.blade.php">What are three benefits of recycling?</a>
                                    </h3>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection


