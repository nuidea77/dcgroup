@extends('layout.main')
@if(isset($data))
@section('metaShare')
<meta property="og:url"           content="http://www.dcgroup.mn/company/{{ $data->id }} " />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="{{ $data->getTranslatedAttribute('title') }}" />
<meta property="og:description"   content="{{ $data->getTranslatedAttribute('description') }}" />
<meta property="og:image"         content="{{ Voyager::image( $data->image1 ) }}" />
@stop
@section('content')
<section class="parallax one-third-screen" data-parallax-background-ratio="0.5" style="background-image: url({{Voyager::image($data->image1)}}); background-position: 50% 60.8359px;">
    <div class="opacity-medium bg-extra-dark-gray"></div>
</section>
{{-- <section class="parallax bg-extra-dark-gray" data-parallax-background-ratio="0.5" style="background-image: url({{Voyager::image($data->image1)}}); background-position: 50% 0px;">
    <div class="opacity-medium bg-extra-dark-gray"></div>
    <div class="container">
        <div class="row align-items-stretch justify-content-center small-screen">
            <div class="col-12 col-xl-6 col-lg-7 col-md-8 position-relative page-title-extra-small text-center d-flex justify-content-center flex-column">
                <h2 class="text-white alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">{{ $data->getTranslatedAttribute('name') }}</h2>
            </div>
            <div class="down-section text-center"><a href="#down-section" class="section-link"><i class="ti-arrow-down icon-extra-small text-white bg-transparent-black padding-15px-all xs-padding-10px-all border-radius-100"></i></a></div>
        </div>
    </div>
</section> --}}
<section class="half-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center margin-seven-bottom">
                <h6 class="alt-font text-uppercase text-extra-dark-gray font-weight-500">{{ $data->getTranslatedAttribute('name') }}</h6>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-12 col-xl-7 col-lg-6 position-relative md-margin-8-rem-bottom xs-margin-10-rem-bottom wow animate__fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                <div class="w-70">
                    <img src="{{Voyager::image($data->image2)}}" alt="" data-no-retina="">
                </div>
                <div class="position-absolute right-15px bottom-150px  w-50" data-parallax-layout-ratio="1.1" style=" bottom:100px !important;"  >
                    <img src="{{Voyager::image($data->logo)}}" alt="" data-no-retina="">
                </div>
            </div>
            <div class="col-12 col-xl-4 offset-lg-1 col-lg-5">
                <span class="alt-font font-weight-600 text-fast-blue text-uppercase letter-spacing-2px d-block margin-30px-bottom xs-margin-20px-bottom">{{ $data->getTranslatedAttribute('uua') }}</span>
                <p>{!! $data->getTranslatedAttribute('description') !!}</p>
            </div>
        </div>
    </div>
</section>
{{-- <section class="half-section" id="down-section">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-lg-5 col-md-9 md-margin-7-rem-bottom">
                <img class="border-radius-6px " style="width: 250px;" src="{{Voyager::image($data->logo)}}" alt="" data-no-retina=""><br>
                <p class="alt-font margin-20px-bottom text-fast-blue d-inline-block text-uppercase font-weight-500 letter-spacing-1px">{{ $data->getTranslatedAttribute('uua') }}</p>
                <p class="w-80 lg-w-95">{!! $data->getTranslatedAttribute('description') !!}</p>
            </div>
            <div class="col-12 col-lg-7 col-md-9 padding-55px-lr md-padding-5px-left sm-padding-50px-right">
                <figure class="image-back-offset-shadow position-right w-100 active">
                    <img class="border-radius-6px" src="{{Voyager::image($data->image2)}}" alt="" data-no-retina="">
                    <span class="bg-fast-blue border-radius-6px overlay"></span>
                </figure>
            </div>
        </div>
    </div>
</section> --}}
<section class="p-0" id="down-section" >
    <div class="container">
        <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2">
            <!-- start feature box item -->
            <div class="col md-margin-50px-bottom sm-margin-30px-bottom">
                <div class="feature-box text-center">
                    <div class="feature-box-icon">
                        <i class="fas fa-map-marker-alt icon-extra-medium text-fast-blue margin-30px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray text-small text-uppercase">@lang("texts.location-text")</span>
                        <p class="d-inline-block w-70 lg-w-90 md-w-60 sm-w-80 xs-w-100">{{ $data->getTranslatedAttribute('location') }}</p>
                    </div>
                </div>
            </div>
            <!-- end feature box item -->
            <!-- start feature box item -->
            <div class="col md-margin-50px-bottom sm-margin-30px-bottom">
                <div class="feature-box text-center">
                    <div class="feature-box-icon">
                        <i class="fas fa-phone-alt
                        icon-extra-medium text-fast-blue margin-30px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray text-small text-uppercase">@lang("texts.phoneb")</span>
                        <p><a href="tel:+976{{$data->phone}}" class="text-sky-blue-hover">+976 {{$data->phone}}</a></p>
                    </div>
                </div>
            </div>
            <!-- end feature box item -->
            <!-- start feature box item -->
            <div class="col xs-margin-30px-bottom">
                <div class="feature-box text-center">
                    <div class="feature-box-icon">
                        <i class="fas fa-envelope icon-extra-medium text-fast-blue margin-30px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray text-small text-uppercase">@lang("texts.emailb")</span>
                        <p><a href="mailto:{{$data->mail}}" class="text-sky-blue-hover">{{$data->mail}}</a></p>
                    </div>
                </div>
            </div>
            <!-- end feature box item -->
            <!-- start feature box item -->
            <div class="col">
                <div class="feature-box text-center">
                    <div class="feature-box-icon">
                        <i class="fab fa-facebook-square icon-extra-medium text-fast-blue margin-30px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray text-small text-uppercase">FACEBOOK</span>
                        <p class="d-inline-block w-70 lg-w-90 md-w-60 sm-w-80 xs-w-100"><a href="{{$data->fb}}" class="text-sky-blue-hover">{{ $data->getTranslatedAttribute('name') }}</a></p>
                    </div>
                </div>
            </div>
            <!-- end feature box item -->
        </div>
    </div>
</section>
<section class="half-section wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 px-0">
                <div class="map-style-3 h-500px xs-h-300px">
                    <iframe  id="map" class="w-100 h-100 filter-grayscale-100" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCYdiaq04qaRt0pxsdiXN6unjGT7hoQ2wM&q={{$data->map}}" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
@endif
