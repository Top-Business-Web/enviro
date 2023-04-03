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
                        <h1>Contact</h1>
                        <h6><a href="index.blade.php">Home</a> / Contact</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Contact Page Google Map Start-->
    <div class="contact-page-google-map">
        <div class="container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7290573.081382147!2d26.380291144279877!3d26.844718475551232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14368976c35c36e9%3A0x2c45a00925c4c444!2sEgypt!5e0!3m2!1sen!2seg!4v1678345409348!5m2!1sen!2seg"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <!--Contact Page Details Start-->
    <section class="contact-page-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="section-title text-center">
                        <h6>Contact with us</h6>
                        <h2 class="section-title">Drop us a Message</h2>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="contact-page_form">
                                <form action="assets/inc/sendemail.php.html"
                                      class="comment-one_form contact-form-validated" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="comment-form_input-box">
                                                <input type="text" placeholder="Your Name" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form_input-box">
                                                <input type="email" placeholder="Email Address" name="email">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form_input-box">
                                                <input type="text" placeholder="Phone Number" name="phone">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form_input-box">
                                                <input type="email" placeholder="Subject" name="Subject">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="comment-form_input-box">
                                                <textarea name="message" placeholder="Write a Message"></textarea>
                                            </div>
                                            <button type="submit" class="main-btn comment-form_btn">send a message
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="contact-page-details_right">
                        <ul class="list-unstyled contact-page-details_list">
                            <li>
                                <span>Call Anytime</span>
                                <p><a href="tel:13077760608">01087269541</a></p>
                            </li>
                            <li>
                                <span>Send Email</span>
                                <p><a href="mailto:info@enviro.com">info@enviro.com</a></p>
                            </li>
                            <li>
                                <span>Visit Office</span>
                                <p>egypt</p>
                            </li>
                        </ul>
                        <div class="contact-page-details_social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Page Details End-->

@endsection

