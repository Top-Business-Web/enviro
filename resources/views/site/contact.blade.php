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
                        <h1>{{ trans('site.contact') }}</h1>
                        <h6><a href="{{ route('home') }}">{{ trans('site.home') }}</a> / {{ trans('site.contact') }}
                        </h6>
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
<style>
    .blackColor {
        color: black !important;
    }
</style>
    <!--Contact Page Details Start-->
    <section class="contact-page-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="section-title text-center">
                        <h6>{{ trans('site.contact_with_us') }}</h6>
                        <h2 class="section-title">{{ trans('site.drop_us_a_message') }}</h2>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="contact-page_form">
                                <form class="contactForm" id="contactForm">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="comment-form_input-box">
                                                <input class="blackColor" type="text" placeholder="{{ trans('site.name') }}" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form_input-box">
                                                <input class="blackColor" type="email" placeholder="{{ trans('site.email') }}"
                                                       name="email">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form_input-box">
                                                <input class="blackColor" type="text" placeholder="{{ trans('site.phone') }}" name="phone">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form_input-box">
                                                <input class="blackColor" type="text" placeholder="{{ trans('site.subject') }}"
                                                       name="subject">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="comment-form_input-box">
                                                <textarea class="blackColor" name="message"
                                                          placeholder="{{ trans('site.write_a_message') }}"></textarea>
                                            </div>
                                            <button type="button" id="career-btn"
                                                    class="main-btn comment-form_btn">{{ trans('site.send_a_message') }}
                                            </button>
                                        </div>
                                        <div class="col-12">
                                            <div class="contact-result load-contact">
                                            </div>
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
                                <span>{{ trans('site.call_anytime') }}</span>
                                <p><a href="tel:13077760608">{{ $setting->phone }}</a></p>
                            </li>
                            <li>
                                <span>{{ trans('site.send_email') }}</span>
                                <p><a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a></p>
                            </li>
                            <li>
                                <span>{{ trans('site.visit_office') }}</span>
                                <p>{{ trans('site.egypt') }}</p>
                            </li>
                        </ul>
                        <div class="contact-page-details_social">
                            <a href="{{ $setting->twitter }}"><i class="fab fa-twitter"></i></a>
                            <a href="{{ $setting->facebook }}"><i class="fab fa-facebook"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Page Details End-->

    <script>
        $('#career-btn').on('click', function (e) {
            e.preventDefault();
            var formData = new FormData(document.getElementById("contactForm"));
            $.ajax({
                'method': 'post',
                'type': 'POST',
                'data': formData,
                '_token': "{{ csrf_token() }}",
                'url': "{{ route('contact.store') }}",
                beforeSend: function (formData) {
                    $('.load-contact').html('Loading ... ');
                },
                success: function (data) {
                    if (data.status === 200) {
                        toastr.success('message send success');
                        $('#contactForm input').val('');
                        $('.load-contact').html('');
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
                        $('.load-contact').html('error');
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

