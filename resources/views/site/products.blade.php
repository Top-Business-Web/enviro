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
                                <input type="text" class="search" name="search" id="search" placeholder="Search here">
                                <button class="btn" id="btn-search" type="button"><i class="fas fa-search"></i></button>
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
                                    <li data-bs-toggle="collapse" href="#collapseExample{{ $category->id }}"
                                        role="button"
                                        aria-expanded="false" aria-controls="collapseExample">
                                        <div>
                                            <a href="">{{ $category->title_ar }}</a>
                                            <span>{{ $category->count() }}</span>
                                        </div>
                                    </li>
                                    <div class="widget-content">
                                        <ul class="list-unstyled collapse category-sort" data-id="{{ $category->id }}"
                                            id="collapseExample{{ $category->id }}">
                                            @foreach($category->subCategory as $subcategory)
                                                <li>
                                                    <a href="">{{ $subcategory->title_ar }}</a>
                                                    <span>{{ $subcategory->count() }}</span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endforeach
                            </ul>
                        </div>

                    </div>

                    <hr>
                    <div class="sidebar_single sidebar_post" style="padding: 30px; margin-bottom: 30px;">
                        <h3 class="sidebar_title mb-3" style="margin-left: 0;">{{ trans('site.latest_products') }}</h3>
                        <ul class="sidebar_post-list list-unstyled">
                            <?php $products = \App\Models\Product::latest()->take(4)->get(); ?>
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

    <script type="text/javascript">
        $('.search').on('keyup', function() {
            $value = $(this).val();

            $.ajax({
                type: 'get',
                url: '{{ route('product-search') }}',
                data: {
                    'search': $value
                },
                beforeSend: function(data) {
                    $('.product-search').html(loader);
                },
                success: function(data) {
                    // alert(data)
                    $('.product-search').html(data);
                },
                error: function(data) {
                    $('.product-search').html('<h2 class="error">{{ app()->getLocale() == 'ar' ? 'لا يوجد منتجات' : 'NO PROJECT FOUND' }}</h2>');
                }
            });
        });
    </script>

@endsection


