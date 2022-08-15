@extends('layout.main')
@if(isset($data))
@section('metaShare')
<meta property="og:url"           content="http://www.dcgroup.mn/news/{{ $data->id }} " />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="{{ $data->getTranslatedAttribute('title') }}" />
<meta property="og:description"   content="{{ $data->getTranslatedAttribute('excerpt') }}" />
<meta property="og:image"         content="{{ Voyager::image( $data->image ) }}" />
@stop
@section('content')
<section class="pb-0 overflow-visible position-relative bg-black bg-overlay overlay-bg padding-eleven-lr lg-padding-four-lr" style=" background-image:url({{asset('images/blog.jpg')}}) ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-6 order-2 z-index-1 padding-10-rem-left padding-60px-bottom lg-padding-3-rem-left md-padding-15px-left">
                <div class="d-flex flex-column justify-content-center h-100">
                    <div class="alt-font text-white text-uppercase font-weight-500 margin-30px-bottom xs-margin-10px-bottom">
                        <a href="/news/category/{{ $data->category_id }}" class="text-white">{{ $data->category->name }}</a>
                    </div>
                    <h3 class="alt-font font-weight-500 letter-spacing-minus-1px text-white ">{{ $data->getTranslatedAttribute('title') }}</h3>
                    <span class="alt-font d-block margin-15px-tb text-white">{{ date('d-m-Y', strtotime($data->created_at)) }}</span>
                </div>
            </div>
            <div class="col-12 col-lg-6 px-0 order-1 align-self-end md-margin-60px-bottom">
                <img class="overlap-image border-radius-8px md-no-margin-bottom" src="{{Voyager::image($data->image)}}" alt="" data-no-retina="">
            </div>
            <div class="col-12 col-lg-6 padding-9-rem-left overflow-hidden alt-font font-weight-600 text-white text-overlap-style-01 d-none d-md-block">МЭДЭЭ</div>
        </div>
    </div>
</section>
<section class="padding-70px-top sm-padding-50px-top position-relative">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-12 col-xl-5 col-lg-6 last-paragraph-no-margin padding-3-half-rem-left md-padding-15px-left">
                <p>{{ $data->getTranslatedAttribute('excerpt') }}</p>
            </div>
        </div>
    </div>
</section>
<section class="big-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 p-sm-0">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-12  col-md-12 last-paragraph-no-margin wow animate__fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                        <p>{!! $data->getTranslatedAttribute('body') !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
@endif
