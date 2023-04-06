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
                <div class="col-lg-6 col-12">
                    <div class="main-slider">
                        <div class="product-img">
                            <img
                                class="img-fluid"
                                src="{{ asset('assets/front/') }}/assets/img/blog/1.jpg"
                                alt="product image"
                            />
                        </div>
                        <div class="product-img">
                            <img
                                class="img-fluid"
                                src="{{ asset('assets/front/') }}/assets/img/blog/2.jpg"
                                alt="product image"
                            />
                        </div>
                        <div class="product-img">
                            <img
                                class="img-fluid"
                                src="{{ asset('assets/front/') }}/assets/img/blog/3.jpg"
                                alt="product image"
                            />
                        </div>
                        <div class="product-img">
                            <img
                                class="img-fluid"
                                src="{{ asset('assets/front/') }}/assets/img/blog/1.jpg"
                                alt="product image"
                            />
                        </div>
                        <div class="product-img">
                            <img
                                class="img-fluid"
                                src="{{ asset('assets/front/') }}/assets/img/blog/2.jpg"
                                alt="product image"
                            />
                        </div>
                    </div>
                    <div class="small-slider">
                        <img
                            class="img-fluid"
                            src="{{ asset('assets/front/') }}/assets/img/blog/1.jpg"
                            alt="product image"
                        />
                        <img
                            class="img-fluid"
                            src="{{ asset('assets/front/') }}/assets/img/blog/2.jpg"
                            alt="product image"
                        />
                        <img
                            class="img-fluid"
                            src="{{ asset('assets/front/') }}/assets/img/blog/3.jpg"
                            alt="product image"
                        />
                        <img
                            class="img-fluid"
                            src="{{ asset('assets/front/') }}/assets/img/blog/1.jpg"
                            alt="product image"
                        />
                        <img
                            class="img-fluid"
                            src="{{ asset('assets/front/') }}/assets/img/blog/2.jpg"
                            alt="product image"
                        />
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="title">
                        <h2>GM-LDCOLOR</h2>
                    </div>
                    <p class="mt-3">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione nostrum sed doloremque
                        voluptate laudantium explicabo, dolorum, veniam assumenda quibusdam aliquam ex? Illo ipsam autem
                        reiciendis nesciunt esse vitae corrupti tempora?
                    </p>
                    <div class="mb-4 mt-2">
                        <span class="fw-bold me-2" style="color: #016A41;">Category:</span><span style="color: #777;">Recycle Raw Materials</span>
                    </div>
                    <hr>
                    <div class="blog-details_social-list mt-4">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- description -->

        <div class="container mb-5 mt-5">
            <div class="tabs border-bottom border-3">
                <ul class="tabs-list">
                    <li class="show" data-content=".content-one">DESCRIBTION</li>
                    <li data-content=".content-two">ADDITIONAL INFO</li>
                </ul>
                <div class="content-list mt-5 mb-5">
                    <div class="content-one text-black-50">
                        <p>
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece
                            of classical Latin literature from 45 BC, making it over 2000 years old.
                            Vivamus bibendum magna Lorem ipsum dolor sit amet, consectetur adipiscing elit.Contrary to
                            popular belief, Lorem Ipsum is not simply random text.
                            It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years
                            old.
                        </p>
                        <p>
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                            voluptatum
                            deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate
                            non provident, similique sunt in culpa qui officia deserunt mollitia animi,
                            id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.
                        </p>
                    </div>
                    <div class="content-two">
                        <table class="table border">
                            <tbody>
                            <tr>
                                <td class="border-end" scope="row">Capacity</td>
                                <td>5 Kg</td>
                            </tr>
                            <tr>
                                <td class="border-end" scope="row">Color</td>
                                <td>Black, Brown, Red,</td>
                            </tr>
                            <tr>
                                <td class="border-end" scope="row">Water Resistant</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td class="border-end" scope="row">Material</td>
                                <td>Artificial Leather</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="title mt-3 mb-4">
                <h2>Related Products</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="project-single">
                        <div class="project-img">
                            <img src="{{ asset('assets/front/') }}/assets/img/project/2.jpg" alt="">
                        </div>
                        <div class="project-content">
                            <div class="project-title text-center">
                                <a href="single-products.html" class="fs-5">Plastic Recycling Services</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="project-single">
                        <div class="project-img">
                            <img src="{{ asset('assets/front/') }}/assets/img/project/2.jpg" alt="">
                        </div>
                        <div class="project-content">
                            <div class="project-title text-center">
                                <a href="single-products.html" class="fs-5">Plastic Recycling Services</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="project-single">
                        <div class="project-img">
                            <img src="{{ asset('assets/front/') }}/assets/img/project/2.jpg" alt="">
                        </div>
                        <div class="project-content">
                            <div class="project-title text-center">
                                <a href="single-products.html" class="fs-5">Plastic Recycling Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

