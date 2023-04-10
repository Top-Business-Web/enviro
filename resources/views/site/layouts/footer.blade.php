<!-- Footer Area -->

<footer class="footer-area">
    <div class="container">
        <div class="footer-up">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="logo">
                        <img src="{{ asset($setting->logo) }}" alt="no-logo"/>
                    </div>
                    <div class="contact-info">
                        <p><b>{{ trans('site.location') }}
                                :</b> {{ app()->getLocale() == 'ar' ? $setting->address_ar : $setting->address_en }}</p>
                        <p><b>{{ trans('site.phone') }}:</b> {{ $setting->phone }}</p>
                        <p><b>{{ trans('site.email') }}:</b> {{ $setting->email }}</p>
                        <p><b>{{ trans('site.opening_hour') }}:</b> {{ $setting->open }}</p>
                    </div>

                </div>
                <div class="col-lg-5 col-md-6 com-sm-12">

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <h6>{{ trans('site.company') }}</h6>
                            <ul>
                                <li>
                                    <a href="{{ route('about') }}">{{ trans('site.about_us') }}</a>
                                    <a href="{{ route('product') }}">{{ trans('site.our_product') }}</a>
                                    <a href="{{ route('contact') }}">{{ trans('site.contact') }}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <h6>{{ trans('site.services') }}</h6>
                            <ul>
                                <?php $services = \App\Models\Service::all()->take(6)->last()->get(); ?>
                                @foreach($services as $service)
                                    <li>
                                        <a href="{{ route('singleService', $service->id) }}">{{ app()->getLocale() == 'ar' ? $service->title_ar : $service->title_en }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="subscribe-form">
                        <h6>{{ trans('site.news_letter') }}</h6>
                        <form action="index.html">
                            <input type="email" placeholder="Your email"/>
                            <button type="submit"><i class="fas fa-envelope"></i></button>
                        </form>
                        <p>{{ trans('site.Stay_tuned_for_our_latest_news') }}</p>
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
                    <a href="{{ $setting->facebook }}"><i class="fab fa-facebook-f ms-2 me-2"></i></a>
                    <a href="{{ $setting->youtube }}"><i class="fab fa-youtube ms-2 me-2"></i></a>
                    <a href="{{ $setting->twitter }}"><i class="fab fa-twitter ms-2 me-2"></i></a>
                    <a href="{{ $setting->instagram }}"><i class="fab fa-instagram ms-2 me-2"></i></a>
                    <a href="{{ $setting->linkedin }}"><i class="fab fa-linkedin ms-2 me-2"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
