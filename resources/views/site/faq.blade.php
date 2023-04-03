@extends('site.layouts.master')

@section('content')
    <!-- Pre-Loader -->
    <div class="preloader"></div>

    <!-- Breadcroumb Area -->

    <div class="breadcroumb-area faq-bg">
        <div class="overlay-2"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcroumb-title text-center">
                        <h1>FAQ</h1>
                        <h6><a href="index.blade.php">Home</a> / FAQ</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--FAQ Section -->

    <div class="faq-section section-padding pb-50">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="section-title">
                        <h6>If you don't know, find out</h6>
                        <h2>Frequently Asked Question</h2>
                    </div>
                    <div class="accordion faqs" id="accordionFaq">
                        <div class="card">
                            <div class="card-header" id="heading1">
                                <h5 class="mb-0 subtitle">
                                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse7">
                                        What is recycling?
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordionFaq">
                                <div class="card-body">
                                    <div class="content">
                                        <p>Recycling is the process of collecting and processing materials that would
                                            otherwise be thrown away as trash and turning them into new products.
                                            Recycling can benefit your community, the economy and the environment.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading2">
                                <h5 class="mb-0 subtitle">
                                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse8">
                                        How does recycling save energy?
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordionFaq">
                                <div class="card-body">
                                    <div class="content">
                                        <p>When we make new products out of virgin materials, we expend energy to
                                            extract and process those materials. This includes burning fossil fuels.
                                            However, if we manufacture products using recycled materials, we reduce the
                                            need for virgin materials and save the energy required to extract and
                                            process them.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading3">
                                <h5 class="mb-0 subtitle">
                                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse3" aria-expanded="true" aria-controls="collapse1">
                                        Can I recycle newspapers, magazines, pizza box?
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse3" class="collapse show" aria-labelledby="heading3"
                                 data-parent="#accordionFaq">
                                <div class="card-body">
                                    <div class="content">
                                        <p>Yes, newspapers, magazines can be recycled. Pizza boxes can be recycled, even
                                            if they have grease in them. Make sure to remove any food scraps from the
                                            box and flatten it before placing it in the bin. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading4">
                                <h5 class="mb-0 subtitle">
                                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse2">
                                        Can cardboard containers and boxes be recycled?
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionFaq">
                                <div class="card-body">
                                    <div class="content">
                                        <p>Yes, make sure to flatten any boxes before placing them in the bin. Examples
                                            of recyclable cardboard containers are some egg cartons, cereal boxes, and
                                            shoe boxes.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading5">
                                <h5 class="mb-0 subtitle">
                                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse3">
                                        Can I recycle plastic bags, wraps and films?
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionFaq">
                                <div class="card-body">
                                    <div class="content">
                                        <p>These items are recyclable, but they cannot go in your household bin. Retail
                                            and grocery stores often accept these materials for recycling. If necessary,
                                            be sure to cut off the sealable zippers from sandwich bags before recycling
                                            them. Visit the Plastic Film Recycling website to find a location near you
                                            that recycles plastic bags and plastic wrap/film. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading6">
                                <h5 class="mb-0 subtitle">
                                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse1">
                                        Should aluminum cans be crushed before recycling them?
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordionFaq">
                                <div class="card-body">
                                    <div class="content">
                                        <p>No, generally, aluminum cans should not be crushed before they are recycled.
                                            For areas with single-stream recycling, crushed cans are harder to detect
                                            when being sorted at recycling facilities. If you live in an area with
                                            multi-stream recycling, crushing cans is not an issue. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading7">
                                <h5 class="mb-0 subtitle">
                                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse5">
                                        What should I do with burnt-out light bulbs?
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordionFaq">
                                <div class="card-body">
                                    <div class="content">
                                        <p>Check with your local recycling facility for recycling options for burnt-out
                                            light bulbs, or take them to a retail store in your area that offers light
                                            bulb recycling.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading8">
                                <h5 class="mb-0 subtitle">
                                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse6">
                                        What should I do with old clothes and old shoes?
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordionFaq">
                                <div class="card-body">
                                    <div class="content">
                                        <p>Gently worn clothes and shoes can be donated to many charities. For damaged
                                            clothes and shoes, please double-check with your local charity to determine
                                            if it will accept them. Some retail stores recycle clothing or shoes. Check
                                            your local ones to find out if they accept these items for recycling.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading9">
                                <h5 class="mb-0 subtitle">
                                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse6">
                                        What should I never put in my recycling bin?
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#accordionFaq">
                                <div class="card-body">
                                    <div class="content">
                                        <p>Garden hoses,,Sewing needles, Bowling balls, Food or food-soiled paper,
                                            Propane tanks or cylinders, Aerosol cans that aren’t empty</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


