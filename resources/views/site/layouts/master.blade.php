<!DOCTYPE html>
<html lang="en">
@include('site.layouts.head')
<body>
<!-- Pre-Loader -->
<div class="preloader"></div>

@include('site.layouts.header')

@yield('content')

<!-- Footer Area -->

<footer class="footer-area">
    <div class="container">
        <div class="footer-up">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="logo">
                        <img src="{{ asset('assets/front/') }}/assets/img/logo.png" alt="no-logo"/>
                    </div>
                    <div class="contact-info">
                        <p><b>Location:</b> egypt</p>
                        <p><b>Phone:</b> 01087269541</p>
                        <p><b>E-mail:</b> info@enviro.com</p>
                        <p><b>Opening Hour:</b> 08.00 AM-09.00 PM</p>
                    </div>

                </div>
                <div class="col-lg-5 col-md-6 com-sm-12">

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <h6>Company</h6>
                            <ul>
                                <li>
                                    <a href="about.html">About Us</a>
                                    <a href="project.html">Our product</a>
                                    <a href="contact.html">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <h6>Services</h6>
                            <ul>
                                <li>
                                    <a href="single_services.html">waste Mangment</a>
                                    <a href="single_services.html">Plastic Recycling</a>
                                    <a href="single_services.html">Paper Recycling</a>
                                    <a href="single_services.html">Aluminium Recycling</a>
                                    <a href="single_services.html">Electronics Recycling</a>
                                    <a href="single_services.html">Metal Recycling</a>
                                    <a href="single_services.html">glass Recycling</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="subscribe-form">
                        <h6>Newsletter</h6>
                        <form action="index.html">
                            <input type="email" placeholder="Your email"/>
                            <button type="submit"><i class="fas fa-envelope"></i></button>
                        </form>
                        <p>Stay tuned for our latest news</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Footer Bottom Area  -->

<div class="footer-bottom">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 col-12">
                <div class="copyright-area">
                    <p class="copyright-line">© 2023 Top Bussiness. All rights reserved.</p>
                </div>
            </div>

            <div class="col-lg-6 col-12 text-end">
                <div class="social-area">
                    <a href="#"><i class="fab fa-facebook-f ms-2 me-2"></i></a>
                    <a href="#"><i class="fab fa-youtube ms-2 me-2"></i></a>
                    <a href="#"><i class="fab fa-twitter ms-2 me-2"></i></a>
                    <a href="#"><i class="fab fa-instagram ms-2 me-2"></i></a>
                    <a href="#"><i class="fab fa-linkedin ms-2 me-2"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scroll Top Area -->
<a href="#top" class="go-top"><i class="fas fa-angle-up"></i></a>

<!-- font awesome JS -->
<script src="{{ asset('assets/front/') }}/assets/js/all.min.js"></script>

<!-- Popper JS -->
<script src="{{ asset('assets/front/') }}/assets/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('assets/front/') }}/assets/js/bootstrap.min.js"></script>
<!-- Wow JS -->
<script src="{{ asset('assets/front/') }}/assets/js/wow.min.js"></script>
<!-- Way Points JS -->
<script src="{{ asset('assets/front/') }}/assets/js/jquery.waypoints.min.js"></script>
<!-- Counter Up JS -->
<script src="{{ asset('assets/front/') }}/assets/js/jquery.counterup.min.js"></script>
<!-- Owl Carousel JS -->
<script src="{{ asset('assets/front/') }}/assets/js/owl.carousel.min.js"></script>
<!-- Magnific Popup JS -->
<script src="{{ asset('assets/front/') }}/assets/js/magnific-popup.min.js"></script>
<!-- Sticky JS -->
<script src="{{ asset('assets/front/') }}/assets/js/jquery.sticky.js"></script>
<!-- Nice Select JS -->
<script src="{{ asset('assets/front/') }}/assets/js/jquery.nice-select.min.js"></script>
<!-- Progress Bar JS -->
<script src="{{ asset('assets/front/') }}/assets/js/jquery.barfiller.js"></script>
<!-- Main JS -->
<script src="{{ asset('assets/front/') }}/assets/js/main.js"></script>
<!-- splide plugin -->
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>

<!-- slick plugin -->
<script src="{{ asset('assets/front/') }}/assets/js/slick.min.js"></script>
<script src="{{ asset('assets/front/') }}/assets/js/plugin.js"></script>

</body>
</html>
