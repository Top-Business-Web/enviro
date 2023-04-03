@extends('site.layouts.master')

@section('content')
    <!-- Pre-Loader -->
    <div class="preloader"></div>

    <!-- Breadcroumb Area -->

    <div class="breadcroumb-area blog-bg">
        <div class="overlay-2"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcroumb-title text-center">
                        <h1>Blog</h1>
                        <h6><a href="index.blade.php">Home</a> / Blog</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--News Details Start-->
    <section class="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="blog-details_left">
                        <div class="blog-details_img">
                            <img src="assets/img/blog/blog-details-img.jpg" alt="">
                            <div class="blog-details_date-box">
                                <p>20 Oct</p>
                            </div>
                        </div>
                        <div class="blog-details_content">
                            <h3 class="blog-details_title">Government figures show declining recycling rates in the
                                UK</h3>
                            <p class="blog-details_text-1 mb-4">Lorem ipsum dolor sit amet, cibo mundi ea duo, vim
                                exerci phaedrum. There are many variations of passages of Lorem Ipsum available, but the
                                majority have alteration in some injected or words which don't look even slightly
                                believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there
                                isn't anything embarrang hidden in the middle of text. All the Lorem Ipsum generators on
                                the Internet tend to repeat predefined chunks as necessary, making this the first true
                                generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a
                                handful of model sentence structures, to generate Lorem Ipsum which looks
                                reasonable.</p>
                        </div>


                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar">
                        <div class="sidebar_single sidebar_search">
                            <!-- <form action="#" class="sidebar_search-form">
                                <input type="search" placeholder="Search here">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form> -->
                        </div>
                        <div class="sidebar_single sidebar_post">
                            <h3 class="sidebar_title">Latest Posts</h3>
                            <ul class="sidebar_post-list list-unstyled">
                                <li>
                                    <div class="sidebar_post-image">
                                        <img src="assets/img/blog/lp-1-1.jpg" alt="">
                                    </div>
                                    <div class="sidebar_post-content">
                                        <h3>
                                            <a href="blog-details.html">Bio-based materials used to salvage</a>
                                        </h3>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar_post-image">
                                        <img src="assets/img/blog/lp-1-2.jpg" alt="">
                                    </div>
                                    <div class="sidebar_post-content">
                                        <h3>
                                            <a href="blog-details.html">Smart & Reduce Recycling Solutions</a>
                                        </h3>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar_post-image">
                                        <img src="assets/img/blog/lp-1-3.jpg" alt="">
                                    </div>
                                    <div class="sidebar_post-content">
                                        <h3>
                                            <a href="blog-details.html">What are three benefits of recycling?</a>
                                        </h3>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="blog-details_bottom">
                            <div class="blog-details_social-list">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--News Details End-->

@endsection

