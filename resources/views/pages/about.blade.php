@extends('layout.main')
@section('content')
<section class="parallax bg-extra-dark-gray" data-parallax-background-ratio="0.5" style="background-image: url({{asset('images/DSC07351.JPG')}});">
    <div class="opacity-medium bg-extra-dark-gray"></div>
    <div class="container">
        <div class="row align-items-stretch justify-content-center small-screen">
            <div class="col-12 col-xl-6 col-lg-7 col-md-8 position-relative page-title-extra-small text-center d-flex justify-content-center flex-column">
                <h2 class="text-white alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">@lang("texts.about-us")</h2>
            </div>
            <div class="down-section text-center"><a href="#down-section" class="section-link"><i class="ti-arrow-down icon-extra-small text-white bg-transparent-black padding-15px-all xs-padding-10px-all border-radius-100"></i></a></div>
        </div>
    </div>
</section>
<section id="down-section"  class="overflow-visible p-0 cover-background wow animate__fadeIn" style="background-image: url({{asset('images/home-interior-design-about-bg.jpg')}}); visibility: visible; animation-name: fadeIn;" >
    <div class="container padding-80px-top">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-lg-6 col-md-10 position-relative  lg-margin-30px-top md-margin-9-rem-bottom sm-margin-9-rem-bottom wow animate__fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                    <img class="" src="{{asset('images/Wall_Logo.png')}}" alt="" data-no-retina="">
            </div>
            <div class="col-12 col-lg-5 offset-lg-1 col-md-10 wow animate__fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                <div class="alt-font font-weight-500 margin-30px-bottom d-flex"><span class="flex-shrink-0 w-30px h-1px bg-fast-blue opacity-7 align-self-center margin-20px-right"></span><div class="flex-grow-1"><span class="text-fast-blue text-uppercase">@lang("texts.about-us")</span></div></div>

                <p class="w-75 xl-w-100">@lang('texts.about-text1') </p>
            </div>
        </div>
    </div>
</section>
<section   class="overflow-visible p-0 cover-background wow animate__fadeIn" style=" visibility: visible; animation-name: fadeIn;" >
    <div class="container">
        <div class="row align-items-center justify-content-center">

            <div class="col-12 col-lg-6  col-md-10 wow animate__fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                <div class="alt-font font-weight-500 margin-30px-bottom d-flex"></div>

                <p class="w-75 xl-w-100">@lang('texts.about-text2') </p>
            </div>
            <div class="col-12   col-lg-6 col-md-10 o position-relative  lg-margin-30px-top md-margin-9-rem-bottom sm-margin-9-rem-bottom wow animate__fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                <img class="" src="{{asset('images/h.jpg')}}" alt="" data-no-retina="">
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
                <h3 class="vertical-counter d-inline-flex text-extra-dark-gray alt-font appear font-weight-600 letter-spacing-minus-2px mb-0" data-to="60"></h3>
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
@stop
