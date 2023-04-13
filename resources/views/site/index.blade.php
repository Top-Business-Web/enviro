@extends('site.layouts.master')

@section('content')

    <!-- Hero Area -->


    <div class="homepage-slides owl-carousel">
        @foreach($data['sliders'] as $slider)
            <div class="single-slide-item"
                 style="background-image: url({{ asset('assets/admin/sliders/images/'. $slider->image) }});">
                <div class="image-layer">
                    <div class="overlay"></div>
                </div>
                <div class="hero-area-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 wow fadeInUp animated" data-wow-delay=".2s">
                                <div class="section-title">
                                    <h6>{{ app()->getLocale() == 'ar' ? $slider->sub_title_ar : $slider->sub_title_en }}</h6>
                                    <h1>{{ app()->getLocale() == 'ar' ? $slider->title_ar : $slider->title_en }}</h1>
                                </div>
                                <a href="{{ route('about') }}"
                                   class="main-btn primary">{{ trans('site.learn_more') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
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
                                    <h5> {{ trans('site.we_are_top') }}
                                        <b> {{ trans('site.recycling') }} </b> {{ trans('site.organization_to_create_best') }}
                                        <b> {{ trans('site.environment') }} </b></h5>
                                    <button class="main-btn bg-brown mt-3">{{ trans('site.liceneses') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12 wow fadeInUp" data-wow-delay=".4s">
                    <div class="promo-founder">
                        <img src="{{ asset('assets/front') }}/assets/img/icon/ecology.png" style="width: 50px;" alt="">
                        <p class="highlight">25+</p>
                        <p>{{ trans('site.years') }} <br>{{ trans('site.experience') }}</p>
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
                            <h2>{{ trans('site.The_pioneers') }}</h2>
                        </div>
                        <div class="about-content">
                            <div class="row">
                                <div class="col-12 col-lg-12">
                                    <div class="about-content-left">
                                        <p class="highlight">
                                            {{ trans('site.enviro_group_is') }}
                                        </p>

                                        <p>
                                            {{ trans('site.enviro_group_aims') }}
                                        </p>

                                        <button
                                            class="main-btn bg-brown mb-3">{{ trans('site.Profile_company') }}</button>

                                        <div class="row mt-20">
                                            <div class="col-lg-4 col-md-4 col-12">
                                                <div class="featured-area">
                                                    <div class="featured-icon">
                                                        <i class="fas fa-business-time"></i>
                                                    </div>
                                                    <div class="featured-content">
                                                        <div class="featured-title">
                                                            <h5>{{ trans('site.ontime_at') }}
                                                                <br>{{ trans('site.services') }}</h5>
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
                                                            <h5>24/7 <br>{{ trans('site.services') }}</h5>
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
                                                            <h5>{{ trans('site.affordable') }}
                                                                <br>{{ trans('site.cost') }}</h5>
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
                        <img src="{{ $aboutUs->image }}" alt="">
                        <div class="about-counter">
                            <div class="counter-icon">
                                <img src="{{ asset('assets/front') }}/assets/img/icon/customer-service.png"
                                     style="width: 50px;" alt="">
                            </div>
                            <div class="counter-number">
                                <span class="counting" data-counterup-nums="">{{ $aboutUs->happy_clients }}</span>
                            </div>
                            <h6>{{ trans('site.Happy_customers') }}</h6>
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
                        <h6>{{ trans('site.sustainable') }}</h6>
                        <h2>{{ trans('site.we_provide') }}</h2>
                    </div>
                </div>
            </div>
            <div class="service-item-wrap mt-30 owl-carousel">
                @foreach ($data['services'] as $service)
                    <div class="service-single">
                        <div class="service-icon">
                            <img src="{{ $service->images[0] }}" alt="">
                        </div>
                        <div class="service-content">
                            <h4>
                                <a href="{{ route('singleService', $service->id) }}">{{ app()->getLocale() == 'ar' ? $service->title_ar : $service->title_en }} </a>
                            </h4>
                            <hr>
                            <p>{{ app()->getLocale() == 'ar' ? $service->desc_ar : $service->desc_en }}</p>
                            <ul class="list-unstyled service-list">
                                <li><i class="fas fa-check"></i>{{ trans('site.collect_separate_materials')}}</li>
                                <li><i class="fas fa-check"></i>{{ trans('site.reduce_recycling_into_raw_material') }}
                                </li>
                                <li><i class="fas fa-check"></i>{{ trans('site.turn_raw_material_into_product') }}</li>
                            </ul>
                            <a class="main-btn primary"
                               href="{{ route('service') }}">{{ trans('site.find_out_more') }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Process Section  -->

    <div class="process-area dark-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="section-title">
                        <h6>{{ trans('site.recycling_wastage_save_environment') }}</h6>
                        <h2 class="text-white">{{ trans('site.simple_steps_wastage') }}
                            <br> {{ trans('site.to_recycling_item_processing') }}</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="process-right-content">
                        <p class="text-white">{{ trans('site.recycling_is_the_process_of_converting') }}</p>
                        <p class="text-white">{{ trans('site.this_waste_management_video') }}</p>
                        <div class="process-btn">
                            <a href="{{ route('contact') }}" class="main-btn">{{ trans('site.get_started') }}</a>
                            <a href="{{ route('service') }}"
                               class="main-btn white">{{ trans('site.view_our_services') }}</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="process-item-wrap">
                <div class="col-lg-4 col-12">
                    <div class="process-single">
                        <div class="process-icon">
                            <img src="{{ asset('assets/front') }}/assets/img/vision.svg" alt="" style="width: 60px;">
                        </div>
                        <div class="process-title">
                            <h5>{{ trans('site.our_vision') }}</h5>
                        </div>
                        <div class="process-desc">
                            <p style="text-align: justify;">
                                {{ app()->getLocale() == 'ar' ? $aboutUs->desc_ar : $aboutUs->desc_en }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="process-single two">
                        <div class="process-icon">
                            <img src="{{ asset('assets/front') }}/assets/img/mission.svg" alt="" style="width: 60px;">
                        </div>
                        <div class="process-title">
                            <h5>{{ trans('site.our_mission') }}</h5>
                        </div>
                        <div class="process-desc">
                            <p style="text-align: justify;">
                                {{ app()->getLocale() == 'ar' ? $aboutUs->top_desc_ar : $aboutUs->top_desc_en }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="process-single three">
                        <div class="process-icon">
                            <img src="{{ asset('assets/front') }}/assets/img/process/4.png" alt="" style="width: 60px;">
                        </div>
                        <div class="process-title">
                            <h5>{{ trans('site.our_values') }} </h5>
                        </div>
                        <!-- <div class="process-desc text-start"> -->
                        <ul class="list-unstyled service-list mt-0">
                            <li><i class="fas fa-check"></i>{{ trans('site.build_relations') }}</li>
                            <li><i class="fas fa-check"></i>{{ trans('site.Integrity') }}</li>
                            <li><i class="fas fa-check"></i>{{ trans('site.accountabilit') }}</li>
                            <li><i class="fas fa-check"></i>{{ trans('site.excellence') }}</li>
                            <li><i class="fas fa-check"></i>{{ trans('site.innovation') }}</li>
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
                <h6>{{ trans('site.our_pontential_benefits') }}</h6>
                <h2>{{ trans('site.why_you_should_choose_our_services') }}</h2>
            </div>
            <div class="image-all-egypt">
                <img src="{{ asset('assets/front/') }}/assets/img/img-all-egypt.jpg">
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
                            <h2 class="text-white">{{ trans('site.time_is_the_best_way_to_thin_About_recycling') }}</h2>
                        </div>
                        <div class="contact-desc">
                            <p class="text-white">
                                {{ trans('site.we_offer_product') }}
                            </p>
                        </div>
                        <div class="contact-list-wrap">
                            <div class="row">
                                <div class="col-12 col-md-6 col-sm-6 col-lg-6">
                                    <ul class="list-unstyled contact-list">
                                        <li><i class="fas fa-check"></i> {{ trans('site.reduce_greenhouse_effect') }}
                                        </li>
                                        <li><i class="fas fa-check"></i>{{ trans('site.conserv_natural_resources') }}
                                        </li>
                                        <li><i class="fas fa-check"></i>{{ trans('site.reduces_carbon_emissions') }}
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-12 col-md-6 col-sm-6 col-lg-6">
                                    <ul class="list-unstyled contact-list">
                                        <li><i class="fas fa-check"></i>{{ trans('site.protects_ecosystems') }}</li>
                                        <li><i class="fas fa-check"></i>{{ trans('site.economic_Benefits') }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="contact-btn">
                            <a class="main-btn" href="{{ trans('about') }}">{{ trans('site.learn_more') }}</a>
                            <a class="main-btn white" href="{{ trans('faqs') }}">{{ trans('site.our_core_values') }}</a>
                        </div>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 offset-xl-1">
                    <div class="quotation-wrap">
                        <div class="quotation-inner">
                            <h5 class="quotation-heading">{{ trans('site.get_a_quote') }}</h5>
                            <p class="quotation-desc">
                                {{ trans('site.we_take_great_pride') }}
                            </p>
                            <form class="quoteForm" id="quoteForm">
                                @csrf
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="contact-usage">{{ trans('site.first_name') }}
                                        </label>
                                        <input class="form-control" type="text" name="first_name"
                                               placeholder="{{ trans('site.first_name') }}" required=""/>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="contact-usage">{{ trans('site.last_name') }}
                                        </label>
                                        <input class="form-control" type="text" name="last_name"
                                               placeholder="{{ trans('site.last_name') }}" required=""/>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="contact-usage">{{ trans('site.name_company') }}
                                        </label>
                                        <input class="form-control" type="text" name="company"
                                               placeholder="{{ trans('site.name_company') }}"
                                               required=""/>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="contact-usage">{{ trans('site.phone') }}
                                        </label>
                                        <input class="form-control" type="number" name="phone"
                                               placeholder="{{ trans('site.phone') }}"
                                               required=""/>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="contact-usage">{{ trans('site.email') }}
                                        </label>
                                        <input class="form-control" type="email" name="email"
                                               placeholder="{{ trans('site.email') }}" required=""/>
                                    </div>

                                    <div class="col-12">
                                        <button type="button" id="quote-btn"
                                                class="main-btn primary">{{ trans('site.submit') }}</button>
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
                        <h6>{{ trans('site.innovation_quality_and_continuous_improvement') }}</h6>
                        <h2>{{ trans('site.latest_products') }}</h2>
                    </div>
                </div>
            </div>
            <div class="service-item-wrap mt-30 owl-carousel">
                @foreach($data['products'] as $product)
                    <div class="project-single">
                        <div class="project-img">
                            <img src="{{ asset($product->images[0]) }}" alt="">
                        </div>
                        <div class="project-content">
                            <div class="project-title text-center">
                                <a href="{{ route('singleProduct', $product->id) }}"
                                   class="fs-5">{{ app()->getLocale() == 'ar' ? $product->title_ar : $product->title_en }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Footer Area -->


    <script>
        $('#quote-btn').on('click', function (e) {
            e.preventDefault();
            var formData = new FormData(document.getElementById("quoteForm"));
            $.ajax({
                'method': 'post',
                'type': 'POST',
                'data': formData,
                '_token': "{{ csrf_token() }}",
                'url': "{{ route('quote.store') }}",
                beforeSend: function (formData) {
                    $('#quote-btn').html('Loading ... ');
                },
                success: function (data) {
                    if (data.status === 200) {
                        toastr.success('سنتواصل معك في اقرب وقت');
                        $('#quoteForm input').val('');
                        $('#quote-btn').html('سنتواصل معك في اقرب وقت');
                        $('#quote-btn').prop('disabled', true);
                        setTimeout(function () {
                            window.location.reload();
                        },2000)
                    }
                },
                error: function (data) {
                    if (data.status === 500) {
                        toastr.error('error sending message !!');
                    } else if (data.status === 422) {
                        var errors = $.parseJSON(data.responseText);
                        $.each(errors, function (key, value) {
                            // alert(value);
                            if ($.isPlainObject(value)) {
                                $.each(value, function (key, value) {
                                    toastr.error('' + value);
                                    // alert(value);
                                });
                            }
                        });
                        $('#quote-btn').html('error');
                    }
                }
                ,
                cache: false,
                processData: false,
                contentType: false
            })
        })
    </script>

@endsection

