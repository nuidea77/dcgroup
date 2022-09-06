@section('metaShare')
<meta property="og:url"           content="https://www.dcgroup.mn/" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="DC GROUP" />
<meta property="og:description"   content="International llc" />
@stop
<!-- start revolution slider -->
<section class=" d-none d-lg-block p-0 sm-border-bottom border-color-medium-gray mobile-height">
    <div class="container-fluid position-relative">
        <div class="row">
            <div class="swiper-container full-screen p-0 md-landscape-h-600px white-move swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events" data-slider-options="{ &quot;slidesPerView&quot;: 1, &quot;loop&quot;: true, &quot;pagination&quot;: { &quot;el&quot;: &quot;.swiper-pagination&quot;, &quot;clickable&quot;: true }, &quot;navigation&quot;: { &quot;nextEl&quot;: &quot;.swiper-button-next-nav&quot;, &quot;prevEl&quot;: &quot;.swiper-button-previous-nav&quot; }, &quot;autoplay&quot;: { &quot;delay&quot;: 5500, &quot;disableOnInteraction&quot;: false }, &quot;keyboard&quot;: { &quot;enabled&quot;: true, &quot;onlyInViewport&quot;: true }, &quot;effect&quot;: &quot;slide&quot; }" style="height: 770px;">
                <div class="swiper-wrapper" id="swiper-wrapper-388f429137d878d1" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-1296px, 0px, 0px);"><div class="swiper-slide cover-background swiper-slide-duplicate swiper-slide-next swiper-slide-duplicate-prev" style=" width: 324px;" data-swiper-slide-index="2" role="group" aria-label="3 / 3">
                </div>
                @if(isset($websliders))
                @foreach($websliders as $data)
                    <div class="swiper-slide  cover-background swiper-slide-duplicate-active" style="background-image: url({{Voyager::image($data->image)}}); width: 324px;" data-swiper-slide-index="0" role="group" aria-label="1 / 3">
                        <div class="overlay-bg bg-black" style="opacity: 0.4;"></div>
                    </div>
                @endforeach
                @endif


            </div>

                <!-- start slider arrow -->
                <div class="swiper-button-previous-nav swiper-button-prev slider-navigation-style-05" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-388f429137d878d1"><i class="line-icon-Arrow-OutLeft"></i></div>
                <div class="swiper-button-next-nav swiper-button-next slider-navigation-style-05" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-388f429137d878d1"><i class="line-icon-Arrow-OutRight"></i></div>
                <!-- end slider arrow -->
                <!-- start slider pagination -->
                <div class="swiper-pagination swiper-light-pagination swiper-pagination-dot d-none d-md-block swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>
                <!-- end slider pagination -->
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
        </div>
    </div>
</section>
<!-- end revolution slider -->
<section class="d-lg-none p-0 sm-border-bottom border-color-medium-gray mobile-height">
    <div class="container-fluid position-relative">
        <div class="row">
            <div class="swiper-container full-screen p-0 md-landscape-h-600px white-move swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events" data-slider-options="{ &quot;slidesPerView&quot;: 1, &quot;loop&quot;: true, &quot;pagination&quot;: { &quot;el&quot;: &quot;.swiper-pagination&quot;, &quot;clickable&quot;: true }, &quot;navigation&quot;: { &quot;nextEl&quot;: &quot;.swiper-button-next-nav&quot;, &quot;prevEl&quot;: &quot;.swiper-button-previous-nav&quot; }, &quot;autoplay&quot;: { &quot;delay&quot;: 5500, &quot;disableOnInteraction&quot;: false }, &quot;keyboard&quot;: { &quot;enabled&quot;: true, &quot;onlyInViewport&quot;: true }, &quot;effect&quot;: &quot;slide&quot; }" style="height: 770px;">
                <div class="swiper-wrapper" id="swiper-wrapper-388f429137d878d1" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-1296px, 0px, 0px);"><div class="swiper-slide cover-background swiper-slide-duplicate swiper-slide-next swiper-slide-duplicate-prev" style=" width: 324px;" data-swiper-slide-index="2" role="group" aria-label="3 / 3">
                </div>
                @if(isset($mobilesliders))
                @foreach($mobilesliders as $data)
                    <div class="swiper-slide  cover-background swiper-slide-duplicate-active" style="background-image: url({{Voyager::image($data->image)}}); width: 324px;" data-swiper-slide-index="0" role="group" aria-label="1 / 3">
                        <div class="overlay-bg bg-black" style="opacity: 0.4;"></div>
                    </div>
                @endforeach
                @endif


            </div>

                <!-- start slider arrow -->
                {{-- <div class="swiper-button-previous-nav swiper-button-prev slider-navigation-style-05" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-388f429137d878d1"><i class="line-icon-Arrow-OutLeft"></i></div>
                <div class="swiper-button-next-nav swiper-button-next slider-navigation-style-05" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-388f429137d878d1"><i class="line-icon-Arrow-OutRight"></i></div> --}}
                <!-- end slider arrow -->
                <!-- start slider pagination -->
                <div class="swiper-pagination swiper-light-pagination swiper-pagination-dot d-none d-md-block swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>
                <!-- end slider pagination -->
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
        </div>
    </div>
</section>
<section  class="overflow-visible p-0 cover-background wow animate__fadeIn" style="background-image: url({{asset('images/home-interior-design-about-bg.jpg')}}); visibility: visible; animation-name: fadeIn;" >
    <div class="container padding-80px-top">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-lg-6 col-md-10 position-relative  lg-margin-30px-top md-margin-9-rem-bottom sm-margin-9-rem-bottom wow animate__fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                    <img class="" src="{{asset('images/Wall_Logo.png')}}" alt="" data-no-retina="">
            </div>
            <div class="col-12 col-lg-5 offset-lg-1 col-md-10 wow animate__fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                <div class="alt-font font-weight-500 margin-30px-bottom d-flex"><span class="flex-shrink-0 w-30px h-1px bg-fast-blue opacity-7 align-self-center margin-20px-right"></span><div class="flex-grow-1"><span class="text-fast-blue text-uppercase">@lang("texts.about-us")</span></div></div>
                <h6 class="alt-font text-uppercase text-extra-dark-gray font-weight-700 w-85 margin-20px-bottom xl-w-100">@lang("texts.dcgroup-international-llc")</h6>

                <p class="w-75 xl-w-100">@lang('texts.home-about-text')</p>
                <a href="/about" class="btn btn-link thin btn-extra-large text-extra-dark-gray">@lang("texts.more")</a>
            </div>
        </div>
    </div>
</section>
<section  class="half-section">
    <div class="container">
        <div class="row row-cols-2 row-cols-md-4 row-cols-sm-2 align-items-center justify-content-center">
            <!-- start counter item -->
            <div class="col text-center sm-margin-40px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                <h3 class="vertical-counter d-inline-flex text-extra-dark-gray alt-font appear font-weight-600 letter-spacing-minus-2px mb-0" data-to="3"></h3>
                <span class="alt-font text-uppercase text-medium d-block margin-5px-top"><span class="font-weight-600">@lang("texts.branch-company-1")</span> @lang("texts.branch-company-2")</span>
            </div>
            <!-- end counter item -->
            <!-- start counter item -->
            <div class="col text-center sm-margin-40px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                <h3 class="vertical-counter d-inline-flex text-extra-dark-gray alt-font appear font-weight-600 letter-spacing-minus-2px mb-0" data-to="80"></h3>
                <span class="alt-font text-uppercase text-medium d-block margin-5px-top"><span class="font-weight-600">@lang("texts.employee-1")</span> @lang("texts.employee-2")</span>
            </div>
            <!-- end counter item -->
            <!-- start counter item -->
            <div class="col text-center xs-margin-40px-bottom wow animate__fadeIn" data-wow-delay="0.6s">
                <h3 class="vertical-counter d-inline-flex text-extra-dark-gray alt-font appear font-weight-600 letter-spacing-minus-2px mb-0" data-to="160"></h3>
                <span class="alt-font text-uppercase text-medium d-block margin-5px-top"><span class="font-weight-600">@lang("texts.product")</span></span>
            </div>
            <!-- end counter item -->
            <!-- start counter item -->
            <div class="col text-center wow animate__fadeIn" data-wow-delay="0.8s">
                <h3 class="vertical-counter d-inline-flex text-extra-dark-gray alt-font appear font-weight-600 letter-spacing-minus-2px mb-0" data-to="175000"></h3>
                <span class="alt-font text-uppercase text-medium d-block margin-5px-top"><span class="font-weight-600">@lang("texts.customer")</span></span>
            </div>
            <!-- end counter item -->
        </div>
    </div>
</section>
<section  class="big-section bg-medium-light-gray position-relative">
    <div class="col-12 overflow-hidden alt-font font-weight-600 text-white text-overlap-style-03 letter-spacing-minus-3px d-none d-lg-block wow animate__fadeIn" data-wow-delay="0.9s" style="visibility: visible; animation-delay: 0.9s; animation-name: fadeIn;">DCGROUP</div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-xl-4 col-lg-4 col-md-8 position-relative md-margin-8-rem-bottom xs-margin-10-rem-bottom wow animate__fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                <span class="alt-font font-weight-500 text-fast-blue text-uppercase margin-15px-bottom d-inline-block sm-margin-5px-bottom">@lang("texts.business-direction")</span>
                <p class="w-85 margin-35px-bottom text-black lg-w-100">@lang("texts.bd-desc")</p>
                <div class="swiper-button-next-nav swiper-button-next slider-navigation-style-03 white rounded-circle" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-b5c3a25b38bceaeb"><i class="feather icon-feather-arrow-right"></i></div>
                <div class="swiper-button-previous-nav swiper-button-prev slider-navigation-style-03 white rounded-circle" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-b5c3a25b38bceaeb"><i class="feather icon-feather-arrow-left"></i></div>
            </div>
            <div class="col-12 col-lg-7 offset-xl-1 wow animate__fadeInRight" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                <div class="testimonials-carousel-style-01 swiper-simple-arrow-style-1">
                    <div class="swiper-container white-move swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events" data-slider-options="{ &quot;loop&quot;: true, &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 40, &quot;observer&quot;: true, &quot;observeParents&quot;: true, &quot;navigation&quot;: { &quot;nextEl&quot;: &quot;.swiper-button-next-nav&quot;, &quot;prevEl&quot;: &quot;.swiper-button-previous-nav&quot; }, &quot;keyboard&quot;: { &quot;enabled&quot;: true, &quot;onlyInViewport&quot;: true }, &quot;breakpoints&quot;: { &quot;992&quot;: { &quot;slidesPerView&quot;: 3 }, &quot;768&quot;: { &quot;slidesPerView&quot;: 2 } }, &quot;effect&quot;: &quot;slide&quot; }">
                        <div class="swiper-wrapper" id="swiper-wrapper-b5c3a25b38bceaeb" aria-live="polite" style="transition-duration: 0ms; transform: translate3d(-1696px, 0px, 0px);"><div class="swiper-slide interactive-banners-style-07 border-radius-6px overflow-hidden swiper-slide-duplicate swiper-slide-duplicate-active" role="group" aria-label="4 / 4" style="width: 384px; margin-right: 40px;" data-swiper-slide-index="3">
                                <div class="interactive-banners-box bg-extra-dark-gray">

                                </div>
                            </div>
                            <!-- start interactive banner item -->
                            @if(isset($company))
                            @foreach($company as $data)
                            <div class="swiper-slide">
                            <div class=" col interactive-banners-style-09 wow animate__fadeIn" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;">
                                <figure class="m-0">
                                    <img src="{{Voyager::image($data->image2)}}" alt="" data-no-retina="">
                                    <div class="opacity-very-light bg-black"></div>
                                    <figcaption>
                                        <div class="interactive-banners-content align-items-start padding-2-rem-all last-paragraph-no-margin">
                                            <span class="interactive-banners-hover-icon w-40px h-40px line-height-44px text-center d-inline-block bg-white rounded-circle"><i class="feather icon-feather-arrow-right text-extra-dark-gray icon-extra-small"></i></span>
                                        </div>
                                        <div class="interactive-banners-hover-action align-items-end d-flex bg-transparent-gradiant-white-black">
                                            <div class="padding-2-rem-all last-paragraph-no-margin">
                                                <h6 class="interactive-banners font-weight-500 -action-content text-white w-85 md-w-95">{{ $data->getTranslatedAttribute('name') }}</h6>
                                                <a href="/company/{{$data->id}}" class="alt-font text-fast-blue text-white-hover text-small text-uppercase d-inline-block font-weight-500">@lang("texts.more")<i class="feather icon-feather-arrow-right align-middle margin-5px-left"></i></a>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                            {{-- <div class="swiper-slide interactive-banners-hover-action interactive-banners-style-07 border-radius-6px overflow-hidden swiper-slide-duplicate-next" role="group" aria-label="1 / 4" style="width: 384px; margin-right: 40px;" data-swiper-slide-index="0">
                                <div class="interactive-banners-box interactive-banners-hover-action bg-extra-dark-gray">
                                    <div class="interactive-banners-box-image">
                                        <img src="{{Voyager::image($data->image2)}}" alt="" data-no-retina="">
                                        <div class="overlay-bg bg-gradient-midium-dark-gray-transparent"></div>
                                    </div>
                                    <div class="fancy-text-content padding-55px-lr md-padding-40px-lr">
                                        <span class="text-extra-small alt-font text-white text-uppercase padding-5px-tb padding-15px-lr border-radius-2px bg-fast-blue margin-25px-bottom font-weight-500 d-inline-block">{{ $data->getTranslatedAttribute('uua') }}</span>
                                        <div class="alt-font font-weight-500 text-extra-large text-white margin-20px-bottom w-90">{{ $data->getTranslatedAttribute('name') }}</div>
                                        <a href="/company/{{$data->id}}" class="btn btn-fancy btn-very-small btn-white margin-15px-top btn-round-edge-small">@lang("texts.more")</a>
                                    </div>
                                </div>
                            </div> --}}
                            @endforeach
                            @endif

                       </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section  class="half-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center margin-six-bottom">
                <span class="alt-font font-weight-500 text-fast-blue text-uppercase text-fast-blue ">@lang("texts.partner")</span>
            </div>
        </div>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper client-logo-style-01">
                @if(isset($partners))
                @foreach($partners as $data)
              <div class="swiper-slide">
                <div class="client-box padding-15px-all border border-color-dark-gray">
                <img class="client-box-image" src="{{Voyager::image($data->logo)}}" alt="" style="height: 50px;" data-no-retina="">
              </div>
            </div>
            @endforeach
            @endif
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>

    </div>
</section>
<section class=" pt-0 padding-five-lr lg-no-padding-lr">
    <div class="container padding-50px-top ">
        <div class="row">
            <div class="col-12 col-md-5 sm-margin-20px-bottom wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                <span class="alt-font font-weight-500 text-fast-blue text-uppercase text-uppercase d-block letter-spacing-1px">@lang("texts.featured-news")</span>
            </div>
            <div class="col-12 col-md-7 text-md-end wow animate__fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                <a href="/blog" class="btn btn-link thin btn-extra-large text-medium-gray">@lang("texts.more")</a>
            </div>
        </div>
    </div>
    <div class="container padding-50px-top">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-12 col-lg-12 col-sm-10 blog-content lg-no-padding-lr">
                <ul class="blog-simple blog-wrapper grid grid-2col xl-grid-2col lg-grid-2col md-grid-1col sm-grid-1col xs-grid-1col gutter-double-extra-large" style="position: relative; height: 3064.5px;">
                    <li class="grid-sizer"></li>
                    <!-- start blog item -->
                    @if(isset($featurenews))
                    @foreach($featurenews as $data)
                    <li class="grid-item wow animate__fadeIn" style="position: absolute; left: 0%; top: 0px; animation: 0s ease 0s 1 normal none running none;">
                        <div class="blog-post box-shadow-small border-radius-6px">
                            <div class="blog-post-image cover-background xs-h-250px" style="background-image: url('{{Voyager::image($data->image)}}')">
                                <a href="/news/{{ $data->id }}" class="blog-post-image-overlay bg-dark-slate-blue"></a>
                            </div>
                            <div class="post-details bg-white padding-3-half-rem-all lg-padding-2-half-rem-all md-padding-3-half-rem-all">
                                <a href="/news/category/{{ $data->category_id }}" class="blog-category alt-font text-extra-dark-gray border-color-black-transparent bg-white align-self-start margin-4-half-rem-bottom xs-margin-2-half-rem-bottom">{{ $data->category->name }}</a>
                                <a href="/news/{{ $data->id }}" class="text-row-2 font-weight-500 text-large line-height-24px text-extra-dark-gray margin-15px-bottom xs-margin-10px-bottom">{{ $data->getTranslatedAttribute('title') }}</a>
                                <p class="text-row-2">{{ $data->getTranslatedAttribute('excerpt') }}</p>
                                <a href="/news/{{ $data->id }}" class="alt-font font-weight-500 text-small text-fast-blue text-uppercase align-self-start">@lang('texts.more')</a>
                            </div>
                        </div>
                    </li>
                    @endforeach
                    @endif
                    <!-- end blog item -->


                </ul>

            </div>
        </div>
    </div>
</section>


