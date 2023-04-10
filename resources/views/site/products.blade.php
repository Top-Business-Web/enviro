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
                        <h1>{{ trans('site.products') }}</h1>
                        <h6><a href="{{ route('home') }}">{{ trans('site.home') }}</a> / {{ trans('site.products') }}
                        </h6>
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
                        @foreach($data['products'] as $product)
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="project-single">
                                    <div class="project-img">
                                        <img src="{{ asset($product->images[0]) }}" alt="">
                                    </div>
                                    <div class="project-content">
                                        <div class="project-title text-center">
                                            <a href="{{ route('singleProduct', $product->id) }}"
                                               class="fs-5">{{ $product->title_ar }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
                            <h5>{{ trans('site.categories')  }}</h5>
                        </div>
                        <div class="widget-content">
                            <ul class="list-unstyled">
                                @foreach ($data['categories'] as $category)
                                    <li data-bs-toggle="collapse" href="#collapseExample" role="button"
                                        aria-expanded="false" aria-controls="collapseExample">
                                        <a href="projects.html">{{ $category->title_ar }}</a
                                        ><span>2</span>
                                    </li>
                                    <ul class="list-unstyled collapse" id="collapseExample">
                                        <li>
                                            <a href="">hi</a>
                                        </li>
                                    </ul>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <hr>
                    <div class="sidebar_single sidebar_post" style="padding: 30px; margin-bottom: 30px;">
                        <h3 class="sidebar_title mb-3" style="margin-left: 0;">{{ trans('site.latest_products') }}</h3>
                        <ul class="sidebar_post-list list-unstyled">
                            <?php $products = \App\Models\Product::all()->take(4)->last()->get(); ?>
                            @foreach($products as $product)
                                <li style="padding: 0; margin-bottom: 15px;">
                                    <div class="sidebar_post-image">
                                        <img src="{{ asset($product->images[0]) }}" alt="">
                                    </div>
                                    <div class="sidebar_post-content">
                                        <h3>
                                            <a href="{{ route('singleProduct', $product->id) }}">{{ $product->title_ar }}</a>
                                        </h3>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection


