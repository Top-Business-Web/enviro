@extends('site.layouts.master')

@section('content')

    <!-- Pre-Loader -->
    <div class="preloader"></div>

    <!-- Breadcroumb Area -->

    <div class="breadcroumb-area pickup-bg">
        <div class="overlay-2"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcroumb-title text-center">
                        <h1>Request a Quote</h1>
                        <h6><a href="index.blade.php">Home</a> / Request a Quote</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quotation Section -->
    <div class="quotation-section gray-bg section-padding">
        <div class="container">
            <div class="quotation-wrapper">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-8">
                        <h2>Are you interested in a Quotation?</h2>
                        <p class="mb-50">Please Fill out form to request a quote or start service</p>
                        <!-- <p class="mt-20">Get tips and info on how to manage waste effectively and reduce Environment impact. <br> Need more info Call +(246) 333-0068 to speak with a Ecofix expert.
                        </p> -->
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-9 col-md-12">
                        <div class="quotation-box">
                            <div class="form_heading">
                                <h5>Contact Information</h5>
                                <p>This information will be used to contact you</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12 mb-20">
                                    <div class="quotation-item">
                                        <input type="text" class="form-control" name="name" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 mb-20">
                                    <div class="quotation-item">
                                        <input type="text" class="form-control" name="name" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 mb-20">
                                    <div class="quotation-item">
                                        <input type="email" class="form-control" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 mb-20">
                                    <div class="quotation-item">
                                        <input type="tel" class="form-control" name="tel" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 mb-20">
                                    <div class="quotation-item">
                                        <input type="text" class="form-control" name="tel"
                                               placeholder="Company Name (if applicable)">
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="main-btn primary">Submit</a>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

@endsection


